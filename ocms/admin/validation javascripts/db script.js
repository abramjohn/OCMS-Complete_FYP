$(function(){
	$('email').on('keyup', function(){
		var email = $(this).val();
		
	if(email){	
		$.ajax({
			url: 'checkdata.php',
			method: 'get',
			data: {email: email},
			success: function(response){
				response = $.parseJSON(response);
				
				if(response.checkmsg == 'success')
					{
						$('#checkmsg').text('Already Registered!');
					}
				else
					{
						$('#checkmsg').text('');
					}
			}
		});
	}
		
	});
});