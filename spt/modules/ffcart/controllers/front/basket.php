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
    		'customer' => $this->context->customer,
    		'client_list' => CommonUtils::loadClientList(),
    		'agent_selected_client_id' => $this->context->cookie->agent_client_id,
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
		if(Tools::isSubmit('add_client') && $this->context->customer->id_default_group == __RESELLER_GROUP_ID__){
			$customer = new Customer(Tools::getValue('client_id'));
			if( empty($customer) ){
				$return = array(
					'hasError' => true,
					'errors' => "Client id is not correct!"
				);
				die(Tools::jsonEncode($return));
			}
			Context::getContext()->cookie->__set("agent_client_id", $customer->id);
			$return = array(
				'hasError' => false,
				'data' => "add client success"
			);
			die(Tools::jsonEncode($return));
		}
	}
	
	private function __loadSuggestion($cart_list){
		$return_data = array();
		
		$selected_domains = json_decode($this->context->cookie->selected_domains, TRUE);
		if(empty($selected_domains) || !is_array($selected_domains)){
			return $return_data;
		}
		foreach ($selected_domains as $value) {
			$_POST['txt_search'] = $value;
			$tld_data = CommonUtils::extractTLD();
			break;
		}
		
		$domain_list = CommonUtils::getProductsByCategoryId();
		if(empty($domain_list) && is_array($domain_list) == FALSE ){
			return $return_data;
		}
		
		$domain_terms_ids = array(1, 2, 3, 5, 10);
		$domain_terms_names = array('1 Years', '2 Years', '3 Years', '5 Years', '10 Years');
		foreach ($domain_list as $domain) {
			// ignore the items in cart
			if( $this->__checkProductId($cart_list, (int)$domain->id) ) {
				continue;
			}
			$price = $domain->wholesale_price > 0? $domain->wholesale_price: $domain->price;
			$product_name = $tld_data['domain_name'].$domain->name->language[$this->context->language->id];
			if( !CommonUtils::isAvailableDomain($product_name)){
				continue;
			}
			
			$return_data[(string)$domain->id] = array(
				"reference" => (string)$domain->name->language[$this->context->language->id],
				"product_name" => (string)$product_name,
				"product_price" => (string)$price,
				"term_ids" => $domain_terms_ids,
				"term_names" => $domain_terms_names,
			);
		}
		return $return_data;
	}

	private function __checkProductId($cart_list, $id_product){
		foreach ($cart_list as $key => $value) {
			$prop_ids = explode('-', $key);
			if(isset($prop_ids[0])){
				if($prop_ids[0] == $id_product){
					return true;
				}
			}
		}
		return false;
	}
}
