	
			
	// READ records
	function read_feedback_message() { 
		$.get("feedback/read_records_feedback.php", {}, function (data, status) {
			$(".records_content_feedback").html(data);
		});
	}
	
	// Approve Order
	function approve_feedback(id) 
			{ 
				var conf = confirm("Are you Want to approve feedback?");
				if (conf == true) 
					{
						$.post("feedback/app_feedback.php", {id: id},
						function (data) 
								{
								  alert(data);
								  read_feedback_message();
								}
						)			
					};
			};
						
	// Delete Record 
	function delete_feedback(id) {
		
		var conf = confirm("Do you really want to delete feedback message?");
		if (conf == true) {
			$.post("feedback/delete_feedback.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using read_feedback_message
					read_feedback_message();
				}
			);
		}
	}


	$(document).ready(function () {
		// READ recods on page load
		read_feedback_message(); // calling function
	});