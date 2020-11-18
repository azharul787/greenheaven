
$(function() {
	$("#update_fruit_name_error_message").hide();
	$("#update_fruit_botanical_name_error_message").hide();
	$("#update_fruit_height_error_message").hide();
	$("#update_fruit_width_error_message").hide();
	$("#update_fruit_color_error_message").hide();
	$("#update_fruit_sunlight_error_message").hide();
	$("#update_fruit_description_error_message").hide();
	$("#update_fruit_price_error_message").hide();
	

	var error_fruit_name = false;
	var error_fruit_botanical_name = false;
	var error_fruit_height = false;
	var error_fruit_width = false;
	var error_fruit_color = false;
	var error_fruit_sunlight = false;
	var error_fruit_description = false;
	var error_fruit_price= false;
	

	$("#update_fruit_name").focusout(function()
	{
		check_fruit_name();
	});
	
	$("#update_fruit_botanical_name").focusout(function()
		{	
			check_fruit_botanical_name();	
		});
	
	$("#update_fruit_height").focusout(function()
		{
			check_fruit_height();	
		});
	
	$("#update_fruit_width").focusout(function()
		{
			check_fruit_width();
		});
		
	$("#update_fruit_color").focusout(function()
		{
			check_fruit_color();
		});
		
	$("#update_fruit_sunlight").focusout(function()
		{
			check_fruit_sunlight();
		});	
	
	$("#update_fruit_description").focusout(function()
		{
			check_fruit_description();
		});
	
	$("#update_fruit_price").focusout(function()
		{
			check_fruit_price();
		});
	

	
//Name check function
	function check_fruit_name() 
		{
			var fruit_name_length = $("#update_fruit_name").val().length;

			if(fruit_name_length == "" || fruit_name_length == null) 
			{
				$("#update_fruit_name_error_message").html("Please fill in data into the field");
				$("#update_fruit_name_error_message").show();      
				error_fruit_name = true;
			} 
			else if(fruit_name_length < 2 || fruit_name_length > 40) 
			{
				$("#update_fruit_name_error_message").html("Should be between 2-40 characters");
				$("#update_fruit_name_error_message").show();      
				error_fruit_name = true;
			} 
			else 
			{
				$("#update_fruit_name_error_message").hide();
			}
		}
		
//Botanical fruit_name Check function
	function check_fruit_botanical_name() 
		{ 
			var boname_length = $("#update_fruit_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#update_fruit_botanical_name_error_message").html("Please fill in data into the field");      
					$("#update_fruit_botanical_name_error_message").show();      
					error_fruit_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 40) {
				$("#update_fruit_botanical_name_error_message").html("Should be between 2-40 characters");
				$("#update_fruit_botanical_name_error_message").show();      
				error_fruit_botanical_name = true;
			}
			
			else 
			{
				$("#update_fruit_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_fruit_height() 
		{ 
			var height = $("#update_fruit_height").val();
			
			if(height == "") 
			{	
				$("#update_fruit_height_error_message").html("Please fill in data into the field");
				$("#update_fruit_height_error_message").show();      
				error_fruit_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#update_fruit_height_error_message").html("Should be number characters");
				$("#update_fruit_height_error_message").show();      
				error_fruit_height = true;
			} 
			else 
			{
				$("#update_fruit_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_fruit_width() 
		{ 
			var width = $("#update_fruit_width").val();
			
			if(width == "") 
			{	
				$("#update_fruit_width_error_message").html("Please fill in data into the field");
				$("#update_fruit_width_error_message").show();      
				error_fruit_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#update_fruit_width_error_message").html("Should be number characters");
				$("#update_fruit_width_error_message").show();      
				error_fruit_width = true;
			} 
			else 
			{
				$("#update_fruit_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_fruit_color() 
		{	
			var color_length = $("#update_fruit_color").val();
				
			if(color_length == "") 
			{ 
				//alert(color_length)
				$("#update_fruit_color_error_message").html("Please select one from the list");
				$("#update_fruit_color_error_message").show();      
				error_fruit_color = true;
			} 
			else 
			{
				$("#update_fruit_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_fruit_sunlight() 
		{	
			var sunlight = $("#update_fruit_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#update_fruit_sunlight_error_message").html("Please select one from the list");
				$("#update_fruit_sunlight_error_message").show();      
				error_fruit_sunlight = true;
			} 
			else 
			{
				$("#update_fruit_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_fruit_description() 
		{	
			var area_length = $("#update_fruit_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#update_fruit_description_error_message").html("Please fill in data into the field");
				$("#update_fruit_description_error_message").show();      
				error_fruit_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#update_fruit_description_error_message").html("Should be between 10-200 characters");
				$("#update_fruit_description_error_message").show();      
				error_fruit_description = true;
			} 
			else 
			{
				$("#update_fruit_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_fruit_price() 
		{ 
			var price = $("#update_fruit_price").val();
			
			if(price == "") 
			{	
				$("#update_fruit_price_error_message").html("Please fill in data into the field");
				$("#update_fruit_price_error_message").show();      
				error_fruit_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#update_fruit_price_error_message").html("Price should be number characters");
				$("#update_fruit_price_error_message").show();      
				error_fruit_price = true;
			} 
			else 
			{
				$("#update_fruit_price_error_message").hide();
			}
		}
		


// Submit

	$("#update_fruit_form_validation").click(function() { 
										
		error_fruit_name = false;
		error_fruit_botanical_name = false;
		error_fruit_height = false;
		error_fruit_width = false;
		error_fruit_color = false;
		error_fruit_sunlight = false;
		error_fruit_description = false;
		error_fruit_price= false;
									
		check_fruit_name();
		check_fruit_botanical_name();
		check_fruit_height();
		check_fruit_width();
		check_fruit_color();
		check_fruit_sunlight();
		check_fruit_description();
		check_fruit_price();
			
		if(	error_fruit_name == false && 
			error_fruit_botanical_name == false && 
			error_fruit_height == false && 
			error_fruit_width == false && 
			error_fruit_color == false && 
			error_fruit_sunlight == false &&
			error_fruit_description == false && 
			error_fruit_price == false
			)
			{
				//alert("Upload Successfull")
				//return true;
				UpdateUserDetails_fruit()
			}
		else
			{
				return false;
					
			}

	});

});