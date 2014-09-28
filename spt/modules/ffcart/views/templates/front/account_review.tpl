{addJsDef billingUrl={$link->getModuleLink('ffcart', 'billing', array(), true)|addslashes}|escape:'quotes':'UTF-8'}
<div class="div_step">
	<div class="step_content">
		<div class="line steping4">
			<a href="{$link->getModuleLink('ffcart', 'basket')}"><span class="step step1 active">1</span></a>
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
<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l left">
			<div class="box">
				<div class="col1 left">
					<h3>{l s='Khác hàng'}
					<br />
					{l s='Mới'}</h3>
					<p class="txtcontent">
						{l s='Làm ơn nhập địa chỉ email của bạn để tạo tài khoản'}
					</p>
					<a href="{$link->getModuleLink('ffcart', 'billing', array(), true)|addslashes}">
						<span class="btn">{l s='Tiếp tục'} ></span>
					</a>
				</div>
				<div class="col1 col2 left">
					<h3>{l s='Khách hàng'}
					<br />
					{l s='Cũ'}</h3>
					<p class="txtcontent">
						{l s='Đã có tài khoản? Đăng nhập'}
					</p>
					<p class="error" id="login_error"> </p>
					<div class="form">
						<p>
							Email
						</p>
						<input type="text" id="login_email" name="login_email" />
					</div>
					<div class="form">
						<p>
							{l s='Mật khẩu'}
						</p>
						<input type="password" id="login_passwd" name="login_passwd" />
					</div>
					<p class="link">
						<a>{l s='Quên mật khẩu?'}</a>
					</p>
					<a class="btn" id="SubmitLogin">{l s='Đăng nhập'} ></a>
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