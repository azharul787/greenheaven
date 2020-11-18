
$(function() {
	$("#medicinal_name_error_message").hide();
	$("medicinal_botanical_name_error_message").hide();
	$("#medicinal_height_error_message").hide();
	$("#medicinal_width_error_message").hide();
	$("#medicinal_color_error_message").hide();
	$("#medicinal_sunlight_error_message").hide();
	$("#medicinal_description_error_message").hide();
	$("#medicinal_price_error_message").hide();
	

	var error_medicinal_name = false;
	var error_medicinal_botanical_name = false;
	var error_medicinal_height = false;
	var error_medicinal_width = false;
	var error_medicinal_color = false;
	var error_medicinal_sunlight = false;
	var error_medicinal_description = false;
	var error_medicinal_price= false;
	

	$("#medicinal_name").focusout(function()
	{
		check_medicinal_name();
	});
	
	$("#medicinal_botanical_name").focusout(function()
		{	
			check_medicinal_botanical_name();	
		});
	
	$("#medicinal_height").focusout(function()
		{
			check_medicinal_height();	
		});
	
	$("#medicinal_width").focusout(function()
		{
			check_medicinal_width();
		});
		
	$("#medicinal_color").focusout(function()
		{
			check_medicinal_color();
		});
		
	$("#medicinal_sunlight").focusout(function()
		{
			check_medicinal_sunlight();
		});	
	
	$("#medicinal_description").focusout(function()
		{
			check_medicinal_description();
		});
	
	$("#medicinal_price").focusout(function()
		{
			check_medicinal_price();
		});
	

	
//Name check function
	function check_medicinal_name() 
		{
			var medicinal_name_length = $("#medicinal_name").val().length;

			if(medicinal_name_length == "" || medicinal_name_length == null) 
			{
				$("#medicinal_name_error_message").html("Please fill in data into the field");
				$("#medicinal_name_error_message").show();      
				error_medicinal_name = true;
			} 
			else if(medicinal_name_length < 2 || medicinal_name_length > 20) 
			{
				$("#medicinal_name_error_message").html("Should be between 2-20 characters");
				$("#medicinal_name_error_message").show();      
				error_medicinal_name = true;
			} 
			else 
			{
				$("#medicinal_name_error_message").hide();
			}
		}
		
//Botanical medicinal_name Check function
	function check_medicinal_botanical_name() 
		{ 
			var boname_length = $("#medicinal_botanical_name").val().length;

			if(boname_length == "" || boname_length == null)
				{
					$("#medicinal_botanical_name_error_message").html("Please fill in data into the field");      
					$("#medicinal_botanical_name_error_message").show();      
					error_medicinal_botanical_name = true;
				}
			
			else if(boname_length <2 || boname_length > 20) {
				$("#medicinal_botanical_name_error_message").html("Should be between 2-20 characters");
				$("#medicinal_botanical_name_error_message").show();      
				error_medicinal_botanical_name = true;
			}
			
			else 
			{
				$("#medicinal_botanical_name_error_message").hide();
			}
		}
		
	//height  Check function
	
	function check_medicinal_height() 
		{ 
			var height = $("#medicinal_height").val();
			
			if(height == "") 
			{	
				$("#medicinal_height_error_message").html("Please fill in data into the field");
				$("#medicinal_height_error_message").show();      
				error_medicinal_height = true;
			} 
				
			else if(isNaN(height)) 
			{	
				//alert(height);
				
				$("#medicinal_height_error_message").html("Should be number characters");
				$("#medicinal_height_error_message").show();      
				error_medicinal_height = true;
			} 
			else 
			{
				$("#medicinal_height_error_message").hide();
			}
		}
		
		//width  Check function
	
	function check_medicinal_width() 
		{ 
			var width = $("#medicinal_width").val();
			
			if(width == "") 
			{	
				$("#medicinal_width_error_message").html("Please fill in data into the field");
				$("#medicinal_width_error_message").show();      
				error_medicinal_width = true;
			} 
				
			else if(isNaN(width)) 
			{	
				//alert(width);
				
				$("#medicinal_width_error_message").html("Should be number characters");
				$("#medicinal_width_error_message").show();      
				error_medicinal_width = true;
			} 
			else 
			{
				$("#medicinal_width_error_message").hide();
			}
		}
		
	//Color  Check function
	function check_medicinal_color() 
		{	
			var color_length = $("#medicinal_color").val();
				
			if(color_length == "") 
			{
				//alert(color_length)
				$("#medicinal_color_error_message").html("Please select one from the list");
				$("#medicinal_color_error_message").show();      
				error_color = true;
			} 
			else 
			{
				$("#medicinal_color_error_message").hide();
			}
		}
		
	//Sunlight  Check function
	function check_medicinal_sunlight() 
		{	
			var sunlight = $("#medicinal_sunlight").val();
				
			if(sunlight == "") 
			{
				//alert(color_length)
				$("#medicinal_sunlight_error_message").html("Please select one from the list");
				$("#medicinal_sunlight_error_message").show();      
				error_medicinal_sunlight = true;
			} 
			else 
			{
				$("#medicinal_sunlight_error_message").hide();
			}
		}
		
	//Text area  Check function
	function check_medicinal_description() 
		{	
			var area_length = $("#medicinal_description").val().length;

			//if($.trim(area_length == "" || area_length == "")) 
			if(area_length == "" || area_length == "") 
			{
				$("#medicinal_description_error_message").html("Please fill in data into the field");
				$("#medicinal_description_error_message").show();      
				error_medicinal_description = true;
			} 
			//else if($.trim(area_length <10 || area_length > 200)) 
			else if(area_length <10 || area_length > 200)
			{
				$("#medicinal_description_error_message").html("Should be between 10-200 characters");
				$("#medicinal_description_error_message").show();      
				error_medicinal_description = true;
			} 
			else 
			{
				$("#medicinal_description_error_message").hide();
			}
		}
		
	//price  Check function
	
	function check_medicinal_price() 
		{ 
			var price = $("#medicinal_price").val();
			
			if(price == "") 
			{	
				$("#medicinal_price_error_message").html("Please fill in data into the field");
				$("#medicinal_price_error_message").show();      
				error_medicinal_price = true;
			} 
				
			else if(isNaN(price)) 
			{	
				//alert(price);
				
				$("#medicinal_price_error_message").html("Price should be number characters");
				$("#medicinal_price_error_message").show();      
				error_medicinal_price = true;
			} 
			else 
			{
				$("#medicinal_price_error_message").hide();
			}
		}
		


// Submit

	$("#medicinal_form_validation").click(function() { 
										
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
				add_medicinal_records()
			}
		else
			{
				return false;
					
			}

	});

});