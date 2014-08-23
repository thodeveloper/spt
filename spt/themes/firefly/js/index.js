$(document).ready(function() {
	
	$('.div_search').removeClass('hidden_box');
	
	$("#immersive_slider").immersive_slider({
		animation : "bounce",
		slideSelector : ".slide",
		container : ".main",
		cssBlur : false,
		pagination : true,
		loop : true,
		autoStart : 4000
	});

	$("#immersive_slider_draw").immersive_slider({
		animation : "bounce",
		slideSelector : ".slide",
		container : ".main1",
		cssBlur : false,
		pagination : false,
		loop : true,
		autoStart : 7000
	});
}); 