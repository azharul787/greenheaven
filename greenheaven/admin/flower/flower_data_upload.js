	
	// Add Record
	function addRecords_flower() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#flower_name").val());    
			form_data.append("botanical_name",$("#flower_botanical_name").val());                   
			form_data.append("height", $("#flower_height").val());    
			form_data.append("width", $("#flower_width").val());        
			form_data.append("color", $("#flower_color").val());    
			form_data.append("sunlight",$("#flower_sunlight").val()); 
			form_data.append("fragrant",$("#flower_fragrant").val());    
			form_data.append("description", $("#flower_description").val());    
			form_data.append("price",$("#flower_price").val());           
			form_data.append("stock",$("#flower_stock").val());           
	        form_data.append("image_name", $("#flower_image_name").prop('files')[0]) 
		     $.ajax({
				url:"flower/addRecord_flower.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_flower_modal").modal("hide");
							
							// read records again
							// read records again
							readRecords_flower(search_type);
							
							// clear fields from the popup
							$("#flower_name").val("");
							$("#flower_botanical_name").val("");
							$("#flower_height").val("");
							$("#flower_width").val("");
							$("#flower_color").val("");
							$("#flower_sunlight").val("");
							$("#flower_fragrant").val("");
							$("#flower_description").val("");
							$("#flower_price").val("");
							$("#flower_image_name").val("")
							$("#flower_stock").val("")
					}
			 });
		
		}
			
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_flower(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("flower/readRecord_flower.php", {src_val:src_val}, function (data, status) {
					$(".records_content_flower").html(data);
				});
			}
			
		if(src_val == "srcval_flower")
			{
				var search_itm_flower = document.getElementById('search_item_flower').value;
				//alert(src_val);
				//alert(search_itm_flower);
				
				$.get("flower/readRecord_flower.php", {src_val:src_val, search_itm_flower:search_itm_flower}, 
					function (data, status) {
					$(".records_content_flower").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_flower(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("flower/deleteUser_flower.php", {id: id},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_flower(search_type);
				}
			);
		}
	}

	function GetUserDetails_flower(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_flower_user_id").val(id);
		$.post("flower/readUserDetails_flower.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_flower_name").val(user.name);
				$("#update_flower_botanical_name").val(user.botanical_name);
				$("#update_flower_height").val(user.height);
				$("#update_flower_width").val(user.width);	
				$("#update_flower_color").val(user.color);	
				$("#update_flower_sunlight").val(user.sunlight);
				$("#update_flower_fragrant").val(user.fragrant);	
				$("#update_flower_description").val(user.description);	
				$("#update_flower_price").val(user.price);	
				$("#update_flower_stock").val(user.stock);
				//alert(update_flower_price);
			}
		);
		// Open modal popup
		$("#update_user_flower_modal").modal("show");
	}

	function UpdateUserDetails_flower() {
		// get values
		var name = $("#update_flower_name").val();
		var botanical_name = $("#update_flower_botanical_name").val();
		var height = $("#update_flower_height").val();
		var width = $("#update_flower_width").val();
		var color = $("#update_flower_color").val();
		var sunlight = $("#update_flower_sunlight").val();
		var fragrant = $("#update_flower_fragrant").val();
		var description = $("#update_flower_description").val();
		var price = $("#update_flower_price").val();
		var stock = $("#update_flower_stock").val();

		// get hidden field value
		var id = $("#hidden_flower_user_id").val();
	
		// Update the details by requesting to the server using ajax
		$.post("flower/updateUserDetails_flower.php", {id: id, name: name, botanical_name: botanical_name, height: height, width: width, color: color, sunlight: sunlight, fragrant: fragrant, description: description, stock:stock, price: price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_flower_modal").modal("hide");
				// reload Users by using readRecords();
				readRecords_flower(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_flower(search_type); // calling function
	});