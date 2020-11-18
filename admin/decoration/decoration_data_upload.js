	
	// Add Record
	function addRecords_decoration() 
		{ 
		var form_data = new FormData();  
			form_data.append("name", $("#decoration_name").val());    
			form_data.append("botanical_name",$("#decoration_botanical_name").val());                   
			form_data.append("height", $("#decoration_height").val());    
			form_data.append("width", $("#decoration_width").val());        
			form_data.append("color", $("#decoration_color").val());    
			form_data.append("sunlight",$("#decoration_sunlight").val());    
			form_data.append("description", $("#decoration_description").val());    
			form_data.append("price",$("#decoration_price").val());           
	        form_data.append("image_name", $("#decoration_image_name").prop('files')[0]) 
		     $.ajax({
				url:"decoration/addRecord_decoration.php",
				method:"POST",
				data: form_data,
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) 
					{
					alert(data)
      				// Do something after Ajax completes 
						$("#add_new_record_modal_decoration").modal("hide");
							
							// read records again
							// read records again
							readRecords_decoration(search_type);
							
							// clear fields from the popup
							$("#decoration_name").val("");
							$("#decoration_botanical_name").val("");
							$("#decoration_height").val("");
							$("#decoration_width").val("");
							$("#decoration_color").val("");
							$("#decoration_sunlight").val("");
							$("#decoration_description").val("");
							$("#decoration_price").val("");
							$("#decoration_image_name").val("")
							$("#decoration_image_display").val("")
					}
			 });
		
		}
			
	// READ records
	/*function readRecords_decoration() { 
		$.get("decoration/readRecord_decoration.php", {}, function (data, status) {
			$(".records_content_decoration").html(data);
		});
	}*/
	/*----Read Record From Database---*/
	var search_type = "all";
	function readRecords_decoration(src_val) 
	{ 
		//alert(src_val)
		var search_type = src_val;
				
		if(src_val == "all")
			{
				$.get("decoration/readRecord_decoration.php", {src_val:src_val}, function (data, status) {
					$(".records_content_decoration").html(data);
				});
			}
			
		if(src_val == "srcval_decoration")
			{
				var search_itm_decoration = document.getElementById('search_item_decoration').value;
				//alert(src_val);
				//alert(search_itm_decoration);
				
				$.get("decoration/readRecord_decoration.php", {src_val:src_val, search_itm_decoration:search_itm_decoration}, 
					function (data, status) {
					$(".records_content_decoration").html(data);
				});
			}
	}

	// Delete Record 
	function DeleteUser_decoration(id) {
		var conf = confirm("Are you sure, do you really want to delete User?");
		if (conf == true) {
			$.post("decoration/deleteUser_decoration.php", {
					id: id
				},
				function (data, status) {
						alert(data)
					// reload Users by using readRecords();
					readRecords_decoration(search_type);
				}
			);
		}
	}

	function GetUserDetails_decoration(id) {
		// Add User ID to the hidden field for furture usage
		$("#hidden_user_id_decoration").val(id);
		$.post("decoration/readUserDetails_decoration.php", {id: id},
			function (data, status) { 
				// PARSE json data
				var user = JSON.parse(data);
				// Assing existing values to the modal popup fields
				$("#update_decoration_name").val(user.name);
				$("#update_decoration_botanical_name").val(user.botanical_name);
				$("#update_decoration_height").val(user.height);
				$("#update_decoration_width").val(user.width);	
				$("#update_decoration_color").val(user.color);	
				$("#update_decoration_sunlight").val(user.sunlight);	
				$("#update_decoration_description").val(user.description);	
				$("#update_decoration_price").val(user.price);	
			}
		);
		// Open modal popup
		$("#update_user_modal_decoration").modal("show");
	}

	function UpdateUserDetails_decoration() {
		// get values
		var name = $("#update_decoration_name").val();
		var botanical_name = $("#update_decoration_botanical_name").val();
		var height = $("#update_decoration_height").val();
		var width = $("#update_decoration_width").val();
		var color = $("#update_decoration_color").val();
		var sunlight = $("#update_decoration_sunlight").val();
		var description = $("#update_decoration_description").val();
		var price = $("#update_decoration_price").val();

		// get hidden field value
		var id = $("#hidden_user_id_decoration").val();
		// Update the details by requesting to the server using ajax
		$.post("decoration/updateUserDetails_decoration.php", {id: id, name: name, botanical_name: botanical_name, height: height, width: width, color: color, sunlight: sunlight, description: description, price: price},
			function (data, status) {
				alert(data)
				// hide modal popup
				$("#update_user_modal_decoration").modal("hide");
				// reload Users by using readRecords();
				readRecords_decoration(search_type);
			}
		);
	}

	$(document).ready(function () {
		// READ recods on page load
		readRecords_decoration(search_type); // calling function
	});