<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 14:05:45
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\account_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2466354171e0866bde9-44982004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd79adcb25f9a375d1b0cc50746b7070b23f6a9a' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\account_review.tpl',
      1 => 1410851143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2466354171e0866bde9-44982004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54171e086eaa11_97238812',
  'variables' => 
  array (
    'link' => 0,
    'cart_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54171e086eaa11_97238812')) {function content_54171e086eaa11_97238812($_smarty_tpl) {?><?php ob_start();?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','billing',array(),true));?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('billingUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_tmp1)),$_smarty_tpl);?>

<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<span class="step step1 active">1</span>
			<span class="step step2 ">2</span>
			<span class="step step3 ">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">Cart</span>
			<span class="text_step text_step2">Billing & Payment</span>
			<span class="text_step text_step3">Place Your Oder</span>
			<span class="text_step text_step4">Thank You</span>
		</div>
	</div>
</div>
<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l left">
			<div class="box">
				<div class="col1 left">
					<h3>New
					<br />
					Customers</h3>
					<p class="txtcontent">
						Please enter your email address to create an account.
					</p>
					<a href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','billing',array(),true));?>
">
						<span class="btn">Continue ></span>
					</a>
				</div>
				<div class="col1 col2 left">
					<h3>Returning
					<br />
					Customers</h3>
					<p class="txtcontent">
						Already got an account? Sign In.
					</p>
					<p class="error" id="login_error"> </p>
					<div class="form">
						<p>
							Email
						</p>
						<input type="text" id="login_email" name="login_email" />
					</div>
					<div class="form">
						<p>
							Password
						</p>
						<input type="password" id="login_passwd" name="login_passwd" />
					</div>
					<p class="link">
						<a>Forgot your password?</a>
					</p>
					<a class="btn" id="SubmitLogin">Sign In ></a>
				</div>
			</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">Order Summary</span>
				</p>
				<p>
					<span class="left">ICANN Fees*</span>
					<span class="right"><strong>VND<?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['ican_fee'],0,",",".");?>
</strong></span>
				</p>
				<p>
					<span class="left">VNNIC Fees*</span>
					<span class="right"><strong>VND<?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['vnnic_reg_fee'],0,",",".");?>
</strong></span>
				</p>
				<p class="tax">
					<span class="left">Total:</span>
					<span class="right txt_color2">VND<?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_grandtotal'],0,",",".");?>
</span>
				</p>
				<p class="line"></p>
				<p>
					<span class="ico_verify"></span>
				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
