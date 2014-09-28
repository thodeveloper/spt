<?php /* Smarty version Smarty-3.1.19, created on 2014-09-25 13:28:17
         compiled from "E:\wamp\www\spt\spt\spt\modules\blockwishlist\blockwishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295945423b601be4a96-69980688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2eb638e16361aacce373e9af695dc8160d853b6' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blockwishlist\\blockwishlist_top.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295945423b601be4a96-69980688',
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
  'unifunc' => 'content_5423b601c49a54_88243077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423b601c49a54_88243077')) {function content_5423b601c49a54_88243077($_smarty_tpl) {?>

<script type="text/javascript">
	var isLoggedWishlist = <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>true<?php } else { ?>false<?php }?>;
	var mywishlist_url="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
";
</script><?php }} ?>
