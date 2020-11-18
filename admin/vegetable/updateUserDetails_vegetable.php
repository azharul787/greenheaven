	<?php
	// include Database connection file
	include"../database_connection.php";
	//$mysqli = new mysqli('localhost','root','','green_heaven');
	
	// check request
	if(isset($_POST))
	{
		// get values
		$id = $_POST['id'];
		$name = $_POST['name'];
		$botanical_name = $_POST['botanical_name'];
		$height = $_POST['height'];
		$width = $_POST['width'];
		$color = $_POST['color'];
		$sunlight = $_POST['sunlight'];
		$description = $_POST['description'];
		$price = $_POST['price'];
	   // $image_name = $_POST['image_name'];

		// Updaste User details
	 
		$query = $database->query("UPDATE `vegetable_plant` SET `name` = '$name', `botanical_name` = '$botanical_name', `height` = '$height', `width` = '$width', `color` = '$color',  `sunlight` = '$sunlight',`description` = '$description', `price` = $price WHERE `vegetable_plant`.`id` = $id");
		 
		
		if($query)
		echo"1 record updated";
		else
		echo"Update fail";
	
	}