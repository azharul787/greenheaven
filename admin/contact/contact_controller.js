	
			
	// READ records
	/*function read_contact_message() { 
		$.get("contact/read_contact_message.php", {}, function (data) {
			$(".records_content_contact_message").html(data);
		});
	}*/
	
	/*----Read Record From Database---*/
	var search_type = "all";
	function read_contact_message(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("contact/read_contact_message.php", {src_val:src_val}, function (data, status) {
					$(".records_content_contact_message").html(data);
				});
			}
			
		if(src_val == "srcval_contact")
			{
				var search_itm_contact = document.getElementById('search_item_contact').value;
				//alert(src_val);
				//alert(search_itm_contact);
				$.get("contact/read_contact_message.php", {src_val:src_val, search_itm_contact:search_itm_contact}, 
					function (data, status) {
					$(".records_content_contact_message").html(data);
				});
			}
	}
	
	// Delete Record 
	function delete_contact_message(id) {
		
		var conf = confirm("Do you really want to delete contact message?");
		if (conf == true) {
			$.post("contact/delete_contact_message.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using read_contact_message
					read_contact_message(search_type);
				}
			);
		}
	}

	$(document).ready(function () {
		// READ recods on page load
		read_contact_message(search_type); // calling function
	});