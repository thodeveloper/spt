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

function removeCartItem(product_id, static_token){
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
				} else{
					alert(jsonData.errors);
				}
			},
			error: function() {alert('ERROR: unable to delete the product');}
		});
}
