	
	// Add Record
	function addRecords_vegetable() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#vegetable_name").val());    
			form_data.append("botanical_name",$("#vegetable_botanical_name").val());                   
			form_data.append("height", $("#vegetable_height").val());    
			form_data.append("width", $("#vegetable_width").val());        
			form_data.append("color", $("#vegetable_color").val());    
			form_data.append("sunlight",$("#vegetable_sunlight").val());    
			form_data.append("description", $("#vegetable_description").val());    
			form_data.append("price",$("#vegetable_price").val());           
	        form_data.append("image_name", $("#vegetable_image_name").prop('files')[0]) 
		     $.ajax({
				url:"vegetable/addRecord_vegetable.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_modal_vegetable").modal("hide");
							
							// read records again
							// read records again
							readRecords_vegetable(search_type);
							
							// clear fields from the popup
							$("#vegetable_name").val("");
							$("#vegetable_botanical_name").val("");
							$("#vegetable_height").val("");
							$("#vegetable_width").val("");
							$("#vegetable_color").val("");
							$("#vegetable_sunlight").val("");
							$("#vegetable_description").val("");
							$("#vegetable_price").val("");
							$("#vegetable_image_name").val("")
							$("#vegetable_image_display").val("")
					}
			 });
		
		}
			
	// READ records
	/*function readRecords_vegetable() { 
		$.get("vegetable/readRecords_vegetable.php", {}, function (data, status) {
			$(".records_content_vegetable").html(data);
		});
	}*/
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_vegetable(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("vegetable/readRecords_vegetable.php", {src_val:src_val}, function (data, status) {
					$(".records_content_vegetable").html(data);
				});
			}
			
		if(src_val == "srcval_vegetable")
			{
				var search_itm_vegetable = document.getElementById('search_item_vegetable').value;
				//alert(src_val);
				//alert(search_itm_vegetable);
				
				$.get("vegetable/readRecords_vegetable.php", {src_val:src_val, search_itm_vegetable:search_itm_vegetable}, 
					function (data, status) {
					$(".records_content_vegetable").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_vegetable(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("vegetable/deleteUser_vegetable.php", {
					id: id
				},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_vegetable(search_type);
				}
			);
		}
	}

	function GetUserDetails_vegetable(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_vegetable").val(id);
		$.post("vegetable/readUserDetails_vegetable.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_vegetable_name").val(user.name);
				$("#update_vegetable_botanical_name").val(user.botanical_name);
				$("#update_vegetable_height").val(user.height);
				$("#update_vegetable_width").val(user.width);	
				$("#update_vegetable_color").val(user.color);	
				$("#update_vegetable_sunlight").val(user.sunlight);	
				$("#update_vegetable_description").val(user.description);	
				$("#update_vegetable_price").val(user.price);	
			}
		);
		// Open modal popup
		$("#update_user_modal_vegetable").modal("show");
	}

	function UpdateUserDetails_vegetable() {
		// get values
		var name = $("#update_vegetable_name").val();
		var botanical_name = $("#update_vegetable_botanical_name").val();
		var height = $("#update_vegetable_height").val();
		var width = $("#update_vegetable_width").val();
		var color = $("#update_vegetable_color").val();
		var sunlight = $("#update_vegetable_sunlight").val();
		var description = $("#update_vegetable_description").val();
		var price = $("#update_vegetable_price").val();

		// get hidden field value
		var id = $("#hidden_user_id_vegetable").val();
	
		// Update the details by requesting to the server using ajax
		$.post("vegetable/updateUserDetails_vegetable.php", {id: id, name: name, botanical_name: botanical_name, height: height, width: width, color: color, sunlight: sunlight, description: description, price: price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_modal_vegetable").modal("hide");
				// reload Users by using readRecords();
				readRecords_vegetable(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_vegetable(search_type); // calling function
	});