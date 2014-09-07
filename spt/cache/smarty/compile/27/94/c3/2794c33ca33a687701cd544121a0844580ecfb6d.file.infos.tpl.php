<?php /* Smarty version Smarty-3.1.19, created on 2014-09-05 13:45:07
         compiled from "E:\wamp\www\spt\spt\spt\modules\bankwire\views\templates\hook\infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387854095bf3144ef0-04227056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2794c33ca33a687701cd544121a0844580ecfb6d' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\bankwire\\views\\templates\\hook\\infos.tpl',
      1 => 1409899496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387854095bf3144ef0-04227056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54095bf3188dd5_94487423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54095bf3188dd5_94487423')) {function content_54095bf3188dd5_94487423($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/bankwire/bankwire.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order's status will change to 'Waiting for Payment.'",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'mod'=>'bankwire'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
