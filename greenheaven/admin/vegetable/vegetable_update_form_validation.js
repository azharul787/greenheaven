
$(function() {
	$("#update_vegetable_name_error_message").hide();
	$("#update_vegetable_botanical_name_error_message").hide();
	$("#update_vegetable_height_error_message").hide();
	$("#update_vegetable_width_error_message").hide();
	$("#update_vegetable_color_error_message").hide();
	$("#update_vegetable_sunlight_error_message").hide();
	$("#update_vegetable_description_error_message").hide();
	$("#update_vegetable_price_error_message").hide();
	

	var error_vegetable_name = false;
	var error_vegetable_botanical_name = false;
	var error_vegetable_height = false;
	var error_vegetable_width = false;
	var error_vegetable_color = false;
	var error_vegetable_sunlight = false;
	var error_vegetable_description = false;
	var error_vegetable_price= false;
	

	$("#update_vegetable_name").focusout(function()
	{
		check_vegetable_name();
	});
	
	$("#update_vegetable_botanical_name").focusout(function()
		{	
			check_vegetable_botanical_name();	
		});
	
	$("#update_vegetable_height").focusout(function()
		{
			check_vegetable_height();	
		});
	
	$("#update_vegetable_width").focusout(function()
		{
			check_vegetable_width();
		});
		
	$("#update_vegetable_color").focusout(function()
		{
			check_vegetable_color();
		});
		
	$("#update_vegetable_sunlight").focusout(function()
		{
			check_vegetable_sunlight();
		});	
	
	$("#update_vegetable_description").focusout(function()
		{
			check_vegetable_description();
		});
	
	$("#update_vegetable_price").focusout(function()
		{
			check_vegetable_price();
		});
	

	
//Name check function
	function check_vegetable_name() 
		{
			var vegetable_name_length = $("#update_vegetable_name").val().length;

			if(vegetable_name_length == "" || vegetable_name_length == null) 
			{
				$("#update_vegetable_name_error_message").html("Please fill in data into the field");
				$("#update_vegetable_name_error_message").show();      
				error_vegetable_name = true;
			} 
			else if(vegetable_name_length < 2 || vegetable_name_length > 20) 
			{
				$("#update_vegetable_name_error_message").html("Should be between 2-20 characters");
				$("#update_vegetable_name_error_message").show();      
				error_vegetable_name = true;
			} 
			else 
			{
				$("#update_vegetable_name_error_message").hide();
			}
		}
		
//Botanical vegetable_name Check function
	function check_vegetable_botanical_name() 
		{ 
			var boname_length = $("#update_vegetable_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#update_vegetable_botanical_name_error_message").html("Please fill in data into the field");      
					$("#update_vegetable_botanical_name_error_message").show();      
					error_vegetable_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 20) {
				$("#update_vegetable_botanical_name_error_message").html("Should be between 2-20 characters");
				$("#update_vegetable_botanical_name_error_message").show();      
				error_vegetable_botanical_name = true;
			}
			
			else 
			{
				$("#update_vegetable_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_vegetable_height() 
		{ 
			var height = $("#update_vegetable_height").val();
			
			if(height == "") 
			{	
				$("#update_vegetable_height_error_message").html("Please fill in data into the field");
				$("#update_vegetable_height_error_message").show();      
				error_vegetable_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#update_vegetable_height_error_message").html("Should be number characters");
				$("#update_vegetable_height_error_message").show();      
				error_vegetable_height = true;
			} 
			else 
			{
				$("#update_vegetable_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_vegetable_width() 
		{ 
			var width = $("#update_vegetable_width").val();
			
			if(width == "") 
			{	
				$("#update_vegetable_width_error_message").html("Please fill in data into the field");
				$("#update_vegetable_width_error_message").show();      
				error_vegetable_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				$("#update_vegetable_width_error_message").html("Should be number characters");
				$("#update_vegetable_width_error_message").show();      
				error_vegetable_width = true;
			} 
			else 
			{
				$("#update_vegetable_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_vegetable_color() 
		{	
			var color_length = $("#update_vegetable_color").val();
				
			if(color_length == "") 
			{ 
				//alert(color_length)
				$("#update_vegetable_color_error_message").html("Please select one from the list");
				$("#update_vegetable_color_error_message").show();      
				error_vegetable_color = true;
			} 
			else 
			{
				$("#update_vegetable_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_vegetable_sunlight() 
		{	
			var sunlight = $("#update_vegetable_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#update_vegetable_sunlight_error_message").html("Please select one from the list");
				$("#update_vegetable_sunlight_error_message").show();      
				error_vegetable_sunlight = true;
			} 
			else 
			{
				$("#update_vegetable_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_vegetable_description() 
		{	
			var area_length = $("#update_vegetable_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#update_vegetable_description_error_message").html("Please fill in data into the field");
				$("#update_vegetable_description_error_message").show();      
				error_vegetable_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#update_vegetable_description_error_message").html("Should be between 10-200 characters");
				$("#update_vegetable_description_error_message").show();      
				error_vegetable_description = true;
			} 
			else 
			{
				$("#update_vegetable_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_vegetable_price() 
		{ 
			var price = $("#update_vegetable_price").val();
			
			if(price == "") 
			{	
				$("#update_vegetable_price_error_message").html("Please fill in data into the field");
				$("#update_vegetable_price_error_message").show();      
				error_vegetable_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				$("#update_vegetable_price_error_message").html("Price should be number characters");
				$("#update_vegetable_price_error_message").show();      
				error_vegetable_price = true;
			} 
			else 
			{
				$("#update_vegetable_price_error_message").hide();
			}
		}
		


// Submit

$("#update_vegetable_form_validation").click(function() 
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
				//alert("Upload Successfull")
				//return true;
				UpdateUserDetails_vegetable()
			}
		else
			{
				return false;
					
			}

	});

});