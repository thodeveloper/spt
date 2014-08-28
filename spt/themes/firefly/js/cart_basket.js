$(document).ready(function() {
	
	$("#customers").kendoDropDownList({
		dataTextField : "ContactName",
		dataValueField : "CustomerID",
		headerTemplate : '<div class="dropdown-header">' + '<span class="txt1 txt1a">12 month</span>' + '<span class="txt3 txt3a promote">ON SALE</span>' + '<span class="txt2 txt2a promote">$3.49/month </span>' + '</div>',
		valueTemplate : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		template : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		dataSource : {
			transport : {
				read : {
					dataType : "jsonp",
					url : "http://demos.kendoui.com/service/Customers",
				}
			}
		}
	});

	var dropdownlist = $("#customers").data("kendoDropDownList");
	$("#customers1").kendoDropDownList({
		dataTextField : "ContactName",
		dataValueField : "CustomerID",
		headerTemplate : '<div class="dropdown-header">' + '<span class="txt1 txt1a">12 month</span>' + '<span class="txt3 txt3a promote">ON SALE</span>' + '<span class="txt2 txt2a promote">$3.49/month </span>' + '</div>',
		valueTemplate : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		template : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		dataSource : {
			transport : {
				read : {
					dataType : "jsonp",
					url : "http://demos.kendoui.com/service/Customers",
				}
			}
		}
	});

	var dropdownlist = $("#customers1").data("kendoDropDownList");
	$("#customers2").kendoDropDownList({
		dataTextField : "ContactName",
		dataValueField : "CustomerID",
		headerTemplate : '<div class="dropdown-header">' + '<span class="txt1 txt1a">12 month</span>' + '<span class="txt3 txt3a promote">ON SALE</span>' + '<span class="txt2 txt2a promote">$3.49/month </span>' + '</div>',
		valueTemplate : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		template : '<span class="txt1">12 month</span>' + '<span class="txt3 promote">ON SALE</span>' + '<span class="txt2 promote">$3.49/month </span>',
		dataSource : {
			transport : {
				read : {
					dataType : "jsonp",
					url : "http://demos.kendoui.com/service/Customers",
				}
			}
		}
	});

	var dropdownlist = $("#customers2").data("kendoDropDownList");
	$(".btn_fe_pro").kendoButton({
		click : onClicka
	});

	function onClicka(e) {
		$('.btn_fe_pro').removeClass('active');
		$(e.event.target).closest(".btn_fe_pro").addClass('active');
		if ($('.btn_body_cont1').hasClass('active') == true) {
			$('.body_cont').fadeIn().hide();
			$('.body_cont1').show().fadeIn();
		} else if ($('.btn_body_cont2').hasClass('active') == true) {
			$('.body_cont').fadeIn().hide();
			$('.body_cont2').show().fadeIn();
		} else if ($('.btn_body_cont3').hasClass('active') == true) {
			$('.body_cont').fadeIn().hide();
			$('.body_cont3').show().fadeIn();
		} else if ($('.btn_body_cont4').hasClass('active') == true) {
			$('.body_cont').fadeIn().hide();
			$('.body_cont4').show().fadeIn();
		} else if ($('.btn_body_cont5').hasClass('active') == true) {
			$('.body_cont').fadeIn().hide();
			$('.body_cont5').show().fadeIn();
		}
	}
});

function __calculatePrice(){
	var total = 0;
	var ican_fee = 0;
	var tax_fee = 0;
	var grand_total = 0;
	
    $('#cart_content tr').each(function() {
    	term = Number($("select :selected", $(this)).val());
    	unit_price = Number($('input[name="unit_price"]', $(this)).val());
    	var sub_price = term*unit_price;
    	$('.sub_price', $(this)).html($.number( sub_price, 0, ',', '.' ));
    	
    	total += sub_price;
    	ican_fee += defaultICANFee*term;
    });
    tax_fee = defaultTaxFee*total;
    grand_total = total+tax_fee+ican_fee;
    
    $("#cart_total").html($.number( total, 0, ',', '.' ));
    $("#ican_fee").html($.number( ican_fee, 0, ',', '.' ));
    $("#tax_fee").html($.number( tax_fee, 0, ',', '.' ));
    $("#cart_grandtotal").html($.number( grand_total, 0, ',', '.' ));
}

function addToCart(product_id, quantity){
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + product_id + '&token=' + static_token,
		success: function(jsonData,textStatus,jqXHR)
		{
			if (!jsonData.hasError)
			{
				original_selected_terms = parseInt($("#suggestion_terms_"+product_id).val());
				$("#cart_suggestion_terms_"+product_id).remove();
				$("#cart_domain_year_"+product_id).toggle();
				
				row_data = $("#cart_item_"+product_id).clone();
				$("#cart_item_"+product_id).remove();
				
				var $tableBody = $('#cart_content');
				$trLast = $tableBody.find("tr:last");
				$trLast.after(row_data);
				
				$("#domain_year_"+product_id).val(original_selected_terms);
				
				$("#cart_remove_"+product_id).toggle();
				$("#cart_addtocart_"+product_id).remove();
				
				updateCart(product_id);
			} else{
				alert(jsonData.errors);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			var error = "Impossible to add the product to the cart.<br/>textStatus: '" + textStatus + "'<br/>errorThrown: '" + errorThrown + "'<br/>responseText:<br/>" + XMLHttpRequest.responseText;
			alert(error);
		}
	});
}

function updateCart(product_id) {
	domain_year = Number($("#domain_year_"+product_id).val());
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: module_link + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'ajax=true&product_term='+domain_year+'&product_id='+product_id,
		success: function(jsonData)	{
			if (!jsonData.hasError)
			{
				__calculatePrice(product_id);
			} else{
				alert(jsonData.errors);
			}
		},
		error: function() {alert('ERROR: unable to update cart!');}
	});
}

function removeCartItem(product_id){
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&delete=1&ajax=true&id_product=' + product_id + '&token=' + static_token,
		success: function(jsonData)	{
			if (!jsonData.hasError)
			{
				$("#cart_item_"+product_id).remove();
				cart_content = $.trim($("#cart_content").html());
				if(cart_content == '') {
					document.location.href = baseUri;
				}
				__calculatePrice(product_id);
			} else{
				alert(jsonData.errors);
			}
		},
		error: function() {alert('ERROR: unable to delete the product');}
	});
}
