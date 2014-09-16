<?php /*%%SmartyHeaderCode:2420854165280c170e2-77869806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '998e17a35e62d6bc5ad3cd367fbaa5ec018b36aa' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\blockmyaccountfooter\\blockmyaccountfooter.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2420854165280c170e2-77869806',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54165280d2c7f9_62970999',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54165280d2c7f9_62970999')) {function content_54165280d2c7f9_62970999($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<h4 class="title_block"><a href="http://demo.fireflyinnov.com/en/my-account" title="Manage my customer account" rel="nofollow">My account</a></h4>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://demo.fireflyinnov.com/en/order-history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://demo.fireflyinnov.com/en/order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://demo.fireflyinnov.com/en/addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://demo.fireflyinnov.com/en/identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
		</ul>
		<p class="logout"><a href="http://demo.fireflyinnov.com/en/?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
