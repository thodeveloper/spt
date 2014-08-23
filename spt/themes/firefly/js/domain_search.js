$(document).ready(function() {
	$("#showmore").click(function() {
		showResult("");
	});
});

function addToCart(product_id, static_token, quantity){
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
				$("#selectItem_"+product_id).html("&#10004; Selected");
				$("#selectItem_"+product_id).removeAttr("onclick");
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

function showResult(condition){
	$('div.item_result.hidden_box').each(function(index, obj){
		if(index > 1 && condition != "all"){
			return;
		}
	    $(this).removeClass("hidden_box");
	});
	var currentitems = parseInt($("#currentitems").text());
	var totalitems = parseInt($("#totalitems").text());
	currentitems += 2;
	if(currentitems> totalitems) {
		currentitems = totalitems;
		$("#showmoreresult").hide();
	}
	$("#currentitems1").text(currentitems1);
	
	var currentitems1 = parseInt($("#currentitems1").text());
	var totalitems1 = parseInt($("#totalitems1").text());
	currentitems1 += 2;
	if(currentitems1> totalitems1) {
		currentitems1 = totalitems1;
		$("#showmoreresult").hide();
	}
	$("#currentitems1").text(currentitems1);
}
