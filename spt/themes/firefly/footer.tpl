<div class="footer">
	<div class="div_footer">
    	<div class="article">
        	<div class="col">
            	<h4>{l s='Công ty'}</h4>
                <ul>
                	<li><a>dasd asd as dsada dasd sad sad sad sa dsad as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                    <li><a>dasd asd as dsa</a></li>
                </ul>
            </div>
            <div class="col">
            	<h4>{l s='Dịch vụ'}</h4>
                <ul>
                	<li>dasd asd as dsada dasd sad sad sad sa dsad as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                </ul>
            </div>
            <div class="col">
            	<h4>{l s='Thông tin'}</h4>
                <ul>
                	<li>dasd asd as dsada dasd sad sad sad sa dsad as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                    <li>dasd asd as dsa</li>
                </ul>
            </div>
           
            <div class="col last">
            	<h4>{l s='Đề nghị'}</h4>
                <div class="input_div">
                	<input type="text" />
                    <a class="btn_search">{l s='Gởi'}</a>
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
            <a>{l s='Tên miền'}</a>
            <span class="line"></span>
            <a>{l s='Máy chủ'}</a>
            <span class="line"></span>
            <a>{l s='VPS'} </a>
            <span class="line"></span>
            <a>{l s='Email và tiếp thị'}</a>
            <span class="line"></span>
            <a>{l s='Thiết kế web'}</a>
        </div>
        <span class="copy">@ Copyright 2014 by SPT. All rights reserved</span>
    </div>
</div>

<script src="{$js_dir}common.js"></script>
{if isset($js_files)}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
	{/foreach}
{/if}

{include file="$tpl_dir./global.tpl"}
</body>
<!-- InstanceEnd -->
</html>