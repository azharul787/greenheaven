<?php
	if(isset($_POST['name']) && isset($_POST['botanical_name']) && isset($_POST['height']) && isset($_POST['width'])&& isset($_POST['color']) && isset($_POST['sunlight'])&& isset($_POST['description'])&& isset($_POST['price']) && isset($_FILES['image_name']))
	{
		// include Database connection file 
		include"../database_connection.php";
		//$database = new mysqli('localhost','root','','green_heaven');

		// get values 
		$name = $_POST['name'];
		$botanical_name = $_POST['botanical_name'];
		$height = $_POST['height'];
		$width = $_POST['width'];
		$color = $_POST['color'];
		$sunlight = $_POST['sunlight'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$image_name = $_FILES['image_name']['name'];
		
		$path = pathinfo($_FILES['image_name']['name'],PATHINFO_EXTENSION);
		$image = time().'.'.$path;
		move_uploaded_file($_FILES["image_name"]["tmp_name"], 'images/'.$image);
		$image_name = "images/" . $image;
		
		$query = $database->query( "INSERT INTO medicinal_plant(name, botanical_name, height, width, color, sunlight, description, price, image_name)
							VALUES('$name', '$botanical_name', '$height', '$width', '$color','$sunlight','$description','$price','$image_name')");
		
		if ($query) 
		{
	        echo "1 Record Added!";
	    }
		else
		{echo"upload fail";}
	   
	}
	else
		{
			echo "All Fileld is  mandatory";
		}
	
?>