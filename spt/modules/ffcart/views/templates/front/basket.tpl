<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<span class="step step1 active">1</span>
			<span class="step step2 ">2</span>
			<span class="step step3 ">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">{l s='Giỏ hàng'}</span>
			<span class="text_step text_step2">{l s='Hoá đơn và thanh toán'}</span>
			<span class="text_step text_step3">{l s='Đặt hàng'}</span>
			<span class="text_step text_step4">{l s='Cảm ơn'}</span>
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
							<td>{l s='Sản phẩm'}</td>
							<td></td>
							<td>{l s='Thời hạn'}</td>
							<td>{l s='Giá'}</td>
							<td>{l s='Thành tiền'}</td>
						</tr>
					</thead>
					<tbody id="cart_content">
            			{foreach from=$cart_data["cart_data"] item=cart key=product_id name=cart}
						<tr id="cart_item_{$product_id}">
							<td style="text-align:center;">
								{if !empty($cart['cover_image'])}
								<img src="{$cart['cover_image']}" width="50px" height="50px" />
								{/if}
								<input type="hidden" name="product_id" value="{$product_id}" />
								<input type="hidden" name="type" value="{$cart['type']}" />
								<input type="hidden" name="reference" value="{$cart['reference']}" />
							</td>
							<td>
								<p>
									{$cart['product_name']}
								</p>
								{if $cart["type"] == 'domain'}
									{if $cart["reference"] == '.vn'}
									<p>
										*{l s='Cộng phí VNNIC .VN là '}{$smarty.const._VNNIC_DOTVN_FEE_}
									</p>
									{else if $cart["reference"] == '.com.vn'}
									<p>
										*{l s='Cộng phí VNNIC .COM.VN là '}{$smarty.const._VNNIC_DOTCOMDOTVN_FEE_}
									</p>
									{else}
									<p>
										*{l s='Cộng phí ICANN là '}{$smarty.const._ICAN_FEE_}/năm
									</p>
									{/if}
								{/if}
							</td>
							<td>
							<select id="domain_year_{$product_id}" onchange="return updateCart('{$product_id}')">
								{html_options values=$cart['term_ids'] output=$cart['term_names'] selected=$cart['quantity']}
							</select></td>
							<td>
								<p>
									<b>
										<input name="unit_price" value='{$cart['product_price']|number_format:0:"":""}' type="hidden" />
										VND{$cart['product_price']|number_format:0:",":"."}
									</b>
								</p>
							</td>
							<td>
								<p>
									<b>
										VND<span class="sub_price">{$cart['product_subtotal']|number_format:0:",":"."}</span>
									</b>
								</p><span onclick="return removeCartItem('{$product_id}')" class="btn_remove">Remove</span>
							</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
				{/if}
				{if !empty($suggestion_data)}
				<table class="table_2" cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>{l s='Đề nghị'}</td>
							<td></td>
							<td>{l s='Thời hạn'}</td>
							<td>{l s='Giá'}</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						{foreach from=$suggestion_data item=product key=product_id name=product}
						<tr id="cart_item_{$product_id}">
							<td style="text-align:center;">
								{if !empty($cart['cover_image'])}
								<img src="{$cart['cover_image']}" width="50px" height="50px" />
								{/if}
								<input type="hidden" name="product_id" value="{$product_id}" />
								<input type="hidden" name="type" value="domain" />
								<input type="hidden" name="reference" value="{$product['reference']}" />
							</td>
							<td>
								<p>
									{$product["product_name"]}
								</p>
								{if $product["reference"] == '.vn'}
								<p>
									*{l s='Cộng phí VNNIC .VN là '}{$smarty.const._VNNIC_DOTVN_FEE_}
								</p>
								{else if $product["reference"] == '.com.vn'}
								<p>
									*{l s='Cộng phí VNNIC .COM.VN là '}{$smarty.const._VNNIC_DOTCOMDOTVN_FEE_}
								</p>
								{else}
								<p>
									*{l s='Cộng phí ICANN là '}{$smarty.const._ICAN_FEE_}/năm
								</p>
								{/if}
							</td>
							<td id="cart_domain_year_{$product_id}" style="display:none;">
								<select id="domain_year_{$product_id}" onchange="return updateCart('{$product_id}')">
									{html_options values=$product['term_ids'] output=$product['term_names']}
								</select>
							</td>
							<td id="cart_suggestion_terms_{$product_id}">
								<select id="suggestion_terms_{$product_id}">
									{html_options values=$product['term_ids'] output=$product['term_names']}
								</select>
							</td>
							<td>
								<p>
									<b>
										<input name="unit_price" id="unit_price_{$product_id}" value="{$product['product_price']|number_format:0:'':''}" type="hidden" />
										VND{$product['product_price']|number_format:0:",":"."}
									</b>
								</p>
							</td>
							<td id="cart_remove_{$product_id}" style="display: none;">
								<p>
									<b>
										VND<span class="sub_price">{$product['product_price']|number_format:0:",":"."}</span>
									</b>
								</p><span onclick="return removeCartItem('{$product_id}')" class="btn_remove">Remove</span>
							</td>
							<td id="cart_addtocart_{$product_id}">
								<a class="btn1"><span onclick="addToCart({$product_id})" class="btn_add">Add to cart</span></a>
							</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
				{/if}
			</div>
			{if $customer->id_default_group == $smarty.const.__RESELLER_GROUP_ID__}
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<div class="header">
							<h5>{l s='Chọn khách hàng'}</h5>
						</div>
						<div class="div_pop">
							<div class="div_form">
								<p class="form">
									<span class="textline">{l s='Danh sách khách hàng'}</span>
									<select id="client_list" onchange="return updateClient()" class="xsm">
										{if !empty($client_list)}
										{foreach from=$client_list item=client name=client}
										<option value="{$client['id_customer']}" {if $agent_selected_client_id == $client['id_customer']}selected="selected"{/if}>{$client['lastname']} {$client['firstname']}</option>
										{/foreach}
										{/if}
									</select> <a class="txt_color1" href="{$link->getModuleLink('account', 'main')|escape:'quotes':'UTF-8'}">{l s='Add new client'}</a>
								</p>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	{/if}
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form id="frm_submit_promotion" action="{$link->getModuleLink('ffcart', 'basket')|escape:'quotes':'UTF-8'}" method="post">
							<div class="header">
								<h5>{l s='Thông tin khuyến mãi'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Mã khuyến mãi'}</span>
										<input type="text" id="promotion_code" name="promotion_code" {if isset($promotion_code)}value="{$promotion_code}"{/if} class="xsm" />
										{if isset($promotion_code_error)}
										<span class="notice error">{l s='Mã khuyến mãi chính xác!'}</span>
										{else if isset($promotion_code) && !empty($promotion_code)}
											<span class="notice error">{l s='Đã áp dụng mã khuyến mãi!'}</span>
										{/if}
									</p>
								</div>
							</div>
							<div class="header">
								<input type="hidden" name="submitPayment" value="1" />
								<div class="div_form">
									<p class="form">
										<span class="textline"> </span>
										<span class="btn_gr" id="btn_submit_promotion">{l s='Áp dụng'}</span>
										<span class="notice"></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"> </div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">{l s='Tổng cộng'}:</span>
					<span class="right txt_color1 price_big">VND<span id="cart_total">{$cart_data['cart_total']|number_format:0:",":"."}</span></span>
				</p>
				<p>
					<span class="left">{l s='Thuế'}(10%):</span>
					<span class="right"><strong>VND<span id="tax_fee">{$cart_data['cart_tax']|number_format:0:",":"."}</span></strong></span>
				</p>
				<p>
					<span class="left">{l s='Phí ICANN'}:</span>
					<span class="right"><strong>VND<span id="ican_fee">{$cart_data['ican_fee']|number_format:0:",":"."}</span></strong></span>
				</p>
				<p>
					<span class="left">{l s='Phí VNNIC'}:</span>
					<span class="right"><strong>VND<span id="vnnic_reg_fee">{$cart_data['vnnic_reg_fee']|number_format:0:",":"."}</span></strong></span>
				</p>
				<p class="line"> </p>
				<p>
					<span class="left">{l s='Tổng chi phí'} </span>
					<span class="right txt_color3">VND<span id="cart_grandtotal">{$cart_data['cart_grandtotal']|number_format:0:",":"."}</span></span>
				</p>
				<p>
					<a class="btn1" href="{$link->getModuleLink('ffcart', 'accountreview', array(), true)|addslashes}">
						<span class="btn">{l s='Xử lý thanh toán'} ></span>
					</a>
				</p>
			</div>
		</div>
	</div>
</div>