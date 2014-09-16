<?php

require_once( _PS_CLASS_DIR_.'CommonUtils.php' );

class DomainSearchModuleFrontController extends ModuleFrontController {
	public function __construct() {
		parent::__construct();
		$this -> context = Context::getContext();
	}

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent() {
		$this -> setTemplate('search.tpl');
	}

	public function setMedia() {
		$this->addJS(_THEME_JS_DIR_.'domain_search.js');
	}

	public function postProcess() {
		// assign vars
		$domain_str 		= Tools::getValue("txt_search");
		//if no data, go back to home page
		if(empty($domain_str) == TRUE){
			Tools::redirect('index.php');
		}
		
		$postfields = array(
			"action" => "domainwhois",
			"domain" => $domain_str
		);
		$domain_results 	= CommonUtils::whmcs($postfields);
		$domain_parts 		= $this->__extractTLD($domain_str);
		$domain_name 		= "";
		$domain_tld 		= "";
		if(count($domain_parts) == 2){
			$domain_name = $domain_parts[0];
			$domain_tld = $domain_parts[1];
			$this->context->cookie->__set("domain_name", $domain_name);
		}
		$products 			= CommonUtils::getProductsByCategoryId();
		$searchedDomainInfo = $this->__isAvailableDomain($products, $domain_results, $domain_tld);
		global $smarty; 
    	$smarty->assign(array(
			'domain_results' => $domain_results,
			'full_domain' => $domain_str,
			'domain_name' =>$domain_name,
			'domain_tld' => $domain_tld,
			'products' => $products,
			'searchedDomainInfo' => $searchedDomainInfo,
		));
	}
	
	/**
	 * check and get searched domain info 
	 */
	private function __isAvailableDomain(&$products, $domain_results, $domain_tld){
		// init val
		$result = array();
		$result["available"] = FALSE;
		$result["counter"] = 0;
		// if not exists
		if( isset($domain_results["result"]) == FALSE || 
			empty($products) == TRUE || 
			empty($domain_tld) == TRUE ||
			$domain_results["result"] == "error" || 
			$domain_results["status"] == "unavailable") 
		{
			return $result;
		}
		// if exists
		if($domain_results["result"] == "success" || $domain_results["status"] == "available") {
			$result["available"] = TRUE;
		}
		// if exists
		foreach ($products as $product) {
			if($product->reference == $domain_tld){
				$result["counter"] = 1;
				$result["onsale"] = $product->on_sale;
				$result["wholesale_price"] = trim($product->wholesale_price);
				$result["price"] = trim($product->price);
				$result["product_id"] = $product->id;
				return $result;
			}
		}
		
		// if not exists
		$result["available"] = FALSE;
		return $result;
	}
	
	/**
	 * get domain pure name and its tld 
	 */
	private function __extractTLD( $domain )
	{
		$result = array();
	    $productTLD = '';
	    $tempstr = explode(".", $domain);
		$result[] = $tempstr[0]; 
	    unset($tempstr[0]);
	    foreach($tempstr as $value){
	        $productTLD = $productTLD.".".$value;
	    }    
		$result[] = $productTLD;
		
	    return $result;
	}
}
