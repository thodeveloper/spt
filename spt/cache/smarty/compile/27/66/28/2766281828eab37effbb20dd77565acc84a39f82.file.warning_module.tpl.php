<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 15:45:45
         compiled from "E:\wamp\www\domain\admin9973\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457453f06bb9e59551-78047098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2766281828eab37effbb20dd77565acc84a39f82' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\admin9973\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457453f06bb9e59551-78047098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f06bb9eb31f7_50852601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f06bb9eb31f7_50852601')) {function content_53f06bb9eb31f7_50852601($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
