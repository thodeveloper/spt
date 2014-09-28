<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 05:40:51
         compiled from "E:\wamp\www\spt\spt\spt\modules\domain\views\templates\front\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180645427ac7a23d716-57333019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39651e1557014c3883e035436cea8a6d98109cc9' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\domain\\views\\templates\\front\\search.tpl',
      1 => 1411944042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180645427ac7a23d716-57333019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5427ac7a58b867_64391330',
  'variables' => 
  array (
    'link' => 0,
    'searchKeyWord' => 0,
    'isSearchedDomainAvailable' => 0,
    'searchedDomainInfo' => 0,
    'recommendations' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5427ac7a58b867_64391330')) {function content_5427ac7a58b867_64391330($_smarty_tpl) {?><!-- InstanceBeginEditable name="body" -->
<div class="div_search">
    <div class="article">
        <div class="box">
        	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('domain','search');?>
" method="post" id="frm_domain_search" name="frm_domain_search">
	            <input type="text" name="txt_search" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchKeyWord']->value, ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Nhập tên miền">
	            <a class="btn-1"><span id="domain_search" class="text_search"><i class="fa fa-search"></i>Tìm kiếm lại</span></a>
            </form>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['isSearchedDomainAvailable']->value==false) {?>
    <div class="article">
        <div class="search_null">
            <p><span class="ico_caution"></span>Rất tiếc, <span class="txt_color1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchKeyWord']->value, ENT_QUOTES, 'UTF-8', true);?>
</span> đã được đăng ký.</p>
        </div>
   	</div>
   	<?php } elseif (isset($_smarty_tpl->tpl_vars['searchedDomainInfo']->value)) {?>
   	<div class="article">
        <div class="search_notnull">
            <p>
            	<span class="txt_color2">Tin vui, tên miền này chưa được đăng ký</span> 
				<a><span class="btn_addcart" onclick="return addToCart(<?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value['id_product'];?>
, 1, '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket',array(),true));?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchKeyWord']->value, ENT_QUOTES, 'UTF-8', true);?>
')"><i class="fa fa-shopping-cart"> </i><?php echo smartyTranslate(array('s'=>'Vào giỏ hàng'),$_smarty_tpl);?>
</span></a>
        	</p>
        </div>
   	</div>
    <div class="article">
        <div class="div_result_item">
        	<?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["onsale"]==true) {?>
        		<?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"]>0) {?>
            		<span class="gribbon_lar_1"><i>Đang bán VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value['reference'];?>
</i></span>
            	<?php } else { ?>
            		<span class="gribbon_lar_1"><i>Đang bán VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["price"],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value['reference'];?>
</i></span>
            	<?php }?>
            <?php }?>
            <div class="div_left left">
            	<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchedDomainInfo']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <span class="dotname"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchedDomainInfo']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
</span>
            </div>
            <div class="div_right right">
            	<div class="price">
    				<?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"]>0) {?>
            			<del>VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["price"],0,",",".");?>
*</del><i>VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"],0,",",".");?>
*</i>
            		<?php } else { ?>
            			<i>VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["price"],2,",",".");?>
*</i>
            		<?php }?>
            		<span id="selectItem_<?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value["id_product"];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value['id_product'];?>
, 1, '', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['searchKeyWord']->value, ENT_QUOTES, 'UTF-8', true);?>
')" class="btn_gr">+ <?php echo smartyTranslate(array('s'=>'Chọn'),$_smarty_tpl);?>
</span>
            	</div>
            </div>
        </div>
        <div class="shadow_box"> </div>
   	</div>
   	<?php }?>
   	<?php if (isset($_smarty_tpl->tpl_vars['recommendations']->value)) {?>
    <div class="article">
    	<div class="search_result">
        	<div class="title">
            	<span><?php echo smartyTranslate(array('s'=>'Danh sách tên miền đề nghị cho bạn'),$_smarty_tpl);?>
:</span>
            </div>
            <div class="title_page">
            	<span class="ico_result"> </span>
            </div>
            <div class="div_result">
        		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommendations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	            	<div class="item_result">
	            		<?php if ($_smarty_tpl->tpl_vars['product']->value['onsale']==true) {?>
	                		<span class="gribbon_sm_1"> </span>
	                	<?php }?>
	                    <div class="div_left left">
	                    	<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
	                        <span class="dotname"><?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</span>
	                    </div>
	                    <div class="div_right right">
	                    	<div class="price">
	                    		<?php if ($_smarty_tpl->tpl_vars['product']->value['wholesale_price']>0) {?>
	                    			<del>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value['price']),0,",",".");?>
*</del><i>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value['wholesale_price']),0,",",".");?>
*</i>
	                    		<?php } else { ?>
	                    			<i>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value['price']),2,",",".");?>
*</i>
	                    		<?php }?>
	                    		<span id="selectItem_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
, 1, '', '<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
')" class="btn_gr">+ <?php echo smartyTranslate(array('s'=>'Chọn'),$_smarty_tpl);?>
</span>
                    		</div>
	                    </div>
	                </div>
            	<?php } ?>
            </div>
        </div>
    </div>
    <?php }?>
</div><?php }} ?>
