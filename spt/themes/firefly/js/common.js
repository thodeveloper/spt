$(document).ready(function() {
	
	$( "#domain_search" ).click(function() {
	  $( "#frm_domain_search" ).submit();
	});
	
	$("#menu").kendoMenu();
	$("#btn_log").kendoButton({
		click : onClick
	});
	$("#btn_log2").kendoButton({
		click : onClick
	});
	$('.btn_log').removeClass('active');

	function onClick(e) {
		if ($('.btn_log ').hasClass('active') == true) {
			$('.btn_log').removeClass('active');
		} else
			$('.btn_log').addClass('active');
	}

	//popupuser--------------------------
	var window = $("#window_user"), undo = $("#undo_user");

	undo.bind("click", function() {
		window.data("kendoWindow").open();
		undo.hide();
		$("#group_id").val(1);
		$('.bg_dark').addClass('active');
	});

	if (!window.data("kendoWindow")) {
		window.kendoWindow({
			width : "895px",
			actions : ["Close"],
			title : "Create Account",
			close : function() {
				undo.show();
				$("#undo_reseller").show();
				$('.bg_dark').removeClass('active');
			}
		});
	}
	window.data("kendoWindow").wrapper.find(".k-i-custom").click(function(e) {
		alert("Custom action button clicked");
		e.preventDefault();
	});
	//popupuser--------------------------end
	
	//popupreseller--------------------------
	var window1 = $("#window_user"), undo1 = $("#undo_reseller");

	undo1.bind("click", function() {
		window1.data("kendoWindow").open();
		undo1.hide();
		$("#group_id").val(2);
		$('.bg_dark').addClass('active');
	});

	if (!window1.data("kendoWindow")) {
		window1.kendoWindow({
			width : "895px",
			actions : ["Close"],
			title : "Create Account",
			close : function() {
				undo1.show();
				$('.bg_dark').removeClass('active');
			}
		});
	}
	window1.data("kendoWindow").wrapper.find(".k-i-custom").click(function(e) {
		alert("Custom action button clicked");
		e.preventDefault();
	});
	//popupreseller--------------------------end
}); 