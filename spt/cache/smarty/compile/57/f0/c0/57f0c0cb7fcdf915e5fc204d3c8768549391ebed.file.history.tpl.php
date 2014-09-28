<?php /* Smarty version Smarty-3.1.19, created on 2014-09-25 13:28:32
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200145423b610e26db6-63996709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f0c0cb7fcdf915e5fc204d3c8768549391ebed' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\history.tpl',
      1 => 1410535268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200145423b610e26db6-63996709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cash' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5423b610e6fc52_78750898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5423b610e6fc52_78750898')) {function content_5423b610e6fc52_78750898($_smarty_tpl) {?><div class="k-content child_panel child_panel1 child_panel2">
	<div class="box_rechange">
		<span id="undo_recharge" class="btn_gr">+ RECHARGE</span>
	</div>
	<div id="organizer2">
		<ul id="panelbar2">

			<li class="k-state-active">
				<div class="line1">
					<div class="col1">
						<span class="ico_money"></span>
					</div>
					<div class="col2">
						<p class="text">
							+ Your money:
						</p>
						<p class="text">
							+ Cash promotion:
						</p>
					</div>
					<div class="col3">
						<p class="price1">
							VND<?php echo number_format($_smarty_tpl->tpl_vars['cash']->value["cash"],0,",",".");?>

						</p>
						<p class="price2">
							VND<?php echo number_format($_smarty_tpl->tpl_vars['cash']->value["promotion_cash"],0,",",".");?>

						</p>
					</div>

				</div>
				<div class="line2">
					<div class="col1">

					</div>
					<div class="col2">
						<p class="text">
							+ Total:
						</p>
					</div>
					<div class="col3">
						<p class="price3">
							VND<?php echo number_format(($_smarty_tpl->tpl_vars['cash']->value["promotion_cash"]+$_smarty_tpl->tpl_vars['cash']->value["cash"]),0,",",".");?>

						</p>
					</div>
				</div>
				<div class="box_child">
					<div class="box_child_content">
						<div id="clientsDb">
							<div id="grid2" style=""></div>
						</div>
					</div>
				</div>
			</li>

		</ul>
		<div id="bottom"></div>
	</div>
</div><?php }} ?>
