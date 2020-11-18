
$(function() {
	$("#vegetable_name_error_message").hide();
	$("vegetable_botanical_name_error_message").hide();
	$("#vegetable_height_error_message").hide();
	$("#vegetable_width_error_message").hide();
	$("#vegetable_color_error_message").hide();
	$("#vegetable_sunlight_error_message").hide();
	$("#vegetable_description_error_message").hide();
	$("#vegetable_price_error_message").hide();
	

	var error_vegetable_name = false;
	var error_vegetable_botanical_name = false;
	var error_vegetable_height = false;
	var error_vegetable_width = false;
	var error_vegetable_color = false;
	var error_vegetable_sunlight = false;
	var error_vegetable_description = false;
	var error_vegetable_price= false;
	

	$("#vegetable_name").focusout(function()
	{ 
		check_vegetable_name();
	});
	
	$("#vegetable_botanical_name").focusout(function()
		{	
			check_vegetable_botanical_name();	
		});
	
	$("#vegetable_height").focusout(function()
		{
			check_vegetable_height();	
		});
	
	$("#vegetable_width").focusout(function()
		{
			check_vegetable_width();
		});
		
	$("#vegetable_color").focusout(function()
		{
			check_vegetable_color();
		});
		
	$("#vegetable_sunlight").focusout(function()
		{
			check_vegetable_sunlight();
		});	
	
	$("#vegetable_description").focusout(function()
		{
			check_vegetable_description();
		});
	
	$("#vegetable_price").focusout(function()
		{
			check_vegetable_price();
		});
	

	
//Name check function
	function check_vegetable_name() 
		{
			var vegetable_name_length = $("#vegetable_name").val().length;

			if(vegetable_name_length == "" || vegetable_name_length == null) 
			{
				$("#vegetable_name_error_message").html("Please fill in data into the field");
				$("#vegetable_name_error_message").show();      
				error_vegetable_name = true;
			} 
			else if(vegetable_name_length < 2 || vegetable_name_length > 40) 
			{
				$("#vegetable_name_error_message").html("Should be between 2-40 characters");
				$("#vegetable_name_error_message").show();      
				error_vegetable_name = true;
			} 
			else 
			{
				$("#vegetable_name_error_message").hide();
			}
		}
		
	//Botanical vegetable_name Check function
	function check_vegetable_botanical_name() 
		{ 
			var boname_length = $("#vegetable_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#vegetable_botanical_name_error_message").html("Please fill in data into the field");      
					$("#vegetable_botanical_name_error_message").show();      
					error_vegetable_botanical_name = true;
				}
			
			else if(boname_length < 2 || boname_length > 40) {
				$("#vegetable_botanical_name_error_message").html("Should be between 2-40 characters");
				$("#vegetable_botanical_name_error_message").show();      
				error_vegetable_botanical_name = true;
			}
			
			else 
			{
				$("#vegetable_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	function check_vegetable_height() 
		{ 
			var height = $("#vegetable_height").val();
			
			if(height == "") 
			{	
				$("#vegetable_height_error_message").html("Please fill in data into the field");
				$("#vegetable_height_error_message").show();      
				error_vegetable_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				$("#vegetable_height_error_message").html("Should be number characters");
				$("#vegetable_height_error_message").show();      
				error_vegetable_height = true;
			} 
			else 
			{
				$("#vegetable_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_vegetable_width() 
		{ 
			var width = $("#vegetable_width").val();
			
			if(width == "") 
			{	
				$("#vegetable_width_error_message").html("Please fill in data into the field");
				$("#vegetable_width_error_message").show();      
				error_vegetable_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				$("#vegetable_width_error_message").html("Should be number characters");
				$("#vegetable_width_error_message").show();      
				error_vegetable_width = true;
			} 
			else 
			{
				$("#vegetable_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_vegetable_color() 
		{	
			var color_length = $("#vegetable_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#vegetable_color_error_message").html("Please select one from the list");
				$("#vegetable_color_error_message").show();      
				error_vegetable_color = true;
			} 
			else 
			{
				$("#vegetable_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_vegetable_sunlight() 
		{	
			var sunlight = $("#vegetable_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#vegetable_sunlight_error_message").html("Please select one from the list");
				$("#vegetable_sunlight_error_message").show();      
				error_vegetable_sunlight = true;
			} 
			else 
			{
				$("#vegetable_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_vegetable_description() 
		{	
			var area_length = $("#vegetable_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#vegetable_description_error_message").html("Please fill in data into the field");
				$("#vegetable_description_error_message").show();      
				error_vegetable_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#vegetable_description_error_message").html("Should be between 10-200 characters");
				$("#vegetable_description_error_message").show();      
				error_vegetable_description = true;
			} 
			else 
			{
				$("#vegetable_description_error_message").hide();
			}
		}
		
	//price  Check function
	function check_vegetable_price() 
		{ 
			var price = $("#vegetable_price").val();
			
			if(price == "") 
			{	
				$("#vegetable_price_error_message").html("Please fill in data into the field");
				$("#vegetable_price_error_message").show();      
				error_vegetable_price = true;
			} 
				
			else if(isNaN(price)) 
			{			
				$("#vegetable_price_error_message").html("Price should be number characters");
				$("#vegetable_price_error_message").show();      
				error_vegetable_price = true;
			} 
			else 
			{
				$("#vegetable_price_error_message").hide();
			}
		}
		


// Submit

	$("#vegetable_form_validation").click(function() 
	{ 
										
		error_vegetable_name = false;
		error_vegetable_botanical_name = false;
		error_vegetable_height = false;
		error_vegetable_width = false;
		error_vegetable_color = false;
		error_vegetable_sunlight = false;
		error_vegetable_description = false;
		error_vegetable_price= false;
									
		check_vegetable_name();
		check_vegetable_botanical_name();
		check_vegetable_height();
		check_vegetable_width();
		check_vegetable_color();
		check_vegetable_sunlight();
		check_vegetable_description();
		check_vegetable_price();
			
		if(	error_vegetable_name == false && 
			error_vegetable_botanical_name == false && 
			error_vegetable_height == false && 
			error_vegetable_width == false && 
			error_vegetable_color == false && 
			error_vegetable_sunlight == false &&
			error_vegetable_description == false && 
			error_vegetable_price == false
			)
			{
				//return true;
				addRecords_vegetable();
			}
		else
			{
				return false;
					
			}

	});

});