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
		//build countries list
		$this->assignCountries();
		
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
