$(document).ready(function() {
	$(".customers").kendoDropDownList({
		dataTextField: "Name",
		dataValueField: "Id",
		valueTemplate:
			'<span class="txt1">#: Id # months</span>' +
			'<span class="txt3 promote">ON SALE</span>',
		template: 
			'<span class="txt1">#: Id # months</span>' +
			'<span class="txt3 promote">ON SALE</span>',
		dataSource: [
	      { Name: "3 months", Id: 3 },
	      { Name: "6 months", Id: 6 },
	      { Name: "12 months", Id: 12 },
	      { Name: "24 months", Id: 24 },
	      { Name: "36 months", Id: 36 }
      	]
	});

	var dropdownlist = $(".customers").data("kendoDropDownList");
	$(".btn_fe_pro").kendoButton({
		click: onClicka
	});
	
	function onClicka(e) {
		$('.btn_fe_pro').removeClass('active');
		$(e.event.target).closest(".btn_fe_pro").addClass('active');
		if($('.btn_body_cont1').hasClass('active')== true){
			$('.body_cont').fadeIn().hide();
			$('.body_cont1').show().fadeIn();
		}
		else if($('.btn_body_cont2').hasClass('active')== true){
			$('.body_cont').fadeIn().hide();
			$('.body_cont2').show().fadeIn();
		}
		else if($('.btn_body_cont3').hasClass('active')== true){
			$('.body_cont').fadeIn().hide();
			$('.body_cont3').show().fadeIn();
		}
		else if($('.btn_body_cont4').hasClass('active')== true){
			$('.body_cont').fadeIn().hide();
			$('.body_cont4').show().fadeIn();
		}
		else if($('.btn_body_cont5').hasClass('active')== true){
			$('.body_cont').fadeIn().hide();
			$('.body_cont5').show().fadeIn();
		}
	}	
});

function productAddToCart(id_product){
	var dropdownlist = $("#reg_period_"+id_product).data("kendoDropDownList");
	var quantity = dropdownlist.value();
	
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: baseUri + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=cart&add=1&ajax=true&qty=' + ((quantity && quantity != null) ? quantity : '1') + '&id_product=' + id_product + '&token=' + static_token,
		success: function(jsonData,textStatus,jqXHR)
		{
			if (!jsonData.hasError)
			{
				window.location.href = cartUrl;
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