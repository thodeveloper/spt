<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 14:55:52
         compiled from "E:\wamp\www\domain\themes\firefly\modules\popup\new_retailer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:600753f06008cb3516-03551644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc0e4ae70c167ad20c806804b9b53cb6cf02c76e' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\themes\\firefly\\modules\\popup\\new_retailer.tpl',
      1 => 1408254821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '600753f06008cb3516-03551644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f06008cbc7d1_11658850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f06008cbc7d1_11658850')) {function content_53f06008cbc7d1_11658850($_smarty_tpl) {?><div id="window_reseller" >
	<div class="div_pop">
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> User Name:</span>
                <input type="text" class="xsm" />
                <span class="notice error"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Password:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Corfirm Password:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> Email:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> Confirm Email:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Firt - Last Name:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        
        <div class="div_form">
            <p class="form">
                <span class="text">Birthday:</span>
                <select class="xsm small first">
                    <option>1</option>
                    <option>2</option>
                </select>
                <select class="xsm small">
                    <option>1</option>
                    <option>2</option>
                </select>
                <select class="xsm small">
                    <option>1999</option>
                    <option>1998</option>
                </select>
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> Gender:</span>
                <select class="xsm ">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Adress:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> City:</span>
                <select class="xsm">
                    <option>HCM</option>
                    <option>HN</option>
                </select>
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i>  Phone Number:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> Nick Yahoo:	</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> Nick Skype:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Avatar/Logo:</span>
                <input type="file" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"></span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
Web-regiter_13.png" width="228" />
            </p>
        </div>
         <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Code:</span>
                <input type="text" class="xsm" />
            </p>
        </div>
    </div>
    <p class="pop">By clicking "Create Account" you agree to the terms and conditions of the following: <a class="txt_color1">Universal Terms of Service   Privacy Policy</a></p>
    <p class="div_btn">
    	<button class="btn_gr">Create Account</button>
    </p>
</div><?php }} ?>
