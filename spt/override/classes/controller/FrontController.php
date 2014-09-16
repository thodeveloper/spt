<?php

class FrontController extends FrontControllerCore{
	
	public function initHeader(){
		parent::initHeader();
		$this->context->smarty->assign('genders', Gender::getGenders());
		$this->assignDate();
		$this->assignCountries();
		$this->__loadCategoryMenu();
	}
	
	private function __loadCategoryMenu(){
		$categories = Category::getNestedCategories(null, $this->context->language->id, true, array(1,2,3));
		$this->context->smarty->assign(array(
			'categories' => $categories[2]['children']
		));
	}
	
	private function assignDate()
	{
		// Generate years, months and days
		if (isset($_POST['years']) && is_numeric($_POST['years']))
			$selectedYears = (int)($_POST['years']);
		$years = Tools::dateYears();
		if (isset($_POST['months']) && is_numeric($_POST['months']))
			$selectedMonths = (int)($_POST['months']);
		$months = Tools::dateMonths();

		if (isset($_POST['days']) && is_numeric($_POST['days']))
			$selectedDays = (int)($_POST['days']);
		$days = Tools::dateDays();

		$this->context->smarty->assign(array(
			'one_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'),
			'onr_phone_at_least' => (int)Configuration::get('PS_ONE_PHONE_AT_LEAST'), //retro compat
			'years' => $years,
			'sl_year' => (isset($selectedYears) ? $selectedYears : 0),
			'months' => $months,
			'sl_month' => (isset($selectedMonths) ? $selectedMonths : 0),
			'days' => $days,
			'sl_day' => (isset($selectedDays) ? $selectedDays : 0)
		));
	}
	
	private function assignCountries()
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
