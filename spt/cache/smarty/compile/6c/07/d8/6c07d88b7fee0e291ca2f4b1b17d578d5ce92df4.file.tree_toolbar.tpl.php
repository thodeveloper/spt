<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:22:41
         compiled from "E:\wamp\www\spt\spt\spt\admin9973\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1868254289841a8f293-35004722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c07d88b7fee0e291ca2f4b1b17d578d5ce92df4' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\admin9973\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1408778849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1868254289841a8f293-35004722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54289841ad6751_50449012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54289841ad6751_50449012')) {function content_54289841ad6751_50449012($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
