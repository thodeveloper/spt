<?php /* Smarty version Smarty-3.1.19, created on 2014-08-28 10:22:40
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1729253fea080ed2624-31404784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae25ed469a53c1a4b6fd00e339c69d248dfa7e1' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\main.tpl',
      1 => 1408778850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1729253fea080ed2624-31404784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fea081056887_52232103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fea081056887_52232103')) {function content_53fea081056887_52232103($_smarty_tpl) {?><div class="div_account">
    <div class="article">
    	<div class="div_box_acc">
        	<h3>My Account</h3>
            <span class="name">Cuong trinh</span>
            <span>Customer Number: 0935446 | PIN: <a class="txt_color2">***</a></span>
            <ul>
            	<li class="first"><a class="txt_color2">Contact Support</a></li>
                <li><a class="txt_color2">Update Security Settings</a></li>
                <li><a class="txt_color2">My Help</a></li>
                
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
                    <li>
                    	<span class="k-image mc3"></span>
                        Clients	
                    </li>
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
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/client.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                <div>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_path']->value)."/settings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
               
            </div>
    	</div>
    </div>
</div><?php }} ?>
