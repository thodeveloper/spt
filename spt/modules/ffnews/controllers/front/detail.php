<?php
class FfnewsDetailModuleFrontController extends ModuleFrontController
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
		$this->setTemplate('detail.tpl');
    }
	
	public function setMedia()
	{
		//$this->addJS(_THEME_JS_DIR_.'cart_basket.js');
	}
}
