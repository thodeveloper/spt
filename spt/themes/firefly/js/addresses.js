
$(document).on('click', '#submitAddress', function(e){
	e.preventDefault();
	$.ajax({
		type: 'POST',
		url: baseUri,
		async: true,
		cache: false,
		dataType : "json",
		data: 'controller=address&ajax=true&type=invoice&submitAddress=true&'+$("#add_address").serialize()+'&token=' + static_token,
		success: function(jsonData)
		{
			if (!jsonData.hasError) 
			{
				alert("Save address successfully");
				window.location.href = module_link;
			}
			else
			{
				$(".notice").html("");
				var icon = '<i class="fa fa-exclamation-circle"></i>';
				for(error in jsonData.errors){
					$("#"+error+"_error").html(icon+jsonData.errors[error]);
				}
			}
		},
		error: function(XMLHttpRequest, textStatus, errorThrown)
		{
			error = "TECHNICAL ERROR: unable to load form.\n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus;
			alert(error);
		}
	});
});