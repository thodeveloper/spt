<?php
require_once( './PSWebServiceLibrary.php' );

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
    	// if cart is empty, return to home page
    	$cart_id = $this->context->cart->id;
		if(empty($cart_id)){
			Tools::redirect('index.php');
		}
		$domain_name = $this->context->cookie->domain_name;
		$carts = $this->__getCartById($cart_id);
		$products = $this->__getProductsByCart($carts);
		if(empty($products)){
			Tools::redirect('index.php');
		}
    	global $smarty; 
    	$smarty->assign(array(
			'domain_name' =>$domain_name,
			'products' => $products,
			'static_token' => Tools::getToken(false)
		));
		$this->setTemplate('basket.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'cart_basket.js');
	}

	private function __getProductsByCart($carts){
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
	
	private function __getCartById($cart_id){
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
