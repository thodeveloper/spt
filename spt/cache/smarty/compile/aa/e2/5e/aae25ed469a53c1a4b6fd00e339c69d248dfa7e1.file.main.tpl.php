<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 00:19:24
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1830254171f9cea0fb5-53324807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae25ed469a53c1a4b6fd00e339c69d248dfa7e1' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\main.tpl',
      1 => 1410627071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1830254171f9cea0fb5-53324807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'customer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54171f9d010e76_71315589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54171f9d010e76_71315589')) {function content_54171f9d010e76_71315589($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/recharge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cartUrl'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket',array(),true))),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('accountUrl'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('account','main',array(),true))),$_smarty_tpl);?>

<div class="div_account">
    <div class="article">
    	<div class="div_box_acc">
        	<h3>My Account</h3>
            <span class="name"><?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
</span>
            <span>Registered email: <?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
 | PIN: <a class="txt_color2">***</a></span>
            <ul>
            	<li class="first"><a class="txt_color2">Contact Support</a></li>
          	</ul>
        </div>
    </div>
    <div class="article">
    	<div class="div_tab">
            <div id="tabstrip">
                <ul>
                    <li class="k-state-active">
                    	<span class="k-image mc1"></span>
                        Products
                    </li>
                    <li>
                    	<span class="k-image mc2"></span>
                        History
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['customer']->value->id_default_group==@constant('__RESELLER_GROUP_ID__')) {?>
                    <li>
                    	<span class="k-image mc3"></span>
                        Clients	
                    </li>
                    <?php }?>
                    <li>
                    	<span class="k-image mc4"></span>
                        Settings
                    </li>
                </ul>
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/history.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['customer']->value->id_default_group==@constant('__RESELLER_GROUP_ID__')) {?>
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/client.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <?php }?>
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
               
            </div>
    	</div>
    </div>
</div><?php }} ?>
