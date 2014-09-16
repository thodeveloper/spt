<?php /* Smarty version Smarty-3.1.19, created on 2014-09-15 10:03:39
         compiled from "E:\wamp\www\spt\spt\spt\modules\dashtrends\views\templates\hook\dashboard_zone_two.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190785416570b92df34-02858280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a41cfed949286bbe766aa0846c33efe3176b12d' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\dashtrends\\views\\templates\\hook\\dashboard_zone_two.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190785416570b92df34-02858280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allow_push' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5416570b96ca97_23414213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5416570b96ca97_23414213')) {function content_5416570b96ca97_23414213($_smarty_tpl) {?>
<div class="clearfix"></div>
<section id="dashtrends" class="panel widget <?php if ($_smarty_tpl->tpl_vars['allow_push']->value) {?> allow_push<?php }?>">
	<header class="panel-heading">
		<i class="icon-bar-chart"></i> <?php echo smartyTranslate(array('s'=>'Dashboard','mod'=>'dashtrends'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
&profitability_conf=1" title="configure">
				<i class="process-icon-configure"></i>
			</a>
			<a class="list-toolbar-btn" href="#"  onclick="refreshDashboard('dashtrends'); return false;"  title="refresh">
				<i class="process-icon-refresh"></i>
			</a>
		</span>
	</header>
	<div id="dashtrends_toolbar" class="row">
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'sales');">
			<dt><?php echo smartyTranslate(array('s'=>'Sales','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="sales_score"></span></dd>
			<dd class="dash_trend"><span id="sales_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'orders');">
			<dt><?php echo smartyTranslate(array('s'=>'Orders','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="orders_score"></span></dd>
			<dd class="dash_trend"><span id="orders_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'average_cart_value');">
			<dt><?php echo smartyTranslate(array('s'=>'Cart Value','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="cart_value_score"></span></dd>
			<dd class="dash_trend"><span id="cart_value_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'visits');">
			<dt><?php echo smartyTranslate(array('s'=>'Visits','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="visits_score"></span></dd>
			<dd class="dash_trend"><span id="visits_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'conversion_rate');">
			<dt><?php echo smartyTranslate(array('s'=>'Conversion Rate','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="conversion_rate_score"></span></dd>
			<dd class="dash_trend"><span id="conversion_rate_score_trends"></span></dd>
		</dl>
		<dl class="col-xs-4 col-lg-2" onclick="selectDashtrendsChart(this, 'net_profits');">
			<dt><?php echo smartyTranslate(array('s'=>'Net Profit','mod'=>'dashtrends'),$_smarty_tpl);?>
</dt>
			<dd class="data_value size_l"><span id="net_profits_score"></span></dd>
			<dd class="dash_trend"><span id="net_profits_score_trends"></span></dd>
		</dl>
	</div>

	<div id="dash_trends_chart1" class='chart with-transitions'>
		<svg></svg>
	</div>

</section><?php }} ?>
