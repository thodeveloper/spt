<?php

require_once( _PS_CLASS_DIR_.'CommonUtils.php' );

class FfcartBasketModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();
    }
	
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    	// get term of domain
		$product_terms = $this->context->cookie->product_terms;
		if(empty($product_terms) == FALSE){
			$product_terms = json_decode($product_terms, TRUE);
		}
		// build cart data
		$cart_data = $this->_buildCart($product_terms);
		// load suggestion list
		$suggestion_data = $this->__loadSuggestion($cart_data["cart_data"]);
		
    	global $smarty;
    	$smarty->assign(array(
			'cart_data' => $cart_data,
			'terms_id' => array(1, 2, 3, 5, 10),
			'terms_names' => array('1 Years', '2 Years', '3 Years', '5 Years', '10 Years'),
			'selected_terms' => $product_terms,
			'suggestion_data' => $suggestion_data,
			'module_link' => $this->context->link->getModuleLink('ffcart', 'basket')
		));
		$this->setTemplate('basket.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'cart_basket.js');
	}
	
	public function postProcess() {
		// init check
		if (Tools::isSubmit('product_term') == FALSE || Tools::isSubmit('product_id') == FALSE) {
			return;
		}
		// assign vars
		$product_term = Tools::getValue("product_term");
		$product_id= Tools::getValue("product_id");
		
		//if no data, go back to home page
		if(is_numeric($product_term) && is_numeric($product_id)){
			$return_data = array();
			$product_terms = $this->context->cookie->product_terms;
			if( empty($product_terms)){
				$return_data[$product_id] = $product_term;
			} else {
				$return_data = json_decode($product_terms, TRUE);
				$return_data[$product_id] = $product_term;
			}
			$this->context->cookie->__set("product_terms", json_encode($return_data));
			global $smarty;
			//echo $smarty->display($this->getTemplatePath('account_review.tpl'));
			echo json_encode(array("hasError" => FALSE));
		}
		else {
			echo json_encode(array("hasError" => true, "errors" => "Term should be number!"));
		}
	}
	
	private function __loadSuggestion($cart_list){
		$return_data = array();
		
		$domain_list = CommonUtils::getProductsByDomainCategoryId();
		if(empty($domain_list) && is_array($domain_list) == FALSE ){
			return $return_data;
		}
		foreach ($domain_list as $domain) {
			// ignore the items in cart
			if( isset($cart_list[(string)$domain->id]) ) {
				continue;
			}
			$price = $domain->wholesale_price > 0? $domain->wholesale_price: $domain->price;
			$product_name = $this->context->cookie->domain_name.$domain->reference;
			
			$return_data[(string)$domain->id] = array(
				"product_name" => (string)$product_name,
				"product_price" => (string)$price
			);
		}
		return $return_data;
	}

	private function _buildCart($product_terms){
		$return_data = array();
		
		// if cart is empty, return to home page
    	$cart_id = $this->context->cart->id;
		if(empty($cart_id)){
			return $return_data;
		}
		// get products based on selected items from user
		$carts = CommonUtils::getCartById($cart_id);
		$products = CommonUtils::getProductsByCart($carts);
		if(empty($products)){
			return $return_data;
		}
		$cart_total = 0;
		$ican_fee = 0;
		$cart_data = array();
		foreach ($products as $product) {
			$price = $product->wholesale_price > 0? $product->wholesale_price: $product->price;			$product_id = (string)$product->id;
			
			if(is_array($product_terms) == TRUE && isset($product_terms[$product_id])){
				$subtotal = $price*$product_terms[$product_id];
				$ican_fee += _ICAN_FEE_*$product_terms[$product_id];
			} else {
				$subtotal = $price;
				$ican_fee += _ICAN_FEE_;
			}
			
			$cart_total += $subtotal;
			$product_name = $this->context->cookie->domain_name.$product->reference;
			
			$cart_data[$product_id] = array(
				"product_name" => (string)$product_name,
				"product_price" => (string)$price,
				"product_subtotal" => (string)$subtotal
			);
		}
		$cart_tax = $cart_total*0.1;
		$cart_grandtotal = $cart_total+$cart_tax+$ican_fee;
		
		$return_data["cart_data"] = $cart_data;
		$return_data["cart_total"] = $cart_total;
		$return_data["cart_tax"] = $cart_tax;
		$return_data["ican_fee"] = $ican_fee;
		$return_data["cart_grandtotal"] = $cart_grandtotal;
		
		return $return_data;
	}
}
