
$(function() {
	$("#update_decoration_name_error_message").hide();
	$("#update_decoration_botanical_name_error_message").hide();
	$("#update_decoration_height_error_message").hide();
	$("#update_decoration_width_error_message").hide();
	$("#update_decoration_color_error_message").hide();
	$("#update_decoration_sunlight_error_message").hide();
	$("#update_decoration_description_error_message").hide();
	$("#update_decoration_price_error_message").hide();
	

	var error_decoration_name = false;
	var error_decoration_botanical_name = false;
	var error_decoration_height = false;
	var error_decoration_width = false;
	var error_decoration_color = false;
	var error_decoration_sunlight = false;
	var error_decoration_description = false;
	var error_decoration_price= false;
	

	$("#update_decoration_name").focusout(function()
	{
		check_decoration_name();
	});
	
	$("#update_decoration_botanical_name").focusout(function()
		{	
			check_decoration_botanical_name();	
		});
	
	$("#update_decoration_height").focusout(function()
		{
			check_decoration_height();	
		});
	
	$("#update_decoration_width").focusout(function()
		{
			check_decoration_width();
		});
		
	$("#update_decoration_color").focusout(function()
		{
			check_decoration_color();
		});
		
	$("#update_decoration_sunlight").focusout(function()
		{
			check_decoration_sunlight();
		});	
	
	$("#update_decoration_description").focusout(function()
		{
			check_decoration_description();
		});
	
	$("#update_decoration_price").focusout(function()
		{
			check_decoration_price();
		});
	

	
//Name check function
	function check_decoration_name() 
		{
			var decoration_name_length = $("#update_decoration_name").val().length;

			if(decoration_name_length == "" || decoration_name_length == null) 
			{
				$("#update_decoration_name_error_message").html("Please fill in data into the field");
				$("#update_decoration_name_error_message").show();      
				error_decoration_name = true;
			} 
			else if(decoration_name_length < 2 || decoration_name_length > 20) 
			{
				$("#update_decoration_name_error_message").html("Should be between 2-20 characters");
				$("#update_decoration_name_error_message").show();      
				error_decoration_name = true;
			} 
			else 
			{
				$("#update_decoration_name_error_message").hide();
			}
		}
		
//Botanical decoration_name Check function
	function check_decoration_botanical_name() 
		{ 
			var boname_length = $("#update_decoration_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#update_decoration_botanical_name_error_message").html("Please fill in data into the field");      
					$("#update_decoration_botanical_name_error_message").show();      
					error_decoration_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 20) {
				$("#update_decoration_botanical_name_error_message").html("Should be between 2-20 characters");
				$("#update_decoration_botanical_name_error_message").show();      
				error_decoration_botanical_name = true;
			}
			
			else 
			{
				$("#update_decoration_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_decoration_height() 
		{ 
			var height = $("#update_decoration_height").val();
			
			if(height == "") 
			{	
				$("#update_decoration_height_error_message").html("Please fill in data into the field");
				$("#update_decoration_height_error_message").show();      
				error_decoration_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#update_decoration_height_error_message").html("Should be number characters");
				$("#update_decoration_height_error_message").show();      
				error_decoration_height = true;
			} 
			else 
			{
				$("#update_decoration_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_decoration_width() 
		{ 
			var width = $("#update_decoration_width").val();
			
			if(width == "") 
			{	
				$("#update_decoration_width_error_message").html("Please fill in data into the field");
				$("#update_decoration_width_error_message").show();      
				error_decoration_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#update_decoration_width_error_message").html("Should be number characters");
				$("#update_decoration_width_error_message").show();      
				error_decoration_width = true;
			} 
			else 
			{
				$("#update_decoration_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_decoration_color() 
		{	
			var color_length = $("#update_decoration_color").val();
				
			if(color_length == "") 
			{ 
				//alert(color_length)
				$("#update_decoration_color_error_message").html("Please select one from the list");
				$("#update_decoration_color_error_message").show();      
				error_decoration_color = true;
			} 
			else 
			{
				$("#update_decoration_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_decoration_sunlight() 
		{	
			var sunlight = $("#update_decoration_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#update_decoration_sunlight_error_message").html("Please select one from the list");
				$("#update_decoration_sunlight_error_message").show();      
				error_decoration_sunlight = true;
			} 
			else 
			{
				$("#update_decoration_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_decoration_description() 
		{	
			var area_length = $("#update_decoration_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#update_decoration_description_error_message").html("Please fill in data into the field");
				$("#update_decoration_description_error_message").show();      
				error_decoration_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#update_decoration_description_error_message").html("Should be between 10-200 characters");
				$("#update_decoration_description_error_message").show();      
				error_decoration_description = true;
			} 
			else 
			{
				$("#update_decoration_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_decoration_price() 
		{ 
			var price = $("#update_decoration_price").val();
			
			if(price == "") 
			{	
				$("#update_decoration_price_error_message").html("Please fill in data into the field");
				$("#update_decoration_price_error_message").show();      
				error_decoration_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				$("#update_decoration_price_error_message").html("Price should be number characters");
				$("#update_decoration_price_error_message").show();      
				error_decoration_price = true;
			} 
			else 
			{
				$("#update_decoration_price_error_message").hide();
			}
		}
		


// Submit

$("#update_decoration_form_validation").click(function() 
	{ 
										
		error_decoration_name = false;
		error_decoration_botanical_name = false;
		error_decoration_height = false;
		error_decoration_width = false;
		error_decoration_color = false;
		error_decoration_sunlight = false;
		error_decoration_description = false;
		error_decoration_price= false;
									
		check_decoration_name();
		check_decoration_botanical_name();
		check_decoration_height();
		check_decoration_width();
		check_decoration_color();
		check_decoration_sunlight();
		check_decoration_description();
		check_decoration_price();
			
		if(	error_decoration_name == false && 
			error_decoration_botanical_name == false && 
			error_decoration_height == false && 
			error_decoration_width == false && 
			error_decoration_color == false && 
			error_decoration_sunlight == false &&
			error_decoration_description == false && 
			error_decoration_price == false
			)
			{
				//alert("Upload Successfull")
				//return true;
				UpdateUserDetails_decoration()
			}
		else
			{
				return false;
					
			}

	});

});