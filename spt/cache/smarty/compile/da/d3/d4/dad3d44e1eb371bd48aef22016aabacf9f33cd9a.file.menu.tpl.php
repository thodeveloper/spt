<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 03:11:45
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\modules\popup\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1690541652814cd730-59522337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad3d44e1eb371bd48aef22016aabacf9f33cd9a' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\themes\\firefly\\modules\\popup\\menu.tpl',
      1 => 1410811899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690541652814cd730-59522337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5416528152bda1_03205351',
  'variables' => 
  array (
    'base_dir' => 0,
    'shop_name' => 0,
    'img_dir' => 0,
    'categories' => 0,
    'cate_id' => 0,
    'link' => 0,
    'category' => 0,
    'sub_cate_id' => 0,
    'sub_category' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416528152bda1_03205351')) {function content_5416528152bda1_03205351($_smarty_tpl) {?><div class="div_headermenu">
	<div class="article">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo.png" width="242" /></a>
        <div class="div_menu">
            <ul id="menu">
            	<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['cate_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['cate_id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                <li><a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffproduct','main',array('id_cate'=>$_smarty_tpl->tpl_vars['cate_id']->value),true));?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                	<span class="arrow"> </span>
                	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
                	<ul>
                        <li>
                            <div class="div_content_menu">
                            	<?php  $_smarty_tpl->tpl_vars['sub_category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sub_category']->_loop = false;
 $_smarty_tpl->tpl_vars['sub_cate_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sub_category']->key => $_smarty_tpl->tpl_vars['sub_category']->value) {
$_smarty_tpl->tpl_vars['sub_category']->_loop = true;
 $_smarty_tpl->tpl_vars['sub_cate_id']->value = $_smarty_tpl->tpl_vars['sub_category']->key;
?>
                            	<div class="col">
                            		<h1><a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffproduct','main',array('id_cate'=>$_smarty_tpl->tpl_vars['sub_cate_id']->value),true));?>
"><?php echo $_smarty_tpl->tpl_vars['sub_category']->value['name'];?>
</a></h1>
                                </div>
                                <?php } ?>
                            </div>
                        </li>
                    </ul>
                    <?php }?>
                </li>
                <?php } ?>
                <li><a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffnews','home'));?>
">News</a>
                	<span class="arrow"> </span>
                </li>
            </ul>
        </div>
    </div>
</div><?php }} ?>
