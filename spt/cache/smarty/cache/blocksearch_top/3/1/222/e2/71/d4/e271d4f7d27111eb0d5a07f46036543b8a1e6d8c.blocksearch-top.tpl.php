<?php /*%%SmartyHeaderCode:392153feaf3db25310-26692477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e271d4f7d27111eb0d5a07f46036543b8a1e6d8c' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
    'fe497a343106390dde13a055b9f64880ca414f53' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '392153feaf3db25310-26692477',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5405fa6b1d9b45_41933457',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5405fa6b1d9b45_41933457')) {function content_5405fa6b1d9b45_41933457($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<div id="search_block_top">
	<form method="get" action="http://demo.fireflyinnov.com/en/search" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
			<input type="submit" name="submit_search" value="Search" class="button" />
		</p>
	</form>
</div>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://demo.fireflyinnov.com/en/search', {
						minChars: 3,
						max: 10,
						width: 500,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>
