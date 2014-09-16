<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 02:45:45
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffnews\views\templates\front\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2008154174010dd7175-83508962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65c4a64dba3b0b1f9524b85f819f508e2cbdecd' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffnews\\views\\templates\\front\\detail.tpl',
      1 => 1410810324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2008154174010dd7175-83508962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54174010e25164_93253185',
  'variables' => 
  array (
    'img_dir' => 0,
    'post' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54174010e25164_93253185')) {function content_54174010e25164_93253185($_smarty_tpl) {?><div class="div_sub_menu">
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
				<div class="detail_new">
					<h3><?php echo $_smarty_tpl->tpl_vars['post']->value["meta_title"];?>
</h3>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['post']->value['short_description'];?>

					</p>
					<?php if ($_smarty_tpl->tpl_vars['post']->value['post_img']!="no") {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" width="181" height="129">
					<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

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
