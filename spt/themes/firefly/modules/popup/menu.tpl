<div class="div_headermenu">
	<div class="article">
    	<a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}" class="logo"><img src="{$img_dir}logo.png" width="242" /></a>
        <div class="div_menu">
            <ul id="menu">
            	{foreach from=$categories item=category key=cate_id name=category}
                <li><a href="{$link->getModuleLink('ffproduct', 'main', ['id_cate' => $cate_id], true)|escape:'quotes':'UTF-8'}">{$category['name']}</a>
                	<span class="arrow"> </span>
                	{if isset($category['children'])}
                	<ul>
                        <li>
                            <div class="div_content_menu">
                            	{foreach from=$category['children'] item=sub_category key=sub_cate_id name=sub_category}
                            	<div class="col">
                            		<h1><a href="{$link->getModuleLink('ffproduct', 'main', ['id_cate' => $sub_cate_id], true)|escape:'quotes':'UTF-8'}">{$sub_category['name']}</a></h1>
                                </div>
                                {/foreach}
                            </div>
                        </li>
                    </ul>
                    {/if}
                </li>
                {/foreach}
                <li><a href="{$link->getModuleLink('ffnews', 'home')|escape:'quotes':'UTF-8'}">{l s='Tin tức'}</a>
                	<span class="arrow"> </span>
                </li>
            </ul>
        </div>
    </div>
</div>