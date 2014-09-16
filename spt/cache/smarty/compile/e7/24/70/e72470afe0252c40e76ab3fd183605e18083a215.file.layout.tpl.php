<?php /* Smarty version Smarty-3.1.19, created on 2014-09-15 09:44:17
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21436541652812f55a9-09371314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72470afe0252c40e76ab3fd183605e18083a215' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\themes\\firefly\\layout.tpl',
      1 => 1408778852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21436541652812f55a9-09371314',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5416528136a133_75949235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416528136a133_75949235')) {function content_5416528136a133_75949235($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)) {?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>
