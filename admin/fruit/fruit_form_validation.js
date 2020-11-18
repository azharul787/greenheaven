
$(function() {
	$("#fruit_name_error_message").hide();
	$("fruit_botanical_name_error_message").hide();
	$("#fruit_height_error_message").hide();
	$("#fruit_width_error_message").hide();
	$("#fruit_color_error_message").hide();
	$("#fruit_sunlight_error_message").hide();
	$("#fruit_description_error_message").hide();
	$("#fruit_price_error_message").hide();
	

	var error_fruit_name = false;
	var error_fruit_botanical_name = false;
	var error_fruit_height = false;
	var error_fruit_width = false;
	var error_fruit_color = false;
	var error_fruit_sunlight = false;
	var error_fruit_description = false;
	var error_fruit_price= false;
	

	$("#fruit_name").focusout(function()
	{
		check_fruit_name();
	});
	
	$("#fruit_botanical_name").focusout(function()
		{	
			check_fruit_botanical_name();	
		});
	
	$("#fruit_height").focusout(function()
		{
			check_fruit_height();	
		});
	
	$("#fruit_width").focusout(function()
		{
			check_fruit_width();
		});
		
	$("#fruit_color").focusout(function()
		{
			check_fruit_color();
		});
		
	$("#fruit_sunlight").focusout(function()
		{
			check_fruit_sunlight();
		});	
	
	$("#fruit_description").focusout(function()
		{
			check_fruit_description();
		});
	
	$("#fruit_price").focusout(function()
		{
			check_fruit_price();
		});
	

	
//Name check function
	function check_fruit_name() 
		{
			var fruit_name_length = $("#fruit_name").val().length;

			if(fruit_name_length == "" || fruit_name_length == null) 
			{
				$("#fruit_name_error_message").html("Please fill in data into the field");
				$("#fruit_name_error_message").show();      
				error_fruit_name = true;
			} 
			else if(fruit_name_length < 2 || fruit_name_length > 40) 
			{
				$("#fruit_name_error_message").html("Should be between 2-40 characters");
				$("#fruit_name_error_message").show();      
				error_fruit_name = true;
			} 
			else 
			{
				$("#fruit_name_error_message").hide();
			}
		}
		
//Botanical fruit_name Check function
	function check_fruit_botanical_name() 
		{ 
			var boname_length = $("#fruit_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#fruit_botanical_name_error_message").html("Please fill in data into the field");      
					$("#fruit_botanical_name_error_message").show();      
					error_fruit_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 40) {
				$("#fruit_botanical_name_error_message").html("Should be between 2-40 characters");
				$("#fruit_botanical_name_error_message").show();      
				error_fruit_botanical_name = true;
			}
			
			else 
			{
				$("#fruit_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_fruit_height() 
		{ 
			var height = $("#fruit_height").val();
			
			if(height == "") 
			{	
				$("#fruit_height_error_message").html("Please fill in data into the field");
				$("#fruit_height_error_message").show();      
				error_fruit_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#fruit_height_error_message").html("Should be number characters");
				$("#fruit_height_error_message").show();      
				error_fruit_height = true;
			} 
			else 
			{
				$("#fruit_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_fruit_width() 
		{ 
			var width = $("#fruit_width").val();
			
			if(width == "") 
			{	
				$("#fruit_width_error_message").html("Please fill in data into the field");
				$("#fruit_width_error_message").show();      
				error_fruit_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#fruit_width_error_message").html("Should be number characters");
				$("#fruit_width_error_message").show();      
				error_fruit_width = true;
			} 
			else 
			{
				$("#fruit_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_fruit_color() 
		{	
			var color_length = $("#fruit_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#fruit_color_error_message").html("Please select one from the list");
				$("#fruit_color_error_message").show();      
				error_fruit_color = true;
			} 
			else 
			{
				$("#fruit_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_fruit_sunlight() 
		{	
			var sunlight = $("#fruit_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#fruit_sunlight_error_message").html("Please select one from the list");
				$("#fruit_sunlight_error_message").show();      
				error_fruit_sunlight = true;
			} 
			else 
			{
				$("#fruit_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_fruit_description() 
		{	
			var area_length = $("#fruit_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#fruit_description_error_message").html("Please fill in data into the field");
				$("#fruit_description_error_message").show();      
				error_fruit_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#fruit_description_error_message").html("Should be between 10-200 characters");
				$("#fruit_description_error_message").show();      
				error_fruit_description = true;
			} 
			else 
			{
				$("#fruit_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_fruit_price() 
		{ 
			var price = $("#fruit_price").val();
			
			if(price == "") 
			{	
				$("#fruit_price_error_message").html("Please fill in data into the field");
				$("#fruit_price_error_message").show();      
				error_fruit_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#fruit_price_error_message").html("Price should be number characters");
				$("#fruit_price_error_message").show();      
				error_fruit_price = true;
			} 
			else 
			{
				$("#fruit_price_error_message").hide();
			}
		}
		


// Submit

	$("#fruit_form_validation").click(function() { 
										
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
				
				//return true;
				addRecords_fruit();
			}
		else
			{
				return false;
					
			}

	});

});