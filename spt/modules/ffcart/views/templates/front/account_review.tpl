{addJsDef billingUrl={$link->getModuleLink('ffcart', 'billing', array(), true)|addslashes}|escape:'quotes':'UTF-8'}
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
<div class="body body_news body_checkout">
	<div class="article">
		<div class="col_l left">
			<div class="box">
				<div class="col1 left">
					<h3>New
					<br />
					Customers</h3>
					<p class="txtcontent">
						Please enter your email address to create an account.
					</p>
					<a href="{$link->getModuleLink('ffcart', 'billing', array(), true)|addslashes}">
						<span class="btn">Continue ></span>
					</a>
				</div>
				<div class="col1 col2 left">
					<h3>Returning
					<br />
					Customers</h3>
					<p class="txtcontent">
						Already got an account? Sign In.
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
							Password
						</p>
						<input type="password" id="login_passwd" name="login_passwd" />
					</div>
					<p class="link">
						<a>Forgot your password?</a>
					</p>
					<a class="btn" id="SubmitLogin">Sign In ></a>
				</div>
			</div>
			<div style="margin-bottom: 50px"></div>
		</div>
		<div class="col_r right">
			<div class="box">
				<p>
					<span class="left">Order Summary</span>
				</p>
				<p>
					<span class="left">ICANN Fees*</span>
					<span class="right"><strong>VND{$cart_data['ican_fee']|number_format:0:",":"."}</strong></span>
				</p>
				<p>
					<span class="left">VNNIC Fees*</span>
					<span class="right"><strong>VND{$cart_data['vnnic_reg_fee']|number_format:0:",":"."}</strong></span>
				</p>
				<p class="tax">
					<span class="left">Total:</span>
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