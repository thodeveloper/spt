<?php /*%%SmartyHeaderCode:2455853f05f7f314a86-85770836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eacccbeb07a748797216368c57a9ef147f91d8f4' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1406792524,
      2 => 'file',
    ),
    '97c5ece32cae09ba4835bfdff57dac0b187a8aeb' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\blocksearch\\blocksearch-instantsearch.tpl',
      1 => 1406792524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2455853f05f7f314a86-85770836',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f06ca1ad0611_91802808',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f06ca1ad0611_91802808')) {function content_53f06ca1ad0611_91802808($_smarty_tpl) {?><!-- block seach mobile -->
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
