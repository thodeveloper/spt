<div id="window_recharge" style="display: none;">
	<form name="register_account" id="register_account">
		<div class="div_pop">
			<p class="error" id="recharge_error"> </p>
	        <div class="div_form">
	            <p class="form">
					<span class="textline"><i>*</i>{l s='Lựa chọn thẻ'}</span>
					<select name="recharge_product_id" id="recharge_product_id" class="xsm">
						{foreach from=$recharge_list item=recharge key=product_id name=recharge}
	                    <option value="{$product_id}">VND{$recharge["product_price"]|number_format:0:",":"."}</option>
	                    {/foreach}
	                </select>
	            </p>
	        </div>
	    </div>
	    <p class="div_btn">
	    	<button class="btn_gr" name="" id="recharge_addtocart">{l s='Thêm vào giỏ hàng'}</button>
	    </p>
    </form>
</div>