$(function() { 
	$("#c_fullname_error_message").hide();
	$("#c_email_error_message").hide();
	$("#c_contact_number_error_message").hide();
	$("#c_subject_error_message").hide();
	$("#c_message_error_message").hide();
	
	

	var error_fullname = false;
	var error_email = false;
	var error_contact_number = false;
	var error_subject = false;
	var error_message = false;
	
	

	$("#c_fullname").focusout(function()
	{
		check_fullname();
	});
	$("#c_email").focusout(function()
		{
			check_email();	
		});
	
	$("#c_contact_no").focusout(function()
		{
			check_contact_number();	
		});
	
	$("#c_subject").focusout(function()
		{
			check_subject();
		});
		
	$("#c_message").focusout(function()
		{
			check_message();
		});


//Full name check
	function check_fullname() 
		{
			var fullname_length = $("#c_fullname").val().length;
	    	
			fullname_lengths = $.trim($("#c_fullname").val());
		
			if(fullname_lengths == 0) 
			{
				$("#c_fullname_error_message").html("Please fill in data into the field");
				$("#c_fullname_error_message").show();      
				error_fullname = true;
			} 
			
			else if(fullname_length <2 || fullname_length > 20) 
			{
				$("#c_fullname_error_message").html("Fullname should be between 2-20 characters");
				$("#c_fullname_error_message").show();      
				error_fullname = true;
			}
			else 
			{
				$("#c_fullname_error_message").hide();
			}
		}
	
//Email Check
	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#c_email").val())) 
			{
				$("#c_email_error_message").hide();
			}
		else 
			{
				$("#c_email_error_message").html("Invalid email address");
				$("#c_email_error_message").show();
				error_email = true;
			}
	
	}
	
	// Phone number check
	function check_contact_number() {
		
	var pattern = new RegExp(/^([0-9]{8})[-. ]?([0-9]{3})$/);
	
		if(pattern.test($("#c_contact_no").val())) 
		{
			$("#c_contact_number_error_message").hide();
		} 
		else 
			{
				$("#c_contact_number_error_message").html("Invalid Phone number");
				$("#c_contact_number_error_message").show();
				error_contact_number = true;
			}
	}
	
	//User Name
	function check_subject() 
		{
			var subject_length = $("#c_subject").val().length;
		
			if(subject_length == "" || subject_length == null) 
			{
				$("#c_subject_error_message").html("Please fill in data into the field that is mandatory");
				$("#c_subject_error_message").show();      
				error_subject = true;
			} 
			
			else if(subject_length < 2 || subject_length > 50) 
			{
				$("#c_subject_error_message").html("Subject should be between 2-50 characters");
				$("#c_subject_error_message").show();      
				error_subject = true;
			} 
			
			else 
			{
				$("#c_subject_error_message").hide();
			}
		}
// message check
	function check_message() 
		{
			var message_length = $("#c_message").val().length;
			
			if(message_length == "") 
			{
				$("#c_message_error_message").html("Please fill in data into the field that is mandatory");
				$("#c_message_error_message").show();
				error_message = true;
			} 
			
			else if(message_length < 2 || message_length > 250) 
			{
				$("#c_message_error_message").html("Message should be betwween 2 and 200 characters");
				$("#c_message_error_message").show();
				error_message = true;
			}
			else 
			{
				$("#c_message_error_message").hide();
			}
		}

// Submit

	$("#contact_form_validation").click(function() { 
											
		error_fullname = false; 
		error_email = false;
		error_contact_number = false;
		error_subject = false;
		error_message = false;
		
									
		check_fullname();
		check_email();
		check_contact_number();
		check_subject();
		check_message();
		
		
		if(	error_fullname == false && 
			error_email == false && 
			error_contact_number == false && 
			error_subject == false && 
			error_message == false 
			)
			{
			//return true;
			/*--call the function to upload data--*/
			contact_data_upload();
			}
		else
			{
			return false;
					
			}

	});

})
	
	/*----Data upload to database---*/
	
	/*function contact_data_upload(){ 
		var fullname = $("#c_fullname").val(); 
		var c_email = $("#c_email").val(); 
		var c_contact_no = $("#c_contact_no").val(); 
		var c_subject = $("#c_subject").val(); 
		var c_message = $("#c_message").val();
		alert(fullname)
			$.post("contact_message.php",{c_fullname:c_fullname, c_email:c_email,c_contact_no:c_contact_no,c_subject:c_subject, c_message:c_message},
				function (data) {
				alert(data);
				/*--- Empty the field --*/
			/*	$("#c_fullname").val("");
				$("#c_email").val("");
				$("#c_contact_no").val("");
				$("#c_subject").val("");
				$("#c_message").val("");
				}
			)
		
	};*/

	
	
	