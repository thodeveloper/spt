<?php
class CartController extends CartControllerCore
{
	
	public function init()
	{
		$id_product_merge = Tools::getValue('id_product');
		if (Tools::getIsset('delete')) {
			// remove data in session
			CommonUtils::removeDomainName($id_product_merge);
		}
		
		$prop_ids = explode('-', $id_product_merge);
		if(isset($prop_ids[0])){
			$_POST['id_product'] = $prop_ids[0];
		}
		if(isset($prop_ids[1])){
			$_POST['id_product_attribute'] = $prop_ids[1];
		}
		
		parent::init();
	}
	
	public function postProcess()
	{
		// Update the cart ONLY if $this->cookies are available, in order to avoid ghost carts created by bots
		if ($this->context->cookie->exists() && !$this->errors && !($this->context->customer->isLogged() && !$this->isTokenValid()))
		{
			if (Tools::getIsset('add') || Tools::getIsset('update')) {
				$product = new Product(Tools::getValue('id_product'), true, $this->context->language->id);
				// empty cart in case of recharge
				$domain_name = Tools::getValue('txt_search');
				if( $domain_name == '__recharge__' ){
					$this->context->cookie->__unset("selected_domains");
					$this->context->cart->delete();
				} else if( !empty($domain_name) ){
					CommonUtils::selectedDomains($domain_name, $product);
				}
				if (!empty($product->id) && $product->active == TRUE)
				{
					Db::getInstance()->execute('
						UPDATE `'._DB_PREFIX_.'cart_product`
						SET `quantity` = 0, `date_add` = NOW() 
						WHERE `id_product` = '.(int)Tools::getValue('id_product').
						' AND `id_cart` = '.(int)$this->context->cart->id.(Configuration::get('PS_ALLOW_MULTISHIPPING') && $this->isMultiAddressDelivery() ? ' AND `id_address_delivery` = '.(int)$id_address_delivery : '').
						' AND `id_product_attribute` = '.(int)Tools::getValue('id_product_attribute').' LIMIT 1'
					);
				}
			}
		}
		parent::postProcess();
	}
	
}