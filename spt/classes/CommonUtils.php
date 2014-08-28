<?php
require_once( './PSWebServiceLibrary.php' );

class CommonUtils{
	
	public static function getProductsByDomainCategoryId($cate_id = 17){
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'products',
			    'display'    => 'full',
			    'filter[id_category_default]' => $cate_id
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
	public static function checkDomain($domain_str) {
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

	public static function getProductsByCart($carts){
		try {
			$cart_rows = $carts->cart->associations->cart_rows->children();
			if(empty($cart_rows) == true){
				return;
			}
			$id_products = "[";
			$del = "";
			foreach ($cart_rows as $row) {
				$id_products .= $del.$row->id_product;
				$del = "|";
			}
			$id_products .= "]";
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'products',
			    'display'    => 'full',
			    'filter[id]' => $id_products
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
	
	public static function getCartById($cart_id){
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'carts',
			    'display'    => 'full',
			    'filter[id]' => $cart_id
			);
		   	// call to retrieve all clients
		   	$xml = $webService->get($opt);
		   	// Retrieve resource elements in a variable (table)
		   	$resources = $xml->carts->children();
			return $resources;
		}
		catch (PrestaShopWebserviceException $ex) {
		   // TODO: show 503 page
		   // Shows a message related to the error
		   echo 'Other error: <br />' . $ex->getMessage();
		}
	}
}
