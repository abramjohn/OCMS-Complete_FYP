$(function() {

	$("#password_error_message").hide();
	$("#email_error_message").hide();
	
	
	var error_password = false;
	var error_email = false;
	
	
	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_email").focusout(function() {

		check_email();
		
	});
	
	

	function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 8) {
			$("#password_error_message").html("At least 8 characters");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
	}

	
	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
			
			var name=document.getElementById( "form_email" ).value;
	
 if(name)
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_name:name,
  },
  success: function (response) {
   $( '#email_error_message' ).html(response);
   $("#email_error_message").show();
   if(response=="E-mail Already Register")	
   {
	   $("#email_error_message").css('color', '#4caf50', 'important');
	  
    return true;
   }
   else
   {
	   $("#email_error_message").css('color', '#D4393B', 'important');
	   
    return false;
   }
  }
  });
 }
 else
 {
  $( '#email_error_message' ).html("");
  return false;
 }
			
		} else 
		
		{
			$("#email_error_message").html("Invalid email address");
			$("#email_error_message").show();
			error_email = true;
		}
	
	}
	
	
	$("#registration_form").submit(function() {
											
		
		error_password = false;
		
		error_email = false;
		
											
		
		check_password();
		
		check_email();
		
		
		if(error_password == false && error_email == false && error_phone == false) {
			$("#registration_form").attr("disabled", false);
			return true;
			 
		} else {
			swal({
  title: "Incorrect E-mail or Password",
  text: "Re-Enter E-mail or Password!!",
  icon: "error",
  button: "OK",
});
			$("#registration_form").attr("disabled", true);
			return false;	
		}

	});
	

	

});


  
   

   

