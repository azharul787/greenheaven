
$(function() {
	$("#fullname_error_message").hide();
	$("#email_error_message").hide();
	$("#contact_number_error_message").hide();
	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	
	

	var error_fullname = false;
	
	var error_email = false;
	var error_contact_number = false;
	var error_username = false;
	var error_password = false;
	var error_retype_password = false;
	

	$("#fullname").focusout(function()
	{
		check_fullname();
	});	
	$("#email").focusout(function()
		{
			check_email();	
		});
	
	$("#contact_no").focusout(function()
		{
			check_contact_number();	
		});
	
	$("#username").focusout(function()
		{
			check_username();
		});
		
	$("#password").focusout(function()
		{
			check_password();
		});

	$("#retype_password").focusout(function() 
	{
		check_retype_password();
	});

//First name check
	function check_fullname() 
		{
			var fullname_length = $("#fullname").val().length;
	    	
			fullname_lengths = $.trim($("#fullname").val());
		
			if(fullname_lengths == 0) 
			{
				$("#fullname_error_message").html("Please fill in data into the field");
				$("#fullname_error_message").show();      
				error_fullname = true;
			} 
			
			else if(fullname_length <2 || fullname_length > 20) 
			{
				$("#fullname_error_message").html("fullname should be between 2-20 characters");
				$("#fullname_error_message").show();      
				error_fullname = true;
			}
			else 
			{
				$("#fullname_error_message").hide();
			}
		}
	
		
//Email Check
	function check_email() {
		var inputEmail = $("#email").val();
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#email").val())) 
			{
				$("#email_error_message").hide();
			}
		if(inputEmail != '')
				{ 
					$.post('regUser/check_email.php',{email:$("#email").val()},
						function(data)
								{
									if(data)
									{
										$('#email_error_message').html();
										
										$("#email_error_message").show();
										error_email = true;
									}
									else
										{
											
										$('#email_error_message').html("Email is already exist please try again another");					
										$("#email_error_message").show();
										error_email = true;
										}
								})
				}	
		else 
			{
				$("#email_error_message").html("Invalid email address");
				$("#email_error_message").show();
				error_email = true;
			}
	
	}
	
	// Phone number check
	function check_contact_number() {
		
		var pattern = new RegExp(/^([0-9]{8})[-. ]?([0-9]{3})$/);
	
		if(pattern.test($("#contact_no").val())) 
		{
			$("#contact_number_error_message").hide();
		} 
		else 
			{
				$("#contact_number_error_message").html("Invalid Phone number");
				$("#contact_number_error_message").show();
				error_contact_number = true;
			}
	}
	
	//User Name
	function check_username() 
		{
			var username_length = $("#username").val().length;
		
			if(username_length == "" || username_length == null) 
			{
				$("#username_error_message").html("Please fill in data into the field that is mandatory");
				$("#username_error_message").show();      
				error_username = true;
			} 
			
			else if(username_length < 2 || username_length > 10) 
			{
				$("#username_error_message").html("Username should be between 2-10 characters");
				$("#username_error_message").show();      
				error_username = true;
			} 
			
			else 
			{
				$("#username_error_message").hide();
			}
		}
// password check
	function check_password() 
		{
			var password_length = $("#password").val().length;
			
			if(password_length == "") 
			{
				$("#password_error_message").html("Please fill in data into the field that is mandatory");
				$("#password_error_message").show();
				error_password = true;
			} 
			
			else if(password_length < 6) 
			{
				$("#password_error_message").html("Password at least 6 characters");
				$("#password_error_message").show();
				error_password = true;
			}
			else 
			{
				$("#password_error_message").hide();
			}
		}

	// Retype password check
	function check_retype_password() 
		{
		
			var passwords = $("#password").val();
			var retype_password = $("#retype_password").val();
			
			if(passwords !=  retype_password) 
			{
				$("#retype_password_error_message").html("Password and Retype password don't match");
				$("#retype_password_error_message").show();
				error_retype_password = true;
			} 
			else
				{
					$("#retype_password_error_message").hide();
				}
		}
		

// Submit

	$("#registration_form_validation").click(function() { 
											
		error_fullname = false; 
		error_email = false;
		error_contact_number = false;
		error_username = false;
		error_password = false;
		error_retype_password = false;
		
									
		check_fullname();
		check_email();
		check_contact_number();
		check_username();
		check_password();
		check_retype_password();
		
		if(	error_fullname == false && 
			error_email == false && 
			error_contact_number == false && 
			error_username == false && 
			error_password == false && 
			error_retype_password == false 
			)
			{
			//return true;
			addRecord_registration()
			}
		else
			{
			return false;
					
			}

	});

});