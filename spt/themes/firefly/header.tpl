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
	<script src="{$js_dir}jquery.number.min.js"></script>
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
{addJsDef whmcsUrl={$link->getModuleLink('whmcs', 'main', array(), true)|addslashes}|escape:'quotes':'UTF-8'}
<header>
	<div class="div_header">
    	<div class="article">
        	<a class="change_lang"><i class="fa fa-globe"></i><span>{l s='Tiếng Anh'}</span></a>
            <div class="right">
                <div class="login_out">
                    <i class="fa fa-phone" ></i>
                    <a>(084) 932 912830 </a>
                </div>
                {if $is_logged == true}
                <div class="login_out btn_log active">
                    <i class="fa fa-user"> </i>
                    <a id="btn_log" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}">{l s='Đăng xuất'}</a>
                    <span></span>
                    <a id="btn_log2" href="{$link->getModuleLink('account', 'main', array(), true)|addslashes}">{l s='Tài khoản của tôi'}</a>
                </div>
                {else}
            	<div class="login_out btn_log active">
                    <i class="fa fa-user" ></i>
                    <a id="btn_log">{l s='Đăng nhập'}</a>
                    <span></span>
                    <a id="btn_log2">{l s='Đăng ký'}</a>
                    <div class="box_log">
                    	<div class="line"> </div>
                        <div class="box_sign">
                        	<h3>{l s='Đăng nhập'}</h3>
                        	<p class="error" id="header_login_error"> </p>
                            <input class="sm" type="text" name="header_login_email" id="header_login_email" placeholder="Email" />
                            <input class="sm" type="password" id="header_login_passwd" name="header_login_passwd" placeholder="{l s='Mật khẩu'}" />
                            <a class="text_link">{l s='Quên mật khẩu'}?</a>
                            <button class="btn_gr" id="header_SubmitLogin">{l s='Đăng nhập'}</button>
                        </div>
                        <div class="box_login">
                        	<h3>{l s='Khách hàng mới'}</h3>
                            <span>{l s='Khách hàng mới của SPT'}? </span>
                            <span>{l s='Tạo một tài khoản để bắt đầu hôm nay'}.</span>
                            <a class="btn_gr" id="undo_user" style="">{l s='Cá nhân'}</a>
                            <a class="btn_gr" id="undo_reseller" style="">{l s='Nhà bán lẻ'}</a>
                        </div>
                    </div>
                </div>
                {/if}
                <a href="{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}" class="btn1">
                    <i class="fa fa-shopping-cart"></i><span>{l s='Giỏ hàng'}</span>
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
	            	<input type="text" name="txt_search" placeholder="{l s='Nhập tên miền'}"/>
	                <a class="btn-1"><span id="domain_search" class="btn_search">{l s='Tìm kiếm'}</span></a>
                </form>
            </div>
        </div>
    </div>
	<!-- InstanceEndEditable -->
</header>
<!--Popup create account user-->
{include file="$tpl_dir./modules/popup/new_user.tpl"}
<!--Popup create account user-------------------- end-->
<div class="bg_dark"></div>