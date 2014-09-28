<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 05:27:00
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\billing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184025423218ad277d7-82492734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba85f328b9b405abc1241df5253a955e401ad69c' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\billing.tpl',
      1 => 1411943194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184025423218ad277d7-82492734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423218b108759_66287125',
  'variables' => 
  array (
    'link' => 0,
    'carriers' => 0,
    'customer' => 0,
    'addresses' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
    'guestInformations' => 0,
    'sl_country' => 0,
    'cart_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423218b108759_66287125')) {function content_5423218b108759_66287125($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderOpcUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true))),$_smarty_tpl);?>

<?php ob_start();?><?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','payment',array(),true));?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('orderPaymentUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_tmp1)),$_smarty_tpl);?>

<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket');?>
"><span class="step step1">1</span></a>
			<span class="step step2 active">2</span>
			<span class="step step3 ">3</span>
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
<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l left">
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form name="billing" id="billing">
							<input type="hidden" name="idAddress_delivery" id="idAddress_delivery" value="0">
							<input type="hidden" name="id_carrier" id="id_carrier" value="<?php echo $_smarty_tpl->tpl_vars['carriers']->value->id;?>
">
							<?php if ($_smarty_tpl->tpl_vars['customer']->value->logged==false) {?>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Khách hàng mới'),$_smarty_tpl);?>
</h5>
								<input type="hidden" name="is_new_customer" value="1">
							</div>
							<div class="div_pop">
								<div class="div_form">
						            <p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Nhóm'),$_smarty_tpl);?>
</span>
										<select name="group_id" id="group_id" class="xsm">
						                    <option value="1"><?php echo smartyTranslate(array('s'=>'Khách hàng'),$_smarty_tpl);?>
</option>
						                    <option value="2"><?php echo smartyTranslate(array('s'=>'Nhà bán lẻ'),$_smarty_tpl);?>
</option>
						                </select>
						                <span class="notice error" id="id_gender_error"> </span>
						            </p>
						        </div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>
</span>
										<input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) {?><?php echo $_POST['email'];?>
<?php }?>" class="xsm" />
										<span class="notice error" id="email_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Mật khẩu'),$_smarty_tpl);?>
</span>
										<input type="password" name="passwd" id="passwd" class="xsm" />
										<span class="notice error" id="passwd_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Tên'),$_smarty_tpl);?>
</span>
										<input type="text" id="customer_firstname" name="customer_firstname" class="xsm" />
										<span class="notice error" id="customer_firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Họ'),$_smarty_tpl);?>
</span>
										<input type="text" id="customer_lastname" name="customer_lastname" class="xsm" />
										<span class="notice error" id="customer_lastname_error"> </span>
									</p>
								</div>
							</div>
							<?php }?>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin thanh toán'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<?php if ($_smarty_tpl->tpl_vars['customer']->value->logged==true) {?>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Danh sách địa chỉ'),$_smarty_tpl);?>
</span>
										<select name="address_list" id="address_list" class="xsm">
											<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['address']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value->alias, ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php } ?>
										</select> <a class="txt_color1" href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','addresses'));?>
"><?php echo smartyTranslate(array('s'=>'Thêm địa chỉ mới'),$_smarty_tpl);?>
</a>
										<?php  $_smarty_tpl->tpl_vars['address'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['address']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['address']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->key => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
 $_smarty_tpl->tpl_vars['address']->index++;
 $_smarty_tpl->tpl_vars['address']->first = $_smarty_tpl->tpl_vars['address']->index === 0;
?>
										<p class="showAddress" id="show_address_<?php echo $_smarty_tpl->tpl_vars['address']->value->id;?>
" style="margin-left: 212px;<?php if (!$_smarty_tpl->tpl_vars['address']->first) {?>display:none;<?php }?>">
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
											<span><a class="txt_color1" href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','addresses',array('id_address'=>$_smarty_tpl->tpl_vars['address']->value->id),true));?>
"><?php echo smartyTranslate(array('s'=>'Sửa địa chỉ thanh toán'),$_smarty_tpl);?>
</a></span>
										</p>
										<?php } ?>
									</p>
								</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['customer']->value->logged==false) {?>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Tạo alias cho địa chỉ để dùng sau này.'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="alias" id="alias" value="<?php if (isset($_POST['alias'])) {?><?php echo $_POST['alias'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'My address'),$_smarty_tpl);?>
<?php }?>" />
										<span class="notice error" id="alias_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Tên'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" id="firstname" name="firstname" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['firstname'];?>
<?php }?>" />
										<span class="notice error" id="firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Họ'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" id="lastname" name="lastname" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['lastname'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['lastname']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['lastname'];?>
<?php }?>" />
										<span class="notice error" id="lastname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Địa chỉ'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="address1" id="address1" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1'])&&isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['address1'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['address1']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['address1'];?>
<?php }?>" />
										<span class="notice error" id="address1_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Mã bưu điện'),$_smarty_tpl);?>
</span>
										<input type="text" name="postcode" id="postcode" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['postcode'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['postcode']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['postcode'];?>
<?php }?>" class="xsm" />
										<span class="notice error" id="postcode_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Thành phố'),$_smarty_tpl);?>
</span>
										<input type="text" name="city" id="city" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['city'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['city']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['city'];?>
<?php }?>" class="xsm" />
										<span class="notice error" id="city_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Quốc gia'),$_smarty_tpl);?>
</span>
										<select name="id_country" id="id_country" class="xsm">
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['id_country'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['id_country']==$_smarty_tpl->tpl_vars['v']->value['id_country'])||(!isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&$_smarty_tpl->tpl_vars['sl_country']->value==$_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php } ?>
										</select>
										<span class="notice error" id="id_country_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Điện thoại'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="phone" id="phone" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone'];?>
<?php }?>" />
										<span class="notice error" id="phone_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Di động'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_smarty_tpl->tpl_vars['guestInformations']->value)&&isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'])&&$_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile']) {?><?php echo $_smarty_tpl->tpl_vars['guestInformations']->value['phone_mobile'];?>
<?php }?>" />
										<span class="notice error" id="phone_mobile_error"> </span>
									</p>
								</div>
								<?php }?>
							</div>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Thông tin thanh toán'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Thẻ tín dụng'),$_smarty_tpl);?>
</span>
										<input type="radio" name="payment_method" value="1" checked="checked" />
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'ATM'),$_smarty_tpl);?>
</span>
										<input type="radio" name="payment_method" value="2" />
									</p>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['cart_data']->value['recharge_fee']<=0) {?>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Tiền mặt'),$_smarty_tpl);?>
</span>
										<input type="radio" name="payment_method" value="3" />
									</p>
								</div>
								<?php }?>
							</div>
							<div class="header">
								<div class="div_form">
									<p class="form">
										<span class="textline"></span>
										<span class="btn_gr" name="submitAccount" id="submitAccount"><?php echo smartyTranslate(array('s'=>'Tiếp tục'),$_smarty_tpl);?>
 &gt;</span>
										<span class="notice"></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left"><?php echo smartyTranslate(array('s'=>'Thống kê hoá đơn'),$_smarty_tpl);?>
</span>
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
