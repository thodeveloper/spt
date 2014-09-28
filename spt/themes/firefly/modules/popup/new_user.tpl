<div id="window_user" style="display: none;">
	<form name="register_account" id="register_account">
	<input type="hidden" id="group_id" name="group_id" value="1" />
	<input type="hidden" name="is_new_customer" value="1">
	<input type="hidden" name="alias" value="{l s='Địa chỉ của tôi'}">
	<div class="div_pop">
		<p class="error" id="header_reg_error"> </p>
        <div class="div_form">
            <p class="form">
				<span class="textline"><i>*</i>{l s='Danh xưng'}</span>
				<select name="id_gender" id="id_gender" class="xsm">
					{foreach from=$genders key=k item=gender}
                    <option value="{$gender->id}">{$gender->name}</option>
                    {/foreach}
                </select>
                <span class="notice error" id="id_gender_error"> </span>
            </p>
        </div>
        <div class="div_form">
			<p class="form">
				<span class="textline"><i>*</i>{l s='Tên'}</span>
				<input type="text" id="firstname" name="firstname" class="xsm" />
				<span class="notice error" id="firstname_error"> </span>
			</p>
		</div>
		<div class="div_form">
			<p class="form">
				<span class="textline"><i>*</i>{l s='Họ'}</span>
				<input type="text" id="lastname" name="lastname" class="xsm" />
				<span class="notice error" id="lastname_error"> </span>
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
                <span class="textline">{l s='Sinh nhật'}:</span>
                <select id="days" name="days" class="xsm small first">
					<option value="">-</option>
					{foreach from=$days item=day}
						<option value="{$day}">{$day}&nbsp;&nbsp;</option>
					{/foreach}
				</select>
				{*
					{l s='January'}
					{l s='February'}
					{l s='March'}
					{l s='April'}
					{l s='May'}
					{l s='June'}
					{l s='July'}
					{l s='August'}
					{l s='September'}
					{l s='October'}
					{l s='November'}
					{l s='December'}
				*}
                <select id="months" name="months" class="xsm small">
					<option value="">-</option>
					{foreach from=$months key=k item=month}
						<option value="{$k}">{l s=$month}&nbsp;</option>
					{/foreach}
				</select>
				<select id="years" name="years" class="xsm small">
					<option value="">-</option>
					{foreach from=$years item=year}
						<option value="{$year}">{$year}&nbsp;&nbsp;</option>
					{/foreach}
				</select>
                <span class="notice error" id="birthday_error"> </span>
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
				<div class="div_form">
					<p class="form">
						<span class="textline">{l s='Đăng ký tin thư!'}</span>
						<input type="checkbox" name="newsletter" id="newsletter" value="1" style="width:120px;" />
						<span class="notice error" id="newsletter_error"> </span>
					</p>
				</div>
            </p>
        </div>
    </div>
    <p class="pop">{l s='Bằng cách nhấn váo "Tạo tài khoản", bạn đã đồng ý điều khoản và điều kiện như sau'}: <a class="txt_color1">{l s='Điều khoản và chính sách'}</a></p>
    <p class="div_btn">
    	<button class="btn_gr" name="headerSubmitAccount" id="headerSubmitAccount">{l s='Tạo tài khoản'}</button>
    </p>
    </form>
</div>