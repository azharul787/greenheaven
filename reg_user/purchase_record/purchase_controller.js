	
			
	// READ records
	/*function read_purchase_rocords() { 
	//alert("refresh")
		$.get("purchase_record/read_purchase_records.php", {}, function (data, status) {
			$(".records_content_purchase_record").html(data);
		});
	}*/
	
	// View Details Order List
	function view_purchase_details(id) 
		{
			var view_id = id ;
			$.ajax({
				type:"post",
				url:"purchase_record/view_purchase_details.php",
				data:{view_id:view_id},
				success:function(result){
					$("#myModal").modal("show");
					$('#view_purchase_details').html(result);
				}
			});
		}
	
	/*$(document).ready(function () {
		// READ recods on page load
		read_purchase_rocords(); // calling function
	});*/