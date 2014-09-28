<div class="body body_news">
	<div class="article">
		<div class="col_l left">
			<div class="line">
				<span>NEWS</span>
			</div>
			<div class="box">
				<img class="banner_ads" src="{$img_dir}banner_ad.png" width="177" />
				<ul>
					{foreach from=$posts item=post name=post}
					<li {if $post@first}class="first"{/if}>
						{if $post['post_img'] != "no" }
						<div class="div_img left">
	                        <img src="{$modules_dir}smartblog/images/{$post['post_img']}-single-default.jpg" alt="{$post['meta_title']}" width="181" height="129">
						</div>
						{/if}
						<div class="div_content left">
							<p>
								<a href="{$link->getModuleLink('ffnews', 'detail', ['id_news' => $post['id_post']], true)|escape:'quotes':'UTF-8'}" class="title">{$post['meta_title']}</a>
							</p>
							<p>
								{$post['short_description']}
							</p>
						</div>
						<a class="btn" href="{$link->getModuleLink('ffnews', 'detail', ['id_news' => $post['id_post']], true)|escape:'quotes':'UTF-8'}">Read more</a>
					</li>
					{/foreach}
				</ul>
			</div>
			<div class="title_page bottom">
				<span class="text">{$start+1} - {$end} of {$total} results</span>
				<div class="text_show_all">
					<a href="{$link->getModuleLink('ffnews', 'home', ['start' => $end], true)|escape:'quotes':'UTF-8'}">Next page</a>
				</div>
			</div>
		</div>
		<div class="col_r right">
			<a class="ads"> <img src="{$img_dir}Web-New_03.png" width="320" /> </a>
			<a class="ads"> <img src="{$img_dir}Web-New_03.png" width="320" /> </a>
		</div>
	</div>
</div>