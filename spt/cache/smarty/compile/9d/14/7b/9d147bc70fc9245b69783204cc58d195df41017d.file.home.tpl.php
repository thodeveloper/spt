<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 03:06:23
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffnews\views\templates\front\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251295417371617e912-37426141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d147bc70fc9245b69783204cc58d195df41017d' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffnews\\views\\templates\\front\\home.tpl',
      1 => 1410811581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251295417371617e912-37426141',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541737161c9fb2_96282657',
  'variables' => 
  array (
    'img_dir' => 0,
    'posts' => 0,
    'post' => 0,
    'modules_dir' => 0,
    'link' => 0,
    'start' => 0,
    'end' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541737161c9fb2_96282657')) {function content_541737161c9fb2_96282657($_smarty_tpl) {?><div class="div_sub_menu">
	<div class="sub_menu">
		<a>Produce</a>
		<span class="line"></span>
		<a>Web Hosting</a>
	</div>
</div>
<div class="body body_news">
	<div class="article">
		<div class="col_l left">
			<div class="line">
				<span>NEWS</span>
			</div>
			<div class="box">
				<img class="banner_ads" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
banner_ad.png" width="177" />
				<ul>
					<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['post']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['post']->index++;
 $_smarty_tpl->tpl_vars['post']->first = $_smarty_tpl->tpl_vars['post']->index === 0;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['post']->first) {?>class="first"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['post']->value['post_img']!="no") {?>
						<div class="div_img left">
	                        <img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-single-default.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" width="181" height="129">
						</div>
						<?php }?>
						<div class="div_content left">
							<p>
								<a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffnews','detail',array('id_news'=>$_smarty_tpl->tpl_vars['post']->value['id_post']),true));?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a>
							</p>
							<p>
								<?php echo $_smarty_tpl->tpl_vars['post']->value['short_description'];?>

							</p>
						</div>
						<a class="btn" href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffnews','detail',array('id_news'=>$_smarty_tpl->tpl_vars['post']->value['id_post']),true));?>
">Read more</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="title_page bottom">
				<span class="text"><?php echo $_smarty_tpl->tpl_vars['start']->value+1;?>
 - <?php echo $_smarty_tpl->tpl_vars['end']->value;?>
 of <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 results</span>
				<div class="text_show_all">
					<a href="<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffnews','home',array('start'=>$_smarty_tpl->tpl_vars['end']->value),true));?>
">Next page</a>
				</div>
			</div>
		</div>
		<div class="col_r right">
			<a class="ads"> <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Web-New_03.png" width="320" /> </a>
			<a class="ads"> <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Web-New_03.png" width="320" /> </a>
		</div>
	</div>
</div><?php }} ?>
