{include file="$template_path/recharge.tpl"}
{addJsDef cartUrl=$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}
{addJsDef accountUrl=$link->getModuleLink('account', 'main', array(), true)|addslashes}
<div class="div_account">
    <div class="article">
    	<div class="div_box_acc">
        	<h3>{l s='Tài khoản của tôi'}</h3>
            <span class="name">{$customer->lastname} {$customer->firstname}</span>
            <span>{l s='Email đã đăng ký'}: {$customer->email}</span>
            <ul>
            	<li class="first"><a class="txt_color2">{l s='Địa chỉ liên lạc'}</a></li>
          	</ul>
        </div>
    </div>
    <div class="article">
    	<div class="div_tab">
            <div id="tabstrip">
                <ul>
                    <li class="k-state-active">
                    	<span class="k-image mc1"></span>
                        {l s='Sản phẩm'}
                    </li>
                    <li>
                    	<span class="k-image mc2"></span>
                        {l s='Lịch sử'}
                    </li>
                    {if $customer->id_default_group == $smarty.const.__RESELLER_GROUP_ID__}
                    <li>
                    	<span class="k-image mc3"></span>
                        {l s='Khách hàng'}
                    </li>
                    {/if}
                    <li>
                    	<span class="k-image mc4"></span>
                        {l s='Thiết lập'}
                    </li>
                </ul>
                <div>
                    {include file="$template_path/products.tpl"}
                </div>
                <div>
                    {include file="$template_path/history.tpl"}
                </div>
                {if $customer->id_default_group == $smarty.const.__RESELLER_GROUP_ID__}
                <div>
                    {include file="$template_path/client.tpl"}
                </div>
                {/if}
                <div>
                    {include file="$template_path/settings.tpl"}
                </div>
               
            </div>
    	</div>
    </div>
</div>