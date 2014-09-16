<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 01:57:31
         compiled from "E:\wamp\www\spt\spt\spt\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258565417369b47dee7-40616136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f9df4be8db3617f382b5b56bde19f6371df5f49' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blockwishlist\\my-account.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258565417369b47dee7-40616136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417369b4ad782_66636326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369b4ad782_66636326')) {function content_5417369b4ad782_66636326($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/gift.gif" alt="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
" class="icon" />
		<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
