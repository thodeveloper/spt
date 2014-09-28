<!-- InstanceBeginEditable name="body" -->
<div class="div_search">
    <div class="article">
        <div class="box">
        	<form action="{$link->getModuleLink('domain', 'search')}" method="post" id="frm_domain_search" name="frm_domain_search">
	            <input type="text" name="txt_search" value="{$searchKeyWord|escape:'html':'UTF-8'}" placeholder="{l s='Nhập tên miền'}">
	            <a class="btn-1"><span id="domain_search" class="text_search"><i class="fa fa-search"></i>{l s='Tìm kiếm lại'}</span></a>
            </form>
        </div>
    </div>

    {if $isSearchedDomainAvailable == false }
    <div class="article">
        <div class="search_null">
            <p><span class="ico_caution"></span>{l s='Rất tiếc'}, <span class="txt_color1">{$searchKeyWord|escape:'html':'UTF-8'}</span> {l s='đã được đăng ký'}.</p>
        </div>
   	</div>
   	{else if isset($searchedDomainInfo)}
   	<div class="article">
        <div class="search_notnull">
            <p>
            	<span class="txt_color2">{l s='Tin vui, tên miền này chưa được đăng ký'}</span> 
				<a><span class="btn_addcart" onclick="return addToCart({$searchedDomainInfo['id_product']}, 1, '{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}', '{$searchKeyWord|escape:'html':'UTF-8'}')"><i class="fa fa-shopping-cart"> </i>{l s='Vào giỏ hàng'}</span></a>
        	</p>
        </div>
   	</div>
    <div class="article">
        <div class="div_result_item">
        	{if $searchedDomainInfo["onsale"] == true}
        		{if $searchedDomainInfo["wholesale_price"] > 0 }
            		<span class="gribbon_lar_1"><i>{l s='Đang bán'} VND{$searchedDomainInfo["wholesale_price"]|number_format:0:",":"."} {$searchedDomainInfo['reference']}</i></span>
            	{else}
            		<span class="gribbon_lar_1"><i>{l s='Đang bán'} VND{$searchedDomainInfo["price"]|number_format:0:",":"."} {$searchedDomainInfo['reference']}</i></span>
            	{/if}
            {/if}
            <div class="div_left left">
            	<h4>{$searchedDomainInfo['name']|escape:'html':'UTF-8'}</h4>
                <span class="dotname">{$searchedDomainInfo['reference']|escape:'html':'UTF-8'}</span>
            </div>
            <div class="div_right right">
            	<div class="price">
    				{if $searchedDomainInfo["wholesale_price"] > 0 }
            			<del>VND{$searchedDomainInfo["price"]|number_format:0:",":"."}*</del><i>VND{$searchedDomainInfo["wholesale_price"]|number_format:0:",":"."}*</i>
            		{else}
            			<i>VND{$searchedDomainInfo["price"]|number_format:2:",":"."}*</i>
            		{/if}
            		<span id="selectItem_{$searchedDomainInfo["id_product"]}" onclick="addToCart({$searchedDomainInfo['id_product']}, 1, '', '{$searchKeyWord|escape:'html':'UTF-8'}')" class="btn_gr">+ {l s='Chọn'}</span>
            	</div>
            </div>
        </div>
        <div class="shadow_box"> </div>
   	</div>
   	{/if}
   	{if isset($recommendations)}
    <div class="article">
    	<div class="search_result">
        	<div class="title">
            	<span>{l s='Danh sách tên miền đề nghị cho bạn'}:</span>
            </div>
            <div class="title_page">
            	<span class="ico_result"> </span>
            </div>
            <div class="div_result">
        		{foreach from=$recommendations item=product name=product}
	            	<div class="item_result">
	            		{if $product['onsale'] == true}
	                		<span class="gribbon_sm_1"> </span>
	                	{/if}
	                    <div class="div_left left">
	                    	<h4>{$product['name']|escape:'html':'UTF-8'}</h4>
	                        <span class="dotname">{$product['reference']}</span>
	                    </div>
	                    <div class="div_right right">
	                    	<div class="price">
	                    		{if $product['wholesale_price'] > 0 }
	                    			<del>VND{trim($product['price'])|number_format:0:",":"."}*</del><i>VND{trim($product['wholesale_price'])|number_format:0:",":"."}*</i>
	                    		{else}
	                    			<i>VND{trim($product['price'])|number_format:2:",":"."}*</i>
	                    		{/if}
	                    		<span id="selectItem_{$product['id_product']}" onclick="addToCart({$product['id_product']}, 1, '', '{$product['name']}{$product['reference']}')" class="btn_gr">+ {l s='Chọn'}</span>
                    		</div>
	                    </div>
	                </div>
            	{/foreach}
            </div>
        </div>
    </div>
    {/if}
</div>