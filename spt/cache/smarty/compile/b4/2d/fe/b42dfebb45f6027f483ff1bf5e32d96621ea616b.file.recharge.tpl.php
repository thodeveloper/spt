<?php /* Smarty version Smarty-3.1.19, created on 2014-09-16 00:19:25
         compiled from "E:\wamp\www\spt\spt\spt\modules\account\views\templates\front\\recharge.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124754171f9d02d728-48672022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42dfebb45f6027f483ff1bf5e32d96621ea616b' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\account\\views\\templates\\front\\\\recharge.tpl',
      1 => 1410511862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124754171f9d02d728-48672022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recharge_list' => 0,
    'product_id' => 0,
    'recharge' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54171f9d055679_00784255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54171f9d055679_00784255')) {function content_54171f9d055679_00784255($_smarty_tpl) {?><div id="window_recharge" style="display: none;">
	<form name="register_account" id="register_account">
		<div class="div_pop">
			<p class="error" id="recharge_error"> </p>
	        <div class="div_form">
	            <p class="form">
					<span class="textline"><i>*</i><?php echo smartyTranslate(array('s'=>'Card options'),$_smarty_tpl);?>
</span>
					<select name="recharge_product_id" id="recharge_product_id" class="xsm">
						<?php  $_smarty_tpl->tpl_vars['recharge'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recharge']->_loop = false;
 $_smarty_tpl->tpl_vars['product_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recharge_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recharge']->key => $_smarty_tpl->tpl_vars['recharge']->value) {
$_smarty_tpl->tpl_vars['recharge']->_loop = true;
 $_smarty_tpl->tpl_vars['product_id']->value = $_smarty_tpl->tpl_vars['recharge']->key;
?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">VND<?php echo number_format($_smarty_tpl->tpl_vars['recharge']->value["product_price"],0,",",".");?>
</option>
	                    <?php } ?>
	                </select>
	            </p>
	        </div>
	    </div>
	    <p class="div_btn">
	    	<button class="btn_gr" name="" id="recharge_addtocart">Add to cart</button>
	    </p>
    </form>
</div><?php }} ?>
