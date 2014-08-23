<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 14:53:36
         compiled from "E:\wamp\www\domain\modules\blockwishlist\blockwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2525953f05f801e8cc0-83834987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '201d2cc76722ab057e2924b0901147df61b6f97d' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1408209326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2525953f05f801e8cc0-83834987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f05f80204f87_17262168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f05f80204f87_17262168')) {function content_53f05f80204f87_17262168($_smarty_tpl) {?>

<script type="text/javascript">
	var isLoggedWishlist = <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>true<?php } else { ?>false<?php }?>;
	var mywishlist_url="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
";
</script><?php }} ?>
