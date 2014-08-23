<div class="div_account">
    <div class="article">
    	<div class="div_box_acc">
        	<h3>My Account</h3>
            <span class="name">Cuong trinh</span>
            <span>Customer Number: 0935446 | PIN: <a class="txt_color2">***</a></span>
            <ul>
            	<li class="first"><a class="txt_color2">Contact Support</a></li>
                <li><a class="txt_color2">Update Security Settings</a></li>
                <li><a class="txt_color2">My Help</a></li>
                
          	</ul>
        </div>
    </div>
    <div class="article">
    	<div class="div_tab">
            <div id="tabstrip">
                <ul>
                    <li class="k-state-active">
                    	<span class="k-image mc1"></span>
                        Products
                    </li>
                    <li>
                    	<span class="k-image mc2"></span>
                        History
                    </li>
                    <li>
                    	<span class="k-image mc3"></span>
                        Clients	
                    </li>
                    <li>
                    	<span class="k-image mc4"></span>
                        Settings
                    </li>
                </ul>
                <div>
                    {include file="$template_path/products.tpl"}
                </div>
                <div>
                    {include file="$template_path/history.tpl"}
                </div>
                <div>
                    {include file="$template_path/client.tpl"}
                </div>
                <div>
                    {include file="$template_path/settings.tpl"}
                </div>
               
            </div>
    	</div>
    </div>
</div>