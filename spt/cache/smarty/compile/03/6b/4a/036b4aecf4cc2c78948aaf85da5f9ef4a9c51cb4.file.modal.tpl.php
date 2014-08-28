<?php /* Smarty version Smarty-3.1.19, created on 2014-08-28 10:21:50
         compiled from "E:\wamp\www\spt\spt\spt\admin9973\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3017953fea04ed4d705-34860749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '036b4aecf4cc2c78948aaf85da5f9ef4a9c51cb4' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\admin9973\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1408778849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3017953fea04ed4d705-34860749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fea04ed53d88_83295826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fea04ed53d88_83295826')) {function content_53fea04ed53d88_83295826($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
