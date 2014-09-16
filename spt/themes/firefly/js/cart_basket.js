function __calculatePrice(){
	var total = 0;
	var ican_fee = 0;
	var vnnic_reg_fee = 0;
	var tax_fee = 0;
	var grand_total = 0;
	
    $('#cart_content tr').each(function() {
    	term = Number($("select :selected", $(this)).val());
    	unit_price = Number($('input[name="unit_price"]', $(this)).val());
    	type = $('input[name="type"]', $(this)).val();
    	reference = $('input[name="reference"]', $(this)).val();
    	
    	var sub_price = term*unit_price;
    	$('.sub_price', $(this)).html($.number( sub_price, 0, ',', '.' ));
    	
    	total += sub_price;
    	if(type == 'domain'){
    		if( reference == '.vn' ){
    			vnnic_reg_fee += defaultVNNICDOTVNFee;
    		} else if( reference == '.com.vn' ){
    			vnnic_reg_fee += defaultVNNICDOTCOMDOTVNFee;
    		} else {
    			ican_fee += defaultICANFee*term;
    		}
    	}
    });
    tax_fee = defaultTaxFee*total;
    grand_total = total+tax_fee+ican_fee+vnnic_reg_fee;
    
    $("#cart_total").html($.number( total, 0, ',', '.' ));
    $("#ican_fee").html($.number( ican_fee, 0, ',', '.' ));
    $("#vnnic_reg_fee").html($.number( vnnic_reg_fee, 0, ',', '.' ));
    $("#tax_fee").html($.number( tax_fee, 0, ',', '.' ));
    $("#cart_grandtotal").html($.number( grand_total, 0, ',', '.' ));
}

function addToCart(product_id, domain_name){
	var quantity = Number($("#suggestion_terms_"+product_id).val());
	var gift_message = 'domain='+product_id+':'+domain_name;
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + product_id +'&gift_message='+gift_message+ '&token=' + static_token,
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
				
				__calculatePrice(product_id);
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
	quantity = Number($("#domain_year_"+product_id).val());
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + product_id + '&token=' + static_token,
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
