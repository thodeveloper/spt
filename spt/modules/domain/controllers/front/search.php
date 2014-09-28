<?php

require_once( _PS_CLASS_DIR_.'CommonUtils.php' );

class DomainSearchModuleFrontController extends ModuleFrontController {
	public function __construct() {
		parent::__construct();
		$this -> context = Context::getContext();
	}

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent() {
		$this -> setTemplate('search.tpl');
	}

	public function setMedia() {
		$this->addJS(_THEME_JS_DIR_.'domain_search.js');
	}

	public function postProcess() {
		$this->__processSearchedDomain();
		$domain_info = CommonUtils::extractTLD();
		$this->__processRecommendationsList($domain_info);
	}

	private function __processSearchedDomain(){
		// assign vars
		$key_word = Tools::getValue("txt_search");
		if(empty($key_word)){
			Tools::redirect('index.php');
		}
		$this->context->smarty->assign(array(
			'isSearchedDomainAvailable' => CommonUtils::isAvailableDomain($key_word),
			'searchKeyWord' => $key_word
		));
	}

	private function __processRecommendationsList($domain_info){
		// load product list based on domain category
		$product_list = Product::getProducts($this->context->language->id, 0, 0, 'id_product', 'DESC', __DOMAIN_CATEGORY_ID__, true);
		if( empty($product_list) ){
			return;
		}
		
		$result = array();
		// get products
		foreach ($product_list as $_product) {
			// ignore searched domain in the recommendation list
			if( $_product['name'] == $domain_info['domain_tld'] ){
				$this->context->smarty->assign(array(
					'searchedDomainInfo' => array(
						'id_product' => $_product['id_product'],
						'onsale' => $_product['on_sale'],
						'name' => $domain_info['domain_name'],
						'reference' => $_product['name'],
						'price' => $_product['price'],
						'wholesale_price' => $_product['wholesale_price']
					)
				));
				continue;
			}
			// check whether recommendation domain exists or not, if not, ignore that one
			$full_domain = $domain_info['domain_name'].$_product['name'];
			if( !CommonUtils::isAvailableDomain($full_domain)){
				continue;
			}
			// build product details
			$result[$_product['id_product']] = array(
				'id_product' => $_product['id_product'],
				'onsale' => $_product['on_sale'],
				'name' => $domain_info['domain_name'],
				'reference' => $_product['name'],
				'price' => $_product['price'],
				'wholesale_price' => $_product['wholesale_price']
			);
		}
		$this->context->smarty->assign(array(
			'recommendations' => $result
		));
	}
}
