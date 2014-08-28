<?php /* Smarty version Smarty-3.1.19, created on 2014-08-23 18:38:47
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704653f85c9782d074-40568774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f16b504ad73c5ed090506e2d6eec6428854946' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\themes\\firefly\\header.tpl',
      1 => 1408793854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704653f85c9782d074-40568774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f85c97946c99_89768496',
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'nofollow' => 0,
    'favicon_url' => 0,
    'img_update_time' => 0,
    'css_dir' => 0,
    'js_dir' => 0,
    'js_def' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f85c97946c99_89768496')) {function content_53f85c97946c99_89768496($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
"><!-- InstanceBegin template="/Templates/tempalte.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)&&$_smarty_tpl->tpl_vars['meta_description']->value) {?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)&&$_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }?>
	<meta name="generator" content="FireflyInnov" />
	<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)) {?>no<?php }?>index,<?php if (isset($_smarty_tpl->tpl_vars['nofollow']->value)&&$_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
	<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
	<meta name="apple-mobile-web-app-capable" content="yes" /> 
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
font.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
kendo.common.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
kendo.rtl.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
kendo.dataviz.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
kendo.dataviz.default.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
immersive-slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
main.css" /> 
	<!--<script src="../js/less-1.7.3.js"></script>-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery-1.9.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery-ui.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.number.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery.immersive-slider.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
kendo.all.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
main.js"></script> 
	<?php if (isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

	<?php }?>
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
ie7.css">
	<![endif]-->
	<!--[if IE 8]>
	  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
ie8.css">
	<![endif]-->
	<!--[if lte IE 9]>
	  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
ie9.css">
	<![endif]-->
</head>

<body>
<header>
	<div class="div_header">
    	<div class="article">
        	<a class="change_lang"><i class="fa fa-globe"></i><span>United States - English</span></a>
            <div class="right">
                <div class="login_out">
                    <i class="fa fa-phone" ></i>
                    <a>(084) 932 912830 </a>
                </div>
                <div class="login_out btn_log active">
                    <i class="fa fa-user" ></i>
                    <a id="btn_log">Sign In</a>
                    <span></span>
                    <a id="btn_log2">Register</a>
                    <div class="box_log">
                    	<div class="line"></div>
                        <div class="box_sign">
                        	<h3>Sign in</h3>
                            <input class="sm" type="text" placeholder="Email" />
                            <input class="sm" type="text" placeholder="Pass" />
                            <a class="text_link">Forgot your password?</a>
                            <button class="btn_gr">Sign in</button>
                        </div>
                        <div class="box_login">
                        	<h3>New Customer</h3>
                            <span>New to GoDaddy? </span>
                            <span>Create an account to get started today.</span>
                            <a class="btn_gr" id="undo_user" style="">For Private User</a>
                            <a class="btn_gr" id="undo_reseller" style="">For Reseller</a>
                        </div>
                    </div>
                </div>
                <a class="btn1">
                    <i class="fa fa-shopping-cart"></i><span>checkout</span>
                </a>
            </div>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/popup/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- InstanceBeginEditable name="search" -->
	<div class="div_search hidden_box">
    	<div class="article">
        	<div class="box">
        		<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('domain','search');?>
" method="post" id="frm_domain_search" name="frm_domain_search">
	            	<input type="text" name="txt_search" placeholder="Enter a Domain Name"/>
	                <a class="btn-1"><span id="domain_search" class="btn_search">Search Domain</span></a>
                </form>
            </div>
        </div>
    </div>
	<!-- InstanceEndEditable -->
</header>
<!--Popup create account user-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/popup/new_user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Popup create account user-------------------- end-->
<!--Popup create account reseller-->
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/popup/new_retailer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--Popup create account reseller end-->
<div class="bg_dark"></div><?php }} ?>
