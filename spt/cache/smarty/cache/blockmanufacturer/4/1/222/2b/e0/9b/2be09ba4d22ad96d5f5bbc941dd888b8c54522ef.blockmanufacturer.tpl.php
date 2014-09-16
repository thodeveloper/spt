<?php /*%%SmartyHeaderCode:326435417369b33c917-37752061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be09ba4d22ad96d5f5bbc941dd888b8c54522ef' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blockmanufacturer\\blockmanufacturer.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326435417369b33c917-37752061',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417369b44ffd0_77392759',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417369b44ffd0_77392759')) {function content_5417369b44ffd0_77392759($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4 class="title_block"><a href="http://demo.fireflyinnov.com/en/manufacturers" title="Manufacturers">Manufacturers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://demo.fireflyinnov.com/en/1_fashion-manufacturer" title="More about Fashion Manufacturer">Fashion Manufacturer</a></li>
							<li class="last_item"><a href="http://demo.fireflyinnov.com/en/2_spt" title="More about SPT">SPT</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://demo.fireflyinnov.com/en/1_fashion-manufacturer">Fashion Manufacturer</option>
									<option value="http://demo.fireflyinnov.com/en/2_spt">SPT</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
