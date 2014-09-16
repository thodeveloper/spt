<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 01:57:31
         compiled from "E:\wamp\www\spt\spt\spt\modules\loyalty\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126015417369b4e5164-07996176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c5dc715fed22b4b113334de9ea08261cc255f04' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\loyalty\\views\\templates\\hook\\my-account.tpl',
      1 => 1410514746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126015417369b4e5164-07996176',
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
  'unifunc' => 'content_5417369b50d9c2_01860354',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369b50d9c2_01860354')) {function content_5417369b50d9c2_01860354($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/loyalty.gif" alt="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" class="icon" /> <?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
