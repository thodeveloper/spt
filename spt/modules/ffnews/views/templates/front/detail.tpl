<div class="div_sub_menu">
	<div class="sub_menu">
		<a>Produce</a>
		<span class="line"></span>
		<a>Web Hosting</a>
	</div>
</div>
<div class="body body_news">
	<div class="article">
		<div class="col_l left">
			<div class="line">
				<span>NEWS</span>
			</div>
			<div class="box">
				<img class="banner_ads" src="{$img_dir}banner_ad.png" width="177" />
				<div class="detail_new">
					<h3>{$post["meta_title"]}</h3>
					<p>
						{$post['short_description']}
					</p>
					{if $post['post_img'] != "no" }
                    <img src="{$modules_dir}smartblog/images/{$post['post_img']}" alt="{$post['meta_title']}" width="181" height="129">
					{/if}
					{$post['content']}
				</div>
			</div>
		</div>
		<div class="col_r right">
			<a class="ads"> <img src="{$img_dir}Web-New_03.png" width="320" /> </a>
			<a class="ads"> <img src="{$img_dir}Web-New_03.png" width="320" /> </a>
		</div>
	</div>
</div>