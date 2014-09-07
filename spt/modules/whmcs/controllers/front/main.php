<?php
class WhmcsMainModuleFrontController extends ModuleFrontController
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
    	
    }
	
	public function postProcess() {
		// login
		if( Tools::isSubmit("SubmitLogin"))
			$this->__whmcs_login();
		
		// add client
		if( Tools::isSubmit("submitAccount"))
			$this->__whmcs_addClient();
		
		// add order
		if(Tools::isSubmit("submitAddOrder"))
			$this->__add_order();
	}
	
	public function setMedia(){}
	
	private function __whmcs_login(){
		$postfields = array(
			"action" => "validatelogin",
			"email" => Tools::getValue("email"),
			"password2" => Tools::getValue("passwd")
		);
		$results = CommonUtils::whmcs($postfields);
		if( $results["result"] == 'success' ){
			unset($results["passwordhash"]);
			$this->context->cookie->__set("whmcs_login", json_encode($results));
			$return = array(
				'hasError' => false,
				'data' => "login success"
			);
			die(Tools::jsonEncode($return));
		}
		else {
			$return = array(
				'hasError' => TRUE,
				'errors' => $results["message"]
			);
			die(Tools::jsonEncode($return));
		}
	}
	
	private function __whmcs_addClient(){
		
		$phone = Tools::getValue("phone");
		if( empty($phone) ){
			$phone = Tools::getValue("phone_mobile");
		}
		
		$postfields = array(
			"action" => "addclient",
			"firstname" => Tools::getValue("firstname"),
			"lastname" => Tools::getValue("lastname"),
			"email" => Tools::getValue("email"),
			"address1" => Tools::getValue("address1"),
			"city" => Tools::getValue("city"),
			"state" => "KO",
			"postcode" => Tools::getValue("postcode"),
			"country" => "VN",
			"phonenumber" => $phone,
			"password2" => Tools::getValue("passwd")
		);
		$results = CommonUtils::whmcs($postfields);
		if( $results["result"] == 'success' ){
			$this->__whmcs_login(true);
		} else {
			$return = array(
				'hasError' => TRUE,
				'errors' => $results["message"]
			);
			die(Tools::jsonEncode($return));
		}
	}
	
	private function __add_credit(){
		// get whmcs login info
		$whmcs_login = $this->context->cookie->whmcs_login;
		if(empty($whmcs_login) == true){
			return false;
		}
		$whmcs_login = json_decode($whmcs_login, TRUE);
		$postfields = array(
			"action" => "addorder",
			"clientid" => $whmcs_login["userid"],
			"description" => "SPT",
			"amount" => Tools::getValue("amount")
		);
		$results = CommonUtils::whmcs($postfields);
		return $results;
	}
	
	private function __add_order(){
		// add credit
		$credit_results = $this->__add_credit();
		if($credit_results["result"] != "success"){
			$return = array(
				'hasError' => TRUE,
				'errors' => $credit_results["message"]
			);
			die(Tools::jsonEncode($return));
		}
		
		// get whmcs login info
		$whmcs_login = $this->context->cookie->whmcs_login;
		if(empty($whmcs_login) == true){
			return false;
		}
		$whmcs_login = json_decode($whmcs_login, TRUE);
		$postfields = array(
			"action" => "addorder",
			"clientid" => $whmcs_login["userid"],
			"pid" => Tools::getValue("whmcs_pid"),
			"domain" => Tools::getValue("domain"),
			"billingcycle" => Tools::getValue("whmcs_billingcycle"),
			"domaintype" => "register",
			"regperiod" => Tools::getValue("whmcs_regperiod"),
			"paymentmethod" => "mailin"
		);
		$results = CommonUtils::whmcs($postfields);
		if( $results["result"] == 'success' ){
			$return = array(
				'hasError' => false,
				'data' => "add order success"
			);
			die(Tools::jsonEncode($return));
		}
		else {
			$return = array(
				'hasError' => TRUE,
				'errors' => $results["message"]
			);
			die(Tools::jsonEncode($return));
		}
	}
}
