<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:01:50
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145055423b610dfd420-14092787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e913f52de71fc378c8da521d3df47607e63dc8e' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\products.tpl',
      1 => 1411945138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145055423b610dfd420-14092787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423b610e0f9b1_43206188',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423b610e0f9b1_43206188')) {function content_5423b610e0f9b1_43206188($_smarty_tpl) {?><div class="k-content child_panel">
	<div id="organizer">
		<ul id="panelbar">
			<li class="k-state-active">
				<span class="k-image ico_show"></span>
				<span class="icon_domain"></span>
				<?php echo smartyTranslate(array('s'=>'Tên miền'),$_smarty_tpl);?>

				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid" style=""></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<span class="k-image ico_show"></span>
				<span class="icon_webhosting"></span>
				<?php echo smartyTranslate(array('s'=>'Máy chủ web'),$_smarty_tpl);?>

				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid_hosting" style=""></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<span class="k-image ico_show"></span>
				<span class="icon_email"></span>
				<?php echo smartyTranslate(array('s'=>'Email'),$_smarty_tpl);?>

				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid_email" style=""></div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<span class="k-image ico_show"></span>
				<span class="icon_webbuild"></span>
				<?php echo smartyTranslate(array('s'=>'VPS'),$_smarty_tpl);?>

				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid_vps" style=""></div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div id="bottom"></div>
	</div>
</div><?php }} ?>
