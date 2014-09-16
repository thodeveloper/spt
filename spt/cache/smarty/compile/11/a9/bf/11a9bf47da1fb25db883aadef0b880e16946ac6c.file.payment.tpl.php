<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 14:12:34
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1059454171e1a037684-10706277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11a9bf47da1fb25db883aadef0b880e16946ac6c' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\payment.tpl',
      1 => 1410851547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1059454171e1a037684-10706277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54171e1a1afa96_68114567',
  'variables' => 
  array (
    'cart_data' => 0,
    'product_id' => 0,
    'cart' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
    'payment' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54171e1a1afa96_68114567')) {function content_54171e1a1afa96_68114567($_smarty_tpl) {?><div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<span class="step step1">1</span>
			<span class="step step2">2</span>
			<span class="step step3 active">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">Cart</span>
			<span class="text_step text_step2">Billing & Payment</span>
			<span class="text_step text_step3">Place Your Oder</span>
			<span class="text_step text_step4">Thank You</span>
		</div>
	</div>
</div>
<div class="body body_news body_checkout body_cart_fix">
	<div class="article">
		<div class="col_l left">
			<div class="box" style="margin-top: 30px;">
				<?php if (isset($_smarty_tpl->tpl_vars['cart_data']->value)) {?>
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Product</td>
							<td> </td>
							<td>Term</td>
							<td>Unit Price</td>
							<td>Subtotal</td>
						</tr>
					</thead>
					<tbody id="cart_content">
            			<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_data']->value["cart_data"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<td>
								<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
							</td>
							<td>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['cart']->value['product_name'];?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['cart']->value["type"]=='domain') {?>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.vn') {?>
									<p>
										*Plus VNNIC .VN fee of VND<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

									</p>
									<?php } elseif ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.com.vn') {?>
									<p>
										*Plus VNNIC .COM.VN fee of VND<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

									</p>
									<?php } else { ?>
									<p>
										*Plus ICANN fee of VND<?php echo @constant('_ICAN_FEE_');?>
/yr
									</p>
									<?php }?>
								<?php }?>
							</td>
							<td style="text-align: center;">
								<b>
									<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['quantity'],0,",",".");?>

								</b>
							</td>
							<td>
								<p>
									<b>
										<input name="unit_price" value='<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,'','');?>
' type="hidden" />
										VND<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,",",".");?>

									</b>
								</p>
							</td>
							<td>
								<p>
									<b>
										VND<span class="sub_price"><?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_subtotal'],0,",",".");?>
</span>
									</b>
								</p>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php }?>
			</div>
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<div class="header">
							<h5><?php echo smartyTranslate(array('s'=>'Billing information'),$_smarty_tpl);?>
</h5>
						</div>
						<div class="div_pop">
							<div class="div_form">
								<p class="form">
									<p class="showAddress" id="show_address_<?php echo $_smarty_tpl->tpl_vars['address']->value->id;?>
" style="margin-left: 100px;">
										<?php echo $_smarty_tpl->tpl_vars['address']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value->firstname;?>
<br />
										<?php echo $_smarty_tpl->tpl_vars['address']->value->address1;?>
 <br />
										<?php if (!empty($_smarty_tpl->tpl_vars['address']->value->phone)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->phone;?>
 <br /><?php }?>
										<?php if (!empty($_smarty_tpl->tpl_vars['address']->value->phone_mobile)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->phone_mobile;?>
 <br /><?php }?>
										<?php echo $_smarty_tpl->tpl_vars['address']->value->city;?>
 <br />
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['id_country']==$_smarty_tpl->tpl_vars['address']->value->id_country) {?>
												<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

												<?php break 1?>
											<?php }?>
										<?php } ?> <br />
									</p>
								</p>
							</div>
						</div>
						<div class="header">
							<h5><?php echo smartyTranslate(array('s'=>'Payment information'),$_smarty_tpl);?>
</h5>
						</div>
						<div class="div_pop">
							<div class="div_form">
								<p class="form">
									<span class="textline"><?php echo smartyTranslate(array('s'=>'Credit Card'),$_smarty_tpl);?>
</span>
									<input disabled="disabled" type="radio" name="payment_method" value="1" <?php if ($_smarty_tpl->tpl_vars['payment']->value==1) {?>checked="checked"<?php }?> />
								</p>
							</div>
							<div class="div_form">
								<p class="form">
									<span class="textline"><?php echo smartyTranslate(array('s'=>'Bank Wire Transfer'),$_smarty_tpl);?>
</span>
									<input disabled="disabled" type="radio" name="payment_method" value="2" <?php if ($_smarty_tpl->tpl_vars['payment']->value==2) {?>checked="checked"<?php }?> />
								</p>
							</div>
						</div>
						<div class="header">
							<form id="frm_submit_payment" action="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','payment',array('payment'=>$_smarty_tpl->tpl_vars['payment']->value),true));?>
" method="post">
								<input type="hidden" name="submitPayment" value="1" />
								<div class="div_form">
									<p class="form">
										<span class="textline"> </span>
										<span class="btn_gr" id="btn_submit_payment">Payment &gt;</span>
										<span class="notice"></span>
									</p>
								</div>
							</form>
						</div>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"> </div>
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
