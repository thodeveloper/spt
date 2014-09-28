{addJsDef orderOpcUrl=$link->getPageLink("order-opc", true)|escape:'quotes':'UTF-8'}
{addJsDef orderPaymentUrl={$link->getModuleLink('ffcart', 'payment', array(), true)|addslashes}|escape:'quotes':'UTF-8'}
<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<a href="{$link->getModuleLink('ffcart', 'basket')}"><span class="step step1">1</span></a>
			<span class="step step2 active">2</span>
			<span class="step step3 ">3</span>
			<span class="step step4 ">4</span>
			<span class="text_step text_step1">{l s='Giỏ hàng'}</span>
			<span class="text_step text_step2">{l s='Hoá đơn và thanh toán'}</span>
			<span class="text_step text_step3">{l s='Đặt hàng'}</span>
			<span class="text_step text_step4">{l s='Cảm ơn'}</span>
		</div>
	</div>
</div>
<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l left">
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form name="billing" id="billing">
							<input type="hidden" name="idAddress_delivery" id="idAddress_delivery" value="0">
							<input type="hidden" name="id_carrier" id="id_carrier" value="{$carriers->id}">
							{if $customer->logged == false}
							<div class="header">
								<h5>{l s='Khách hàng mới'}</h5>
								<input type="hidden" name="is_new_customer" value="1">
							</div>
							<div class="div_pop">
								<div class="div_form">
						            <p class="form">
										<span class="textline"><i>*</i>{l s='Nhóm'}</span>
										<select name="group_id" id="group_id" class="xsm">
						                    <option value="1">{l s='Khách hàng'}</option>
						                    <option value="2">{l s='Nhà bán lẻ'}</option>
						                </select>
						                <span class="notice error" id="id_gender_error"> </span>
						            </p>
						        </div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Email'}</span>
										<input type="text" id="email" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" class="xsm" />
										<span class="notice error" id="email_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Mật khẩu'}</span>
										<input type="password" name="passwd" id="passwd" class="xsm" />
										<span class="notice error" id="passwd_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Tên'}</span>
										<input type="text" id="customer_firstname" name="customer_firstname" class="xsm" />
										<span class="notice error" id="customer_firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Họ'}</span>
										<input type="text" id="customer_lastname" name="customer_lastname" class="xsm" />
										<span class="notice error" id="customer_lastname_error"> </span>
									</p>
								</div>
							</div>
							{/if}
							<div class="header">
								<h5>{l s='Thông tin thanh toán'}</h5>
							</div>
							<div class="div_pop">
								{if $customer->logged == true}
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Danh sách địa chỉ'}</span>
										<select name="address_list" id="address_list" class="xsm">
											{foreach from=$addresses item=address}
											<option value="{$address->id}">{$address->alias|escape:'html':'UTF-8'}</option>
											{/foreach}
										</select> <a class="txt_color1" href="{$link->getModuleLink('ffcart', 'addresses')|escape:'quotes':'UTF-8'}">{l s='Thêm địa chỉ mới'}</a>
										{foreach from=$addresses item=address}
										<p class="showAddress" id="show_address_{$address->id}" style="margin-left: 212px;{if !$address@first}display:none;{/if}">
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
											<span><a class="txt_color1" href="{$link->getModuleLink('ffcart', 'addresses', ['id_address' => $address->id], true)|escape:'quotes':'UTF-8'}">{l s='Sửa địa chỉ thanh toán'}</a></span>
										</p>
										{/foreach}
									</p>
								</div>
								{/if}
								{if $customer->logged == false}
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Tạo alias cho địa chỉ để dùng sau này.'}</span>
										<input type="text" class="xsm" name="alias" id="alias" value="{if isset($smarty.post.alias)}{$smarty.post.alias}{else}{l s='My address'}{/if}" />
										<span class="notice error" id="alias_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Tên'}</span>
										<input type="text" class="xsm" id="firstname" name="firstname" value="{if isset($guestInformations) && isset($guestInformations.firstname) && $guestInformations.firstname}{$guestInformations.firstname}{/if}" />
										<span class="notice error" id="firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Họ'}</span>
										<input type="text" class="xsm" id="lastname" name="lastname" value="{if isset($guestInformations) && isset($guestInformations.lastname) && $guestInformations.lastname}{$guestInformations.lastname}{/if}" />
										<span class="notice error" id="lastname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Địa chỉ'}</span>
										<input type="text" class="xsm" name="address1" id="address1" value="{if isset($guestInformations) && isset($guestInformations.address1) && isset($guestInformations) && isset($guestInformations.address1) && $guestInformations.address1}{$guestInformations.address1}{/if}" />
										<span class="notice error" id="address1_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Mã bưu điện'}</span>
										<input type="text" name="postcode" id="postcode" value="{if isset($guestInformations) && isset($guestInformations.postcode) && $guestInformations.postcode}{$guestInformations.postcode}{/if}" class="xsm" />
										<span class="notice error" id="postcode_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Thành phố'}</span>
										<input type="text" name="city" id="city" value="{if isset($guestInformations) && isset($guestInformations.city) && $guestInformations.city}{$guestInformations.city}{/if}" class="xsm" />
										<span class="notice error" id="city_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Quốc gia'}</span>
										<select name="id_country" id="id_country" class="xsm">
											{foreach from=$countries item=v}
											<option value="{$v.id_country}"{if (isset($guestInformations) && isset($guestInformations.id_country) && $guestInformations.id_country == $v.id_country) || (!isset($guestInformations) && $sl_country == $v.id_country)} selected="selected"{/if}>{$v.name|escape:'html':'UTF-8'}</option>
											{/foreach}
										</select>
										<span class="notice error" id="id_country_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Điện thoại'}</span>
										<input type="text" class="xsm" name="phone" id="phone" value="{if isset($guestInformations) && isset($guestInformations.phone) && $guestInformations.phone}{$guestInformations.phone}{/if}" />
										<span class="notice error" id="phone_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Di động'}</span>
										<input type="text" class="xsm" name="phone_mobile" id="phone_mobile" value="{if isset($guestInformations) && isset($guestInformations.phone_mobile) && $guestInformations.phone_mobile}{$guestInformations.phone_mobile}{/if}" />
										<span class="notice error" id="phone_mobile_error"> </span>
									</p>
								</div>
								{/if}
							</div>
							<div class="header">
								<h5>{l s='Thông tin thanh toán'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Thẻ tín dụng'}</span>
										<input type="radio" name="payment_method" value="1" checked="checked" />
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='ATM'}</span>
										<input type="radio" name="payment_method" value="2" />
									</p>
								</div>
								{if $cart_data['recharge_fee'] lte 0}
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Tiền mặt'}</span>
										<input type="radio" name="payment_method" value="3" />
									</p>
								</div>
								{/if}
							</div>
							<div class="header">
								<div class="div_form">
									<p class="form">
										<span class="textline"></span>
										<span class="btn_gr" name="submitAccount" id="submitAccount">{l s='Tiếp tục'} &gt;</span>
										<span class="notice"></span>
									</p>
								</div>
							</div>
						</form>
					</div>
				</div>
	    	</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">{l s='Thống kê hoá đơn'}</span>
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