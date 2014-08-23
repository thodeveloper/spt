<?php /* Smarty version Smarty-3.1.19, created on 2014-08-21 23:55:39
         compiled from "E:\wamp\www\domain\modules\ffcart\views\templates\front\basket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028553f0d727852553-22629866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e002a4a684f8a8a5ee4523fa5c56db66b5dd55' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\ffcart\\views\\templates\\front\\basket.tpl',
      1 => 1408640086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028553f0d727852553-22629866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f0d727884e29_00170269',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'domain_name' => 0,
    'static_token' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f0d727884e29_00170269')) {function content_53f0d727884e29_00170269($_smarty_tpl) {?><div class="div_step">
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
				<?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
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
            			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
						<tr id="cart_item_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
							<td></td>
							<td>
							<p>
								<?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>

							</p>
							<p>
								*Plus ICANN fee of $0.18/yr
							</p></td>
							<td>
							<select name="domain_year">
								<option value="1">1 Years</option>
								<option value="2">2 Years</option>
								<option value="3">3 Years</option>
								<option value="5">5 Years</option>
								<option value="10">10 Years</option>
							</select></td>
							<td>
								<p>
									<b>
										<?php if ($_smarty_tpl->tpl_vars['product']->value->wholesale_price>0) {?>
			                    			VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->wholesale_price),0,",",".");?>

			                    		<?php } else { ?>
			                    			VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->price),2,",",".");?>

			                    		<?php }?>
									</b>
								</p>
							</td>
							<td>
							<p>
								<b>
									<?php if ($_smarty_tpl->tpl_vars['product']->value->wholesale_price>0) {?>
	                    			VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->wholesale_price),0,",",".");?>

	                    		<?php } else { ?>
	                    			VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->price),2,",",".");?>

	                    		<?php }?>
								</b>
							</p><span onclick="return removeCartItem(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
')" class="btn_remove">Remove</span></td>
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
							<td width="260"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td>
							<p>
								youwin.guru
							</p>
							<p>
								GURU Domain Registration
							</p>
							<p class="txt_color1">
								15% Off
							</p>
							<p>
								*Plus ICANN fee of $0.18/yr
							</p></td>
							<td >
							<select>
								<option>1 Years</option>
								<option>2 Years</option>
							</select></td>

							<td><span class="btn_add">add to cart</span></td>
						</tr>
						<tr>
							<td></td>
							<td>
							<p>
								youwin.guru
							</p>
							<p>
								GURU Domain Registration
							</p>
							<p class="txt_color1">
								15% Off
							</p>
							<p>
								*Plus ICANN fee of $0.18/yr
							</p></td>
							<td >
							<select>
								<option>1 Years</option>
								<option>2 Years</option>
							</select></td>

							<td><span class="btn_add">add to cart</span></td>
						</tr>
						<tr>
							<td></td>
							<td>
							<p>
								youwin.guru
							</p>
							<p>
								GURU Domain Registration
							</p>
							<p class="txt_color1">
								15% Off
							</p>
							<p>
								*Plus ICANN fee of $0.18/yr
							</p></td>
							<td >
							<select>
								<option>1 Years</option>
								<option>2 Years</option>
							</select></td>

							<td><span class="btn_add">add to cart</span></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">Coun:t</span>
					<select class="right">
						<option>1 Years</option>
						<option>2 Years</option>
					</select>
				</p>
				<p>
					<span class="left">Total cost:</span>
					<span class="right txt_color1 price_big">$400</span>
				</p>
				<p>
					<span class="left">Taxes:</span>
					<span class="right"><strong>$16.50<strong></span>
				</p>
				<p class="line"></p>
				<p>
					<span class="left">Total saving </span>
					<span class="right txt_color3">$16.50</span>
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
