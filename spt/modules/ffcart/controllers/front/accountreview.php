<?php
class FfcartAccountreviewModuleFrontController extends ModuleFrontController
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
    	if($this->context->customer->logged == TRUE){
    		Tools::redirect($this->context->link->getModuleLink('ffcart', 'billing'));
    	}
		// build cart data
		$cart_data = CommonUtils::buildCart();
		if(empty($cart_data)){
			Tools::redirect('index.php');
		}
		
		global $smarty;
    	$smarty->assign(array(
			'cart_data' => $cart_data
		));
		$this->setTemplate('account_review.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'authentication.js');
	}
}
