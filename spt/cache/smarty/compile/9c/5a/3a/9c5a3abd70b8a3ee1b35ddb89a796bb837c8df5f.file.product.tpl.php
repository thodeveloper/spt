<?php /* Smarty version Smarty-3.1.19, created on 2014-09-15 15:33:00
         compiled from "E:\wamp\www\spt\spt\spt\modules\ffproduct\views\templates\front\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1732754165281296dd2-31618621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5a3abd70b8a3ee1b35ddb89a796bb837c8df5f' => 
    array (
      0 => 'E:\\wamp\\www\\spt\\spt\\spt\\modules\\ffproduct\\views\\templates\\front\\product.tpl',
      1 => 1410769964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1732754165281296dd2-31618621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_541652812d3a22_66485765',
  'variables' => 
  array (
    'link' => 0,
    'img_dir' => 0,
    'products' => 0,
    'counter' => 0,
    'product' => 0,
    'id_product' => 0,
    'combination' => 0,
    'combinations' => 0,
    'public_group_name' => 0,
    'group_name' => 0,
    'attributes' => 0,
    'attribute' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541652812d3a22_66485765')) {function content_541652812d3a22_66485765($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('cartUrl'=>addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ffcart','basket',array(),true))),$_smarty_tpl);?>

<div class="div_sub_menu">
	<div class="sub_menu">
    	<a>Produce</a>
        <span class="line"></span>
        <a>Web Hosting</a>
    </div>
</div>
<div class="body">
	<div class="article">
    	<div class="div_img">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
product_01.jpg" width="426" />
        </div>
        <div class="content">
        	<h3>WEB HOSTING</h3>
            <h4>Fast, Secure, reliable hosting trusted by millions.</h4>
            <span class="text">Industry's <strong>fastest page load times</strong> using cPanel® for Linux <span class="promote">99.9%</span> Uptime Guarantee*</span>
            <div class="div_btn">
            	<div class="col_l">
                	<span class="text">Stating at</span>
                    <span class="price">$12.99/mo</span>
                </div>
                <div class="col_r">
                	<span class="btn_get">Get stated</span>
                </div>
            </div>
        </div>
        <span class="gribbon_1"></span>
    </div>
</div>
<div class="body body_fe">
	<div class="article">
    	<div class="menu">
        	<ul class="">
            	<li class="btn_fe_pro active btn_body_cont1"><a>Plans & Pricing</a><i></i> </li>
                <li class="btn_fe_pro btn_body_cont2"><a>Features</a><i></i> </li>
                <li class="btn_fe_pro btn_body_cont3"><a>Compare Plans</a><i></i></li>
                <li class="btn_fe_pro btn_body_cont5 last"><a>FAQ</a><i></i></li>
            </ul>
        </div>
    </div>
</div>
<div class="body body_cont body_cont1">
	<div class="article">
    	<div class="div_content">
        	<div class="content1">
                <h3>Looking for hosting that’s easy, reliable and lightning-fast?</h3>
                <p>Take charge with industry-standard cPanel or Parallels® Plesk control panels; 24/7/365 free, support on the phone or online; and 99.9% uptime* and money-back guarantees*. With our award-winning data center, you’ll know your site is always up and running. GoDaddy Website Hosting is a flexible solution for businesses using a designer to create their website and a powerful option for designers and developers with hundreds of web applications just a click away.</p>
           	</div>
            <div class="content">
            	<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
            	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
            		<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                <div class="div_col <?php if ($_smarty_tpl->tpl_vars['counter']->value==2) {?>div_col_middle<?php }?>">
                    <div class="col">
                        <h4><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h4>
                        <span class="text1"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</span>
                        <span class="promote text2">As low as</span>
                        <span class="promote text3"><strong>VND<?php echo number_format($_smarty_tpl->tpl_vars['product']->value['price'],0,",",".");?>
</strong>/month</span>
                        <span><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</span>
                        <input class="customers" id="reg_period_<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
" style="width: 100%;"/>
                        <span class="btn_cart" onclick="return productAddToCart(<?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
)">Add to Cart</span>
                    </div>
                    <div class="col_line">
                    	<?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['combinations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->_loop = true;
?>
                    		<?php if ($_smarty_tpl->tpl_vars['combination']->value['group_name']=='Disk Space') {?>
                    			<span><strong><?php echo $_smarty_tpl->tpl_vars['combination']->value['attribute_name'];?>
</strong> Storage</span>
                    			<?php break 1?>
                    		<?php }?>
                    	<?php } ?>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
                    	<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
                    <?php }?>
            	</div>
            	<?php } ?>
            </div>
            <div class="box_bg">
                <h4>All Plans Include</h4>
                <ul>
                	<li>Free Domain with annual plan Restrictions apply lan Restrictions apply lan Restrictions apply</li>
                    <li>Free Domain with annual plan Restrictions apply</li>
                    <li>Free Domain with annual plan Restrictions apply</li>
                    <li>Free Domain with annual plan Restrictions apply</li>
                    <li>Free Domain with annual plan Restrictions apply</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="body body_cont body_cont2">
	<div class="article">
    	<div class="div_content">
        	<div class="box">
            	<div class="title">DOMAIN</div>
                <div class="body_content">
                	<div class="col1 left">
                    	<h5>Đăng ký tên miền tại <a class="link">dangkytenmien.vn</a>, quý khách hàng sẽ được : </h5>
                        <ul>
                        	<li>Bảo hộ tên miền thương hiệu trên internet</li>
                            <li>Được toàn quyền quản trị Control  Panel đễ dễ dàng  quản lý và cập nhật thông tin và thay đổi thông số kỹ thuật liên quan dễ dàng và chuyên nghiệp <a class="link">http://dns.ipt.vn.</a></li>
                            <li>Miễn phí tên miền phụ ( sub domain). Giúp bạn tổ chức nội dung website tốt hơn bằng cách tạo thêm các tên miền phụ.(sub domain)</li>
                            <li>Ngăn chặn việc chuyển đổi tên miền trái phép. Bảo vệ tên miền quyền lợi hợp pháp của bạn</li>
                            <li>Được bộ phận CSKH của dangkytenmien.vn  nhắc nhở kịp thời khi tên miền sắp hết hạn.</li>
                        </ul>
                    </div>
                    <div class="col2 right">
                    	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_1.jpg" width="433" height="" alt="" />
                    </div>
                </div>
            </div>
            <div class="box">
            	<div class="title">HOSTING</div>
                <div class="body_content">
                	<div class="col2 left">
                    	
                        <ul>
                        	<li>Miễn phí khởi tạo - Miễn phí Control Panel</li>
                            <li>Dung lượng cao - Băng thông vượt trội</li>
                            <li>Quản lý hoàn toàn dễ dàng,  tiếp cận linh hoạt</li>
                            <li>Công nghệ phần cứng đạt chuẩn luôn được update mới</li>
                        </ul>
                    </div>
                    <div class="col1 right">
                    	<img class="img_ab" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_2.jpg" width="607" height="" alt="" />
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_3.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>1. Hỗ trợ 24/7 </strong></h6>
                        <br />
                        <p>Tiết kiệm tối đa thời gian và chi phí thuê nhân sự IT cho công việc của bạn,chúng tôi luôn sẵn sàng tư vấn, hỗ trợ kỹ thuật 24/7 bất kỳ thời điểm nào với tất cả các gói dịch vụ web hosting.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_4.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 2. Máy chủ mạnh mẽ : </strong></h6>
                        <br />
                        <p>Máy chủ dịch vụ hosting được sử dụng của các hãng IBM, DELL, …chuyên cung cấp Server với cấu hình mạnh và hoạt động ổn định, giảm thiểu tối đa khả năng nghẽn hoặc quá tải hệ thống.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_5.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 3. An toàn dữ liệu </strong></h6>
                        <br />
                        <p>Dữ liệu bạn luôn được chúng tôi lưu trữ định kỳ hàng tuần nên không mất mát dữ liệu của bạn trường hợp có xảy ra sự cố. Bạn hoàn toàn yên tâm khi sử dụng dịch vụ hosting của chúng tôi</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_6.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 4. Dùng thử dịch vụ </strong></h6>
                        <br />
                        <p>Chúng tôi có chính sách cho bạn dùng thử để đánh giá về chất lượng dịch vụ Hosting , hãy liên hệ với nhân viên hỗ trợ để đăng ký dùng thử 7 ngày trước khi quyết định sử dụng </p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_7.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 5. Dịch vụ đa dạng</strong></h6>
                        <br />
                        <p>Với nhiều năm hoạt động trong lĩnh vực cung cấp nhiều dịch vụ trên nền IP: web hosting, … chúng tôi đã đưa ra nhiều gói sản phẩm dịch vụ đa dạng nhằm đáp ứng tối đa các nhu cầu khác nhau cho khách hàng tại Việt Nam.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_8.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>6. Kích hoạt nhanh chóng </strong></h6>
                        <br />
                        <p>Dịch vụ hosting của Bạn sẽ được kích hoạt ngay sau khi trạng thái hợp đồng được xác nhận thanh toán từ những nhân viên kinh doanh của chúng tôi hoặc thực hiện đăng ký dịch vụ qua hệ thống thanh toán online một cách đơn giản.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_9.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>7. Bảo mật thông tin  </strong></h6>
                        <br />
                        <p>Chúng tôi xác định bảo mật thông tin dữ liệu của khách hàng là tiêu chí bắt buộc và đặc biệt luôn nâng cấp đưa vào ứng dụng các phương thức bảo mật, giúp hạn chế tối đa  khả năng tấn công thông qua Local-Attack.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
feature_10.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>8. Tốc độ cao </strong></h6>
                        <br />
                        <p>Tốc độ là yếu tố đầu tiên quyết định việc thu hút khách truy cập vào website của bạn, các máy chủ hosting linux của chúng tôi đều được cài đặt Litespeed Webserver giúp tăng tốc lên gấp 6 lần so với Apache Webserver thông thường.</p>
                    </div>
                </div>	
            </div>
            <div class="box">
            	<div class="title">EMAIL</div>
                <div class="body_content bg_1">
                    	<p>Mail Plus cho phép Quý khách hàng có thể chọn đăng ký cho nhân viên sử Là nhà cung cấp dịch vụ viễn thông hàng đầu tại Việt Nam sở hữu đường truyền internet tốc độ cao, cơ sở hạ tầng hiện đại và đáng tin cậy nên việc backup đầy đủ, xử lý được mọi khối lượng gửi đi, đảm bảo những dữ liệu của bạn được mật mã hoá (encrypted) và lưu trữ trong hệ thống data center hiện đại nhất và bảo mật nhất đạt tiêu chuẩn quốc tế. </p>
                        <p>Hệ thống email của chúng tôi đáp ứng được 3 triệu mail/1 ngày.</p>
                        <h5>Lợi ích từ dịch vụ email của SPT:</h5>
                        <ul>
                        	<li>Có khả năng lưu trữ toàn bộ các bức thư điện tử nếu như quý khách có yêu cầu</li>
                            <li>Tuân thủ nghiêm ngặt chế độ bảo mật an toàn thông tin</li>
                            <li>Gửi thư đến các địa chỉ trên internet với tốc độ an toàn và chính xác cao</li>
                            <li>Chủ động tạo, hủy, xóa, sửa account, set password các địa chỉ email của nhân viên</li>
                            <li>Cho phép từ 5 đến 15 máy trạm truy cập vào internet trong cùng một thời điểm</li>
                            <li>Số lượng các trạm làm việc cũng như địa chỉ email không hạn chế, tùy thuộc khả năng của mạng máy tính</li>
                            <li>Tạo mail list, nhận và chuyển email tự động. Chủ động khai báo dung lượng mail box cho từng acount</li>
                        </ul>
                    
                </div>
            </div>
            <div class="box">
            	<div class="title">EMAIL MARKETING</div>
                <div class="body_content bg_2">
                    	<p>Hiện nay Email là kênh giao tiếp được khách hàng sử dụng nhiều nhất trong ngày và đã trở thành một phần thiết yếu trong cuộc sống và công việc của nhiều người</p>
                        <p>E-Tools là dịch vụ gửi Email Marketing của Công ty SPT. Đây là một công cụ Marketing rất hiệu quả, giúp tiết kiệm đến 75% chi phí so với các hình thức quảng cáo khác.</p>
                        <p>Ưu điểm nổi trội của Dịch vụ E-Tools là hỗ trợ tích cực cho các chương trình có liên quan tới xây dựng thương hiệu và bán hàng như:</p>
                        <ul>
                        	<li>Nghiên cứu thị trường.</li>
                            <li>Quảng bá thương hiệu.</li>
                            <li>Giới thiệu sản phẩm/dịch vụ mới.</li>
                            <li>Các chương trình khuyến mãi.</li>
                            <li>Hoạt động chăm sóc khách hàng.</li>
                        </ul>
                        <p></p>
                        <h5>Lợi ích: </h5>
                        <ul>
                        	<li>Nhanh hơn và rẻ hơn so với giao tiếp trực tiếp</li>
                            <li>Tốc độ phản ứng nhanh</li>
                            <li>Tối đa hóa tầm nhìn thương hiệu</li>
                            <li>Tăng doanh thu bán hàng</li>
                            <li>Tăng lợi thế cạnh tranh</li>
                            <li>Giảm tối đa hiệu quả chi phí truyền thông</li>
      						<li>Tuân thủ chặt chẽ các nghị định chống thư rác</li>
						    <li>Đầu tư máy chủ và phần mềm chuyên nghiệp</li>
                        </ul>
                    
                </div>
            </div>
            <div class="box">
            	<div class="title">COLOCATION - MÁY CHỦ</div>
                <div class="body_content bg_3">
                    	<p>Hiện nay SPT đã đầu tư xây dựng trung tâm tích hợp dữ liệu IDC tọa lạc tại  199 Điện Biên Phủ, Quận Bình Thạnh. Hệ  thống Data Center được thiết kế theo tiêu chuẩn Tier 3 của Hiệp hội Công Nghiệp Viễn Thông Quốc Tế ( TIA). Với hệ thống đầu tư bảo mật nhiều lớp, đảm bảo dữ liệu của khách hàng được bảo vệ một cách an toàn. Tất cả các cổng ra vào đều được áp dụng hệ thống kiểm soát thông minh, tốc độ truy cập internet đảm bảo đạt nhanh nhất.</p>
                        <p>Vì vậy khi khách hàng có nhu cầu sử dụng dịch vụ cho thuê máy chủ có thể an tâm và không lo lắng về việc khai thác và bão dưỡng, hoặc an ninh bảo mật của hệ thống.</p>
                        <pTừ đó giúp cho quý doanh nghiệp, tổ chức tập trung quản trị  toàn diện các phần mềm ứng dụng nâng cao hiệu quả trong công việc và mở rộng thị trường kinh doanh</p>
                        <h5>Lợi ích thuê server ảo :</h5>
                        <ul>
                        	<li>Tiết kiệm chi phí đầu tư server ban đầy</li>
                            <li>Khách hàng có thể tùy chỉnh cấu hình, cài đặt ứng dụng và triển khai theo ý muốn</li>
                            <li>Không tốn chi phí mua thiết bị và chi phí bão dưỡng</li>
                            <li>Bạn có thể dung  VPS  tại  SPT để thiết lập Web server, mail server cũng các các server ứng dụng khác có thể cài đặt rei6ng theo nhu cầu . Từ đó dễ dàng chia sẽ dữ liệu giữa các chi nhánh.</li>
                            <li>Việc nâng cấp và cài lại hệ điều hành trên VPS  rất nhanh và tiện lợi, góp phần giới hạn thời gian gián đoạn của dịch vụ khi có sự cố xảy ra ( do phần mềm).</li>
                        </ul>
                        <h5></h5>
                    
                </div>
            </div>
            <div class="box">
            	<div class="title">WEB DESIGN</div>
                <div class="body_content bg_4">
                    	
                    <ul>
                        <li>Cơ hội quảng bá của doanh nghiệp trên internet là vô hạn</li>
                        <li>Xây dựng hình ảnh </li>
                       
                    </ul>
                    
                </div>
            </div>
        </div>
   	</div>
</div>
<!--Compare Plan------------------------------------------------->
<div class="body body_cont body_cont3">
	<div class="article">
    	<div class="div_content">
        	<div class="box_compare">
            	<table cellpadding="0" cellspacing="0">
                	<thead>
                    	<tr>
                        	<td width="468" class="title">
                            	<span class="name1">cPanel</span>
                            </td>
                            <?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
			            	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_smarty_tpl->tpl_vars['id_product'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['id_product']->value = $_smarty_tpl->tpl_vars['product']->key;
?>
			            		<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable($_smarty_tpl->tpl_vars['counter']->value+1, null, 0);?>
                            <td width="200">
                            	<span class="pack<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
                            </td>
                            <?php if ($_smarty_tpl->tpl_vars['counter']->value==3) {?>
		                    	<?php $_smarty_tpl->tpl_vars['counter'] = new Smarty_variable(0, null, 0);?>
		                    <?php }?>
                            <?php } ?>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['combination'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['combination']->_loop = false;
 $_smarty_tpl->tpl_vars['public_group_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['combination']->key => $_smarty_tpl->tpl_vars['combination']->value) {
$_smarty_tpl->tpl_vars['combination']->_loop = true;
 $_smarty_tpl->tpl_vars['public_group_name']->value = $_smarty_tpl->tpl_vars['combination']->key;
?>
                        <tr>
                        	<td colspan="4" class="title title1"><?php echo $_smarty_tpl->tpl_vars['public_group_name']->value;?>
</td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['attributes'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attributes']->_loop = false;
 $_smarty_tpl->tpl_vars['group_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combination']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attributes']->key => $_smarty_tpl->tpl_vars['attributes']->value) {
$_smarty_tpl->tpl_vars['attributes']->_loop = true;
 $_smarty_tpl->tpl_vars['group_name']->value = $_smarty_tpl->tpl_vars['attributes']->key;
?>
                        <tr>
                        	<td class="title"><?php echo $_smarty_tpl->tpl_vars['group_name']->value;?>
</td>
                        	<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['key_item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['key_item']->value = $_smarty_tpl->tpl_vars['attribute']->key;
?>
                        	<?php if ($_smarty_tpl->tpl_vars['attribute']->value==1) {?>
                        	<td><i class="fa fa-check p1"> </i></td>
                        	<?php } else { ?>
                        	<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value;?>
</td>
                        	<?php }?>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                    </thead>
                </table>
            </div>	
        </div>
    </div>
</div>
<!--FAQ------------------------------------------------->
<div class="body body_cont body_cont5">
	<div class="article">
    	<div class="div_content">
        	<div class="box_compare">
            	<h3>How does Web Hosting work?</h3>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order <a href="#">for people to view your site.</a></p>
                <h3>How does Web Hosting work?</h3>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order <a href="#">for people to view your site.</a></p>
                <h3>How does Web Hosting work?</h3>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order for people to view your site.</p>
                <p>Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and assigns it a unique DNS. The DNS serves as the address that allows people around the world to find and view your website. This unique address is required in order <a href="#">for people to view your site.</a></p>	
            </div>	
        </div>
    </div>
</div><?php }} ?>
