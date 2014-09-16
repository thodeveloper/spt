<?php
include_once(_PS_MODULE_DIR_.'smartblog/classes/SmartBlogPost.php');
include_once(_PS_MODULE_DIR_.'smartblog/classes/BlogCategory.php');

class FfnewsDetailModuleFrontController extends ModuleFrontController
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
    	$id_news = Tools::getValue("id_news");
		if(!is_numeric($id_news)){
			Tools::redirect($this->context->link->getModuleLink('ffnews', 'home'));
		}
		$post = SmartBlogPost::getPost($id_news, $this->context->customer->id_lang);
		$this->context->smarty->assign(array(
			'post' => $post
		));
		
		$this->setTemplate('detail.tpl');
    }
	
	public function setMedia()
	{
	}
}
