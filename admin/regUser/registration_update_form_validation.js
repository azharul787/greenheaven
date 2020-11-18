
$(function() {
	$("#update_fullname_error_message").hide();
	$("#update_email_error_message").hide();
	$("#update_contact_number_error_message").hide();
	$("#update_username_error_message").hide();
	
	var error_fullname = false;
	var error_email = false;
	var error_contact_number = false;
	var error_username = false;
	
	$("#update_fullname").focusout(function()
		{
			check_update_fullname();
		});	
	$("#update_email").focusout(function()
		{
			check_update_email();	
		});
	$("#update_contact_no").focusout(function()
		{
			check_update_contact_number();	
		});
	$("#update_username").focusout(function()
		{
			check_update_username();
		});
//First name check
	function check_update_fullname() 
		{
			var fullname_length = $("#update_fullname").val().length;
	    	
			fullname_lengths = $.trim($("#update_fullname").val());
		
			if(fullname_lengths == 0) 
			{
				$("#update_fullname_error_message").html("Please fill in data into the field");
				$("#update_fullname_error_message").show();      
				error_fullname = true;
			} 
			
			else if(fullname_length <2 || fullname_length > 20) 
			{
				$("#update_fullname_error_message").html("fullname should be between 2-20 characters");
				$("#update_fullname_error_message").show();      
				error_fullname = true;
			}
			else 
			{
				$("#update_fullname_error_message").hide();
			}
		}
	
		
//Email Check
	function check_update_email() {
		var inputEmail = $("#update_email").val();
		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#update_email").val())) 
			{
				$("#update_email_error_message").hide();
			}
		if(inputEmail != '')
				{ 
					$.post('regUser/check_email.php',{email:$("#update_email").val()},
						function(data)
								{
									if(data)
									{
										$('#update_email_error_message').html();
										
										$("#update_email_error_message").show();
										error_email = true;
									}
									else
										{
											
										$('#update_email_error_message').html("Email is already exist please try again another");					
										$("#update_email_error_message").show();
										error_email = true;
										}
								})
				}	
		else 
			{
				$("#update_email_error_message").html("Invalid email address");
				$("#update_email_error_message").show();
				error_email = true;
			}
	
	}
	
	// Phone number check
	function check_update_contact_number() {

		var pattern = new RegExp(/^([0-9]{8})[-. ]?([0-9]{3})$/);
	
		if(pattern.test($("#update_contact_no").val())) 
		{
			$("#update_contact_number_error_message").hide();
		} 
		else 
			{
				$("#update_contact_number_error_message").html("Invalid Phone number");
				$("#update_contact_number_error_message").show();
				error_contact_number = true;
			}
	}
	
	//User Name
	function check_update_username() 
		{
			var username_length = $("#update_username").val().length;
			if(username_length == "" || username_length == null) 
			{
				$("#update_username_error_message").html("Please fill in data into the field that is mandatory");
				$("#update_username_error_message").show();      
				error_username = true;
			} 
			
			else if(username_length < 2 || username_length > 10) 
			{
				$("#update_username_error_message").html("Username should be between 2-10 characters");
				$("#update_username_error_message").show();      
				error_username = true;
			} 
			
			else 
			{
				$("#update_username_error_message").hide();
			}
		}

// Submit

	$("#registration_update_form_validation").click(function() 
	{ 									
		error_fullname = false; 
		error_email = false;
		error_contact_number = false;
		error_username = false;
										
		check_update_fullname();
		check_update_email();
		check_update_contact_number();
		check_update_username();
		
		if(	error_fullname == false && 
			error_email == false && 
			error_contact_number == false && 
			error_username == false 
			)
			{
			//return true;
			UpdateUserDetails_registration()
			}
		else
			{
			return false;
					
			}
	});
});