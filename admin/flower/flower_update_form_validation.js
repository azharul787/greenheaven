
$(function() {
	$("#update_flower_name_error_message").hide();
	$("#update_flower_botanical_name_error_message").hide();
	$("#update_flower_height_error_message").hide();
	$("#update_flower_width_error_message").hide();
	$("#update_flower_color_error_message").hide();
	$("#update_flower_sunlight_error_message").hide();
	$("#update_flower_description_error_message").hide();
	$("#update_flower_price_error_message").hide();
	

	var error_flower_name = false;
	var error_flower_botanical_name = false;
	var error_flower_height = false;
	var error_flower_width = false;
	var error_flower_color = false;
	var error_flower_sunlight = false;
	var error_flower_description = false;
	var error_flower_price= false;
	

	$("#update_flower_name").focusout(function()
	{
		check_flower_name();
	});
	
	$("#update_flower_botanical_name").focusout(function()
		{	
			check_flower_botanical_name();	
		});
	
	$("#update_flower_height").focusout(function()
		{
			check_flower_height();	
		});
	
	$("#update_flower_width").focusout(function()
		{
			check_flower_width();
		});
		
	$("#update_flower_color").focusout(function()
		{
			check_flower_color();
		});
		
	$("#update_flower_sunlight").focusout(function()
		{
			check_flower_sunlight();
		});	
	
	$("#update_flower_description").focusout(function()
		{
			check_flower_description();
		});
	
	$("#update_flower_price").focusout(function()
		{
			check_flower_price();
		});
	

	
//Name check function
	function check_flower_name() 
		{
			var flower_name_length = $("#update_flower_name").val().length;

			if(flower_name_length == "" || flower_name_length == null) 
			{
				$("#update_flower_name_error_message").html("Please fill in data into the field");
				$("#update_flower_name_error_message").show();      
				error_flower_name = true;
			} 
			else if(flower_name_length < 2 || flower_name_length > 40) 
			{
				$("#update_flower_name_error_message").html("Should be between 2-40 characters");
				$("#update_flower_name_error_message").show();      
				error_flower_name = true;
			} 
			else 
			{
				$("#update_flower_name_error_message").hide();
			}
		}
		
//Botanical flower_name Check function
	function check_flower_botanical_name() 
		{ 
			var boname_length = $("#update_flower_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#update_flower_botanical_name_error_message").html("Please fill in data into the field");      
					$("#update_flower_botanical_name_error_message").show();      
					error_flower_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 40) {
				$("#update_flower_botanical_name_error_message").html("Should be between 2-40 characters");
				$("#update_flower_botanical_name_error_message").show();      
				error_flower_botanical_name = true;
			}
			
			else 
			{
				$("#update_flower_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_flower_height() 
		{ 
			var height = $("#update_flower_height").val();
			
			if(height == "") 
			{	
				$("#update_flower_height_error_message").html("Please fill in data into the field");
				$("#update_flower_height_error_message").show();      
				error_flower_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#update_flower_height_error_message").html("Should be number characters");
				$("#update_flower_height_error_message").show();      
				error_flower_height = true;
			} 
			else 
			{
				$("#update_flower_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_flower_width() 
		{ 
			var width = $("#update_flower_width").val();
			
			if(width == "") 
			{	
				$("#update_flower_width_error_message").html("Please fill in data into the field");
				$("#update_flower_width_error_message").show();      
				error_flower_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#update_flower_width_error_message").html("Should be number characters");
				$("#update_flower_width_error_message").show();      
				error_flower_width = true;
			} 
			else 
			{
				$("#update_flower_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_flower_color() 
		{	
			var color_length = $("#update_flower_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#update_flower_color_error_message").html("Please select one from the list");
				$("#update_flower_color_error_message").show();      
				error_color = true;
			} 
			else 
			{
				$("#update_flower_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_flower_sunlight() 
		{	
			var sunlight = $("#update_flower_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#update_flower_sunlight_error_message").html("Please select one from the list");
				$("#update_flower_sunlight_error_message").show();      
				error_flower_sunlight = true;
			} 
			else 
			{
				$("#update_flower_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_flower_description() 
		{	
			var area_length = $("#update_flower_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#update_flower_description_error_message").html("Please fill in data into the field");
				$("#update_flower_description_error_message").show();      
				error_flower_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#update_flower_description_error_message").html("Should be between 10-200 characters");
				$("#update_flower_description_error_message").show();      
				error_flower_description = true;
			} 
			else 
			{
				$("#update_flower_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_flower_price() 
		{ 
			var price = $("#update_flower_price").val();
			
			if(price == "") 
			{	
				$("#update_flower_price_error_message").html("Please fill in data into the field");
				$("#update_flower_price_error_message").show();      
				error_flower_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#update_flower_price_error_message").html("Price should be number characters");
				$("#update_flower_price_error_message").show();      
				error_flower_price = true;
			} 
			else 
			{
				$("#update_flower_price_error_message").hide();
			}
		}
		


// Submit

	$("#update_flower_form_validation").click(function() { 
										
		error_flower_name = false;
		error_flower_botanical_name = false;
		error_flower_height = false;
		error_flower_width = false;
		error_flower_color = false;
		error_flower_sunlight = false;
		error_flower_description = false;
		error_flower_price= false;
									
		check_flower_name();
		check_flower_botanical_name();
		check_flower_height();
		check_flower_width();
		check_flower_color();
		check_flower_sunlight();
		check_flower_description();
		check_flower_price();
			
		if(	error_flower_name == false && 
			error_flower_botanical_name == false && 
			error_flower_height == false && 
			error_flower_width == false && 
			error_flower_color == false && 
			error_flower_sunlight == false &&
			error_flower_description == false && 
			error_flower_price == false
			)
			{
				//alert("Upload Successfull")
				//return true;
				UpdateUserDetails_flower()
			}
		else
			{
				return false;
					
			}

	});

});