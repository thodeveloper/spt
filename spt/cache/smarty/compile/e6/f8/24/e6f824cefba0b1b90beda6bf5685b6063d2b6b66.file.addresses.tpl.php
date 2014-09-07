<?php /* Smarty version Smarty-3.1.19, created on 2014-09-03 00:50:08
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\addresses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280645405f33d362626-47673266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f824cefba0b1b90beda6bf5685b6063d2b6b66' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\addresses.tpl',
      1 => 1409680020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280645405f33d362626-47673266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5405f33d448d97_27836878',
  'variables' => 
  array (
    'link' => 0,
    'address' => 0,
    'countries' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405f33d448d97_27836878')) {function content_5405f33d448d97_27836878($_smarty_tpl) {?><div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l" style="margin:0 auto;">
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form id="add_address" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php if (isset($_smarty_tpl->tpl_vars['address']->value->id)) {?>
							<input type="hidden" name="id_address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value->id;?>
">
							<?php }?>
							<div class="header">
								<h5><?php echo smartyTranslate(array('s'=>'Your Address'),$_smarty_tpl);?>
</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Assign an address alias for future reference.'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="alias" id="alias" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->alias)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->alias;?>
<?php }?>" />
										<span class="notice error" id="alias_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'First name'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" id="firstname" name="firstname" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->firstname)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->firstname;?>
<?php }?>" />
										<span class="notice error" id="firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Last name'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" id="lastname" name="lastname" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->lastname)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->lastname;?>
<?php }?>" />
										<span class="notice error" id="lastname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="address1" id="address1" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->address1)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->address1;?>
<?php }?>" />
										<span class="notice error" id="address1_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Zip/Postal code'),$_smarty_tpl);?>
</span>
										<input type="text" name="postcode" id="postcode" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->postcode)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->postcode;?>
<?php }?>" class="xsm" />
										<span class="notice error" id="postcode_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'City'),$_smarty_tpl);?>
</span>
										<input type="text" name="city" id="city" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->city)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->city;?>
<?php }?>" class="xsm" />
										<span class="notice error" id="city_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Country'),$_smarty_tpl);?>
</span>
										<select name="id_country" id="id_country" class="xsm">
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['address']->value->id_country)&&$_smarty_tpl->tpl_vars['address']->value->id_country==$_smarty_tpl->tpl_vars['v']->value['id_country']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
											<?php } ?>
										</select>
										<span class="notice error" id="id_country_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Home phone'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="phone" id="phone" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->phone)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->phone;?>
<?php }?>" />
										<span class="notice error" id="phone_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><?php echo smartyTranslate(array('s'=>'Mobile phone'),$_smarty_tpl);?>
</span>
										<input type="text" class="xsm" name="phone_mobile" id="phone_mobile" value="<?php if (isset($_smarty_tpl->tpl_vars['address']->value->phone_mobile)) {?><?php echo $_smarty_tpl->tpl_vars['address']->value->phone_mobile;?>
<?php }?>" />
										<span class="notice error" id="phone_mobile_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"></span>
										<span class="btn_gr" name="submitAddress" id="submitAddress">Save ></span>
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
	</div>
</div><?php }} ?>
