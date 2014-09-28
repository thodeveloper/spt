<?php
require_once( './PSWebServiceLibrary.php' );

class CommonUtils{
	
	public static function buildCart(){
		$return_data = array();
		$cart_products = Context::getContext()->cart->getProducts();
		if(!is_array($cart_products)){
			return $return_data;
		}
		// get promotion info
		$promotions = CommonUtils::getPromotionInfo();
		
		$domain_terms_ids = array(1, 2, 3, 5, 10);
		$domain_terms_names = array('1 Years', '2 Years', '3 Years', '5 Years', '10 Years');
		$recharge_terms_ids = array(1, 2, 3, 4, 5);
		$recharge_terms_names = array(1, 2, 3, 4, 5);
		$hosting_terms_ids = array(3, 6, 12, 24, 36);
		$hosting_terms_names = array('3 months', '6 months', '12 months', '24 months', '36 months');
		
		$cart_total = 0;
		$ican_fee = 0;
		$vnnic_reg_fee = 0;
		$recharge_fee = 0;
		$domain_fee = 0;
		$hosting_fee = 0;
		$cart_data = array();
		$cart_domains = array();
		$cart_hosting = array();
		$domain_count = 0;
		$hosting_count = 0;
		foreach ($cart_products as $product) {
			$price = CommonUtils::__getPromotionPrice($promotions, $product);
			
			$product_id = $product['id_product'];
			$subtotal = $price*$product['cart_quantity'];
			$cart_total += $subtotal;
			
			$type = '';
			$term_ids = array();
			$term_names = array();
			if( __DOMAIN_CATEGORY_ID__ == $product['id_category_default'] ){
				$product_name = CommonUtils::getDomainName($product_id, $product['id_product_attribute']);
				$cart_domains['domain['.$domain_count.']'] = $product_name;
				$cart_domains['domaintype['.$domain_count.']'] = 'register';
				$cart_domains['regperiod['.$domain_count.']'] = $product['cart_quantity'];
				$cart_domains['billingcycle['.$domain_count.']'] = 'monthly';
				++$domain_count;
				$type = "domain";
				if( $product['name'] == '.vn' ){
					$vnnic_reg_fee += _VNNIC_DOTVN_FEE_;
				} else if( $product['name'] == '.com.vn' ){
					$vnnic_reg_fee += _VNNIC_DOTCOMDOTVN_FEE_;
				} else {
					$ican_fee += _ICAN_FEE_*$product['cart_quantity'];
				}
				$domain_fee += $subtotal;
				$term_ids = $domain_terms_ids;
				$term_names = $domain_terms_names;
			} else if( __RECHARGE_CATEGORY_ID__ == $product['id_category_default'] ){
				$recharge_fee += $subtotal;
				$product_name = $product['name'];
				$type = "recharge";
				$term_ids = $recharge_terms_ids;
				$term_names = $recharge_terms_names;
			} else {
				$cart_hosting['pid['.$hosting_count.']'] = $product['reference'];
				$cart_domains['billingcycle['.$domain_count.']'] = CommonUtils::__getHostingBillingCycle($product['cart_quantity']);
				++$hosting_count;
				$hosting_fee += $subtotal;
				$product_name = $product['name'];
				$type = "hosting";
				$term_ids = $hosting_terms_ids;
				$term_names = $hosting_terms_names;
			}
			// get cover image
			$cover_image = "";
			$image = Product::getCover($product_id, Context::getContext());
			if(isset($image['id_image'])){
				$cover_image = Context::getContext()->link->getImageLink($product['link_rewrite'], $image['id_image'], 'small_default');
			}
			
			$cart_data[$product_id.'-'.$product['id_product_attribute']] = array(
				"cover_image" => $cover_image,
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
		
		$return_data["cart_hosting"] = $cart_hosting;
		$return_data["cart_domain"] = $cart_domains;
		$return_data["cart_data"] = $cart_data;
		$return_data["cart_total"] = $cart_total;
		$return_data["cart_tax"] = $cart_tax;
		$return_data["ican_fee"] = $ican_fee;
		$return_data["recharge_fee"] = $recharge_fee;
		$return_data["hosting_fee"] = $hosting_fee;
		$return_data["domain_fee"] = $domain_fee;
		$return_data["vnnic_reg_fee"] = $vnnic_reg_fee;
		$return_data["cart_grandtotal"] = $cart_grandtotal;
		
		return $return_data;
	}

	public static function getPromotionCash($cash){
		if($cash >= 1000000 && $cash < 5000000){
			return 1000000*0.01;
		} else if($cash >= 5000000 && $cash < 10000000){
			return 5000000*0.05;
		} else if($cash >= 10000000){
			return 10000000*0.1;
		}
		return 0;
	}
	
	private static function __getHostingBillingCycle($qty){
		switch ($qty) {
			case 3:
				return "Quarterly";
				break;
			case 6:
				return "Semi-Annually";
				break;
			case 12:
				return "Annually";
				break;
			case 24:
				return "Biennially";
				break;
			case 36:
				return "Triennially";
				break;
			default:
				break;
		}
		return "One Time";
	}

	private static function __getPromotionPrice($promotions, $product){
		$price = $product['wholesale_price'] > 0? $product['wholesale_price']: $product['price'];
		if(empty($promotions)){
			return $price;
		}

		$whmcs_prod_ids = explode(',', $promotions->appliesto);
		if(	in_array($product['reference'], $whmcs_prod_ids) &&
			((int)$promotions->maxuses == 0 || (int)$promotions->uses < (int)$promotions->maxuses) &&
			((string)$promotions->expirationdate == '0000-00-00' || date("Ymd") <= (int)str_replace('-', '', $promotions->expirationdate) )
		) {
			switch ($promotions->type) {
				case 'Percentage':
					$price = (int)$price*(1-((int)$promotions->value/100));
					break;
				case 'Fixed Amount':
					$price = (int)$price - (int)$promotions->value;
					break;
				default:
					break;
			}
		}
		return $price;
	}
	
	public static function removeDomainName($id_product_merge){
		$selected_domains = json_decode(Context::getContext()->cookie->selected_domains, TRUE);
		if(isset($selected_domains[$id_product_merge])){
			unset($selected_domains[$id_product_merge]);
			Context::getContext()->cookie->__set("selected_domains", json_encode($selected_domains));
		}
	}
	
	public static function getDomainName($id_product, $id_product_attribute){
		$selected_domains = json_decode(Context::getContext()->cookie->selected_domains, TRUE);
		if(!isset($selected_domains[$id_product.'-'.$id_product_attribute])){
			return '';
		}
		return $selected_domains[$id_product.'-'.$id_product_attribute];
	}
	
	public static function selectedDomains($domain_name, $product){
		if(empty($product)){
			return;
		}
		
		$selected_domains = json_decode(Context::getContext()->cookie->selected_domains, TRUE);
		if(empty($selected_domains)){
			$selected_domains = array();
		}
		$id_product_attribute = rand();
		// duplicate domain in cart
		if(isset($selected_domains[$product->id.'-0'])){
			Context::getContext()->cart->duplicateProduct(
				$product->id, $id_product_attribute, Context::getContext()->cart->id_address_delivery,
				Context::getContext()->cart->id_address_delivery
			);
		} else {
			$id_product_attribute = 0;
		}
		
		$selected_domains[$product->id.'-'.$id_product_attribute] = $domain_name;
		Context::getContext()->cookie->__set("selected_domains", json_encode($selected_domains));
	}
	
	/**
	 * get domain pure name and its tld 
	 */
	public static function extractTLD()
	{
		$domain = Tools::getValue("txt_search");
		$result = array();
	    $productTLD = '';
	    $tempstr = explode(".", $domain);
		$result[] = $tempstr[0]; 
	    unset($tempstr[0]);
	    foreach($tempstr as $value){
	        $productTLD = $productTLD.".".$value;
	    }    
		$result[] = $productTLD;
		
		$domain_name 		= "";
		$domain_tld 		= "";
		if(count($result) == 2){
			$domain_name = $result[0];
			$domain_tld = $result[1];
		}
		// if keyword is not correct
		if( empty($domain_name) ){
			Tools::redirect('index.php');
		}
		
	    return array('domain_name' => $domain_name, 'domain_tld' => $domain_tld);
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
	
	public static function addCredit($amount){
		if($amount <= 0){
			return false;
		}
		$whmcs_login = Context::getContext()->cookie->whmcs_login;
		if(empty($whmcs_login)) {
			return false;
		}
		$whmcs_login = json_decode($whmcs_login);
		
		$postfields = array(
			"action" => "addcredit",
			"amount" => $amount,
			"description" => "SPT add credit",
			"clientid" => $whmcs_login->userid
		);
		$whmcs = CommonUtils::whmcs($postfields);
		if($whmcs["result"] == "success") {
			return true;
		}
		return false;
	}
	
	public static function isAvailableDomain($domain_name){
		if(empty($domain_name)){
			return false;
		}
		$postfields = array(
			"action" => "domainwhois",
			"domain" => $domain_name
		);
		$whmcs = CommonUtils::whmcs($postfields);
		if($whmcs["result"] == "success" && $whmcs["status"] == "available") {
			return true;
		}
		return false;
	}
	
	public static function getPromotionInfo(){
		
		$promotion_code = Tools::getValue("promotion_code");
		if( !Tools::isSubmit("promotion_code") && empty($promotion_code)){
			$promotion_code = Context::getContext()->cookie->promotion_code;
		}
		
		if(empty($promotion_code)){
			return false;
		}
		$postfields = array(
			"action" => "getpromotions",
			"code" => $promotion_code
		);
		$whmcs = CommonUtils::whmcs($postfields);
		$promotion = null;
		if(is_object($whmcs)){
			$promotion = $whmcs->promotions->promotion;
		}
		
		global $smarty;
		if(empty($promotion)){
	    	$smarty->assign(array(
	    		'promotion_code' => $promotion_code,
	    		'promotion_code_error' => true,
			));
			Context::getContext()->cookie->__unset("promotion_code");
			return false;
		}
		$smarty->assign(array(
    		'promotion_code' => $promotion_code,
		));
		Context::getContext()->cookie->__set("promotion_code", $promotion_code);
		
		return $promotion;
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
		
		// if return data is xml
		$xml_data = @simplexml_load_string($data);
		if(!empty($xml_data)){
			return $xml_data;
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

	public static function loadClientList(){
		$customer = Context::getContext()->customer;
		if(empty($customer)){
			return false;
		}
		
		$sql = 'SELECT id_customer, email, firstname, lastname, date_upd FROM ' . _DB_PREFIX_ . 
				'customer WHERE note=\'reseller_id='.$customer->id.'\' ORDER BY date_upd DESC';
				
		if (!$result = Db::getInstance() -> executeS($sql))
			return false;
		return $result;
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
