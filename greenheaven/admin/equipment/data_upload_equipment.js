	
	// Add Record
	function addRecords_equipment() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#equipment_name").val());    
			form_data.append("type",$("#equipment_type").val());                   
			form_data.append("brand", $("#equipment_brand").val());    
			form_data.append("shape", $("#equipment_shape").val());        
			form_data.append("color", $("#equipment_color").val());    
			form_data.append("origin",$("#equipment_origin").val());    
			form_data.append("purpose", $("#equipment_purpose").val());    
			form_data.append("price",$("#equipment_price").val());           
	        form_data.append("image_name", $("#equipment_image_name").prop('files')[0]) 
		     $.ajax({
				url:"equipment/addRecord_equipment.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
						alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_equipment").modal("hide");
							
							
							// read records again
							readRecords_equipment(search_type);
							
							// clear fields from the popup
							$("#equipment_name").val("");
							$("#equipment_type").val("");
							$("#equipment_brand").val("");
							$("#equipment_shape").val("");
							$("#equipment_color").val("");
							$("#equipment_origin").val("");
							$("#equipment_purpose").val("");
							$("#equipment_price").val("");
							$("#equipment_image_name").val("")
							$("#equipment_image_display").val("")
					}
			 });
		
		}
			
	// READ records
	/*function readRecords_equipment() { 
		$.get("equipment/readRecord_equipment.php", {}, function (data, status) {
			$(".records_content_equipment").html(data);
		});
	}*/
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_equipment(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("equipment/readRecord_equipment.php", {src_val:src_val}, function (data, status) {
					$(".records_content_equipment").html(data);
				});
			}
			
		if(src_val == "srcval_equipment")
			{
				var search_itm_equipment = document.getElementById('search_item_equipment').value;
				//alert(src_val);
				//alert(search_itm_equipment);
				
				$.get("equipment/readRecord_equipment.php", {src_val:src_val, search_itm_equipment:search_itm_equipment}, 
					function (data, status) {
					$(".records_content_equipment").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_equipment(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("equipment/deleteUser_equipment.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_equipment(search_type);
				}
			);
		}
	}

	function GetUserDetails_equipment(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_equipment").val(id);
		$.post("equipment/readUserDetails_equipment.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_equipment_name").val(user.name);
				$("#update_equipment_type").val(user.type);
				$("#update_equipment_brand").val(user.brand);
				$("#update_equipment_shape").val(user.shape);	
				$("#update_equipment_color").val(user.color);	
				$("#update_equipment_origin").val(user.origin);	
				$("#update_equipment_purpose").val(user.purpose);	
				$("#update_equipment_price").val(user.price);	
			}
		);
		// Open modal popup
		$("#update_user_modal_equipment").modal("show");
	}

	function UpdateUserDetails_equipment() {
		// get values
		var name = $("#update_equipment_name").val();
		var type = $("#update_equipment_type").val();
		var brand = $("#update_equipment_brand").val();
		var shape = $("#update_equipment_shape").val();
		var color = $("#update_equipment_color").val();
		var origin = $("#update_equipment_origin").val();
		var purpose = $("#update_equipment_purpose").val();
		var price = $("#update_equipment_price").val();

		// get hidden field value
		var id = $("#hidden_user_id_equipment").val();
	
		// Update the details by requesting to the server using ajax
		$.post("equipment/updateUserDetails_equipment.php", {id: id, name: name, type: type, brand: brand, shape: shape, color: color, origin: origin, purpose: purpose, price: price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_modal_equipment").modal("hide");
				// reload Users by using readRecords();
				readRecords_equipment(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_equipment(search_type); // calling function
	});