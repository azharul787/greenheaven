
$(function() {
	$("#gardening_name_error_message").hide();
	$("#gardening_botanical_name_error_message").hide();
	$("#gardening_height_error_message").hide();
	$("#gardening_width_error_message").hide();
	$("#gardening_color_error_message").hide();
	$("#gardening_sunlight_error_message").hide();
	$("#gardening_description_error_message").hide();
	$("#gardening_price_error_message").hide();
	

	var error_gardening_name = false;
	var error_gardening_botanical_name = false;
	var error_gardening_height = false;
	var error_gardening_width = false;
	var error_gardening_color = false;
	var error_gardening_sunlight = false;
	var error_gardening_description = false;
	var error_gardening_price= false;
	

	$("#gardening_name").focusout(function()
	{
		check_gardening_name();
	});
	
	$("#gardening_botanical_name").focusout(function()
		{	
			check_gardening_botanical_name();	
		});
	
	$("#gardening_height").focusout(function()
		{
			check_gardening_height();	
		});
	
	$("#gardening_width").focusout(function()
		{
			check_gardening_width();
		});
		
	$("#gardening_color").focusout(function()
		{
			check_gardening_color();
		});
		
	$("#gardening_sunlight").focusout(function()
		{
			check_gardening_sunlight();
		});	
	
	$("#gardening_description").focusout(function()
		{
			check_gardening_description();
		});
	
	$("#gardening_price").focusout(function()
		{
			check_gardening_price();
		});
	

	
//Name check function
	function check_gardening_name() 
		{
			var gardening_name_length = $("#gardening_name").val().length;

			if(gardening_name_length == "" || gardening_name_length == null) 
			{
				$("#gardening_name_error_message").html("Please fill in data into the field");
				$("#gardening_name_error_message").show();      
				error_gardening_name = true;
			} 
			else if(gardening_name_length < 2 || gardening_name_length > 20) 
			{
				$("#gardening_name_error_message").html("Should be between 2-20 characters");
				$("#gardening_name_error_message").show();      
				error_gardening_name = true;
			} 
			else 
			{
				$("#gardening_name_error_message").hide();
			}
		}
		
//Botanical gardening_name Check function
	function check_gardening_botanical_name() 
		{ 
			var boname_length = $("#gardening_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#gardening_botanical_name_error_message").html("Please fill in data into the field");      
					$("#gardening_botanical_name_error_message").show();      
					error_gardening_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 20) {
				$("#gardening_botanical_name_error_message").html("Should be between 2-20 characters");
				$("#gardening_botanical_name_error_message").show();      
				error_gardening_botanical_name = true;
			}
			
			else 
			{
				$("#gardening_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_gardening_height() 
		{ 
			var height = $("#gardening_height").val();
			
			if(height == "") 
			{	
				$("#gardening_height_error_message").html("Please fill in data into the field");
				$("#gardening_height_error_message").show();      
				error_gardening_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#gardening_height_error_message").html("Should be number characters");
				$("#gardening_height_error_message").show();      
				error_gardening_height = true;
			} 
			else 
			{
				$("#gardening_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_gardening_width() 
		{ 
			var width = $("#gardening_width").val();
			
			if(width == "") 
			{	
				$("#gardening_width_error_message").html("Please fill in data into the field");
				$("#gardening_width_error_message").show();      
				error_gardening_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#gardening_width_error_message").html("Should be number characters");
				$("#gardening_width_error_message").show();      
				error_gardening_width = true;
			} 
			else 
			{
				$("#gardening_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_gardening_color() 
		{	
			var color_length = $("#gardening_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#gardening_color_error_message").html("Please select one from the list");
				$("#gardening_color_error_message").show();      
				error_gardening_color = true;
			} 
			else 
			{
				$("#gardening_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_gardening_sunlight() 
		{	
			var sunlight = $("#gardening_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#gardening_sunlight_error_message").html("Please select one from the list");
				$("#gardening_sunlight_error_message").show();      
				error_gardening_sunlight = true;
			} 
			else 
			{
				$("#gardening_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_gardening_description() 
		{	
			var area_length = $("#gardening_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#gardening_description_error_message").html("Please fill in data into the field");
				$("#gardening_description_error_message").show();      
				error_gardening_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#gardening_description_error_message").html("Should be between 10-200 characters");
				$("#gardening_description_error_message").show();      
				error_gardening_description = true;
			} 
			else 
			{
				$("#gardening_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_gardening_price() 
		{ 
			var price = $("#gardening_price").val();
			
			if(price == "") 
			{	
				$("#gardening_price_error_message").html("Please fill in data into the field");
				$("#gardening_price_error_message").show();      
				error_gardening_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#gardening_price_error_message").html("Price should be number characters");
				$("#gardening_price_error_message").show();      
				error_gardening_price = true;
			} 
			else 
			{
				$("#gardening_price_error_message").hide();
			}
		}
		


// Submit

	$("#gardening_form_validation").click(function() { 
										
		error_gardening_name = false;
		error_gardening_botanical_name = false;
		error_gardening_height = false;
		error_gardening_width = false;
		error_gardening_color = false;
		error_gardening_sunlight = false;
		error_gardening_description = false;
		error_gardening_price= false;
									
		check_gardening_name();
		check_gardening_botanical_name();
		check_gardening_height();
		check_gardening_width();
		check_gardening_color();
		check_gardening_sunlight();
		check_gardening_description();
		check_gardening_price();
			
		if(	error_gardening_name == false && 
			error_gardening_botanical_name == false && 
			error_gardening_height == false && 
			error_gardening_width == false && 
			error_gardening_color == false && 
			error_gardening_sunlight == false &&
			error_gardening_description == false && 
			error_gardening_price == false
			)
			{
				
				//return true;
				addRecords_gardening();
			}
		else
			{
				return false;
					
			}

	});

});