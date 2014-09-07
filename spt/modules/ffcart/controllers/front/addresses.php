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
		//build countries list
		$this->assignCountries();
		
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
	
	protected function assignCountries()
	{
		// Select the most appropriate country
		if (isset($_POST['id_country']) && is_numeric($_POST['id_country']))
			$selectedCountry = (int)($_POST['id_country']);
		if (!isset($selectedCountry))
			$selectedCountry = (int)(Configuration::get('PS_COUNTRY_DEFAULT'));

		if (Configuration::get('PS_RESTRICT_DELIVERED_COUNTRIES'))
			$countries = Carrier::getDeliveredCountries($this->context->language->id, true, true);
		else
			$countries = Country::getCountries($this->context->language->id, true);
		$this->context->smarty->assign(array(
			'countries' => $countries,
			'PS_REGISTRATION_PROCESS_TYPE' => Configuration::get('PS_REGISTRATION_PROCESS_TYPE'),
			'sl_country' => (isset($selectedCountry) ? $selectedCountry : 0),
			'vat_management' => Configuration::get('VATNUMBER_MANAGEMENT')
		));
	}
}
