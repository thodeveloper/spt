<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 14:53:35
         compiled from "E:\wamp\www\domain\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3108153f05f7f220d11-20235951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e341e40d4806684d165a2b18fe033515249da224' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1406792550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3108153f05f7f220d11-20235951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f05f7f277c26_37526301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f05f7f277c26_37526301')) {function content_53f05f7f277c26_37526301($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['loop'];?>
;
     var homeslider_width=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['width'];?>
;
     var homeslider_speed=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
     var homeslider_pause=<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;
</script>
<?php }?><?php }} ?>
