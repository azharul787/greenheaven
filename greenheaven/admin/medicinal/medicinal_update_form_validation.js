
$(function() {
	$("#update_medicinal_name_error_message").hide();
	$("#update_medicinal_botanical_name_error_message").hide();
	$("#update_medicinal_height_error_message").hide();
	$("#update_medicinal_width_error_message").hide();
	$("#update_medicinal_color_error_message").hide();
	$("#update_medicinal_sunlight_error_message").hide();
	$("#update_medicinal_description_error_message").hide();
	$("#update_medicinal_price_error_message").hide();
	

	var error_medicinal_name = false;
	var error_medicinal_botanical_name = false;
	var error_medicinal_height = false;
	var error_medicinal_width = false;
	var error_medicinal_color = false;
	var error_medicinal_sunlight = false;
	var error_medicinal_description = false;
	var error_medicinal_price= false;
	

	$("#update_medicinal_name").focusout(function()
	{
		check_medicinal_name();
	});
	
	$("#update_medicinal_botanical_name").focusout(function()
		{	
			check_medicinal_botanical_name();	
		});
	
	$("#update_medicinal_height").focusout(function()
		{
			check_medicinal_height();	
		});
	
	$("#update_medicinal_width").focusout(function()
		{
			check_medicinal_width();
		});
		
	$("#update_medicinal_color").focusout(function()
		{
			check_medicinal_color();
		});
		
	$("#update_medicinal_sunlight").focusout(function()
		{
			check_medicinal_sunlight();
		});	
	
	$("#update_medicinal_description").focusout(function()
		{
			check_medicinal_description();
		});
	
	$("#update_medicinal_price").focusout(function()
		{
			check_medicinal_price();
		});
	

	
//Name check function
	function check_medicinal_name() 
		{
			var medicinal_name_length = $("#update_medicinal_name").val().length;

			if(medicinal_name_length == "" || medicinal_name_length == null) 
			{
				$("#update_medicinal_name_error_message").html("Please fill in data into the field");
				$("#update_medicinal_name_error_message").show();      
				error_medicinal_name = true;
			} 
			else if(medicinal_name_length < 2 || medicinal_name_length > 20) 
			{
				$("#update_medicinal_name_error_message").html("Should be between 2-20 characters");
				$("#update_medicinal_name_error_message").show();      
				error_medicinal_name = true;
			} 
			else 
			{
				$("#update_medicinal_name_error_message").hide();
			}
		}
		
//Botanical medicinal_name Check function
	function check_medicinal_botanical_name() 
		{ 
			var boname_length = $("#update_medicinal_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#update_medicinal_botanical_name_error_message").html("Please fill in data into the field");      
					$("#update_medicinal_botanical_name_error_message").show();      
					error_medicinal_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 20) {
				$("#update_medicinal_botanical_name_error_message").html("Should be between 2-20 characters");
				$("#update_medicinal_botanical_name_error_message").show();      
				error_medicinal_botanical_name = true;
			}
			
			else 
			{
				$("#update_medicinal_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_medicinal_height() 
		{ 
			var height = $("#update_medicinal_height").val();
			
			if(height == "") 
			{	
				$("#update_medicinal_height_error_message").html("Please fill in data into the field");
				$("#update_medicinal_height_error_message").show();      
				error_medicinal_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#update_medicinal_height_error_message").html("Should be number characters");
				$("#update_medicinal_height_error_message").show();      
				error_medicinal_height = true;
			} 
			else 
			{
				$("#update_medicinal_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_medicinal_width() 
		{ 
			var width = $("#update_medicinal_width").val();
			
			if(width == "") 
			{	
				$("#update_medicinal_width_error_message").html("Please fill in data into the field");
				$("#update_medicinal_width_error_message").show();      
				error_medicinal_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#update_medicinal_width_error_message").html("Should be number characters");
				$("#update_medicinal_width_error_message").show();      
				error_medicinal_width = true;
			} 
			else 
			{
				$("#update_medicinal_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_medicinal_color() 
		{	
			var color_length = $("#update_medicinal_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#update_medicinal_color_error_message").html("Please select one from the list");
				$("#update_medicinal_color_error_message").show();      
				error_color = true;
			} 
			else 
			{
				$("#update_medicinal_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_medicinal_sunlight() 
		{	
			var sunlight = $("#update_medicinal_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#update_medicinal_sunlight_error_message").html("Please select one from the list");
				$("#update_medicinal_sunlight_error_message").show();      
				error_medicinal_sunlight = true;
			} 
			else 
			{
				$("#update_medicinal_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_medicinal_description() 
		{	
			var area_length = $("#update_medicinal_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#update_medicinal_description_error_message").html("Please fill in data into the field");
				$("#update_medicinal_description_error_message").show();      
				error_medicinal_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#update_medicinal_description_error_message").html("Should be between 10-200 characters");
				$("#update_medicinal_description_error_message").show();      
				error_medicinal_description = true;
			} 
			else 
			{
				$("#update_medicinal_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_medicinal_price() 
		{ 
			var price = $("#update_medicinal_price").val();
			
			if(price == "") 
			{	
				$("#update_medicinal_price_error_message").html("Please fill in data into the field");
				$("#update_medicinal_price_error_message").show();      
				error_medicinal_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#update_medicinal_price_error_message").html("Price should be number characters");
				$("#update_medicinal_price_error_message").show();      
				error_medicinal_price = true;
			} 
			else 
			{
				$("#update_medicinal_price_error_message").hide();
			}
		}
		


// Submit

	$("#update_medicinal_form_validation").click(function() { 
										
		error_medicinal_name = false;
		error_medicinal_botanical_name = false;
		error_medicinal_height = false;
		error_medicinal_width = false;
		error_medicinal_color = false;
		error_medicinal_sunlight = false;
		error_medicinal_description = false;
		error_medicinal_price= false;
									
		check_medicinal_name();
		check_medicinal_botanical_name();
		check_medicinal_height();
		check_medicinal_width();
		check_medicinal_color();
		check_medicinal_sunlight();
		check_medicinal_description();
		check_medicinal_price();
			
		if(	error_medicinal_name == false && 
			error_medicinal_botanical_name == false && 
			error_medicinal_height == false && 
			error_medicinal_width == false && 
			error_medicinal_color == false && 
			error_medicinal_sunlight == false &&
			error_medicinal_description == false && 
			error_medicinal_price == false
			)
			{
				//alert("Upload Successfull")
				//return true;
				UpdateUserDetails_medicinal()
			}
		else
			{
				return false;
					
			}

	});

});