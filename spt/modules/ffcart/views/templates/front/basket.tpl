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
				{if isset($products)}
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
            			{foreach from=$products item=product name=product}
						<tr id="cart_item_{$product->id}">
							<td></td>
							<td>
							<p>
								{$domain_name}{$product->reference}
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
										{if $product->wholesale_price > 0 }
			                    			VND{trim($product->wholesale_price)|number_format:0:",":"."}
			                    		{else}
			                    			VND{trim($product->price)|number_format:2:",":"."}
			                    		{/if}
									</b>
								</p>
							</td>
							<td>
							<p>
								<b>
									{if $product->wholesale_price > 0 }
	                    			VND{trim($product->wholesale_price)|number_format:0:",":"."}
	                    		{else}
	                    			VND{trim($product->price)|number_format:2:",":"."}
	                    		{/if}
								</b>
							</p><span onclick="return removeCartItem({$product->id}, '{$static_token}')" class="btn_remove">Remove</span></td>
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
					<a class="btn1" href="{$link->getModuleLink('ffcart', 'accountreview', array(), true)|addslashes}">
						<span class="btn">Proceed to Checkout ></span>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>