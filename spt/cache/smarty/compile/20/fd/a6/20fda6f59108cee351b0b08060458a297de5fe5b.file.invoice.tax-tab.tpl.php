<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 21:15:10
         compiled from "E:\wamp\www\spt\spt\spt\pdf\\invoice.tax-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7611542817eea01fe0-41447357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20fda6f59108cee351b0b08060458a297de5fe5b' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\pdf\\\\invoice.tax-tab.tpl',
      1 => 1408778851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7611542817eea01fe0-41447357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tax_exempt' => 0,
    'product_tax_breakdown' => 0,
    'ecotax_tax_breakdown' => 0,
    'use_one_after_another_method' => 0,
    'pdf_product_tax_written' => 0,
    'rate' => 0,
    'is_order_slip' => 0,
    'order' => 0,
    'product_tax_infos' => 0,
    'shipping_tax_breakdown' => 0,
    'pdf_shipping_tax_written' => 0,
    'shipping_tax_infos' => 0,
    'ecotax_tax_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542817eecf94c7_97946587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542817eecf94c7_97946587')) {function content_542817eecf94c7_97946587($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'E:\\wamp\\www\\spt\\spt\\spt\\tools\\smarty\\plugins\\function.cycle.php';
?>

<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value||((isset($_smarty_tpl->tpl_vars['product_tax_breakdown']->value)&&count($_smarty_tpl->tpl_vars['product_tax_breakdown']->value)>0)||(isset($_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value)&&count($_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value)>0))) {?>
<!--  TAX DETAILS -->
<table style="width: 100%">
	<tr>
		<td style="width: 20%"></td>
		<td style="width: 80%">
			<?php if ($_smarty_tpl->tpl_vars['tax_exempt']->value) {?>
				<?php echo smartyTranslate(array('s'=>'Exempt of VAT according section 259B of the General Tax Code.','pdf'=>'true'),$_smarty_tpl);?>

			<?php } else { ?>
			<table style="width: 70%" >
				<tr style="line-height:5px;">
					<td style="text-align: left; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 30%"><?php echo smartyTranslate(array('s'=>'Tax Detail','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Tax Rate','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value) {?>
						<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax Excl','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<?php }?>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'Total Tax','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>

				<?php if (isset($_smarty_tpl->tpl_vars['product_tax_breakdown']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['product_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_tax_infos']->_loop = false;
 $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_tax_infos']->key => $_smarty_tpl->tpl_vars['product_tax_infos']->value) {
$_smarty_tpl->tpl_vars['product_tax_infos']->_loop = true;
 $_smarty_tpl->tpl_vars['rate']->value = $_smarty_tpl->tpl_vars['product_tax_infos']->key;
?>
					<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#DDD'),$_smarty_tpl);?>
;">
					 <td style="width: 30%">
						<?php if (!isset($_smarty_tpl->tpl_vars['pdf_product_tax_written']->value)) {?>
							<?php echo smartyTranslate(array('s'=>'Products','pdf'=>'true'),$_smarty_tpl);?>

							<?php $_smarty_tpl->tpl_vars['pdf_product_tax_written'] = new Smarty_variable(1, null, 0);?>
						<?php }?>
					</td>
					 <td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value) {?>
					 <td style="width: 20%; text-align: right;">
						 <?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_price_tax_excl']),$_smarty_tpl);?>

					 </td>
					<?php }?>
					 <td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['product_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
					</tr>
					<?php } ?>
					<?php }?>

					<?php if (isset($_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['shipping_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_tax_infos']->key => $_smarty_tpl->tpl_vars['shipping_tax_infos']->value) {
$_smarty_tpl->tpl_vars['shipping_tax_infos']->_loop = true;
?>
					<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#DDD'),$_smarty_tpl);?>
;">
					 <td style="width: 30%">
						<?php if (!isset($_smarty_tpl->tpl_vars['pdf_shipping_tax_written']->value)) {?>
							<?php echo smartyTranslate(array('s'=>'Shipping','pdf'=>'true'),$_smarty_tpl);?>

							<?php $_smarty_tpl->tpl_vars['pdf_shipping_tax_written'] = new Smarty_variable(1, null, 0);?>
						<?php }?>
					 </td>
					 <td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['shipping_tax_infos']->value['rate'];?>
 %</td>
					<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value) {?>
						 <td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_tax_excl']),$_smarty_tpl);?>
</td>
					<?php }?>
					 <td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['shipping_tax_infos']->value['total_amount']),$_smarty_tpl);?>
</td>
					</tr>
					<?php } ?>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['ecotax_tax_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ecotax_tax_breakdown']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ecotax_tax_infos']->key => $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value) {
$_smarty_tpl->tpl_vars['ecotax_tax_infos']->_loop = true;
?>
						<?php if ($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']>0) {?>
						<tr style="line-height:6px;background-color:<?php echo smarty_function_cycle(array('values'=>'#FFF,#DDD'),$_smarty_tpl);?>
;">
							<td style="width: 30%"><?php echo smartyTranslate(array('s'=>'Ecotax','pdf'=>'true'),$_smarty_tpl);?>
</td>
							<td style="width: 20%; text-align: right;"><?php echo $_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['rate'];?>
 %</td>
							<?php if (!$_smarty_tpl->tpl_vars['use_one_after_another_method']->value) {?>
								<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl']),$_smarty_tpl);?>
</td>
							<?php }?>
							<td style="width: 20%; text-align: right;"><?php if (isset($_smarty_tpl->tpl_vars['is_order_slip']->value)&&$_smarty_tpl->tpl_vars['is_order_slip']->value) {?>- <?php }?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_incl']-$_smarty_tpl->tpl_vars['ecotax_tax_infos']->value['ecotax_tax_excl'])),$_smarty_tpl);?>
</td>
						</tr>
						<?php }?>
					<?php } ?>
				<?php }?>
			</table>
			<?php }?>
		</td>
	</tr>
</table>
<!--  / TAX DETAILS -->
<?php }?><?php }} ?>
