<?php
require_once( _PS_CLASS_DIR_.'SmartLinkUtils.php' );

class FfcartPaymentModuleFrontController extends ModuleFrontController
{
	private $customer = null;
	private $cart_data = null;
	
    public function __construct()
    {
        parent::__construct();
        $this->context = Context::getContext();
		$this->customer = $this->context->customer;
    }
	
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    	// build cart data
		$this->cart_data = CommonUtils::buildCart();
		if(empty($this->cart_data['cart_data'])){
			Tools::redirect('index.php');
		}
		
		$client_info = null;
		$client_id = $this->context->cookie->agent_client_id;
		if(!empty($client_id)){
			$client_info = new Customer($client_id);
		}
		
    	$this->context->smarty->assign(array(
    		'client_info' => $client_info,
    		'payment' => Tools::getValue("payment"),
			'cart_data' => $this->cart_data,
			'customer' => $this->customer,
			'address' => CommonUtils::getAddressById($this->context->cart->id_address_delivery),
		));
		$this->setTemplate('payment.tpl');
    }
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'authentication.js');
	}
	
	public function postProcess() {
		if( Tools::isSubmit("sml_return") && $this->__smartLinkReturn() ){
			// build cart data
			$this->cart_data = CommonUtils::buildCart();
			if(empty($this->cart_data['cart_data'])){
				Tools::redirect('index.php');
			}
			// if buying card
			if( $this->cart_data['recharge_fee'] > 0 ){
				// whmcs: add credit
				if( !CommonUtils::addCredit($this->cart_data['recharge_fee'])) {
					Tools::redirect('index.php');
				}
				$this->__addCash();
			}
			else {
				if( !$this->__add_order() ){
					$this->context->smarty->assign(array(
			    		'error_message' => "Cannot create your order! Please contact admin!",
					));
					return;
				}
				if(!$this->__savePurchasedHistory()){
					$this->context->smarty->assign(array(
			    		'error_message' => "Cannot save purchased history! Please contact admin!",
					));
					return;
				}
			}
			// add order
			$total = $this->context->cart->getOrderTotal();
			$paymentModule = Module::getInstanceByName("bankwire");
			$customer = new Customer($this->customer->id);
			$paymentModule->validateOrder(
							$this->context->cart->id, Configuration::get('PS_OS_WS_PAYMENT'), 
							$total, $paymentModule->displayName, null, array(), null, false, 
							$this->customer->secure_key
			);
			Context::getContext()->cookie->__unset("selected_domains");
			Context::getContext()->cookie->__unset("promotion_code");
			Tools::redirect($this->context->link->getModuleLink('ffcart', 'thankyou'));
		}
		
		//if no data, go back to home page
		if(Tools::isSubmit("submitPayment")){
			// build cart data
			$this->cart_data = CommonUtils::buildCart();
			if(empty($this->cart_data['cart_data'])){
				Tools::redirect('index.php');
			}
			
			// if buying card
			if( $this->cart_data['recharge_fee'] > 0 ){
				$this->__smartLinkProcess($this->cart_data['recharge_fee']);
			}
			
			// buying domain
			if( $this->cart_data['domain_fee'] > 0 ){
				// load current cash
				$current_cash = $this->__loadCashByCustomerId();
				
				$domain_fee = $this->cart_data['domain_fee'] + $this->cart_data['vnnic_reg_fee'] + $this->cart_data['ican_fee'];
				$domain_fee = $domain_fee+ ($domain_fee*0.1);
				if( $current_cash['cash'] <= 0 || $current_cash['cash'] < $domain_fee ){
					$this->context->smarty->assign(array(
			    		'error_message' => "Your cash isn't enough to buy domain! Please recharge!",
					));
					return;
				}
				$new_cash = $current_cash['cash'] - $domain_fee;
				// update cash
				$result = Db::getInstance()->update('charge_cash', array(
						'id_shop_group' => (int)$this->customer->id_shop_group,
						'id_shop' => (int)$this->customer->id_shop,
						'id_customer' => (int)$this->customer->id,
						'cash' => $new_cash,
						'date_upd' => date('Y-m-d H:i:s')
					), 'id='.(int)$current_cash['id']
				);
				// update cash history
				$result = Db::getInstance()->insert('charge_history', array(
					'id_shop_group' => (int)$this->customer->id_shop_group,
					'id_shop' => (int)$this->customer->id_shop,
					'id_customer' => (int)$this->customer->id,
					'spent' => $domain_fee,
					'charged' => 0,
					'remain' => $new_cash,
					'date_add' => date('Y-m-d H:i:s'),
					'date_upd' => date('Y-m-d H:i:s')
				));
			}
			
			// buying hosting
			if( $this->cart_data['hosting_fee'] > 0 ){
				// load current cash
				$current_cash = $this->__loadCashByCustomerId();
				
				$hosting_fee = $this->cart_data['hosting_fee'] + ($this->cart_data['hosting_fee']*0.1);
				$current_budget = $current_cash['cash'] + $current_cash['promotion_cash'];
				
				if( $current_budget <= 0 || $current_budget < $hosting_fee ){
					$this->__smartLinkProcess($hosting_fee);
				}
				
				$new_promotion_cash = $current_cash['promotion_cash'];
				$new_cash = 0;
				if( $current_cash['cash'] >= $hosting_fee ){
					$new_cash = $current_cash['cash'] - $hosting_fee;
				} else {
					$new_cash = 0;
					$new_promotion_cash = $current_cash['promotion_cash'] - ($hosting_fee - $current_cash['cash']);
					if($new_promotion_cash < 0){
						$new_promotion_cash =$new_promotion_cash*-1; 
					}
				}
				
				// update cash
				$result = Db::getInstance()->update('charge_cash', array(
						'id_shop_group' => (int)$this->customer->id_shop_group,
						'id_shop' => (int)$this->customer->id_shop,
						'id_customer' => (int)$this->customer->id,
						'promotion_cash' => $new_promotion_cash,
						'cash' => $new_cash,
						'date_upd' => date('Y-m-d H:i:s')
					), 'id='.(int)$current_cash['id']
				);
				// update cash history
				$result = Db::getInstance()->insert('charge_history', array(
					'id_shop_group' => (int)$this->customer->id_shop_group,
					'id_shop' => (int)$this->customer->id_shop,
					'id_customer' => (int)$this->customer->id,
					'spent' => $hosting_fee,
					'charged' => 0,
					'remain' => $new_cash,
					'date_add' => date('Y-m-d H:i:s'),
					'date_upd' => date('Y-m-d H:i:s')
				));
			}
			if( !$this->__add_order()){
				$this->context->smarty->assign(array(
		    		'error_message' => "Cannot create your order! Please contact admin!",
				));
				return;
			}
			if(!$this->__savePurchasedHistory()){
				$this->context->smarty->assign(array(
		    		'error_message' => "Cannot save purchased history! Please contact admin!",
				));
				return;
			}
			// add prestashop order
			$total = $this->context->cart->getOrderTotal();
			$paymentModule = Module::getInstanceByName("bankwire");
			$customer = new Customer($this->customer->id);
			$paymentModule->validateOrder(
							$this->context->cart->id, Configuration::get('PS_OS_WS_PAYMENT'), 
							$total, $paymentModule->displayName, null, array(), null, false, 
							$this->customer->secure_key
			);
			Context::getContext()->cookie->__unset("selected_domains");
			Context::getContext()->cookie->__unset("promotion_code");
			Tools::redirect($this->context->link->getModuleLink('ffcart', 'thankyou'));
		}
	}

	private function __savePurchasedHistory(){
		
		$history_data = $this->cart_data['cart_data'];
		if(empty($history_data)){
			return false;
		}
		foreach ($history_data as $id_product => $data) {
			$type = 'hosting';
			$expired_date = null;
			if($data['type'] == 'domain'){
				$type = 'domain';
				$expired_date = date('Y-m-d H:i:s', strtotime('+'.$data['quantity'].' years'));
			} else if($data['type'] == 'hosting'){
				if( in_array($data['reference'], array(28, 29, 30)) ){
					$type = 'vps';
				} else if( in_array($data['reference'], array(21, 22, 23, 24, 25, 26, 31, 32, 33, 34, 35, 36, 37)) ){
					$type = 'email';
				}
				$expired_date = date('Y-m-d H:i:s', strtotime('+'.$data['quantity'].' months'));
			}
			
			$result = Db::getInstance()->insert('purchased_history', array(
				'id_shop_group' => (int)$this->customer->id_shop_group,
				'id_shop' => (int)$this->customer->id_shop,
				'id_customer' => (int)$this->customer->id,
				'id_product' => $id_product,
				'type' => $type,
				'product_name' => $data['product_name'],
				'terms' => $data['quantity'],
				'auto_renew' => 1,
				'cash' => $data['product_subtotal'],
				'expired_date' => $expired_date,
				'date_add' => date('Y-m-d H:i:s'),
				'date_upd' => date('Y-m-d H:i:s')
			));
		}
		return true;
	}

	private function __add_order(){
		// get whmcs login info
		$whmcs_login = $this->context->cookie->whmcs_login;
		if(empty($whmcs_login) == true){
			return false;
		}
		$whmcs_login = json_decode($whmcs_login, TRUE);
		$postfields = array(
			"action" => "addorder",
			"paymentmethod" => "onepay",
			"clientid" => $whmcs_login["userid"]
		);
		$promotion_code = $this->context->cookie->promotion_code;
		if(!empty($promotion_code)){
			$postfields['promocode'] = $promotion_code;
		}
		$postfields = array_merge($postfields, $this->cart_data['cart_domain'], $this->cart_data['cart_hosting']);
		$results = CommonUtils::whmcs($postfields);
		
		if( $results["result"] == 'success' ){
			return true;
		}
		return false;
	}

	private function __addCash(){
		$old_cash = $this->__loadCashByCustomerId();
		$products = $this->cart_data['cart_data'];
		$remain = 0;
		
		// add charge_history
		foreach ($products as $product) {
			$remain += (int)$product['product_subtotal']+(int)$old_cash['cash'];
			$result = Db::getInstance()->insert('charge_history', array(
				'id_shop_group' => (int)$this->customer->id_shop_group,
				'id_shop' => (int)$this->customer->id_shop,
				'id_customer' => (int)$this->customer->id,
				'spent' => 0,
				'charged' => (int)$product['product_subtotal'],
				'remain' => (int)$remain,
				'date_add' => date('Y-m-d H:i:s'),
				'date_upd' => date('Y-m-d H:i:s')
			));
		}
		
		$cash = (int)$this->cart_data['recharge_fee']+(int)$old_cash['cash'];
		$promotion_cash = CommonUtils::getPromotionCash((int)$this->cart_data['recharge_fee'])+(int)$old_cash['promotion_cash'];
		if( $old_cash['id'] > 0 ) {
			// update cash
			$result = Db::getInstance()->update('charge_cash', array(
					'id_shop_group' => (int)$this->customer->id_shop_group,
					'id_shop' => (int)$this->customer->id_shop,
					'id_customer' => (int)$this->customer->id,
					'cash' => $cash,
					'promotion_cash' => $promotion_cash,
					'date_upd' => date('Y-m-d H:i:s')
				), 'id='.(int)$old_cash['id']
			);
		} else {
			// add cash
			$result = Db::getInstance()->insert('charge_cash', array(
				'id_shop_group' => (int)$this->customer->id_shop_group,
				'id_shop' => (int)$this->customer->id_shop,
				'id_customer' => (int)$this->customer->id,
				'cash' => $cash,
				'promotion_cash' => $promotion_cash,
				'date_add' => date('Y-m-d H:i:s'),
				'date_upd' => date('Y-m-d H:i:s')
			));
		}

		if (!$result){
			return false;
		}
		return true;
	}
	
	private function __loadCashByCustomerId(){
		$sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'charge_cash WHERE id_customer='.(int)$this->customer->id.
			   ' AND id_shop='.(int)$this->customer->id_shop.' AND id_shop_group='.(int)$this->customer->id_shop_group;
		
		$cash = 0;
		$cash_promotion = 0;
		$id = 0;
		if ($result = Db::getInstance() -> getRow($sql)) {
			$cash = $result['cash'];
			$cash_promotion = $result['promotion_cash'];
			$id = $result['id'];
		}
		
		return array('id' => $id, 'cash'=> (int)$cash, 'promotion_cash' => (int)$cash_promotion);
	}
	
	private function __smartLinkProcess($amount){
		$smart_link = new SmartLinkUtils();
		$smart_link->setSecureSecret("198BE3F2E8C75A53F38C1C4A5B6DBA27");
		$smart_link->setVirtualPaymentUrl("https://paymentcert.smartlink.com.vn:8181/vpcpay.do");
		// 1. Tao mot mang cac tham so:
		$_params= array(
			"Title" => "SPT Merchant",
			"vpc_Version" => 1, 
			"vpc_Command" => "pay", 
			"vpc_AccessCode" => "ECAFAB", 
			"vpc_MerchTxnRef" => $this->context->cart->id.'_'.rand(),
			"vpc_Merchant" => "SMLTEST", 
			"vpc_OrderInfo" => "SPT Merchant info", 
			"vpc_Amount" => $amount, 
			"vpc_Locale" => "vn" ,
			"vpc_Currency" => "VND", 
			"vpc_ReturnURL" => $this->context->link->getModuleLink('ffcart', 'payment', array('sml_return' => true)), 
			"vpc_BackURL" => $this->context->link->getModuleLink('ffcart', 'payment', array('payment' => Tools::getValue("payment")))
		);
		// 2. Gui cac tham so toi smartlink
		$smart_link->redirect($_params);
	}
	
	private function __smartLinkReturn(){
		// get return params
		$rtn_params = array(
			'vpc_AdditionData' => Tools::getValue('vpc_AdditionData'),
			'vpc_Amount' => Tools::getValue('vpc_Amount'),
			'vpc_Command' => Tools::getValue('vpc_Command'),
			'vpc_CurrencyCode' => Tools::getValue('vpc_CurrencyCode'),
			'vpc_Locale' => Tools::getValue('vpc_Locale'),
			'vpc_MerchTxnRef' => Tools::getValue('vpc_MerchTxnRef'),
			'vpc_Merchant' => Tools::getValue('vpc_Merchant'),
			'vpc_OrderInfo' => Tools::getValue('vpc_OrderInfo'),
			'vpc_TransactionNo' => Tools::getValue('vpc_TransactionNo'),
			'vpc_TxnResponseCode' => Tools::getValue('vpc_TxnResponseCode'),
			'vpc_Version' => Tools::getValue('vpc_Version'),
			'vpc_SecureHash' => Tools::getValue('vpc_SecureHash')
		);
		// get SML return 
		$smart_link = new SmartLinkUtils();
		$smart_link->setSecureSecret("198BE3F2E8C75A53F38C1C4A5B6DBA27");
		$smart_link->checkSum($rtn_params);
		$txnResponseCode = $smart_link->getParameter("vpc_TxnResponseCode");
		// Show this page as an error page if vpc_TxnResponseCode doesn't exist or doesn't equals '0'
		if ($txnResponseCode == "0" && $smart_link->isValidSecureHash()) {
		    return true;
		}
		return false;
	}
}
