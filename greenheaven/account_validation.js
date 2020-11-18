
$(function() {
	$("#firstname_error_message").hide();
	$("#lastname_error_message").hide();
	$("#email_error_message").hide();
	$("#contact_number_error_message").hide();
	$("#username_error_message").hide();
	$("#password_error_message").hide();
	$("#retype_password_error_message").hide();
	$("#checkbox_error_message").hide();
	

	var error_firstname = false;
	var error_lastname = false;
	var error_email = false;
	var error_contact_number = false;
	var error_username = false;
	var error_password = false;
	var error_retype_password = false;
	var error_checkbox = true;
	

	$("#firstname").focusout(function()
	{
		check_firstname();
	});
	
	$("#lastname").focusout(function()
	{
		check_lastname();
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

	$("#checkbox").focusout(function()
		{
		check_checkbox();
		
		});
//First name check
	function check_firstname() 
		{
			var firstname_length = $("#firstname").val().length;
	    	
			firstname_lengths = $.trim($("#firstname").val());
		
			if(firstname_lengths == 0) 
			{
				$("#firstname_error_message").html("Please fill in data into the field");
				$("#firstname_error_message").show();      
				error_firstname = true;
			} 
			
			else if(firstname_length <2 || firstname_length > 20) 
			{
				$("#firstname_error_message").html("firstname should be between 2-20 characters");
				$("#firstname_error_message").show();      
				error_firstname = true;
			}
			else 
			{
				$("#firstname_error_message").hide();
			}
		}
	//Last name check
	function check_lastname() 
		{
			var lastname_length = $("#lastname").val().length;
 	
			lastname_lengths = $.trim($("#lastname").val());
		
			if(lastname_lengths == 0) 
			{
				$("#lastname_error_message").html("Please fill in data into the field");
				$("#lastname_error_message").show();      
				error_laststname = true;
			} 
			
			else if(lastname_length <2 || lastname_length > 20) 
			{
				$("#lastname_error_message").html("lastname should be between 2-20 characters");
				$("#lastname_error_message").show();      
				error_lastname = true;
			}
			else 
			{
				$("#lastname_error_message").hide();
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
		//else if(inputEmail !== '')
		if(inputEmail != '')
				{ 
					$.post('check_email.php',{email:$("#email").val()},
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
		
//checkbox function
	function check_checkbox()
		{
			if($("#checkbox").is(":checked"))
				{
					$("#checkbox_error_message").hide();
				}
            else if($("#checkbox").is(":not(:checked)"))
				{
					//$("#checkbox_error_message").html("You must checked");
					//$("#checkbox_error_message").show();
					alert("Please check the checkbox.");
					error_checkbox= true;
				}
		}

// Submit

	$("#create_accounts").click(function() { 
											
		error_firstname = false; 
		error_lastname = false;
		error_email = false;
		error_contact_number = false;
		error_username = false;
		error_password = false;
		error_retype_password = false;
		error_checkbox = false;
									
		check_firstname();
		check_lastname();	
		check_email();
		check_contact_number();
		check_username();
		check_password();
		check_retype_password();
		check_checkbox();
		
		if(	error_firstname == false && 
			error_lastname == false && 
			error_email == false && 
			error_contact_number == false && 
			error_username == false && 
			error_password == false && 
			error_retype_password == false &&
			error_checkbox == false
			)
			{
			//return true;
			create_account();
			}
		else
			{
			return false;
					
			}

	});

});

	/*---For submit data into the database using this function---*/
	/*function create_account() 
			{ 
				var firstname = $("#firstname").val();
				var lastname = $("#lastname").val();
				var email = $("#email").val();
				var contact_no = $("#contact_no").val();
				var username = $("#username").val();
				var password = $("#retype_password").val();
						
					$.post("create_account.php", {	firstname: firstname, 
													lastname:lastname,
													email: email,  
													contact_no: contact_no, 
													username: username, 
													password: password 
												}, 
								function (data) 
									{ 	
										alert(data)
										
										// clear fields from the popup
										$("#firstname").val("");
										$("#lastname").val("");
										$("#email").val("");
										$("#contact_no").val("");
										$("#username").val("");
										$("#password").val("");
										$("#retype_password").val("");
									});
			}*/