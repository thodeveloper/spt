<?php /* Smarty version Smarty-3.1.19, created on 2014-08-23 16:19:19
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112153f85c9779dbd6-94235171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '112153f85c9779dbd6-94235171',
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
  'unifunc' => 'content_53f85c97811ea6_90692493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f85c97811ea6_90692493')) {function content_53f85c97811ea6_90692493($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)) {?><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {?><?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>
<?php }?><?php }} ?>
