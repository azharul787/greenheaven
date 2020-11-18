	
			
	// READ records
	function read_sold_stock() { 
		$.get("sold_stock/read_sold_stock.php", {}, function (data) {
			$(".sold_record_content").html(data);
		});
	}
	
	// Delete Record 
	function delete_order_details(id) {
		
		var conf = confirm("Do you really want to delete contact message?");
		if (conf == true) {
			$.post("sold_stock/delete_sold_stock.php", {id: id},
				function (data) {
						alert(data)
					// reload Users by using read_contact_message
					read_sold_stock();
				}
			);
		}
	}

	$(document).ready(function () {
		// READ recods on page load
		read_sold_stock(); // calling function
	});