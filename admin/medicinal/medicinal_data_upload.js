	
	
	//function addRecord() 
	function add_medicinal_records() 
	{ 
	        var form_data = new FormData();  
			form_data.append("name", $("#medicinal_name").val());    
			form_data.append("botanical_name",$("#medicinal_botanical_name").val());                   
			form_data.append("height", $("#medicinal_height").val());    
			form_data.append("width", $("#medicinal_width").val());        
			form_data.append("color", $("#medicinal_color").val());    
			form_data.append("sunlight",$("#medicinal_sunlight").val());    
			form_data.append("description", $("#medicinal_description").val());    
			form_data.append("price",$("#medicinal_price").val());           
	        form_data.append("image_name", $("#medicinal_image_name").prop('files')[0]) 
		     $.ajax({
				url:"medicinal/add_medicinal_record.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_medicinal_modal").modal("hide");
							
							// read records again
							readRecords_medicinal(search_type);
							
							// clear fields from the popup
							$("#medicinal_name").val("");
							$("#medicinal_botanical_name").val("");
							$("#medicinal_height").val("");
							$("#medicinal_width").val("");
							$("#medicinal_color").val("");
							$("#medicinal_sunlight").val("");
							$("#medicinal_description").val("");
							$("#medicinal_price").val("");
							$("#medicinal_image_name").val("")
							$("#medicinal_targetLayer").val("")
					}
			 });
		
	}
	
	// READ records
	//function readRecords() { 
	/*function read_medicinal_record() { 
		$.get("medicinal/read_medicinal_records.php", {}, function (data, status) {
			$(".medicinal_records_content").html(data);
		});
	}*/
		/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_medicinal(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("medicinal/read_medicinal_records.php", {src_val:src_val}, function (data, status) {
					$(".records_content_medicinal").html(data);
				});
			}
			
		if(src_val == "srcval_medicinal")
			{
				var search_itm_medicinal = document.getElementById('search_item_medicinal').value;
				//alert(src_val);
				//alert(search_itm_medicinal);
				
				$.get("medicinal/read_medicinal_records.php", {src_val:src_val, search_itm_medicinal:search_itm_medicinal}, 
					function (data, status) {
					$(".records_content_medicinal").html(data);
				});
			}
	}

	// Delete Record 
	//function DeleteUser(id) {
	function DeleteUser_medicinal(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("medicinal/delete_medicinal_record.php", {
					id: id
				},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords_medicinal();
					readRecords_medicinal(search_type);
				}
			);
		}
	}

	//function GetUserDetails(id) {
	function GetUserDetails_medicinal(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_medicin").val(id);
		$.post("medicinal/read_medicinal_user_details.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_medicinal_name").val(user.name);
				$("#update_medicinal_botanical_name").val(user.botanical_name);
				$("#update_medicinal_height").val(user.height);
				$("#update_medicinal_width").val(user.width);	
				$("#update_medicinal_color").val(user.color);	
				$("#update_medicinal_sunlight").val(user.sunlight);	
				$("#update_medicinal_description").val(user.description);	
				$("#update_medicinal_price").val(user.price);	
			}
		);
		// Open modal popup
		$("#update_medicinal_modal").modal("show");
	}

	//function UpdateUserDetails() {
	function UpdateUserDetails_medicinal() {
		// get values
		var name = $("#update_medicinal_name").val();
		var botanical_name = $("#update_medicinal_botanical_name").val();
		var height = $("#update_medicinal_height").val();
		var width = $("#update_medicinal_width").val();
		var color = $("#update_medicinal_color").val();
		var sunlight = $("#update_medicinal_sunlight").val();
		var description = $("#update_medicinal_description").val();
		var price = $("#update_medicinal_price").val();

		// get hidden field value
		var id = $("#hidden_user_id_medicin").val();
		//alert(id)
		// Update the details by requesting to the server using ajax
		$.post("medicinal/update_medicinal_details.php", {id: id, name: name, botanical_name: botanical_name, height: height, width:width, color:color, sunlight:sunlight, description:description, price:price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_medicinal_modal").modal("hide");
				// reload Users by using read_medicinal_record();
				
				readRecords_medicinal(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_medicinal(search_type); // calling function
	});