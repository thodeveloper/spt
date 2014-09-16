<?php
include_once(_PS_MODULE_DIR_.'smartblog/classes/SmartBlogPost.php');
include_once(_PS_MODULE_DIR_.'smartblog/classes/BlogCategory.php');

class FfnewsHomeModuleFrontController extends ModuleFrontController
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
    	$total = SmartBlogPost::getToltal();
    	$start = Tools::getValue("start", 0);
		$end = Tools::getValue("end", $start+2);
		if($start >= $total){
			$start = 0;
			$end = 2;
		}
		
    	$posts = SmartBlogPost::getAllPost($this->context->customer->id_lang, $start, $end);
		$this->context->smarty->assign(array(
			'posts' => $posts,
			'total' => $total,
			'start' => $start,
			'end' => $end
		));
		$this->setTemplate('home.tpl');
    }
	
	public function setMedia()
	{
	}
}
