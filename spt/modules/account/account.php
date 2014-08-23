<?php
if (!defined('_PS_VERSION_'))
	exit ;

class Account extends Module {

	public function __construct() {
		$this -> name = 'account';
		$this -> tab = 'front_office_features';
		$this -> version = '1.0';
		$this -> author = 'Thanh Dang';
		$this -> need_instance = 0;
		$this -> ps_versions_compliancy = array('min' => '1.5', 'max' => '1.6');
		$this -> bootstrap = true;

		parent::__construct();

		$this -> displayName = $this -> l('ACCOUNT');
		$this -> description = $this -> l('Account management!');

		$this -> confirmUninstall = $this -> l('Are you sure you want to uninstall?');

		if (!Configuration::get('ACCOUNT_NAME'))
			$this -> warning = $this -> l('No name provided');
	}

	public function install() {
		if (!parent::install())
			return false;
		return true;
	}

	public function uninstall() {
		if (!parent::uninstall() || !Configuration::deleteByName('ACCOUNT_NAME'))
			return false;
		return true;
	}

}
