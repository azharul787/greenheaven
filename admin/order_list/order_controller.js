	
	var srctype="all";		
	// READ records
	function read_order_list_rocords(tp) 
	{ 
		var srctype = tp;

		if(tp == "all")
		 { 
			$.get("order_list/read_order_records.php", {src:tp }, 
				function (data, status) {
				$(".records_content_order_list").html(data);
			});
		 }
		 
		if(tp == "dt")
		 { 
			var sdt = document.getElementById('datepicker-range-start').value;
			var edt = document.getElementById('datepicker-range-end').value; 
			$.get("order_list/read_order_records.php", {src:tp,sdt:sdt,edt:edt}, 
				function (data){
				$(".records_content_order_list").html(data);
			})	
		 }	
	 } 
	
	
	// View Details Order List
	function view_order_list_details(id) 
		{
			var view_id = id ;
			// alert(view_id)
			$.ajax({
				type:"post",
				url:"order_list/view_order_details.php",
				data:{view_id:view_id},
				success:function(result){
					$("#myModal").modal("show");
					$('#view_order_details').html(result);
				}
			});
		}
	
	// Approve Order
	function approve_order_list(id) 
			{ 
				alert(id)
				var conf = confirm("Are you Want to Approve Order?");
				if (conf == true) {
					$.post("order_list/approve_order.php", {id: id},
					function (data) 
							{
							  alert(data);
							  read_order_list_rocords(srctype);
							}
					)			
			};
			};
						
	// Delete Record 
	function Delete_order_list(id) {
		//alert(id)
		var conf = confirm("Are you sure, do you really want to delete Order?");
		if (conf == true) {
			$.post("order_list/delete_order_list.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using read_order_list_rocords
					read_order_list_rocords(srctype);
				}
			);
		}
	}


	$(document).ready(function () {
		// READ recods on page load
		read_order_list_rocords(srctype); // calling function
	});