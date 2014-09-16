<?php /*%%SmartyHeaderCode:102295417369b9ba363-71748401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '517ca07dee42ad56e6db121d288e4dd946cc590d' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blocksupplier\\blocksupplier.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102295417369b9ba363-71748401',
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
  'unifunc' => 'content_5417369bad5c23_88879671',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369bad5c23_88879671')) {function content_5417369bad5c23_88879671($_smarty_tpl) {?>
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
