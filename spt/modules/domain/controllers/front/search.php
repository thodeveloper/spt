<?php

require_once( './PSWebServiceLibrary.php' );

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
		
		$domain_results 	= $this -> __checkDomain($domain_str);
		$domain_parts 		= $this->__extractTLD($domain_str);
		$domain_name 		= "";
		$domain_tld 		= "";
		if(count($domain_parts) == 2){
			$domain_name = $domain_parts[0];
			$domain_tld = $domain_parts[1];
			$this->context->cookie->__set("domain_name", $domain_name);
		}
		$products 			= $this->__getProductsByDomainCategoryId();
		$searchedDomainInfo = $this->__isAvailableDomain($products, $domain_results, $domain_tld);
		global $smarty; 
    	$smarty->assign(array(
			'domain_results' => $domain_results,
			'full_domain' => $domain_str,
			'domain_name' =>$domain_name,
			'domain_tld' => $domain_tld,
			'products' => $products,
			'searchedDomainInfo' => $searchedDomainInfo,
			'static_token' => Tools::getToken(false)
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
	
	private function __getProductsByDomainCategoryId(){
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'products',
			    'display'    => 'full',
			    'filter[id_category_default]' => 17
			);
		   	// call to retrieve all clients
		   	$xml = $webService->get($opt);
		   	// Retrieve resource elements in a variable (table)
		   	$resources = $xml->products->children();
			return $resources;
		}
		catch (PrestaShopWebserviceException $ex) {
		   // TODO: show 503 page
		   // Shows a message related to the error
		   echo 'Other error: <br />' . $ex->getMessage();
		}
	}

	/**
	 * call WHMCS to get domain info
	 */
	private function __checkDomain($domain_str) {
		$url 	  = _WHMCS_API_URL_;
		# URL to WHMCS API file
		$username = _WHMCS_API_USERNAME_;
		# Admin username goes here
		$password = _WHMCS_API_PASSWORD_;
		# Admin password goes here

		$postfields["username"] = $username;
		$postfields["password"] = md5($password);
		$postfields["action"] = "domainwhois";
		$postfields["domain"] = $domain_str;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 100);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
		$data = curl_exec($ch);
		curl_close($ch);
		
		$results = array();
		if(empty($data)){
			return $results;
		}
		$data = explode(";", $data);
		if(is_array($data) == FALSE){
			return $results;
		}
		foreach ($data AS $temp) {
			$temp = explode("=", $temp);
			if (is_array($temp) && count($temp) == 2) {
				$results[$temp[0]] = $temp[1];
			}
		}
		return $results;
	}
}
