<?php
class FfcartAddressesModuleFrontController extends ModuleFrontController
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
    	$id_address = (int)Tools::getValue('id_address', 0);
		
		global $smarty;
    	$smarty->assign(array(
    		'module_link' => $this->context->link->getModuleLink('ffcart', 'billing'),
			'customer' => $this->context->customer,
			'address' => CommonUtils::getAddressById($id_address)
		));
		$this->setTemplate('addresses.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'addresses.js');
	}
}
