<?php
class AccountMainModuleFrontController extends ModuleFrontController
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
    	if($this->context->customer->logged != TRUE){
    		Tools::redirect('index.php');
    	}
		
    	global $smarty; 
    	$smarty->assign(array(
			'template_path' => $this->getTemplatePath(""),
			'recharge_list' => $this->__loadHistory(),
			'cash' => $this->__loadCash(),
			'customer' => $this->context->customer
		));
		$this->setTemplate('main.tpl');
    }
	
	public function postProcess() {
		if($this->context->customer->logged != TRUE){
    		Tools::redirect('index.php');
    	}
		//if no data, go back to home page
		if(Tools::isSubmit("isHistory")){
			$cash_array = $this->__loadCashHistory();
			if(empty($cash_array)){
				$cash_array = null;
			}
			//echo count($cash_array);die;
			echo "{\"data\":" .json_encode($cash_array). ",\"total\":". count($cash_array)."}";
			die;
		}
		if(Tools::isSubmit("isClient")){
			$client_array = CommonUtils::loadClientList();
			if(empty($client_array)){
				$client_array = null;
			}
			echo "{\"data\":" .json_encode($client_array). ",\"total\":". count($client_array)."}";
			die;
		}
		if(Tools::isSubmit("isDomain")){
			$domain_array = $this->__loadPurchasedHistory('domain');
			if(empty($domain_array)){
				$domain_array = null;
			}
			echo "{\"data\":" .json_encode($domain_array). ",\"total\":". count($domain_array)."}";
			die;
		}
		if(Tools::isSubmit("isHosting")){
			$hosting_array = $this->__loadPurchasedHistory('hosting');
			if(empty($hosting_array)){
				$hosting_array = null;
			}
			echo "{\"data\":" .json_encode($hosting_array). ",\"total\":". count($hosting_array)."}";
			die;
		}
		if(Tools::isSubmit("isEmail")){
			$email_array = $this->__loadPurchasedHistory('email');
			if(empty($email_array)){
				$email_array = null;
			}
			echo "{\"data\":" .json_encode($email_array). ",\"total\":". count($email_array)."}";
			die;
		}
		if(Tools::isSubmit("isVPS")){
			$vps_array = $this->__loadPurchasedHistory('vps');
			if(empty($vps_array)){
				$vps_array = null;
			}
			echo "{\"data\":" .json_encode($vps_array). ",\"total\":". count($vps_array)."}";
			die;
		}
	}
	
	public function setMedia()
	{
		$this->addJS(_THEME_JS_DIR_.'account.js');
	}
	
	private function __loadPurchasedHistory($type){
		$customer = $this->context->customer;
		
		$sql = 'SELECT id, product_name, id_product, terms, cash, auto_renew, expired_date, date_add, date_upd FROM ' . _DB_PREFIX_ . 'purchased_history WHERE id_customer='.$customer->id.
			   ' AND type=\''.$type.'\' AND id_shop='.$customer->id_shop.' AND id_shop_group='.$customer->id_shop_group;
		if (!$result = Db::getInstance() -> executeS($sql))
			return false;
		return $result;
	}
	
	private function __loadHistory(){
		$return_data = array();
		
		$recharge_list = CommonUtils::getProductsByCategoryId(__RECHARGE_CATEGORY_ID__);
		if(empty($recharge_list) && is_array($recharge_list) == FALSE ){
			return $recharge_list;
		}
		foreach ($recharge_list as $item) {
			$price = $item->wholesale_price > 0? $item->wholesale_price: $item->price;
			
			$return_data[(string)$item->id] = array(
				"product_price" => (string)$price
			);
		}
		return $return_data;
	}
	
	private function __loadCash(){
		$customer = $this->context->customer;
		
		$sql = 'SELECT * FROM ' . _DB_PREFIX_ . 'charge_cash WHERE id_customer='.$customer->id.
			   ' AND id_shop='.$customer->id_shop.' AND id_shop_group='.$customer->id_shop_group;
		if (!$result = Db::getInstance() -> getRow($sql))
			return false;
		return $result;
	}
	
	private function __loadCashHistory(){
		$customer = $this->context->customer;
		
		$sql = 'SELECT id, spent, charged, remain, date_upd FROM ' . _DB_PREFIX_ . 'charge_history WHERE id_customer='.$customer->id.
			   ' AND id_shop='.$customer->id_shop.' AND id_shop_group='.$customer->id_shop_group.
			   ' ORDER BY date_upd DESC';
		if (!$result = Db::getInstance() -> executeS($sql))
			return false;
		return $result;
	}
}
