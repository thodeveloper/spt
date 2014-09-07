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
			'cart_data' => $cart_data
		));
		$this->setTemplate('account_review.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'authentication.js');
	}
}
