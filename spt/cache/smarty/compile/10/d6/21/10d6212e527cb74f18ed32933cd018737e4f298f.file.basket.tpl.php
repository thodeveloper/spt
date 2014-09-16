<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 14:12:56
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffcart\views\templates\front\basket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199515416926a2c0367-92503654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10d6212e527cb74f18ed32933cd018737e4f298f' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffcart\\views\\templates\\front\\basket.tpl',
      1 => 1410851114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199515416926a2c0367-92503654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5416926a553445_05671745',
  'variables' => 
  array (
    'cart_data' => 0,
    'product_id' => 0,
    'cart' => 0,
    'suggestion_data' => 0,
    'product' => 0,
    'domain_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416926a553445_05671745')) {function content_5416926a553445_05671745($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'E:\\wamp\\www\\spt\\spt\\spt\\tools\\smarty\\plugins\\function.html_options.php';
?><div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<span class="step step1 active">1</span>
			<span class="step step2 ">2</span>
			<span class="step step3 ">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">Cart</span>
			<span class="text_step text_step2">Billing & Payment</span>
			<span class="text_step text_step3">Place Your Oder</span>
			<span class="text_step text_step4">Thank You</span>
		</div>
	</div>
</div>
<div class="body body_news body_cart_fix">
	<div class="article">
		<div class="col_l left">
			<div class="box">
				<?php if (isset($_smarty_tpl->tpl_vars['cart_data']->value)) {?>
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Product</td>
							<td></td>
							<td>Term</td>
							<td>Unit Price</td>
							<td>Subtotal</td>
						</tr>
					</thead>
					<tbody id="cart_content">
            			<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cart_data']->value["cart_data"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['cart']->key;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<td>
								<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
								<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['type'];?>
" />
								<input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['reference'];?>
" />
							</td>
							<td>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['cart']->value['product_name'];?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['cart']->value["type"]=='domain') {?>
									<?php if ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.vn') {?>
									<p>
										*Plus VNNIC .VN fee of VND<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

									</p>
									<?php } elseif ($_smarty_tpl->tpl_vars['cart']->value["reference"]=='.com.vn') {?>
									<p>
										*Plus VNNIC .COM.VN fee of VND<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

									</p>
									<?php } else { ?>
									<p>
										*Plus ICANN fee of VND<?php echo @constant('_ICAN_FEE_');?>
/yr
									</p>
									<?php }?>
								<?php }?>
							</td>
							<td>
							<select id="domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" onchange="return updateCart(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
)">
								<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cart']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['cart']->value['term_names'],'selected'=>$_smarty_tpl->tpl_vars['cart']->value['quantity']),$_smarty_tpl);?>

							</select></td>
							<td>
								<p>
									<b>
										<input name="unit_price" value='<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,'','');?>
' type="hidden" />
										VND<?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_price'],0,",",".");?>

									</b>
								</p>
							</td>
							<td>
								<p>
									<b>
										VND<span class="sub_price"><?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['product_subtotal'],0,",",".");?>
</span>
									</b>
								</p><span onclick="return removeCartItem(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
)" class="btn_remove">Remove</span>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<?php }?>
				<table class="table_2" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>Suggestion</td>
							<td></td>
							<td>Term</td>
							<td>Unit Price</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['suggestion_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<td>
								<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" />
								<input type="hidden" name="type" value="domain" />
								<input type="hidden" name="reference" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
" />
							</td>
							<td>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['product']->value["product_name"];?>

								</p>
								<?php if ($_smarty_tpl->tpl_vars['product']->value["reference"]=='.vn') {?>
								<p>
									*Plus VNNIC .VN fee of VND<?php echo @constant('_VNNIC_DOTVN_FEE_');?>

								</p>
								<?php } elseif ($_smarty_tpl->tpl_vars['product']->value["reference"]=='.com.vn') {?>
								<p>
									*Plus VNNIC .COM.VN fee of VND<?php echo @constant('_VNNIC_DOTCOMDOTVN_FEE_');?>

								</p>
								<?php } else { ?>
								<p>
									*Plus ICANN fee of VND<?php echo @constant('_ICAN_FEE_');?>
/yr
								</p>
								<?php }?>
							</td>
							<td id="cart_domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" style="display:none;">
								<select id="domain_year_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" onchange="return updateCart(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
)">
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['product']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['product']->value['term_names']),$_smarty_tpl);?>

								</select>
							</td>
							<td id="cart_suggestion_terms_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
								<select id="suggestion_terms_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
									<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['product']->value['term_ids'],'output'=>$_smarty_tpl->tpl_vars['product']->value['term_names']),$_smarty_tpl);?>

								</select>
							</td>
							<td>
								<p>
									<b>
										<input name="unit_price" id="unit_price_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" value="<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,'','');?>
" type="hidden" />
										VND<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,",",".");?>

									</b>
								</p>
							</td>
							<td id="cart_remove_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" style="display: none;">
								<p>
									<b>
										VND<span class="sub_price"><?php echo number_format($_smarty_tpl->tpl_vars['product']->value['product_price'],0,",",".");?>
</span>
									</b>
								</p><span onclick="return removeCartItem(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
)" class="btn_remove">Remove</span>
							</td>
							<td id="cart_addtocart_<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
								<a class="btn1"><span onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
')" class="btn_add">Add to cart</span></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div style="margin-bottom: 50px"> </div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">Total:</span>
					<span class="right txt_color1 price_big">VND<span id="cart_total"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_total'],0,",",".");?>
</span></span>
				</p>
				<p>
					<span class="left">Taxes(10%):</span>
					<span class="right"><strong>VND<span id="tax_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_tax'],0,",",".");?>
</span></strong></span>
				</p>
				<p>
					<span class="left">ICAN fee:</span>
					<span class="right"><strong>VND<span id="ican_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['ican_fee'],0,",",".");?>
</span></strong></span>
				</p>
				<p>
					<span class="left">VNNIC register fee:</span>
					<span class="right"><strong>VND<span id="vnnic_reg_fee"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['vnnic_reg_fee'],0,",",".");?>
</span></strong></span>
				</p>
				<p class="line"> </p>
				<p>
					<span class="left">Total cost </span>
					<span class="right txt_color3">VND<span id="cart_grandtotal"><?php echo number_format($_smarty_tpl->tpl_vars['cart_data']->value['cart_grandtotal'],0,",",".");?>
</span></span>
				</p>
				<p>
					<a class="btn1" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','accountreview',array(),true));?>
">
						<span class="btn">Proceed to Checkout ></span>
					</a>
				</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
