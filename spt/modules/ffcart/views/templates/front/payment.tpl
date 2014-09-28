<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<a href="{$link->getModuleLink('ffcart', 'basket')}"><span class="step step1">1</span></a>
			<a href="{$link->getModuleLink('ffcart', 'billing')}"><span class="step step2">2</span></a>
			<span class="step step3 active">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">{l s='Giỏ hàng'}</span>
			<span class="text_step text_step2">{l s='Hoá đơn và thanh toán'}</span>
			<span class="text_step text_step3">{l s='Đặt hàng'}</span>
			<span class="text_step text_step4">{l s='Cảm ơn'}</span>
		</div>
	</div>
</div>
<div class="body body_news body_checkout body_cart_fix">
	<div class="article">
		<div class="col_l left">
			<div style="margin-top: 30px;color: red">{if isset($error_message)}{$error_message}{/if}</div>
			<div class="box" style="margin-top: 30px;">
				{if isset($cart_data)}
				<table cellpadding="0" cellspacing="0">
					<thead>
						<tr>
							<td>{l s='Sản phẩm'}</td>
							<td> </td>
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
							<td style="text-align: center;">
								<b>
									{$cart['quantity']|number_format:0:",":"."}
								</b>
							</td>
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
								</p>
							</td>
						</tr>
						{/foreach}
					</tbody>
				</table>
				{/if}
			</div>
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form id="frm_submit_payment" action="{$link->getModuleLink('ffcart', 'payment', ['payment' => $payment], true)|escape:'quotes':'UTF-8'}" method="post">
							<div class="header">
								<h5>{l s='Thông tin hoá đơn'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<p class="showAddress" id="show_address_{$address->id}" style="margin-left: 100px;">
											{$address->lastname} {$address->firstname}<br />
											{$address->address1} <br />
											{if !empty($address->phone)}{$address->phone} <br />{/if}
											{if !empty($address->phone_mobile)}{$address->phone_mobile} <br />{/if}
											{$address->city} <br />
											{foreach from=$countries item=v}
												{if $v.id_country == $address->id_country}
													{$v.name|escape:'html':'UTF-8'}
													{break}
												{/if}
											{/foreach} <br />
										</p>
									</p>
								</div>
							</div>
							{if !empty($client_info) && $customer->id_default_group == $smarty.const.__RESELLER_GROUP_ID__}
							<div class="header">
								<h5>{l s='Thông tin khách hàng'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline">{$client_info->lastname} {$client_info->firstname}</span>
										<span class="textline">{$client_info->email}</span>
									</p>
								</div>
							</div>
							{/if}
							<div class="header">
								<h5>{l s='Thông tin thanh toán'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Thẻ tín dụng'}</span>
										<input disabled="disabled" type="radio" name="payment_method" value="1" {if $payment == 1}checked="checked"{/if} />
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='ATM'}</span>
										<input disabled="disabled" type="radio" name="payment_method" value="2" {if $payment == 2}checked="checked"{/if} />
									</p>
								</div>
								{if $cart_data['recharge_fee'] lte 0}
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Tiền mặt'}</span>
										<input disabled="disabled" type="radio" name="payment_method" value="2" {if $payment == 3}checked="checked"{/if} />
									</p>
								</div>
								{/if}
							</div>
							<div class="header">
								<input type="hidden" name="submitPayment" value="1" />
								<div class="div_form">
									<p class="form">
										<span class="textline"> </span>
										<span class="btn_gr" id="btn_submit_payment">{l s='Thanh toán'} &gt;</span>
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
					<span class="left">{l s='Thống kê hoá đơn'}</span>
				</p>
				<p>
					<span class="left">{l s='Thuế'}(10%):</span>
					<span class="right"><strong>VND<span id="tax_fee">{$cart_data['cart_tax']|number_format:0:",":"."}</span></strong></span>
				</p>
				<p>
					<span class="left">{l s='Phí ICANN'}*</span>
					<span class="right"><strong>VND{$cart_data['ican_fee']|number_format:0:",":"."}</strong></span>
				</p>
				<p>
					<span class="left">{l s='Phí VNNIC'}*</span>
					<span class="right"><strong>VND{$cart_data['vnnic_reg_fee']|number_format:0:",":"."}</strong></span>
				</p>
				<p class="tax">
					<span class="left">{l s='Tổng cộng'}:</span>
					<span class="right txt_color2">VND{$cart_data['cart_grandtotal']|number_format:0:",":"."}</span>
				</p>
				<p class="line"></p>
				<p>
					<span class="ico_verify"></span>
				</p>
			</div>
		</div>
	</div>
</div>