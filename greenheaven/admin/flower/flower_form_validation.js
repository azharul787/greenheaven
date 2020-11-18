
$(function() {
	$("#flower_name_error_message").hide();
	$("#flower_botanical_name_error_message").hide();
	$("#flower_height_error_message").hide();
	$("#flower_width_error_message").hide();
	$("#flower_color_error_message").hide();
	$("#flower_sunlight_error_message").hide();
	$("#flower_description_error_message").hide();
	$("#flower_price_error_message").hide();
	

	var error_flower_name = false;
	var error_flower_botanical_name = false;
	var error_flower_height = false;
	var error_flower_width = false;
	var error_flower_color = false;
	var error_flower_sunlight = false;
	var error_flower_description = false;
	var error_flower_price= false;
	

	$("#flower_name").focusout(function()
	{
		check_flower_name();
	});
	
	$("#flower_botanical_name").focusout(function()
		{	
			check_flower_botanical_name();	
		});
	
	$("#flower_height").focusout(function()
		{
			check_flower_height();	
		});
	
	$("#flower_width").focusout(function()
		{
			check_flower_width();
		});
		
	$("#flower_color").focusout(function()
		{
			check_flower_color();
		});
		
	$("#flower_sunlight").focusout(function()
		{
			check_flower_sunlight();
		});	
	
	$("#flower_description").focusout(function()
		{
			check_flower_description();
		});
	
	$("#flower_price").focusout(function()
		{
			check_flower_price();
		});
	

	
//Name check function
	function check_flower_name() 
		{
			var flower_name_length = $("#flower_name").val().length;

			if(flower_name_length == "" || flower_name_length == null) 
			{
				$("#flower_name_error_message").html("Please fill in data into the field");
				$("#flower_name_error_message").show();      
				error_flower_name = true;
			} 
			else if(flower_name_length < 2 || flower_name_length > 40) 
			{
				$("#flower_name_error_message").html("Should be between 2-40 characters");
				$("#flower_name_error_message").show();      
				error_flower_name = true;
			} 
			else 
			{
				$("#flower_name_error_message").hide();
			}
		}
		
//Botanical flower_name Check function
	function check_flower_botanical_name() 
		{ 
			var boname_length = $("#flower_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#flower_botanical_name_error_message").html("Please fill in data into the field");      
					$("#flower_botanical_name_error_message").show();      
					error_flower_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 40) {
				$("#flower_botanical_name_error_message").html("Should be between 2-40 characters");
				$("#flower_botanical_name_error_message").show();      
				error_flower_botanical_name = true;
			}
			
			else 
			{
				$("#flower_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_flower_height() 
		{ 
			var height = $("#flower_height").val();
			
			if(height == "") 
			{	
				$("#flower_height_error_message").html("Please fill in data into the field");
				$("#flower_height_error_message").show();      
				error_flower_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#flower_height_error_message").html("Should be number characters");
				$("#flower_height_error_message").show();      
				error_flower_height = true;
			} 
			else 
			{
				$("#flower_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_flower_width() 
		{ 
			var width = $("#flower_width").val();
			
			if(width == "") 
			{	
				$("#flower_width_error_message").html("Please fill in data into the field");
				$("#flower_width_error_message").show();      
				error_flower_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#flower_width_error_message").html("Should be number characters");
				$("#flower_width_error_message").show();      
				error_flower_width = true;
			} 
			else 
			{
				$("#flower_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_flower_color() 
		{	
			var color_length = $("#flower_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#flower_color_error_message").html("Please select one from the list");
				$("#flower_color_error_message").show();      
				error_flower_color = true;
			} 
			else 
			{
				$("#flower_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_flower_sunlight() 
		{	
			var sunlight = $("#flower_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#flower_sunlight_error_message").html("Please select one from the list");
				$("#flower_sunlight_error_message").show();      
				error_flower_sunlight = true;
			} 
			else 
			{
				$("#flower_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_flower_description() 
		{	
			var area_length = $("#flower_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#flower_description_error_message").html("Please fill in data into the field");
				$("#flower_description_error_message").show();      
				error_flower_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#flower_description_error_message").html("Should be between 10-200 characters");
				$("#flower_description_error_message").show();      
				error_flower_description = true;
			} 
			else 
			{
				$("#flower_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_flower_price() 
		{ 
			var price = $("#flower_price").val();
			
			if(price == "") 
			{	
				$("#flower_price_error_message").html("Please fill in data into the field");
				$("#flower_price_error_message").show();      
				error_flower_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#flower_price_error_message").html("Price should be number characters");
				$("#flower_price_error_message").show();      
				error_flower_price = true;
			} 
			else 
			{
				$("#flower_price_error_message").hide();
			}
		}
		


// Submit

	$("#flower_form_validation").click(function() { 
										
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
				
				//return true;
				addRecords_flower();
			}
		else
			{
				return false;
					
			}

	});

});