	
	// Add Record
	function addRecords_fruit() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#fruit_name").val());    
			form_data.append("botanical_name",$("#fruit_botanical_name").val());                   
			form_data.append("height", $("#fruit_height").val());    
			form_data.append("width", $("#fruit_width").val());        
			form_data.append("color", $("#fruit_color").val());    
			form_data.append("sunlight",$("#fruit_sunlight").val());    
			form_data.append("description", $("#fruit_description").val());    
			form_data.append("price",$("#fruit_price").val());           
	        form_data.append("image_name", $("#fruit_image_name").prop('files')[0]) 
		     $.ajax({
				url:"fruit/addRecord_fruit.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_modal_fruit").modal("hide");
							
							// read records again
							readRecords_fruit(search_type);
							
							// clear fields from the popup
							$("#fruit_name").val("");
							$("#fruit_botanical_name").val("");
							$("#fruit_height").val("");
							$("#fruit_width").val("");
							$("#fruit_color").val("");
							$("#fruit_sunlight").val("");
							$("#fruit_description").val("");
							$("#fruit_price").val("");
							$("#fruit_image_name").val("")
							$("#image_display_fruit").val("")
					}
			 });
		
		}
			
	// READ records
	/*function readRecords_fruit() { 
		$.get("fruit/readRecord_fruit.php", {}, function (data, status) {
			$(".records_content_fruit").html(data);
		});
	}*/
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_fruit(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("fruit/readRecord_fruit.php", {src_val:src_val}, function (data, status) {
					$(".records_content_fruit").html(data);
				});
			}
			
		if(src_val == "srcval_fruit")
			{
				var search_itm_fruit = document.getElementById('search_item_fruit').value;
				//alert(src_val);
				//alert(search_itm_fruit);
				$.get("fruit/readRecord_fruit.php", {src_val:src_val, search_itm_fruit:search_itm_fruit}, 
					function (data, status) {
					$(".records_content_fruit").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_fruit(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("fruit/deleteUser_fruit.php", {
					id: id
				},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_fruit(search_type);
				}
			);
		}
	}

	function GetUserDetails_fruit(id) { 
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_fruit").val(id);
		$.post("fruit/readUserDetails_fruit.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_fruit_name").val(user.name);
				$("#update_fruit_botanical_name").val(user.botanical_name);
				$("#update_fruit_height").val(user.height);
				$("#update_fruit_width").val(user.width);	
				$("#update_fruit_color").val(user.color);	
				$("#update_fruit_sunlight").val(user.sunlight);	
				$("#update_fruit_description").val(user.description);	
				$("#update_fruit_price").val(user.price);	
			}
		);
		// Open modal popup
		$("#update_user_modal_fruit").modal("show");
	}

	function UpdateUserDetails_fruit() {
		// get values
		var name = $("#update_fruit_name").val();
		var botanical_name = $("#update_fruit_botanical_name").val();
		var height = $("#update_fruit_height").val();
		var width = $("#update_fruit_width").val();
		var color = $("#update_fruit_color").val();
		var sunlight = $("#update_fruit_sunlight").val();
		var description = $("#update_fruit_description").val();
		var price = $("#update_fruit_price").val();

		// get hidden field value
		var id = $("#hidden_user_id_fruit").val();
		// Update the details by requesting to the server using ajax
		$.post("fruit/updateUserDetails_fruit.php", {id: id, name: name, botanical_name: botanical_name, height: height, width: width, color: color, sunlight: sunlight, description: description, price: price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_modal_fruit").modal("hide");
				// reload Users by using readRecords();
				readRecords_fruit(search_type);
			}
		);
	}

	$(document).ready(function () 
		{
			// READ recods on page load
			readRecords_fruit(search_type); 
		});