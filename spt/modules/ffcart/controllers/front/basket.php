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
		// build cart data
		$cart_data = CommonUtils::buildCart();
		if(empty($cart_data['cart_data'])){
			Tools::redirect('index.php');
		}
		// load suggestion list
		$suggestion_data = $this->__loadSuggestion($cart_data["cart_data"]);
		
    	global $smarty;
    	$smarty->assign(array(
    		'domain_name' => $this->context->cookie->domain_name,
			'cart_data' => $cart_data,
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
	}
	
	private function __loadSuggestion($cart_list){
		$return_data = array();
		
		$domain_list = CommonUtils::getProductsByCategoryId();
		if(empty($domain_list) && is_array($domain_list) == FALSE ){
			return $return_data;
		}
		
		$domain_terms_ids = array(1, 2, 3, 5, 10);
		$domain_terms_names = array('1 Years', '2 Years', '3 Years', '5 Years', '10 Years');
		
		foreach ($domain_list as $domain) {
			// ignore the items in cart
			if( isset($cart_list[(string)$domain->id]) ) {
				continue;
			}
			$price = $domain->wholesale_price > 0? $domain->wholesale_price: $domain->price;
			$product_name = $this->context->cookie->domain_name.$domain->reference;
			$postfields = array(
				"action" => "domainwhois",
				"domain" => $product_name
			);
			$domain_results 	= CommonUtils::whmcs($postfields);
			// if not exists
			if( isset($domain_results["result"]) == FALSE || 
				$domain_results["result"] == "error" || 
				$domain_results["status"] == "unavailable") 
			{
				continue;
			}
			
			$return_data[(string)$domain->id] = array(
				"reference" => (string)$domain->reference,
				"product_name" => (string)$product_name,
				"product_price" => (string)$price,
				"term_ids" => $domain_terms_ids,
				"term_names" => $domain_terms_names,
			);
		}
		return $return_data;
	}
}
