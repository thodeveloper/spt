<div class="div_step">
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
				{if isset($cart_data)}
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
            			{foreach from=$cart_data["cart_data"] item=cart key=product_id name=cart}
						<tr id="cart_item_{$product_id}">
							<td></td>
							<td>
							<p>
								{$cart['product_name']}
							</p>
							<p>
								*Plus ICANN fee of VND{$smarty.const._ICAN_FEE_}/yr
							</p></td>
							<td>
							<select id="domain_year_{$product_id}" onchange="return updateCart({$product_id}, true, '{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}')">
								{if isset($selected_terms[$product_id])}
									{assign "selected_id" $selected_terms[$product_id]}
								{else}
									{assign "selected_id" 0}
								{/if}
								{html_options values=$terms_id output=$terms_names selected=$selected_id}
							</select></td>
							<td>
								<p>
									<b>
										<input id="unit_price_{$product_id}" value='{$cart['product_price']|number_format:0:"":""}' type="hidden" />
										VND{$cart['product_price']|number_format:0:",":"."}
									</b>
								</p>
							</td>
							<td>
							<p>
								<b>
									<input id="sub_price_{$product_id}" value="{$cart['product_subtotal']}" type="hidden" />
									VND<span id="sub_price_{$product_id}_display">{$cart['product_subtotal']|number_format:0:",":"."}</span>
								</b>
							</p><span onclick="return removeCartItem({$product_id}, '{$static_token}')" class="btn_remove">Remove</span></td>
						</tr>
						{/foreach}
					</tbody>
				</table>
				{/if}
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
						{foreach from=$suggestion_data item=product key=product_id name=product}
						<tr id="cart_item_{$product_id}">
							<td></td>
							<td>
								<p>
									{$product["product_name"]}
								</p>
								<p>
									*Plus ICANN fee of VND{$smarty.const._ICAN_FEE_}/yr
								</p>
							</td>
							<td id="cart_domain_year_{$product_id}" style="display:none;">
								<select id="domain_year_{$product_id}" onchange="return updateCart({$product_id}, true, '{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}')">
									{html_options values=$terms_id output=$terms_names}
								</select>
							</td>
							<td id="cart_suggestion_terms_{$product_id}">
								<select id="suggestion_terms_{$product_id}" onchange="return updateCart({$product_id}, false, '{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}')">
									{html_options values=$terms_id output=$terms_names}
								</select>
							</td>
							<td>
								<p>
									<b>
										<input id="unit_price_{$product_id}" value='{$product['product_price']|number_format:0:"":""}' type="hidden" />
										VND{$product['product_price']|number_format:0:",":"."}
									</b>
								</p>
							</td>
							<td id="cart_remove_{$product_id}" style="display: none;">
								<p>
									<b>
										<input id="sub_price_{$product_id}" value="{$product['product_price']|number_format:0:"":""}" type="hidden" />
										VND<span id="sub_price_{$product_id}_display">{$product['product_price']|number_format:0:",":"."}</span>
									</b>
								</p><span onclick="return removeCartItem({$product_id}, '{$static_token}')" class="btn_remove">Remove</span>
							</td>
							<td id="cart_addtocart_{$product_id}">
								<a class="btn1"><span onclick="addToCart({$product_id}, '{$static_token}', 1)" class="btn_add">Add to cart</span></a>
							</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">Total:</span>
					<input id="cart_total" value="{$cart_data['cart_total']}" type="hidden" />
					<span class="right txt_color1 price_big">VND<span id="cart_total_display">{$cart_data['cart_total']|number_format:0:",":"."}</span></span>
				</p>
				<p>
					<span class="left">Taxes(10%):</span>
					<span class="right"><strong>VND<span id="cart_tax">{$cart_data['cart_tax']|number_format:0:",":"."}<strong></span></span>
				</p>
				<p>
					<span class="left">ICAN fee:</span>
					<span class="right"><strong>VND<span id="ican_fee">{$cart_data['ican_fee']|number_format:0:",":"."}<strong></span></span>
				</p>
				<p class="line"></p>
				<p>
					<span class="left">Total cost </span>
					<span class="right txt_color3">VND<span id="cart_grandtotal">{$cart_data['cart_grandtotal']|number_format:0:",":"."}</span></span>
				</p>
				<p>
					<a class="btn1" href="{$link->getModuleLink('ffcart', 'accountreview', array(), true)|addslashes}">
						<span class="btn">Proceed to Checkout ></span>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>