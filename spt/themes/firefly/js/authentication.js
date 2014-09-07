$(document).on('click', '#SubmitLogin', function(e){
	e.preventDefault();
	var _email = $('#login_email').val();
	var _pwd = $('#login_passwd').val();
	login(_email, _pwd, billingUrl, 'login_error');
});

$(document).on('click', '#submitAccount', function(e){
	e.preventDefault();
	if(isLogged == false){
		addAccount('billing', '');
	} else {
		updateAddressSelection();
	}
});

$(document).on('click', '#btn_submit_payment', function(e){
	e.preventDefault();
	$("#frm_submit_payment").submit();
});

$(document).on('change', '#address_list', function(e){
	e.preventDefault();
	$(".showAddress").hide();
	$("#show_address_"+$(this).val()).show();
	$("#idAddress_delivery").val($(this).val());
});

function updateAddressSelection()
{
	var idAddress_delivery = $("#idAddress_delivery").val();
	if( idAddress_delivery == 0 ){
		idAddress_delivery = $("#address_list").val();
	}
	var idAddress_invoice = idAddress_delivery;
	$.ajax({
		type: 'POST',
		headers: { "cache-control": "no-cache" },
		url: orderOpcUrl + '?rand=' + new Date().getTime(),
		async: true,
		cache: false,
		dataType : "json",
		data: 'allow_refresh=1&ajax=true&method=updateAddressesSelected&id_address_delivery=' + idAddress_delivery + '&id_address_invoice=' + idAddress_invoice + '&token=' + static_token,
		success: function(jsonData)
		{
			if (jsonData.hasError)
			{
                alert(jsonData.errors);
			}
			else
			{
				document.location.href = orderPaymentUrl+"?payment="+$('input:radio[name=payment_method]:checked').val();
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown) {
			if (textStatus !== 'abort')
			{
				error = "TECHNICAL ERROR: unable to save adresses \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
                alert(error);
			}
		}
	});
}
