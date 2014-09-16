<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 01:57:31
         compiled from "E:\wamp\www\spt\spt\spt\modules\smartblog\views\templates\front\search-not-found.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235475417369bcc2739-70835774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8989094fbef9e5f955979c2757f9f68b3dacd9ed' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\smartblog\\views\\templates\\front\\search-not-found.tpl',
      1 => 1410500768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235475417369bcc2739-70835774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smartsearch' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417369bcf50d6_09273226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369bcf50d6_09273226')) {function content_5417369bcf50d6_09273226($_smarty_tpl) {?><div id="pagenotfound" class="row">
												<div class="center_column col-xs-12 col-sm-12" id="center_column">
	<div class="pagenotfound">
	
	<h1><?php echo smartyTranslate(array('s'=>"Sorry, but nothing matched your search terms.",'mod'=>"smartblog"),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>"Please try again with some different keywords.",'mod'=>"smartblog"),$_smarty_tpl);?>

	</p>

	
	<form class="std" method="post" action="<?php echo smartblog::GetSmartBlogLink('smartblog_search');?>
">
		<fieldset>
			<div>
				
				<input type="hidden" value="0" name="smartblogaction">
				<input type="text" class="form-control grey" value="<?php echo $_smarty_tpl->tpl_vars['smartsearch']->value;?>
" name="smartsearch" id="search_query">
                <button class="btn btn-default button button-small" value="OK" name="smartblogsubmit" type="submit"><span><?php echo smartyTranslate(array('s'=>"Ok",'mod'=>"smartblog"),$_smarty_tpl);?>
</span></button>
			</div>
		</fieldset>
	</form>

	<div class="buttons"><a title="Home" href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
" class="btn btn-default button button-medium"><span><i class="icon-chevron-left left"></i><?php echo smartyTranslate(array('s'=>"Home page",'mod'=>"smartblog"),$_smarty_tpl);?>
</span></a></div>
</div>
					</div>
										</div><?php }} ?>
