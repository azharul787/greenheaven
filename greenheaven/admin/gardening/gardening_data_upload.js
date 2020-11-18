	
	// Add Record
	function addRecords_gardening() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#gardening_name").val());    
			form_data.append("botanical_name",$("#gardening_botanical_name").val());                   
			form_data.append("height", $("#gardening_height").val());    
			form_data.append("width", $("#gardening_width").val());        
			form_data.append("color", $("#gardening_color").val());    
			form_data.append("sunlight",$("#gardening_sunlight").val());    
			form_data.append("description", $("#gardening_description").val());    
			form_data.append("price",$("#gardening_price").val());           
	        form_data.append("image_name", $("#gardening_image_name").prop('files')[0]) 
		     $.ajax({
				url:"gardening/addRecord_gardening.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_modal_gardening").modal("hide");
							
							// read records again
							// read records again
							readRecords_gardening(search_type);
							
							// clear fields from the popup
							$("#gardening_name").val("");
							$("#gardening_botanical_name").val("");
							$("#gardening_height").val("");
							$("#gardening_width").val("");
							$("#gardening_color").val("");
							$("#gardening_sunlight").val("");
							$("#gardening_description").val("");
							$("#gardening_price").val("");
							$("#gardening_image_name").val("")
							$("#gardening_image_display").val("")
					}
			 });
		
		}
			
	// READ records
	/*function readRecords_gardening() { 
		$.get("gardening/readRecord_gardening.php", {}, function (data, status) {
			$(".records_content_gardening").html(data);
		});
	}*/
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_gardening(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("gardening/readRecord_gardening.php", {src_val:src_val}, function (data, status) {
					$(".records_content_gardening").html(data);
				});
			}
			
		if(src_val == "srcval_gardening")
			{
				var search_itm_gardening = document.getElementById('search_item_gardening').value;
				//alert(src_val);
				//alert(search_itm_gardening);
				
				$.get("gardening/readRecord_gardening.php", {src_val:src_val, search_itm_gardening:search_itm_gardening}, 
					function (data, status) {
					$(".records_content_gardening").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_gardening(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("gardening/deleteUser_gardening.php", {
					id: id
				},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_gardening(search_type);
				}
			);
		}
	}

	function GetUserDetails_gardening(id) { 
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_gardening").val(id);
		$.post("gardening/readUserDetails_gardening.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_gardening_name").val(user.name);
				$("#update_gardening_botanical_name").val(user.botanical_name);
				$("#update_gardening_height").val(user.height);
				$("#update_gardening_width").val(user.width);	
				$("#update_gardening_color").val(user.color);	
				$("#update_gardening_sunlight").val(user.sunlight);	
				$("#update_gardening_description").val(user.description);	
				$("#update_gardening_price").val(user.price);	
				
			}
		);
		// Open modal popup
		$("#update_user_modal_gardening").modal("show");
	}

	function UpdateUserDetails_gardening() 
	{
		// get values
		var name = $("#update_gardening_name").val(); 
		var botanical_name = $("#update_gardening_botanical_name").val();
		var height = $("#update_gardening_height").val();
		var width = $("#update_gardening_width").val();
		var color = $("#update_gardening_color").val();
		var sunlight = $("#update_gardening_sunlight").val();
		var description = $("#update_gardening_description").val();
		var price = $("#update_gardening_price").val();
		// get hidden field value
		var id = $("#hidden_user_id_gardening").val();
		// Update the details by requesting to the server using ajax
		$.post("gardening/updateUesrDetails_gardening.php", {id: id, name: name, botanical_name: botanical_name, height: height, width: width, color: color, sunlight: sunlight, description: description, price: price},
			function (data, status) 
				{
					alert(data)
					// hide modal popup
					$("#update_user_modal_gardening").modal("hide");
					// reload Users by using readRecords();
					readRecords_gardening(search_type);
				}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_gardening(search_type); // calling function
	});