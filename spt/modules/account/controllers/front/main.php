<?php
class AccountMainModuleFrontController extends ModuleFrontController
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
    	global $smarty; 
    	$smarty->assign(array(
			'template_path' => $this->getTemplatePath(""),
		));
		$this->setTemplate('main.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'account.js');
	}
}
