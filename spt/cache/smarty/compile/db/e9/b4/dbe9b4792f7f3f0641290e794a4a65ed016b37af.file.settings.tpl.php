<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:04:05
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213405423b610eb6314-84552009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe9b4792f7f3f0641290e794a4a65ed016b37af' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\settings.tpl',
      1 => 1411945349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213405423b610eb6314-84552009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423b610ec7262_62319032',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423b610ec7262_62319032')) {function content_5423b610ec7262_62319032($_smarty_tpl) {?><div class="k-content child_panel child_panel3">
	<p class="note">
		<i class="fa fa-exclamation-triangle"></i><span><?php echo smartyTranslate(array('s'=>'Chú ý'),$_smarty_tpl);?>
</span><i>*</i><span><?php echo smartyTranslate(array('s'=>'trường bắt buộc'),$_smarty_tpl);?>
</span>
	</p>
	<div class="box_setting">
		<div class="header">
			<h5><?php echo smartyTranslate(array('s'=>'Thay đổi thông tin cá nhân'),$_smarty_tpl);?>
</h5>
		</div>
		<div class="div_pop">
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Current Password:</span>
					<input type="text" class="xsm" />
					<span class="notice error"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> First Name:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Last Name:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Birthday:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"> Gender:</span>
					<select class="xsm ">
						<option>Male</option>
						<option>Female</option>
					</select>
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"> Nationality:</span>
					<select class="xsm ">
						<option>Local Vietnamese</option>
						<option>Other country</option>
					</select>
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Residence:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"></span>
					<span class="btn_gr"><?php echo smartyTranslate(array('s'=>'Lưu'),$_smarty_tpl);?>
</span>
					<span class="notice"></span>
				</p>
			</div>
		</div>
		<div class="header">
			<h5><?php echo smartyTranslate(array('s'=>'Thay đổi mật khẩu'),$_smarty_tpl);?>
</h5>
		</div>
		<div class="div_pop">
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Change Password:</span>
					<input type="text" class="xsm" />
					<span class="notice error"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Current Password:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Enter New Password:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"></span>
					<span class="text txt-left">4 to 20 characters</span>
					<span class="notice"></span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"><i>*</i> Confirm New Password:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"></span>
					<span class="btn_gr"><?php echo smartyTranslate(array('s'=>'Lưu'),$_smarty_tpl);?>
</span>
					<span class="notice"></span>
				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
