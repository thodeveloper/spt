<?php /* Smarty version Smarty-3.1.19, created on 2014-08-20 13:56:37
         compiled from "E:\wamp\www\domain\modules\domain\views\templates\front\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3221253f07e704dd5f0-70853494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42e498abf948c37ea498f478947bdeefc4b97c04' => 
    array (
      0 => 'E:\\wamp\\www\\domain\\modules\\domain\\views\\templates\\front\\search.tpl',
      1 => 1408517790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3221253f07e704dd5f0-70853494',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f07e7050f823_80305833',
  'variables' => 
  array (
    'link' => 0,
    'full_domain' => 0,
    'searchedDomainInfo' => 0,
    'domain_tld' => 0,
    'domain_name' => 0,
    'static_token' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f07e7050f823_80305833')) {function content_53f07e7050f823_80305833($_smarty_tpl) {?><!-- InstanceBeginEditable name="body" -->
<div class="div_search">
    <div class="article">
        <div class="box">
        	<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getModuleLink('domain','search');?>
" method="post" id="frm_domain_search" name="frm_domain_search">
	            <input type="text" name="txt_search" value="<?php echo $_smarty_tpl->tpl_vars['full_domain']->value;?>
" placeholder="Enter a Domain Name">
	            <a class="btn-1"><span id="domain_search" class="text_search"><i class="fa fa-search"></i>Search Again</span></a>
            </form>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["available"]==false) {?>
    <div class="article">
        <div class="search_null">
            <p><span class="ico_caution"></span>Sorry, <span class="txt_color1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['full_domain']->value, ENT_QUOTES, 'UTF-8', true);?>
</span> is not available.</p>
        </div>
   	</div>
   	<?php } else { ?>
   	<div class="article">
        <div class="search_notnull">
            <p>
            	<span class="txt_color2">Good news, this domain is available</span> 
            	<a href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket',array(),true));?>
">
					<span class="btn_addcart"><i class="fa fa-shopping-cart"></i>Continue to cart</span>
				</a>
        	</p>
        </div>
   	</div>
    <div class="article">
        <div class="div_result_item">
        	<?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["onsale"]==true) {?>
        		<?php if ($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"]>0) {?>
            		<span class="gribbon_lar_1"><i>On Sale VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["wholesale_price"],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['domain_tld']->value;?>
</i></span>
            	<?php } else { ?>
            		<span class="gribbon_lar_1"><i>On Sale VND<?php echo number_format($_smarty_tpl->tpl_vars['searchedDomainInfo']->value["price"],0,",",".");?>
 <?php echo $_smarty_tpl->tpl_vars['domain_tld']->value;?>
</i></span>
            	<?php }?>
            <?php }?>
            <div class="div_left left">
            	<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</h4>
                <span class="dotname"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain_tld']->value, ENT_QUOTES, 'UTF-8', true);?>
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
            		<span id="selectItem_<?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value["product_id"];?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['searchedDomainInfo']->value["product_id"];?>
, '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
', 1)" class="btn_gr">+ Select</span>
            	</div>
            </div>
        </div>
        <div class="shadow_box"></div>
   	</div>
   	<?php }?>
    <div class="article">
    	<div class="search_result">
        	<div class="title">
            	<span>Here is a list of domains recommended for you:</span>
            	<a href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket',array(),true));?>
">
					<span class="btn_addcart"><i class="fa fa-shopping-cart"></i>Continue to cart</span>
				</a>
            </div>
            <div class="title_page">
            	<span class="ico_result"></span>
                <span class="text">1 - <span id="currentitems">2</span> of <span id="totalitems"><?php echo count($_smarty_tpl->tpl_vars['products']->value)-$_smarty_tpl->tpl_vars['searchedDomainInfo']->value["counter"];?>
</span> <a href="javascript:;" onclick="return showResult('all')">Show All</a></span>
            </div>
            <div class="div_result">
            	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)) {?>
            		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
            			<?php if ($_smarty_tpl->tpl_vars['product']->value->reference!=$_smarty_tpl->tpl_vars['domain_tld']->value) {?>
			            	<div class="item_result <?php if ($_smarty_tpl->tpl_vars['product']->iteration>(2+$_smarty_tpl->tpl_vars['searchedDomainInfo']->value["counter"])) {?><?php echo "hidden_box";?>
<?php }?>">
			            		<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale==true) {?>
			                		<span class="gribbon_sm_1"></span>
			                	<?php }?>
			                    <div class="div_left left">
			                    	<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</h4>
			                        <span class="dotname"><?php echo $_smarty_tpl->tpl_vars['product']->value->reference;?>
</span>
			                    </div>
			                    <div class="div_right right">
			                    	<div class="price">
			                    		<?php if ($_smarty_tpl->tpl_vars['product']->value->wholesale_price>0) {?>
			                    			<del>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->price),0,",",".");?>
*</del><i>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->wholesale_price),0,",",".");?>
*</i>
			                    		<?php } else { ?>
			                    			<i>VND<?php echo number_format(trim($_smarty_tpl->tpl_vars['product']->value->price),2,",",".");?>
*</i>
			                    		<?php }?>
			                    		<span id="selectItem_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
', 1)" class="btn_gr">+ Select</span>
		                    		</div>
			                    </div>
			                </div>
		                <?php }?>
                	<?php } ?>
                <?php }?>
                <div id="showmoreresult" class="title_page bottom">
                    <span class="text">1 - <span id="currentitems1">2</span> of <span id="totalitems1"><?php echo count($_smarty_tpl->tpl_vars['products']->value)-$_smarty_tpl->tpl_vars['searchedDomainInfo']->value["counter"];?>
</span> results <a href="javascript:;" onclick="return showResult('all')">Show All</a></span>
                    <div id="showmore" class="text_show_all">
                    	<a>Show more result</a>
                        <span class="ico"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
