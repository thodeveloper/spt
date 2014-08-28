<?php /* Smarty version Smarty-3.1.19, created on 2014-08-28 10:22:41
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319253fea081100af0-70767874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe9b4792f7f3f0641290e794a4a65ed016b37af' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\settings.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319253fea081100af0-70767874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fea08113d652_31930398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fea08113d652_31930398')) {function content_53fea08113d652_31930398($_smarty_tpl) {?><div class="k-content child_panel child_panel3">
	<p class="note">
		<i class="fa fa-exclamation-triangle"></i><span>Warning</span><i>*</i><span>Required letter</span>
	</p>
	<div class="box_setting">
		<div class="header">
			<h5>Change Profile</h5>
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
					<span class="btn_gr">Save</span>
					<span class="notice"></span>
				</p>
			</div>
		</div>
		<div class="header">
			<h5>Change Password</h5>
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
					<span class="btn_gr">Save</span>
					<span class="notice"></span>
				</p>
			</div>
		</div>
		<div class="header">
			<h5>Change Email Login</h5>
		</div>
		<div class="div_pop">
			<div class="div_form">
				<p class="form">
					<span class="text">Current Email Login:</span>
					<span class="text txt-left">truong.yuna@gmail.com</span>
					<span class="notice error"></span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text">*Current Password:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text">*Enter New Email Login:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"></span>
					<span class="text txt-left">Check Availability</span>
					<span class="notice"></span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text">*Confirm New Email Login:</span>
					<input type="text" class="xsm" />
					<span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
				</p>
			</div>
			<div class="div_form">
				<p class="form">
					<span class="text"></span>
					<span class="btn_gr">Save</span>
					<span class="notice"></span>
				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
