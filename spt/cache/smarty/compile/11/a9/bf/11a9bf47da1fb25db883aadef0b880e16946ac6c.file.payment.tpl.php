<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 05:32:39
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584542321912e8631-99132733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11a9bf47da1fb25db883aadef0b880e16946ac6c' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\payment.tpl',
      1 => 1411943546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584542321912e8631-99132733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542321914bc0f7_48431657',
  'variables' => 
  array (
    'link' => 0,
    'error_message' => 0,
    'cart_data' => 0,
    'product_id' => 0,
    'cart' => 0,
    'payment' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
    'client_info' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542321914bc0f7_48431657')) {function content_542321914bc0f7_48431657($_smarty_tpl) {?><div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket');?>
"><span class="step step1">1</span></a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','billing');?>
"><span class="step step2">2</span></a>
			<span class="step step3 active">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1"><?php echo smartyTranslate(array('s'=>'Giỏ hàng'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step2"><?php echo smartyTranslate(array('s'=>'Hoá đơn và thanh toán'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step3"><?php echo smartyTranslate(array('s'=>'Đặt hàng'),$_smarty_tpl);?>
</span>
			<span class="text_step text_step4"><?php echo smartyTranslate(array('s'=>'Cảm ơn'),$_smarty_tpl);?>
</span>
		</div>
	</div>
</div>
<div class="body body_news body_checkout body_cart_fix">
	<div class="article">
		<div class="col_l left">
			<div style="margin-top: 30px;color: red"><?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)) {?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }?></div>
			<div class="box" style="margin-top: 30px;">
				<?php if (isset($_smarty_tpl->tpl_vars['cart_data']->value)) {?>
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td><?php echo smartyTranslate(array('s'=>'Sản phẩm'),$_smarty_tpl);?>
</td>
							<td> </td>
							<td><?php echo smartyTranslate(array('s'=>'Thời hạn'),$_smarty_tpl);?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Giá'),$_smarty_tpl);?>
</td>
							<td><?php echo smartyTranslate(array('s'=>'Thành tiền'),$_smarty_tpl);?>
</td>
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
							<td style="text-align:center;">
								<?php if (!empty($_smarty_tpl->tpl_vars['cart']->value['cover_image'])) {?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['cover_image'];?>
" width="50px" height="50px" />
								<?php }?>
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
										*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

									</p>
									<?php } elseif ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.com.vn') {?>
									<p>
										*<?php echo smartyTranslate(array('s'=>'Cộng phí VNNIC .COM.VN là '),$_smarty_tpl);?>
<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

									</p>
									<?php } else { ?>
									<p>
										*<?php echo smartyTranslate(array('s'=>'Cộng phí ICANN là '),$_smarty_tpl);?>
<?php echo @constant('_ICAN_FEE_');?>
/năm
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
						<form id="frm_submit_payment" action="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','payment',array('payment'=>$_smarty_tpl->tpl_vars['payment']->value),true));?>
" method="post">
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin hoá đơn'),$_smarty_tpl);?>
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
							<?php if (!empty($_smarty_tpl->tpl_vars['client_info']->value)&&$_smarty_tpl->tpl_vars['customer']->value->id_default_group==@constant('__RESELLER_GROUP_ID__')) {?>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin khách hàng'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo $_smarty_tpl->tpl_vars['client_info']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['client_info']->value->firstname;?>
</span>
										<span class="textline"><?php echo $_smarty_tpl->tpl_vars['client_info']->value->email;?>
</span>
									</p>
								</div>
							</div>
							<?php }?>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin thanh toán'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Thẻ tín dụng'),$_smarty_tpl);?>
</span>
										<input disabled="disabled" type="radio" name="payment_method" value="1" <?php if ($_smarty_tpl->tpl_vars['payment']->value==1) {?>checked="checked"<?php }?> />
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'ATM'),$_smarty_tpl);?>
</span>
										<input disabled="disabled" type="radio" name="payment_method" value="2" <?php if ($_smarty_tpl->tpl_vars['payment']->value==2) {?>checked="checked"<?php }?> />
									</p>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['cart_data']->value['recharge_fee']<=0) {?>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Tiền mặt'),$_smarty_tpl);?>
</span>
										<input disabled="disabled" type="radio" name="payment_method" value="2" <?php if ($_smarty_tpl->tpl_vars['payment']->value==3) {?>checked="checked"<?php }?> />
									</p>
								</div>
								<?php }?>
							</div>
							<div class="header">
								<input type="hidden" name="submitPayment" value="1" />
								<div class="div_form">
									<p class="form">
										<span class="textline"> </span>
										<span class="btn_gr" id="btn_submit_payment"><?php echo smartyTranslate(array('s'=>'Thanh toán'),$_smarty_tpl);?>
 &gt;</span>
										<span class="notice"></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"> </div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Thống kê hoá đơn'),$_smarty_tpl);?>
</span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Thuế'),$_smarty_tpl);?>
(10%):</span>
					<span class="right"><strong>VND<span id="tax_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_tax'],0,",",".");?>
</span></strong></span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Phí ICANN'),$_smarty_tpl);?>
*</span>
					<span class="right"><strong>VND<?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['ican_fee'],0,",",".");?>
</strong></span>
				</p>
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Phí VNNIC'),$_smarty_tpl);?>
*</span>
					<span class="right"><strong>VND<?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['vnnic_reg_fee'],0,",",".");?>
</strong></span>
				</p>
				<p class="tax">
					<span class="left"><?php echo smartyTranslate(array('s'=>'Tổng cộng'),$_smarty_tpl);?>
:</span>
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
