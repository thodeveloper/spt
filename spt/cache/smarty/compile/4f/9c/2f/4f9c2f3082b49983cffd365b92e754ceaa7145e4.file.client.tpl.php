<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:01:50
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\client.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322075423b610e88985-41808822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f9c2f3082b49983cffd365b92e754ceaa7145e4' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\client.tpl',
      1 => 1411945228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322075423b610e88985-41808822',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423b610e9f355_98214148',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423b610e9f355_98214148')) {function content_5423b610e9f355_98214148($_smarty_tpl) {?><div class="k-content child_panel child_panel1">
	<div id="organizer1">
		<ul id="panelbar1">
			<li class="k-state-active">
				<?php echo smartyTranslate(array('s'=>'Danh sách khách hàng'),$_smarty_tpl);?>

				<span class="btn_gr right" id="undo_user"><?php echo smartyTranslate(array('s'=>'Thêm khách hàng'),$_smarty_tpl);?>
</span>
				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid1" style=""> </div>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div id="bottom"> </div>
	</div>
</div><?php }} ?>
