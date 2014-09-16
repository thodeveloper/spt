<?php
class CartController extends CartControllerCore
{
	
	public function postProcess()
		{
			// Update the cart ONLY if $this->cookies are available, in order to avoid ghost carts created by bots
			if ($this->context->cookie->exists() && !$this->errors && !($this->context->customer->isLogged() && !$this->isTokenValid()))
			{
				if (Tools::getIsset('add') || Tools::getIsset('update')) {
					$product = new Product(Tools::getValue('id_product'), true, $this->context->language->id);
					if (!empty($product->id) && $product->active == TRUE)
					{
						Db::getInstance()->execute('
							UPDATE `'._DB_PREFIX_.'cart_product`
							SET `quantity` = 0, `date_add` = NOW() 
							WHERE `id_product` = '.(int)Tools::getValue('id_product').
							' AND `id_cart` = '.(int)$this->context->cart->id.(Configuration::get('PS_ALLOW_MULTISHIPPING') && $this->isMultiAddressDelivery() ? ' AND `id_address_delivery` = '.(int)$id_address_delivery : '').
							' LIMIT 1'
						);
					}
					/*
					$gift_message = $this->context->cart->gift_message;
					if(empty($gift_message)){
						$gift_message = strip_tags(Tools::getValue('gift_message'));
					}
					else {
						$gift_message .= ';'.strip_tags(Tools::getValue('gift_message'));
					}
					
					$this->context->cart->gift_message = $gift_message;
					$this->context->cart->update();*/
					
				}
			}
			parent::postProcess();
		}
	
}