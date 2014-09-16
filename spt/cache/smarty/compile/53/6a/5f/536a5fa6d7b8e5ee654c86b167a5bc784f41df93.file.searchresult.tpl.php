<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 01:57:31
         compiled from "E:\wamp\www\spt\spt\spt\modules\smartblog\views\templates\front\searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:229225417369bc43bf0-38518943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '536a5fa6d7b8e5ee654c86b167a5bc784f41df93' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\smartblog\\views\\templates\\front\\searchresult.tpl',
      1 => 1410500768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229225417369bc43bf0-38518943',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title_category' => 0,
    'navigationPipe' => 0,
    'postcategory' => 0,
    'smartcustomcss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417369bca45a9_00848056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369bca45a9_00848056')) {function content_5417369bca45a9_00848056($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'All Blog News','mod'=>'smartblog'),$_smarty_tpl);?>
</a>
     <?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?>
    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
 
    <?php if ($_smarty_tpl->tpl_vars['postcategory']->value=='') {?>
        <?php echo $_smarty_tpl->getSubTemplate ("./search-not-found.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postcategory'=>$_smarty_tpl->tpl_vars['postcategory']->value), 0);?>

    <?php } else { ?>
    <div id="smartblogcat" class="block">
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postcategory']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate ("./category_loop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postcategory'=>$_smarty_tpl->tpl_vars['postcategory']->value), 0);?>

<?php } ?>
    </div>
 <?php }?>
 <?php if (isset($_smarty_tpl->tpl_vars['smartcustomcss']->value)) {?>
    <style>
        <?php echo $_smarty_tpl->tpl_vars['smartcustomcss']->value;?>

    </style>
<?php }?>

<?php }} ?>
