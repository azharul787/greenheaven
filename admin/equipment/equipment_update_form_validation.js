
$(function() {
	$("#update_equipment_name_error_message").hide();
	$("#update_equipment_type_error_message").hide();
	$("#update_equipment_brand_error_message").hide();
	$("#update_equipment_shape_error_message").hide();
	$("#update_equipment_color_error_message").hide();
	$("#update_equipment_origin_error_message").hide();
	$("#update_equipment_purpose_error_message").hide();
	$("#update_equipment_price_error_message").hide();
	

	var error_equipment_name = false;
	var error_equipment_type = false;
	var error_equipment_brand = false;
	var error_equipment_shape = false;
	var error_equipment_color = false;
	var error_equipment_origin = false;
	var error_equipment_purpose = false;
	var error_equipment_price= false;
	

	$("#update_equipment_name").focusout(function()
	{
		check_equipment_name();
	});
	
	$("#update_equipment_type").focusout(function()
		{	
			check_equipment_type();	
		});
	
	$("#update_equipment_brand").focusout(function()
		{
			check_equipment_brand();	
		});
	
	$("#update_equipment_shape").focusout(function()
		{
			check_equipment_shape();
		});
		
	$("#update_equipment_color").focusout(function()
		{
			check_equipment_color();
		});
		
	$("#update_equipment_origin").focusout(function()
		{
			check_equipment_origin();
		});	
	
	$("#update_equipment_purpose").focusout(function()
		{
			check_equipment_purpose();
		});
	
	$("#update_equipment_price").focusout(function()
		{
			check_equipment_price();
		});
	

	
//Name check function
	function check_equipment_name() 
		{
			var equipment_name_length = $("#update_equipment_name").val().length;

			if(equipment_name_length == "" || equipment_name_length == null) 
			{
				$("#update_equipment_name_error_message").html("Please fill in data into the field");
				$("#update_equipment_name_error_message").show();      
				error_equipment_name = true;
			} 
			else if(equipment_name_length < 2 || equipment_name_length > 20) 
			{
				$("#update_equipment_name_error_message").html("Should be between 2-20 characters");
				$("#update_equipment_name_error_message").show();      
				error_equipment_name = true;
			} 
			else 
			{
				$("#update_equipment_name_error_message").hide();
			}
		}
		
	//check_equipment_type Check function
	function check_equipment_type() 
		{ 
			var select_equipment_type = $("#update_equipment_type").val();
				
			if(select_equipment_type == "") 
			{
				$("#update_equipment_type_error_message").html("Please select one from the list");
				$("#update_equipment_type_error_message").show();      
				error_equipment_type = true;
			} 
			else 
			{
				$("#update_equipment_type_error_message").hide();
			}
		}
		
	//  Check function check_equipment_brand
	function check_equipment_brand() 
		{ 
			var select_equipment_brand = $("#update_equipment_brand").val();
			
			if(select_equipment_brand == "") 
			{	
				$("#update_equipment_brand_error_message").html("Please select one from the list");
				$("#update_equipment_brand_error_message").show();      
				error_equipment_brand = true;
			} 
			else 
			{
				$("#update_equipment_brand_error_message").hide();
			}
		}
		
	//  Check Shape function
	function check_equipment_shape() 
		{ 
			var select_equipment_shape = $("#update_equipment_shape").val();
			
			if(select_equipment_shape == "") 
			{	
				$("#update_equipment_shape_error_message").html("Please select one from the list");
				$("#update_equipment_shape_error_message").show();      
				error_equipment_shape = true;
			} 
			else 
			{
				$("#update_equipment_shape_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_equipment_color() 
		{	
			var color_length = $("#update_equipment_color").val();
				
			if(color_length == "") 
			{
				$("#update_equipment_color_error_message").html("Please select one from the list");
				$("#update_equipment_color_error_message").show();      
				error_equipment_color = true;
			} 
			else 
			{
				$("#update_equipment_color_error_message").hide();
			}
		}
		
	//origin  Check function
	function check_equipment_origin() 
		{	
			var origin = $("#update_equipment_origin").val();
				
			if(origin == "") 
			{
				$("#update_equipment_origin_error_message").html("Please select one from the list");
				$("#update_equipment_origin_error_message").show();      
				error_equipment_origin = true;
			} 
			else 
			{
				$("#update_equipment_origin_error_message").hide();
			}
		}
		
	//Text purpose  Check function
	function check_equipment_purpose() 
		{	
			var purpose_length = $("#update_equipment_purpose").val().length;

			//if($.trim(purpose_length == "" || purpose_length == "")) 
			if(purpose_length == "" || purpose_length == "") 
			{
				$("#update_equipment_purpose_error_message").html("Please fill in data into the field");
				$("#update_equipment_purpose_error_message").show();      
				error_equipment_purpose = true;
			} 
			else if(purpose_length <5 || purpose_length > 100)
			{
				$("#update_equipment_purpose_error_message").html("Should be between 5-100 characters");
				$("#update_equipment_purpose_error_message").show();      
				error_equipment_purpose = true;
			} 
			else 
			{
				$("#update_equipment_purpose_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_equipment_price() 
		{ 
			var price = $("#update_equipment_price").val();
			
			if(price == "") 
			{	
				$("#update_equipment_price_error_message").html("Please fill in data into the field");
				$("#update_equipment_price_error_message").show();      
				error_equipment_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				$("#update_equipment_price_error_message").html("Price should be number characters");
				$("#update_equipment_price_error_message").show();      
				error_equipment_price = true;
			} 
			else 
			{
				$("#update_equipment_price_error_message").hide();
			}
		}
		


// Submit

	$("#update_equipment_form_validation").click(function() { 
										
		error_equipment_name = false;
		error_equipment_type = false;
		error_equipment_brand = false;
		error_equipment_shape = false;
		error_equipment_color = false;
		error_equipment_origin = false;
		error_equipment_purpose = false;
		error_equipment_price= false;
									
		check_equipment_name();
		check_equipment_type();
		check_equipment_brand();
		check_equipment_shape();
		check_equipment_color();
		check_equipment_origin();
		check_equipment_purpose();
		check_equipment_price();
			
		if(	error_equipment_name == false && 
			error_equipment_type == false && 
			error_equipment_brand == false && 
			error_equipment_shape == false && 
			error_equipment_color == false && 
			error_equipment_origin == false &&
			error_equipment_purpose == false && 
			error_equipment_price == false
			)
			{
				
				//return true;
				UpdateUserDetails_equipment()
			}
		else
			{
				return false;
					
			}

	});

});