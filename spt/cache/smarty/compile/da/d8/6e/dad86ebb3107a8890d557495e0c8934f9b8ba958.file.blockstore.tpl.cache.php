<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 01:57:31
         compiled from "E:\wamp\www\spt\spt\spt\modules\blockstore\blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207805417369b8a75f2-84733184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad86ebb3107a8890d557495e0c8934f9b8ba958' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blockstore\\blockstore.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207805417369b8a75f2-84733184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
    'store_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417369b91a2c2_01925438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369b91a2c2_01925438')) {function content_5417369b91a2c2_01925438($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<h4 class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>

		</a>
	</h4>
	<div class="block_content blockstore">
		<p class="store_image">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
">
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['module_dir']->value).((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['store_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" />
			</a>
		</p>
		<?php if (!empty($_smarty_tpl->tpl_vars['store_text']->value)) {?>
        <p class="store-description">
        	<?php echo $_smarty_tpl->tpl_vars['store_text']->value;?>

        </p>
        <?php }?>
		<p>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
">
				&raquo; <?php echo smartyTranslate(array('s'=>'Discover our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>

			</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>
