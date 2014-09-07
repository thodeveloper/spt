<?php
class FfcartPaymentModuleFrontController extends ModuleFrontController
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
		$cart_data = CommonUtils::buildCart($product_terms);
		if(empty($cart_data)){
			Tools::redirect('index.php');
		}
		
		global $smarty;
    	$smarty->assign(array(
    		'payment' => Tools::getValue("payment"),
			'cart_data' => $cart_data,
			'selected_terms' => $product_terms,
			'customer' => $this->context->customer,
			'address' => CommonUtils::getAddressById($this->context->cart->id_address_delivery),
		));
		$this->setTemplate('payment.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'authentication.js');
	}
	
	public function postProcess() {
		//if no data, go back to home page
		if(Tools::isSubmit("submitPayment")){
			Tools::redirect($this->context->link->getModuleLink('whmcs', 'main', array('submitAddOrder' => 1)));
		}
	}
}
