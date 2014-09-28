<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 06:20:44
         compiled from "E:\wamp\www\spt\spt\spt\modules\dns\views\templates\front\dns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17183542897cc7245d9-06215986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fc11074c4813188c00070a797bbd69ee89477dc' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\dns\\views\\templates\\front\\dns.tpl',
      1 => 1411946429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17183542897cc7245d9-06215986',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542897cc76d422_24538574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542897cc76d422_24538574')) {function content_542897cc76d422_24538574($_smarty_tpl) {?><!-- InstanceBeginEditable name="body" -->
<div class="body body_dns">
	<div class="article">
    	<div class="box">
        	<div class="title">sdfdsfsd.com <a class="right a1"><i class="fa fa-angle-right"></i></a><a class="right"><i class="fa fa-angle-left"></i></a></div>
            <div class="content">
            	<select class="domain_name">
                	<option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                </select>
                <p class="status">Status: <strong>Active</strong>    <i class="line">|</i>   Created: 8/16/2014   <i class="line">|</i>   Expires:<i class="text2">8/6/2014</i><span class="span1">Folder: <i class="text1">None</i>    <i class="line">|</i>    Profile: <i class="text1">None</i></span></p>
            	<select class="status">
                	<option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                </select>
            </div>
        </div>
        <div class="box2">
        	<span class="tab">DNS Zone File</span>
            <div class="line1">
                <div class="info_zone left">
                    <span><strong>Zone File <i class="fa fa-exclamation-circle"></i></strong></span>
                    <span>Last update 6/2/2014 12:12:24 AM MST</span>
                </div>
                <div class="total_right right">
                    <span>13 records in this zone</span>
                </div>
            </div>
            <div class="line2">
            	<a class="text3 left" id="undo_record"><i class="fa fa-plus"></i>Add Record</a>
                <a class="text3 left"><i class="fa fa-times"></i>Delete</a>
                <select class="right">
                	<option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                    <option>dasdsa.com</option>
                </select>
            </div>
            <div class="line3">
            	<p class="bg"><strong>A (Host)<i class="fa fa-exclamation-circle"></i></strong></p>
                <p class="txt">1 Records  (0 Selected)</p>
                <table cellpadding="0" cellspacing="0">
                	<thead>
                    	<tr>
                        	<td><i class="fa fa-check"></i></td>
                            <td>Host</td>
                            <td>Points To</td>
                            <td>TTL</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td><input type="checkbox"></td>
                            <td>@</td>
                            <td>221.133.9.157</td>
                            <td>600 seconds</td>
                            <td><a class="left"><i class="fa fa-edit"></i></a><a class="left"><i class="fa fa-recycle"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="line3">
            	<p class="bg"><strong>A (Host)<i class="fa fa-exclamation-circle"></i></strong></p>
                <p class="txt">1 Records  (0 Selected)</p>
                <p class="add_re"><a>Add recored</a></p>
                
            </div>
            <div class="line3">
            	<p class="bg"><strong>A (Host)<i class="fa fa-exclamation-circle"></i></strong></p>
                <p class="txt">1 Records  (0 Selected)</p>
                <table cellpadding="0" cellspacing="0">
                	<thead>
                    	<tr>
                        	<td><i class="fa fa-check"></i></td>
                            <td>Host</td>
                            <td>Points To</td>
                            <td>TTL</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                        	<td><input type="checkbox"></td>
                            <td>@</td>
                            <td>221.133.9.157</td>
                            <td>600 seconds</td>
                            <td><a class="left"><i class="fa fa-edit"></i></a><a class="left"><i class="fa fa-recycle"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Popup create account reseller-->
<div id="window_record" >
	<div class="div_pop">
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i>Record type:</span>
                <select class="xsm ">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <span class="notice error"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Host:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"><i>*</i> Points to:</span>
                <input type="text" class="xsm" />
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
        <div class="div_form">
            <p class="form">
                <span class="text"> TTL:</span>
                <select class="xsm ">
                    <option>Male</option>
                    <option>Female</option>
                </select>
                <span class="notice"><i class="fa fa-exclamation-circle"></i>(0-9, a-z, _-)</span>
            </p>
        </div>
    </div>
    
    <p class="div_btn">
    	<button class="btn_gr">Add another </button>
        <button class="btn_gr">Finish </button>
        <button class="btn_bl">Cancel </button>
    </p>
</div><?php }} ?>
