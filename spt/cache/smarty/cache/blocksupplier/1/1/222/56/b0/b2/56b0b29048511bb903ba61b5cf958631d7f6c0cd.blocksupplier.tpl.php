<?php /*%%SmartyHeaderCode:1993753f06ca33bf934-52337563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56b0b29048511bb903ba61b5cf958631d7f6c0cd' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1406792530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1993753f06ca33bf934-52337563',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f06ca34ae147_15396601',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f06ca34ae147_15396601')) {function content_53f06ca34ae147_15396601($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block"><a href="http://demo.fireflyinnov.com/en/supplier" title="Suppliers">Suppliers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="last_item">
            <a href="http://demo.fireflyinnov.com/en/1__fashion-supplier" title="More about Fashion Supplier">Fashion Supplier</a>		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://demo.fireflyinnov.com/en/1__fashion-supplier">Fashion Supplier</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
