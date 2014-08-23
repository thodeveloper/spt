<?php /* Smarty version Smarty-3.1.19, created on 2014-08-20 14:21:50
         compiled from "E:\wamp\www\domain\admin9973\themes\default\template\controllers\manufacturers\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1912553f44c8eb51bf0-26109169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '751f36b9033d1256811fba76e663af8d2c0aa900' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\admin9973\\themes\\default\\template\\controllers\\manufacturers\\helpers\\view\\view.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
    '6ca1572de4f0f0614e4632c8d3beeb7a4e6cebcb' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\admin9973\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1406792456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912553f44c8eb51bf0-26109169',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f44c8ee08d30_68728782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f44c8ee08d30_68728782')) {function content_53f44c8ee08d30_68728782($_smarty_tpl) {?>

<div class="leadin"></div>


<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['addresses']->value);?>
</span></h3>
	<?php if (!count($_smarty_tpl->tpl_vars['addresses']->value)) {?>
		<?php echo smartyTranslate(array('s'=>'No address has been found for this manufacturer.'),$_smarty_tpl);?>

	<?php } else { ?>
		<?php  $_smarty_tpl->tpl_vars['addresse'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['addresse']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['addresses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['addresse']->key => $_smarty_tpl->tpl_vars['addresse']->value) {
$_smarty_tpl->tpl_vars['addresse']->_loop = true;
?>
		<div class="panel">
			<div class="panel-heading">
				<?php echo $_smarty_tpl->tpl_vars['addresse']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['lastname'];?>

				<div class="pull-right">
					<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminManufacturers'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['addresse']->value['id_address'];?>
&amp;editaddresses=1">
						<i class="icon-edit"></i>
						<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>
</a>
				</div>
			</div>

			<table class="table">
				<tbody>
					<tr>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['address1'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['address2']) {?><?php echo $_smarty_tpl->tpl_vars['addresse']->value['address2'];?>
<br /><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['addresse']->value['postcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['addresse']->value['city'];?>
<br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['state']) {?><?php echo $_smarty_tpl->tpl_vars['addresse']->value['state'];?>
<br /><?php }?>
							<b><?php echo $_smarty_tpl->tpl_vars['addresse']->value['country'];?>
</b><br />
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone']) {?><?php echo $_smarty_tpl->tpl_vars['addresse']->value['phone'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['phone_mobile']) {?><?php echo $_smarty_tpl->tpl_vars['addresse']->value['phone_mobile'];?>
<br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['addresse']->value['other']) {?><div ><br />
								<i><?php echo nl2br($_smarty_tpl->tpl_vars['addresse']->value['other']);?>
</i></div>
							<?php }?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?php } ?>
	<?php }?>
</div>
<div class="panel">
	<h3><?php echo smartyTranslate(array('s'=>'Products'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['products']->value);?>
</span></h3>

	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<?php if (!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()) {?>
			<div class="panel">
				<div class="panel-heading">
					<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					<div class="pull-right">
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i> <?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

						</a>
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;deleteproduct&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Delete item #'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i> <?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

						</a>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->reference)) {?><th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Ref:'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->ean13)) {?><th><span class="title_box"><?php echo smartyTranslate(array('s'=>'EAN13:'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->ean13;?>
</th><?php }?>
							<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->upc)) {?><th><span class="title_box"><?php echo smartyTranslate(array('s'=>'UPC:'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->upc;?>
</th><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value) {?><th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Qty:'),$_smarty_tpl);?>
</span> <?php echo $_smarty_tpl->tpl_vars['product']->value->quantity;?>
</th><?php }?>
						</tr>
					</thead>
				</table>
			</div>
		<?php } else { ?>
			<div class="panel">
				<div class="panel-heading">

					<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
">
						<?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

					</a>
					<div class="pull-right">
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;updateproduct&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
" class="btn btn-default btn-sm">
							<i class="icon-edit"></i>
							<?php echo smartyTranslate(array('s'=>'Edit'),$_smarty_tpl);?>

						</a>
						<a href="?tab=AdminProducts&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
&amp;deleteproduct&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminProducts'),$_smarty_tpl);?>
" class="btn btn-default btn-sm" onclick="return confirm('<?php echo smartyTranslate(array('s'=>'Delete item #'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
 ?');">
							<i class="icon-trash"></i>
							<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>

						</a>
					</div>

				</div>

				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Attribute name'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Reference'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'EAN13'),$_smarty_tpl);?>
</span></th>
							<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'UPC'),$_smarty_tpl);?>
</span></th>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value&&$_smarty_tpl->tpl_vars['shopContext']->value!=Shop::CONTEXT_ALL) {?>
								<th><span class="title_box"><?php echo smartyTranslate(array('s'=>'Available Quantity'),$_smarty_tpl);?>
</span></th>
							<?php }?>
						</tr>
					</thead>
					<tbody>
					<?php  $_smarty_tpl->tpl_vars['product_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->combination; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_attribute']->key => $_smarty_tpl->tpl_vars['product_attribute']->value) {
$_smarty_tpl->tpl_vars['product_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product_attribute']->value = $_smarty_tpl->tpl_vars['product_attribute']->key;
?>
						<tr <?php if ($_smarty_tpl->tpl_vars['id_product_attribute']->value%2) {?>class="alt_row"<?php }?> >
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['attributes'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['reference'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['ean13'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['upc'];?>
</td>
							<?php if ($_smarty_tpl->tpl_vars['stock_management']->value&&$_smarty_tpl->tpl_vars['shopContext']->value!=Shop::CONTEXT_ALL) {?>
								<td class="right"><?php echo $_smarty_tpl->tpl_vars['product_attribute']->value['quantity'];?>
</td>
							<?php }?>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		<?php }?>
	<?php } ?>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
