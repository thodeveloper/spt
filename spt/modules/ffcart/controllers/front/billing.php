<?php
class FfcartBillingModuleFrontController extends ModuleFrontController
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
			'cart_data' => $cart_data,
			'customer' => $this->context->customer,
			'addresses' => CommonUtils::getAddressesByCustId($this->context->customer->id),
			'carriers' => CommonUtils::getCarriersList()
		));
		$this->setTemplate('billing.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'authentication.js');
	}
}
