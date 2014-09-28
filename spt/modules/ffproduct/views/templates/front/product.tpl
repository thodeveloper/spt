{addJsDef cartUrl=$link->getModuleLink('ffcart', 'basket', array(), true)|addslashes}
<div class="body">
	<div class="article">
    	<div class="div_img">
        	<img src="{$img_dir}product_01.jpg" width="426" />
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
            	{assign 'counter' 0}
            	{foreach from=$products item=product key=id_product name=product}
            		{assign var=counter value=$counter+1}
                <div class="div_col {if $counter == 2}div_col_middle{/if}">
                    <div class="col">
                        <h4>{$product['name']}</h4>
                        <span class="text1">{$product['description_short']}</span>
                        <span class="promote text2">As low as</span>
                        <span class="promote text3"><strong>VND{$product['price']|number_format:0:",":"."}</strong>/month</span>
                        <span>{$product['description']}</span>
                        <input class="customers" id="reg_period_{$id_product}" style="width: 100%;"/>
                        <span class="btn_cart" onclick="return productAddToCart({$id_product})">Add to Cart</span>
                    </div>
                    <div class="col_line">
                    	{foreach from=$product['combinations'] item=combination name=combination}
                    		{if $combination['group_name']== 'Disk Space'}
                    			<span><strong>{$combination['attribute_name']}</strong> Storage</span>
                    			{break}
                    		{/if}
                    	{/foreach}
                    </div>
                    {if $counter == 3}
                    	{assign 'counter' 0}
                    {/if}
            	</div>
            	{/foreach}
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
                    	<img src="{$img_dir}feature_1.jpg" width="433" height="" alt="" />
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
                    	<img class="img_ab" src="{$img_dir}feature_2.jpg" width="607" height="" alt="" />
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_3.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>1. Hỗ trợ 24/7 </strong></h6>
                        <br />
                        <p>Tiết kiệm tối đa thời gian và chi phí thuê nhân sự IT cho công việc của bạn,chúng tôi luôn sẵn sàng tư vấn, hỗ trợ kỹ thuật 24/7 bất kỳ thời điểm nào với tất cả các gói dịch vụ web hosting.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_4.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 2. Máy chủ mạnh mẽ : </strong></h6>
                        <br />
                        <p>Máy chủ dịch vụ hosting được sử dụng của các hãng IBM, DELL, …chuyên cung cấp Server với cấu hình mạnh và hoạt động ổn định, giảm thiểu tối đa khả năng nghẽn hoặc quá tải hệ thống.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_5.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 3. An toàn dữ liệu </strong></h6>
                        <br />
                        <p>Dữ liệu bạn luôn được chúng tôi lưu trữ định kỳ hàng tuần nên không mất mát dữ liệu của bạn trường hợp có xảy ra sự cố. Bạn hoàn toàn yên tâm khi sử dụng dịch vụ hosting của chúng tôi</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_6.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 4. Dùng thử dịch vụ </strong></h6>
                        <br />
                        <p>Chúng tôi có chính sách cho bạn dùng thử để đánh giá về chất lượng dịch vụ Hosting , hãy liên hệ với nhân viên hỗ trợ để đăng ký dùng thử 7 ngày trước khi quyết định sử dụng </p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_7.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong> 5. Dịch vụ đa dạng</strong></h6>
                        <br />
                        <p>Với nhiều năm hoạt động trong lĩnh vực cung cấp nhiều dịch vụ trên nền IP: web hosting, … chúng tôi đã đưa ra nhiều gói sản phẩm dịch vụ đa dạng nhằm đáp ứng tối đa các nhu cầu khác nhau cho khách hàng tại Việt Nam.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_8.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>6. Kích hoạt nhanh chóng </strong></h6>
                        <br />
                        <p>Dịch vụ hosting của Bạn sẽ được kích hoạt ngay sau khi trạng thái hợp đồng được xác nhận thanh toán từ những nhân viên kinh doanh của chúng tôi hoặc thực hiện đăng ký dịch vụ qua hệ thống thanh toán online một cách đơn giản.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_9.jpg" width="319" height="" alt="" /></div>
                    <div class="right">
                    	<h6><strong>7. Bảo mật thông tin  </strong></h6>
                        <br />
                        <p>Chúng tôi xác định bảo mật thông tin dữ liệu của khách hàng là tiêu chí bắt buộc và đặc biệt luôn nâng cấp đưa vào ứng dụng các phương thức bảo mật, giúp hạn chế tối đa  khả năng tấn công thông qua Local-Attack.</p>
                    </div>
                </div>
                <div class="item">
                	<div class="left"><img src="{$img_dir}feature_10.jpg" width="319" height="" alt="" /></div>
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
                            {assign 'counter' 0}
			            	{foreach from=$products item=product key=id_product name=product}
			            		{assign var=counter value=$counter+1}
                            <td width="200">
                            	<span class="pack{$counter}">{$product['name']}</span>
                            </td>
                            {if $counter == 3}
		                    	{assign 'counter' 0}
		                    {/if}
                            {/foreach}
                        </tr>
                        {foreach from=$combinations item=combination key=public_group_name name=combination}
                        <tr>
                        	<td colspan="4" class="title title1">{$public_group_name}</td>
                        </tr>
                        {foreach from=$combination item=attributes key=group_name name=attributes}
                        <tr>
                        	<td class="title">{$group_name}</td>
                        	{foreach from=$attributes item=attribute key=key_item name=attribute}
                        	{if $attribute == 1}
                        	<td><i class="fa fa-check p1"> </i></td>
                        	{else}
                        	<td>{$attribute}</td>
                        	{/if}
                            {/foreach}
                        </tr>
                        {/foreach}
                        {/foreach}
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
</div>