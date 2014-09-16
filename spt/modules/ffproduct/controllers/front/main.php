<?php

class FfproductMainModuleFrontController extends ModuleFrontController {
	public function __construct() {
		parent::__construct();
		$this -> context = Context::getContext();
	}

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent() {
		
		$id_category = Tools::getValue("id_cate");
		//if no data, go back to home page
		if(!is_numeric($id_category)){
			Tools::redirect('index.php');
		}
		$this->__getProductByCategoryId($id_category);
		
		$this -> setTemplate('product.tpl');
	}

	public function setMedia() {
		$this->addJS(_THEME_JS_DIR_.'product.js');
	}

	public function postProcess() {
		
	}
	
	private function __getProductByCategoryId($id_category){
		$product_list = Product::getProducts($this->context->language->id, 0, 0, 'id_product', 'ASC', $id_category, true);
		if( empty($product_list) ){
			Tools::redirect('index.php');
		}
		
		$combination_renders = array();
		
		// get products
		$products = array();
		foreach ($product_list as $_product) {
			$product = new Product($_product['id_product']);
			// get product price
			$price = $_product['wholesale_price'] > 0? $_product['wholesale_price']: $_product['price'];
			// get combinations
			$id_product_attribute = $product->getDefaultAttribute($_product['id_product']);
			$combinations = $product->getAttributeCombinationsById($id_product_attribute, $this->context->language->id);
			foreach ($combinations as $combination) {
				$combination_renders[$combination['group_public_name']][$combination['group_name']][] = $combination['attribute_name'];
			}
			// build product details
			$products[$_product['id_product']] = array(
				'reference' => $_product['reference'],
				'price' => $price,
				'name' => $_product['name'],
				'description' => strip_tags($_product['description']),
				'description_short' => strip_tags($_product['description_short']),
				'combinations' => $combinations
			);
		}
		//echo "<pre>";
		//print_r($combination_renders);die;
		$this->context->smarty->assign(array(
			'products' => $products,
			'combinations' => $combination_renders
		));
	}
}
