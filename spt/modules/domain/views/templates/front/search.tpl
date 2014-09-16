<!-- InstanceBeginEditable name="body" -->
<div class="div_search">
    <div class="article">
        <div class="box">
        	<form action="{$link->getModuleLink('domain', 'search')}" method="post" id="frm_domain_search" name="frm_domain_search">
	            <input type="text" name="txt_search" value="{$full_domain}" placeholder="Enter a Domain Name">
	            <a class="btn-1"><span id="domain_search" class="text_search"><i class="fa fa-search"></i>Search Again</span></a>
            </form>
        </div>
    </div>

    {if $searchedDomainInfo["available"] == false }
    <div class="article">
        <div class="search_null">
            <p><span class="ico_caution"></span>Sorry, <span class="txt_color1">{$full_domain|escape:'html':'UTF-8'}</span> is not available.</p>
        </div>
   	</div>
   	{else}
   	<div class="article">
        <div class="search_notnull">
            <p>
            	<span class="txt_color2">Good news, this domain is available</span> 
            	<a href="{$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}">
					<span class="btn_addcart"><i class="fa fa-shopping-cart"></i>Continue to cart</span>
				</a>
        	</p>
        </div>
   	</div>
    <div class="article">
        <div class="div_result_item">
        	{if $searchedDomainInfo["onsale"] == true}
        		{if $searchedDomainInfo["wholesale_price"] > 0 }
            		<span class="gribbon_lar_1"><i>On Sale VND{$searchedDomainInfo["wholesale_price"]|number_format:0:",":"."} {$domain_tld}</i></span>
            	{else}
            		<span class="gribbon_lar_1"><i>On Sale VND{$searchedDomainInfo["price"]|number_format:0:",":"."} {$domain_tld}</i></span>
            	{/if}
            {/if}
            <div class="div_left left">
            	<h4>{$domain_name|escape:'html':'UTF-8'}</h4>
                <span class="dotname">{$domain_tld|escape:'html':'UTF-8'}</span>
            </div>
            <div class="div_right right">
            	<div class="price">
    				{if $searchedDomainInfo["wholesale_price"] > 0 }
            			<del>VND{$searchedDomainInfo["price"]|number_format:0:",":"."}*</del><i>VND{$searchedDomainInfo["wholesale_price"]|number_format:0:",":"."}*</i>
            		{else}
            			<i>VND{$searchedDomainInfo["price"]|number_format:2:",":"."}*</i>
            		{/if}
            		<span id="selectItem_{$searchedDomainInfo["product_id"]}" onclick="addToCart({$searchedDomainInfo["product_id"]}, '{$domain_name|escape:'html':'UTF-8'}', 1)" class="btn_gr">+ Select</span>
            	</div>
            </div>
        </div>
        <div class="shadow_box"></div>
   	</div>
   	{/if}
    <div class="article">
    	<div class="search_result">
        	<div class="title">
            	<span>Here is a list of domains recommended for you:</span>
            </div>
            <div class="title_page">
            	<span class="ico_result"></span>
                <span class="text">1 - <span id="currentitems">2</span> of <span id="totalitems">{count($products)-$searchedDomainInfo["counter"]}</span> <a href="javascript:;" onclick="return showResult('all')">Show All</a></span>
            </div>
            <div class="div_result">
            	{if isset($products)}
            		{foreach from=$products item=product name=product}
            			{if $product->reference != $domain_tld}
			            	<div class="item_result {if $product@iteration > (2+$searchedDomainInfo["counter"])}{"hidden_box"}{/if}">
			            		{if $product->on_sale == true}
			                		<span class="gribbon_sm_1"></span>
			                	{/if}
			                    <div class="div_left left">
			                    	<h4>{$domain_name|escape:'html':'UTF-8'}</h4>
			                        <span class="dotname">{$product->reference}</span>
			                    </div>
			                    <div class="div_right right">
			                    	<div class="price">
			                    		{if $product->wholesale_price > 0 }
			                    			<del>VND{trim($product->price)|number_format:0:",":"."}*</del><i>VND{trim($product->wholesale_price)|number_format:0:",":"."}*</i>
			                    		{else}
			                    			<i>VND{trim($product->price)|number_format:2:",":"."}*</i>
			                    		{/if}
			                    		<span id="selectItem_{$product->id}" onclick="addToCart({$product->id}, '{$domain_name|escape:'html':'UTF-8'}', 1)" class="btn_gr">+ Select</span>
		                    		</div>
			                    </div>
			                </div>
		                {/if}
                	{/foreach}
                {/if}
                <div id="showmoreresult" class="title_page bottom">
                    <span class="text">1 - <span id="currentitems1">2</span> of <span id="totalitems1">{count($products)-$searchedDomainInfo["counter"]}</span> results <a href="javascript:;" onclick="return showResult('all')">Show All</a></span>
                    <div id="showmore" class="text_show_all">
                    	<a>Show more result</a>
                        <span class="ico"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>