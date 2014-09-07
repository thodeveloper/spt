<?php /* Smarty version Smarty-3.1.19, created on 2014-09-05 13:52:09
         compiled from "E:\wamp\www\spt\spt\spt\modules\cheque\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2137754095d99d7b9b9-47354984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd018b1a73e5dba3e41dc9447bb1059a16ad278ae' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\cheque\\views\\templates\\hook\\infos.tpl',
      1 => 1409899911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2137754095d99d7b9b9-47354984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54095d99dc1b70_49000830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54095d99dc1b70_49000830')) {function content_54095d99dc1b70_49000830($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
