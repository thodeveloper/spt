$(document).ready(function () {
    var classes = ["col-1", "col-2", "col-3", "col-4", "col-5", "col-6", "col-7"];
    classes.sort(function () { return Math.random() - .5 });

    $(".td_tb").each(function () {
        $(this).addClass(classes.pop());
    });
});

$(function () {
    var $anchors = $('.bg_img');

    (function _loop(idx) {
        $anchors.eq(idx - 2).removeClass('last');
        $anchors.eq(idx - 1).addClass('last');
        $anchors.removeClass('current').eq(idx).addClass('current');
        
        setTimeout(function () {
            _loop((idx + 1) % $anchors.length);
        }, 4000);
    }(0));
});

$(document).on('click', '#header_SubmitLogin', function(e){
	e.preventDefault();
	
	var _email = $('#header_login_email').val();
	var _pwd = $('#header_login_passwd').val();
	login(_email, _pwd, baseUri, 'header_login_error');
});

$(document).on('click', '#headerSubmitAccount', function(e){
	e.preventDefault();
	var url = baseUri;
	if( isLogged == true ){
		url = 'addClient';
	}
	addAccount('register_account', url);
});

function login(_email, _pwd, _url, _id_error){
	$.ajax({
		type: 'POST',
		url: baseUri,
		async: true,
		cache: false,
		dataType : "json",
		data: 
		{
			controller: 'authentication',
			SubmitLogin: 1,
			ajax: true,
			email: _email,
			passwd: _pwd,
			token: static_token
		},
		success: function(jsonData)
		{
			if (!jsonData.hasError)
			{
				whmcs_login(_email, _pwd, _url, _id_error);
			}
			else
			{
				$("#"+_id_error).html(jsonData.errors);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			if (textStatus !== 'abort')
			{
				error = "TECHNICAL ERROR: unable to send login informations \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
	            alert(error);
			}
		}
	});
}

function addAccount(_frm_id, _url){
	$.ajax({
		type: 'POST',
		url: baseUri,
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=authentication&ajax=true&submitAccount=true&'+$('#'+_frm_id).serialize()+'&token=' + static_token,
		success: function(jsonData)
		{
			if (!jsonData.hasError) 
			{
				if(_url == ''){
					$("#idAddress_delivery").val(jsonData.id_address_delivery);
				}
				whmcs_addAccount(_frm_id, _url);
			}
			else
			{
				$(".notice").html("");
				var icon = '<i class="fa fa-exclamation-circle"></i>';
				for(error in jsonData.errors){
					$("#"+_frm_id+" #"+error+"_error").html(icon+jsonData.errors[error]);
				}
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			error = "TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
			alert(error);
		}
	});
}

function whmcs_login(_email, _pwd, _url, _id_error){
	$.ajax({
		type: 'POST',
		url: whmcsUrl,
		async: true,
		cache: false,
		dataType : "json",
		data: 
		{
			SubmitLogin: 1,
			ajax: true,
			email: _email,
			passwd: _pwd,
		},
		success: function(jsonData)
		{
			if (!jsonData.hasError)
			{
				document.location.href = _url;
			}
			else
			{
				$("#"+_id_error).html(jsonData.errors);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			if (textStatus !== 'abort')
			{
				error = "TECHNICAL ERROR: unable to send login informations \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
	            alert(error);
			}
		}
	});
}

function whmcs_addAccount(_frm_id, _url){
	$.ajax({
		type: 'POST',
		url: whmcsUrl,
		async: true,
		cache: false,
		dataType : "json",
		data: 'submitAccount=true&'+$('#'+_frm_id).serialize(),
		success: function(jsonData)
		{
			if (!jsonData.hasError)
			{
				if(_url == ''){
					updateAddressSelection();
				} else if(_url == 'addClient'){
					$('.k-window-action span').trigger('click');
					$('.k-pager-refresh span').trigger('click');
				}
				else {
					alert("Account created");
					document.location.href = _url;
				}
			}
			else
			{
				$("#header_reg_error").html(jsonData.errors);
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			if (textStatus !== 'abort')
			{
				error = "TECHNICAL ERROR: unable to send login informations \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
	            alert(error);
			}
		}
	});
}
