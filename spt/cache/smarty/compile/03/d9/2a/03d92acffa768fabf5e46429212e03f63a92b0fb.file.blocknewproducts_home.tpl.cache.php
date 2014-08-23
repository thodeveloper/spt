<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 14:53:37
         compiled from "E:\wamp\www\domain\modules\blocknewproducts\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672253f05f814453b7-87653168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d92acffa768fabf5e46429212e03f63a92b0fb' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\blocknewproducts\\blocknewproducts_home.tpl',
      1 => 1406792516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672253f05f814453b7-87653168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f05f814536c9_15715753',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f05f814536c9_15715753')) {function content_53f05f814536c9_15715753($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane active','id'=>'blocknewproducts'), 0);?>
<?php }} ?>
