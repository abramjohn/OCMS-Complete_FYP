$(function() {	

	
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	$("#email_error_message").hide();

	
	var error_password = false;
	var error_retype_password = false;
	var error_email = false;
	
	$("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
	});
	
	$("#form_email").focusout(function() {

		check_email();
		
	});



	function check_password() {
	
		var password_length1 = $("#form_password").val().length;
		
		if(password_length1 < 8) {
			$("#password_error_message").html("At least 8 characters");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
	}
		function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		
		if(password !==  retype_password) {
			$("#retype_password_error_message").html("Passwords don't match");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
		}
	
	}
	
	function check_email() {

			
			var name=document.getElementById( "form_email" ).value;
	
 if(name !== '')
 {
  $.ajax({
  type: 'post',
  url: 'checkdata.php',
  data: {
   user_pass:name,
  },
  success: function (response) {
   $( '#email_error_message' ).html(response);
   $("#email_error_message").show();
   if(response==="Correct Password")	
   {
	   $("#email_error_message").css('color', '#4caf50', 'important');
	  
    return true;
   }
   else
   {
	   $("#email_error_message").css('color', '#D4393B', 'important');
	 error_email = true;
    
   }
  }
  });
 }
 else
 {
  $("#email_error_message").html("Incorrect Password");
			$("#email_error_message").show();
			error_email = true;
 }
		
	
	}

	$("#registration_form").submit(function() {
											
		
		error_password = false;
		error_retype_password = false;
		error_email = false;
											
		
		check_password();
		check_retype_password();
		check_email();
		
		if(error_password == false && error_retype_password == false && error_email == false) {
			$("#registration_form").attr("disabled", false);
			return true;
			 
		} else {
			swal({
				  title: "Please Fill Correctly",
				  text: "Inserting Worng Data!!",
				  icon: "error",
				  button: "OK",
				});
			$("#registration_form").attr("disabled", true);
			return false;	
		}

	});
	


	

});


  
   

   


   

   

