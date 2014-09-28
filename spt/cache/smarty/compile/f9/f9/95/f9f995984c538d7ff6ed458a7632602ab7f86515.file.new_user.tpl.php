<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:18:56
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\modules\popup\new_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1277954231e3d0b7253-17309710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f995984c538d7ff6ed458a7632602ab7f86515' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\themes\\firefly\\modules\\popup\\new_user.tpl',
      1 => 1411946331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1277954231e3d0b7253-17309710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54231e3d20cff3_22304003',
  'variables' => 
  array (
    'genders' => 0,
    'gender' => 0,
    'days' => 0,
    'day' => 0,
    'months' => 0,
    'k' => 0,
    'month' => 0,
    'years' => 0,
    'year' => 0,
    'guestInformations' => 0,
    'countries' => 0,
    'v' => 0,
    'sl_country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54231e3d20cff3_22304003')) {function content_54231e3d20cff3_22304003($_smarty_tpl) {?><div id="window_user" style="display: none;">
	<form name="register_account" id="register_account">
	<input type="hidden" id="group_id" name="group_id" value="1" />
	<input type="hidden" name="is_new_customer" value="1">
	<input type="hidden" name="alias" value="<?php echo smartyTranslate(array('s'=>'Địa chỉ của tôi'),$_smarty_tpl);?>
">
	<div class="div_pop">
		<p class="error" id="header_reg_error"> </p>
        <div class="div_form">
            <p class="form">
				<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Danh xưng'),$_smarty_tpl);?>
</span>
				<select name="id_gender" id="id_gender" class="xsm">
					<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['gender']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</option>
                    <?php } ?>
                </select>
                <span class="notice error" id="id_gender_error"> </span>
            </p>
        </div>
        <div class="div_form">
			<p class="form">
				<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Tên'),$_smarty_tpl);?>
</span>
				<input type="text" id="firstname" name="firstname" class="xsm" />
				<span class="notice error" id="firstname_error"> </span>
			</p>
		</div>
		<div class="div_form">
			<p class="form">
				<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Họ'),$_smarty_tpl);?>
</span>
				<input type="text" id="lastname" name="lastname" class="xsm" />
				<span class="notice error" id="lastname_error"> </span>
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
                <span class="textline"><?php echo smartyTranslate(array('s'=>'Sinh nhật'),$_smarty_tpl);?>
:</span>
                <select id="days" name="days" class="xsm small first">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
&nbsp;&nbsp;</option>
					<?php } ?>
				</select>
				
                <select id="months" name="months" class="xsm small">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['month']->key;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl);?>
&nbsp;</option>
					<?php } ?>
				</select>
				<select id="years" name="years" class="xsm small">
					<option value="">-</option>
					<?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&nbsp;&nbsp;</option>
					<?php } ?>
				</select>
                <span class="notice error" id="birthday_error"> </span>
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
				<div class="div_form">
					<p class="form">
						<span class="textline"><?php echo smartyTranslate(array('s'=>'Đăng ký tin thư!'),$_smarty_tpl);?>
</span>
						<input type="checkbox" name="newsletter" id="newsletter" value="1" style="width:120px;" />
						<span class="notice error" id="newsletter_error"> </span>
					</p>
				</div>
            </p>
        </div>
    </div>
    <p class="pop"><?php echo smartyTranslate(array('s'=>'Bằng cách nhấn váo "Tạo tài khoản", bạn đã đồng ý điều khoản và điều kiện như sau'),$_smarty_tpl);?>
: <a class="txt_color1"><?php echo smartyTranslate(array('s'=>'Điều khoản và chính sách'),$_smarty_tpl);?>
</a></p>
    <p class="div_btn">
    	<button class="btn_gr" name="headerSubmitAccount" id="headerSubmitAccount"><?php echo smartyTranslate(array('s'=>'Tạo tài khoản'),$_smarty_tpl);?>
</button>
    </p>
    </form>
</div><?php }} ?>
