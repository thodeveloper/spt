{include file="$template_path/recharge.tpl"}
{addJsDef cartUrl=$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}
{addJsDef accountUrl=$link->getModuleLink('account', 'main', array(), true)|addslashes}
<div class="div_account">
    <div class="article">
    	<div class="div_box_acc">
        	<h3>My Account</h3>
            <span class="name">{$customer->lastname} {$customer->firstname}</span>
            <span>Registered email: {$customer->email} | PIN: <a class="txt_color2">***</a></span>
            <ul>
            	<li class="first"><a class="txt_color2">Contact Support</a></li>
          	</ul>
        </div>
    </div>
    <div class="article">
    	<div class="div_tab">
            <div id="tabstrip">
                <ul>
                    <li class="k-state-active">
                    	<span class="k-image mc1"></span>
                        Products
                    </li>
                    <li>
                    	<span class="k-image mc2"></span>
                        History
                    </li>
                    {if $customer->id_default_group == $smarty.const.__RESELLER_GROUP_ID__}
                    <li>
                    	<span class="k-image mc3"></span>
                        Clients	
                    </li>
                    {/if}
                    <li>
                    	<span class="k-image mc4"></span>
                        Settings
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