<!DOCTYPE HTML>
<html lang="{$lang_iso}"><!-- InstanceBegin template="/Templates/tempalte.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{$meta_title|escape:'html':'UTF-8'}</title>
	{if isset($meta_description) AND $meta_description}
		<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
	{/if}
	{if isset($meta_keywords) AND $meta_keywords}
		<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
	{/if}
	<meta name="generator" content="FireflyInnov" />
	<meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
	<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" /> 
	<meta name="apple-mobile-web-app-capable" content="yes" /> 
	<link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
	<link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
	<link rel="stylesheet" type="text/css" href="{$css_dir}font.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}kendo.common.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}kendo.rtl.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}kendo.default.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}kendo.dataviz.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}kendo.dataviz.default.min.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}immersive-slider.css">
	<link rel="stylesheet" type="text/css" href="{$css_dir}main.css" /> 
	<!--<script src="../js/less-1.7.3.js"></script>-->
	<script src="{$js_dir}jquery-1.9.js"></script>
	<script src="{$js_dir}jquery-ui.min.js"></script>
	<script src="{$js_dir}jquery.immersive-slider.js"></script>
	<script src="{$js_dir}kendo.all.min.js"></script>
	<script src="{$js_dir}main.js"></script> 
	{if isset($js_def)}
		{$js_def}
	{/if}
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE 7]>
	  <link rel="stylesheet" type="text/css" href="{$css_dir}ie7.css">
	<![endif]-->
	<!--[if IE 8]>
	  <link rel="stylesheet" type="text/css" href="{$css_dir}ie8.css">
	<![endif]-->
	<!--[if lte IE 9]>
	  <link rel="stylesheet" type="text/css" href="{$css_dir}ie9.css">
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
    {include file="$tpl_dir./modules/popup/menu.tpl"}
    <!-- InstanceBeginEditable name="search" -->
	<div class="div_search hidden_box">
    	<div class="article">
        	<div class="box">
        		<form action="{$link->getModuleLink('domain', 'search')}" method="post" id="frm_domain_search" name="frm_domain_search">
	            	<input type="text" name="txt_search" placeholder="Enter a Domain Name"/>
	                <a class="btn-1"><span id="domain_search" class="btn_search">Search Domain</span></a>
                </form>
            </div>
        </div>
    </div>
	<!-- InstanceEndEditable -->
</header>
<!--Popup create account user-->
{include file="$tpl_dir./modules/popup/new_user.tpl"}
<!--Popup create account user-------------------- end-->
<!--Popup create account reseller-->
{include file="$tpl_dir./modules/popup/new_retailer.tpl"}
<!--Popup create account reseller end-->
<div class="bg_dark"></div>