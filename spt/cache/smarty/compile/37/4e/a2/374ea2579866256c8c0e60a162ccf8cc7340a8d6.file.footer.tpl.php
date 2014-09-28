<?php /* Smarty version Smarty-3.1.19, created on 2014-09-25 02:40:45
         compiled from "E:\wamp\www\spt\spt\spt\themes\firefly\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:288854231e3d22f523-43670519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '374ea2579866256c8c0e60a162ccf8cc7340a8d6' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\themes\\firefly\\footer.tpl',
      1 => 1408778852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288854231e3d22f523-43670519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'js_dir' => 0,
    'js_files' => 0,
    'js_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54231e3d256ae9_17204587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54231e3d256ae9_17204587')) {function content_54231e3d256ae9_17204587($_smarty_tpl) {?><div class="footer">
	<div class="div_footer">
    	<div class="article">
        	<div class="col">
            	<h4>company</h4>
                <ul>
                	<li><a>dasd asd as dsada dasd sad sad sad sa dsad as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                </ul>
            </div>
            <div class="col">
            	<h4>services</h4>
                <ul>
                	<li>dasd asd as dsada dasd sad sad sad sa dsad as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                </ul>
            </div>
            <div class="col">
            	<h4>info</h4>
                <ul>
                	<li>dasd asd as dsada dasd sad sad sad sa dsad as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                </ul>
            </div>
           
            <div class="col last">
            	<h4>offer</h4>
                <div class="input_div">
                	<input type="text" />
                    <a class="btn_search">Submit</a>
                    <div class="div_social">
                        <a class="ico_face"></a>
                        <a class="ico_twitter"></a>
                        <a class="ico_google"></a>
                    </div
                ></div>
            </div>
        </div>
    </div>
</div>
<div class="div_copy">
	<div class="div_copy_content">
        <div class="div_menu">
            <a>Domain</a>
            <span class="line"></span>
            <a>Hostings</a>
            <span class="line"></span>
            <a>Colocation </a>
            <span class="line"></span>
            <a>Emails & Marketing</a>
            <span class="line"></span>
            <a>Web Design</a>
        </div>
        <span class="copy">@ Copyright 2014 by SPT. All rights reserved</span>
    </div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
common.js"></script>
<?php if (isset($_smarty_tpl->tpl_vars['js_files']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
	<?php } ?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
<!-- InstanceEnd -->
</html><?php }} ?>
