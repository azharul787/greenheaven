
$(function() {
	$("#fullname_error_message").hide();
	$("#email_error_message").hide();
	$("#contact_number_error_message").hide();
	$("#username_error_message").hide();
	$("#new_password_error_message").hide();
	$("#retype_new_password_error_message").hide();
	
	

	var error_fullname = false;
	var error_email = false;
	var error_contact_number = false;
	var error_username = false;
	var error_new_password = false;
	var error_retype_new_password = false;
	

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
		
	$("#new_password").focusout(function()
		{
			check_new_password();
		});

	$("#retype_new_password").focusout(function() 
	{
		check_retype_new_password();
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

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#email").val())) 
			{
				$("#email_error_message").hide();
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
		
		// php regu("(^(880)-[0-9]{3}-[0-9]{7})$")
		//javascript reg /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
		//var pattern = new RegExp(/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/);
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
				$("#username_error_message").html("Please fill in data into the field");
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
// new_password check
	function check_new_password() 
		{
			var new_password_length = $("#new_password").val().length;
			var p = $("#new_password").val();
			
			/*if(new_password_length == "") 
			{
				$("#new_password_error_message").html("Please fill in data into the field");
				$("#new_password_error_message").show();
				error_new_password = true;
			} 
			*/
			 if(p != "" && new_password_length < 6) 
			{
				$("#new_password_error_message").html("password at least 6 characters");
				$("#new_password_error_message").show();
				error_new_password = true;
			}
			else 
			{
				$("#new_password_error_message").hide();
			}
		}

	// Retype new_password check
	function check_retype_new_password() 
		{
		
			var new_passwords = $("#new_password").val();
			var retype_new_password = $("#retype_new_password").val();
			
			if(new_passwords !=  retype_new_password) 
			{
				$("#retype_new_password_error_message").html("Password don't match");
				$("#retype_new_password_error_message").show();
				error_retype_new_password = true;
			} 
			else
				{
					$("#retype_new_password_error_message").hide();
				}
		}
		

// Submit

	$("#update_profile").click(function() { 
											
		error_fullname = false; 
		error_email = false;
		error_contact_number = false;
		error_username = false;
		error_new_password = false;
		error_retype_new_password = false;
		
									
		check_fullname();
		check_email();
		check_contact_number();
		check_username();
		check_new_password();
		check_retype_new_password();
		
		if(	error_fullname == false && 
			error_email == false && 
			error_contact_number == false && 
			error_username == false && 
			error_new_password == false && 
			error_retype_new_password == false 
			)
			{
			//return true;
			update_profile();
			
			}
		else
			{
			return false;
					
			}

	});

});