<?php
require_once( './PSWebServiceLibrary.php' );

class CommonUtils{
	
	public static function buildCart(){
		$return_data = array();
		$cart_products = Context::getContext()->cart->getProducts();
		if(!is_array($cart_products)){
			return $return_data;
		}
		$domain_terms_ids = array(1, 2, 3, 5, 10);
		$domain_terms_names = array('1 Years', '2 Years', '3 Years', '5 Years', '10 Years');
		$recharge_terms_ids = array(1, 2, 3, 4, 5);
		$recharge_terms_names = array(1, 2, 3, 4, 5);
		$hosting_terms_ids = array(3, 6, 12, 24, 36);
		$hosting_terms_names = array('3 months', '6 months', '12 months', '24 months', '36 months');
		
		$cart_total = 0;
		$ican_fee = 0;
		$vnnic_reg_fee = 0;
		$cart_data = array();
		foreach ($cart_products as $product) {
			$price = $product['wholesale_price'] > 0? $product['wholesale_price']: $product['price'];
			$product_id = $product['id_product'];
			$subtotal = $price*$product['cart_quantity'];
			$cart_total += $subtotal;
			
			$type = '';
			$term_ids = array();
			$term_names = array();
			if( __DOMAIN_CATEGORY_ID__ == $product['id_category_default'] ){
				$product_name = Context::getContext()->cookie->domain_name.$product['reference'];
				$type = "domain";
				if( $product['reference'] == '.vn' ){
					$vnnic_reg_fee += _VNNIC_DOTVN_FEE_;
				} else if( $product['reference'] == '.com.vn' ){
					$vnnic_reg_fee += _VNNIC_DOTCOMDOTVN_FEE_;
				} else {
					$ican_fee += _ICAN_FEE_*$product['cart_quantity'];
				}
				
				$term_ids = $domain_terms_ids;
				$term_names = $domain_terms_names;
			} else if( __RECHARGE_CATEGORY_ID__ == $product['id_category_default'] ){
				$product_name = $product['name'];
				$type = "recharge";
				$term_ids = $recharge_terms_ids;
				$term_names = $recharge_terms_names;
			} else {
				$product_name = $product['name'];
				$type = "hosting";
				$term_ids = $hosting_terms_ids;
				$term_names = $hosting_terms_names;
			}
			
			$cart_data[$product_id] = array(
				"term_ids" => $term_ids,
				"term_names" => $term_names,
				"type" => $type,
				"reference" => $product['reference'],
				"quantity" => $product['cart_quantity'],
				"product_name" => (string)$product_name,
				"product_price" => (string)$price,
				"product_subtotal" => (string)$subtotal
			);
		}
		$cart_tax = $cart_total*0.1;
		$cart_grandtotal = $cart_total+$cart_tax+$ican_fee+$vnnic_reg_fee;
		
		$return_data["cart_data"] = $cart_data;
		$return_data["cart_total"] = $cart_total;
		$return_data["cart_tax"] = $cart_tax;
		$return_data["ican_fee"] = $ican_fee;
		$return_data["vnnic_reg_fee"] = $vnnic_reg_fee;
		$return_data["cart_grandtotal"] = $cart_grandtotal;
		
		return $return_data;
	}
	
	public static function getProductsByCategoryId($cate_id = __DOMAIN_CATEGORY_ID__){
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
