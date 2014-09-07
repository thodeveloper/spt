<?php
require_once( './PSWebServiceLibrary.php' );

class CommonUtils{
	
	public static function buildCart($product_terms){
		$return_data = array();
		
		$cart_id = Context::getContext()->cart->id;
		// if cart is empty, return to home page
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
			$price = $product->wholesale_price > 0? $product->wholesale_price: $product->price;
			$product_id = (string)$product->id;
			
			if(is_array($product_terms) == TRUE && isset($product_terms[$product_id])){
				$subtotal = $price*$product_terms[$product_id];
				$ican_fee += _ICAN_FEE_*$product_terms[$product_id];
			} else {
				$subtotal = $price;
				$ican_fee += _ICAN_FEE_;
			}
			
			$cart_total += $subtotal;
			$product_name = Context::getContext()->cookie->domain_name.$product->reference;
			
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
	public static function whmcs($postfields) {
		$url 	  = _WHMCS_API_URL_;
		# URL to WHMCS API file
		$username = _WHMCS_API_USERNAME_;
		# Admin username goes here
		$password = _WHMCS_API_PASSWORD_;
		# Admin password goes here

		$postfields["username"] = $username;
		$postfields["password"] = md5($password);

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
	
	public static function getAddressesByCustId($customer_id){
		if(empty($customer_id)){
			return;
		}
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'addresses',
			    'display'    => 'full',
			    'filter[id_customer]' => $customer_id
			);
		   	// call to retrieve all clients
		   	$xml = $webService->get($opt);
		   	// Retrieve resource elements in a variable (table)
		   	$resources = $xml->addresses->children();
			return $resources;
		}
		catch (PrestaShopWebserviceException $ex) {
		   // TODO: show 503 page
		   // Shows a message related to the error
		   echo 'Addresses error: <br />' . $ex->getMessage();
		}
	}
	
	public static function getAddressById($address_id){
		if(empty($address_id)){
			return;
		}
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'addresses',
			    'display'    => 'full',
			    'filter[id]' => $address_id
			);
		   	// call to retrieve all clients
		   	$xml = $webService->get($opt);
		   	// Retrieve resource elements in a variable (table)
		   	$resources = $xml->addresses->address->children();
			return $resources;
		}
		catch (PrestaShopWebserviceException $ex) {
		   // TODO: show 503 page
		   // Shows a message related to the error
		   echo 'Addresses error: <br />' . $ex->getMessage();
		}
	}
	
	public static function getCarriersList(){
		try {
		   // creating webservice access
		   $webService = new PrestaShopWebservice(_WS_SHOP_BASE_URL_, _WS_AUTH_KEY_, _WS_DEBUG_);
		   $opt = array(
			    'resource'   => 'carriers',
			    'display'    => 'full',
			    'limit' 	 => 1
			);
		   	// call to retrieve all clients
		   	$xml = $webService->get($opt);
		   	// Retrieve resource elements in a variable (table)
		   	$resources = $xml->carriers->carrier->children();
			return $resources;
		}
		catch (PrestaShopWebserviceException $ex) {
		   // TODO: show 503 page
		   // Shows a message related to the error
		   echo 'Addresses error: <br />' . $ex->getMessage();
		}
	}
}
