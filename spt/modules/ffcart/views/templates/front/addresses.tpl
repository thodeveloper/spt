<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l" style="margin:0 auto;">
			<div class="div_tab" style="width: auto !important;">
                <div class="k-content child_panel child_panel3">
					<div class="box_setting">
						<form id="add_address" method="post" action="{$link->getPageLink('address', true)|escape:'html':'UTF-8'}">
							{if isset($address->id)}
							<input type="hidden" name="id_address" value="{$address->id}">
							{/if}
							<div class="header">
								<h5>{l s='Địa chỉ của bạn'}</h5>
							</div>
							<div class="div_pop">
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Tạo alias cho địa chỉ để dùng sau này.'}</span>
										<input type="text" class="xsm" name="alias" id="alias" value="{if isset($address->alias)}{$address->alias}{/if}" />
										<span class="notice error" id="alias_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Tên'}</span>
										<input type="text" class="xsm" id="firstname" name="firstname" value="{if isset($address->firstname)}{$address->firstname}{/if}" />
										<span class="notice error" id="firstname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Họ'}</span>
										<input type="text" class="xsm" id="lastname" name="lastname" value="{if isset($address->lastname)}{$address->lastname}{/if}" />
										<span class="notice error" id="lastname_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Địa chỉ'}</span>
										<input type="text" class="xsm" name="address1" id="address1" value="{if isset($address->address1)}{$address->address1}{/if}" />
										<span class="notice error" id="address1_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Mã bưu điện'}</span>
										<input type="text" name="postcode" id="postcode" value="{if isset($address->postcode)}{$address->postcode}{/if}" class="xsm" />
										<span class="notice error" id="postcode_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Thành phố'}</span>
										<input type="text" name="city" id="city" value="{if isset($address->city)}{$address->city}{/if}" class="xsm" />
										<span class="notice error" id="city_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"><i>*</i>{l s='Quốc gia'}</span>
										<select name="id_country" id="id_country" class="xsm">
											{foreach from=$countries item=v}
											<option value="{$v.id_country}"{if isset($address->id_country) && $address->id_country == $v.id_country} selected="selected"{/if}>{$v.name|escape:'html':'UTF-8'}</option>
											{/foreach}
										</select>
										<span class="notice error" id="id_country_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Điện thoại'}</span>
										<input type="text" class="xsm" name="phone" id="phone" value="{if isset($address->phone)}{$address->phone}{/if}" />
										<span class="notice error" id="phone_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline">{l s='Di động'}</span>
										<input type="text" class="xsm" name="phone_mobile" id="phone_mobile" value="{if isset($address->phone_mobile)}{$address->phone_mobile}{/if}" />
										<span class="notice error" id="phone_mobile_error"> </span>
									</p>
								</div>
								<div class="div_form">
									<p class="form">
										<span class="textline"></span>
										<span class="btn_gr" name="submitAddress" id="submitAddress">{l s='Lưu'} ></span>
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
	</div>
</div>