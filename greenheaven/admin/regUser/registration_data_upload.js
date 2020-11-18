	
	// Add Record
	function addRecord_registration() 
		{ 
			var fullname = $("#fullname").val();
			var email = $("#email").val();
			var contact_no = $("#contact_no").val();
			var username = $("#username").val();
			var password = $("#retype_password").val();

			$.post("regUser/addRecord.php", {	fullname: fullname, 
												email: email,  
												contact_no: contact_no, 
												username: username, 
												password: password 
											}, 
					function (data, status) 
						{ 	alert(data)
							// close the popup
							$("#add_new_record_modal").modal("hide");
							
							// read records again
							readRecords(search_type);
							
							// clear fields from the popup
							$("#fullname").val("");
							$("#email").val("");
							$("#contact_no").val("");
							$("#username").val("");
							$("#password").val("");
							$("#retype_password").val("");
						});
		}

	// READ records
	var search_type = "all";
	function readRecords(src) 
	{ 
		var search_type = src;
				
		if(src == "all")
			{
				$.get("regUser/readRecords.php", {src:src}, function (data, status) {
					$(".records_content").html(data);
				});
			}
			
		if(src == "srcval")
			{
				var search_itm = document.getElementById('search_item').value;
				//alert(search_itm);
				//alert(src);
				$.get("regUser/readRecords.php", {src:src,search_itm:search_itm}, 
				function (data, status) {
					$(".records_content").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser(id) 
		{
			var conf = confirm("Are you sure, do you really want to delete User?");
			if (conf == true) 
				{
					$.post("regUser/deleteUser.php", {id: id},
						function (data, status) {
								alert(data)
							// reload Users by using readRecords();
							readRecords(search_type);
						}
					);
				}
		}

	function GetUserDetails(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id").val(id);
		$.post("regUser/readUserDetails.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_fullname").val(user.fullname);
				$("#update_email").val(user.email);
				$("#update_contact_no").val(user.contact_no);
				$("#update_username").val(user.username);	
			}
		);
		// Open modal popup
		$("#update_user_modal").modal("show");
	}

	function UpdateUserDetails_registration() { 
		// get values
		var fullname = $("#update_fullname").val();
		var email = $("#update_email").val();
		var contact_no = $("#update_contact_no").val();
		var username = $("#update_username").val();

		// get hidden field value
		var id = $("#hidden_user_id").val();

		// Update the details by requesting to the server using ajax
		$.post("regUser/updateUserDetails.php", {id: id, fullname: fullname, contact_no: contact_no, email: email, username: username},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_modal").modal("hide");
				// reload Users by using readRecords();
				readRecords(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords(search_type); // calling function
	});