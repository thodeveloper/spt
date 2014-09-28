<?php
class FfcartThankyouModuleFrontController extends ModuleFrontController
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
		$this->setTemplate('thankyou.tpl');
    }
	
	public function setMedia()
	{
	}
}
