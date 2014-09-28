<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:22:41
         compiled from "E:\wamp\www\spt\spt\spt\admin9973\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2833154289841b0f7a0-38377120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc62c0e9352504489b47057f679c831a91f16bcc' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\admin9973\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1408778849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2833154289841b0f7a0-38377120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54289841b305e1_73744092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54289841b305e1_73744092')) {function content_54289841b305e1_73744092($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
