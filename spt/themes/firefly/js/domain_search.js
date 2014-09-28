function addToCart(product_id, quantity, url, domain_name){
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + product_id + '&txt_search=' + domain_name + '&token=' + static_token,
		success: function(jsonData,textStatus,jqXHR)
		{
			if (!jsonData.hasError)
			{
				$("#selectItem_"+product_id).html("&#10004; Đã chọn");
				$("#selectItem_"+product_id).removeAttr("onclick");
				if( url != '' ){
					window.document.location = url;
				}
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
