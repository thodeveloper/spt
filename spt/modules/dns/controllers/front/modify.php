<?php
class DnsModifyModuleFrontController extends ModuleFrontController
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
    	if($this->context->customer->logged != TRUE){
    		Tools::redirect('index.php');
    	}
		$this->setTemplate('dns.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'dns.js');
	}
}
