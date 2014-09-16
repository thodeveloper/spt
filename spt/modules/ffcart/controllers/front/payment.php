<?php
require_once( _PS_CLASS_DIR_.'SmartLinkUtils.php' );

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
		// build cart data
		$cart_data = CommonUtils::buildCart();
		if(empty($cart_data)){
			Tools::redirect('index.php');
		}
		
		global $smarty;
    	$smarty->assign(array(
    		'payment' => Tools::getValue("payment"),
			'cart_data' => $cart_data,
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
			$smart_link = new SmartLinkUtils();
			$smart_link->setSecureSecret("198BE3F2E8C75A53F38C1C4A5B6DBA27");
			$smart_link->setVirtualPaymentUrl("https://paymentcert.smartlink.com.vn:8181/vpcpay.do");
			// 1. Tao mot mang cac tham so:
			$_params= array(
				"vpc_Version" => "1", 
				"vpc_Command" => "pay", 
				"vpc_AccessCode" => "ECAFAB", 
				"vpc_MerchTxnRef" => "",
				"vpc_Merchant" => "SMLTEST", 
				"vpc_OrderInfo" => "Order info", 
				"vpc_Amount" => "100", 
				"vpc_Locale" => "vn" ,
				"vpc_Currency" => "VND", 
				"vpc_ReturnURL" => $this->context->link->getModuleLink('ffcart', 'payment', array('cart_id' => $this->context->cart->id)), 
				"vpc_BackURL" => $this->context->link->getModuleLink('ffcart', 'payment', array('payment' => Tools::getValue("payment")))
			);
			// 2. Gui cac tham so toi smartlink
			$smart_link->redirect($_params);
			
			//Tools::redirect($this->context->link->getModuleLink('whmcs', 'main', array('submitAddOrder' => 1)));
		}
	}
}
