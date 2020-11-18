	
			
	// READ records
	function read_coment_message() { 
		$.get("coment/read_records_coment.php", {}, function (data, status) {
			$(".records_content_coment").html(data);
		});
	}
	
	// Approve Order
	function approve_coment(id) 
			{ 
				var conf = confirm("Are you Want to approve coment?");
				if (conf == true) 
					{
						$.post("coment/approve_coment.php", {id: id},
						function (data) 
								{
								  alert(data);
								  read_coment_message();
								}
						)			
					};
			};
						
	// Delete Record 
	function delete_coment(id) { 
		
		var conf = confirm("Do you really want to delete coment message?");
		if (conf == true) {
			$.post("coment/delete_coment.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using read_coment_message
					read_coment_message();
				}
			);
		}
	}


	$(document).ready(function () {
		// READ recods on page load
		read_coment_message(); // calling function
	});