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

	//popup recoder--------------------------
	var window = $("#window_record"), undo = $("#undo_record");

	undo.bind("click", function() {
		window.data("kendoWindow").open();
		undo.hide();
		$('.bg_dark').addClass('active');
	});

	if (!window.data("kendoWindow")) {
		window.kendoWindow({
			width : "895px",
			actions : ["Close"],
			title : "Add Zone Record",
			close : function() {
				undo.show();
				$('.bg_dark').removeClass('active');
			}
		});
	}
	window.data("kendoWindow").wrapper.find(".k-i-custom").click(function(e) {
		alert("Custom action button clicked");
		e.preventDefault();
	});
	//popup recoder--------------------------end
}); 