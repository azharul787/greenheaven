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
		$fragrant = $_POST['fragrant'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$stock = $_POST['stock'];
	   // $image_name = $_POST['image_name'];

		// Updaste User details
	 
		$query = $database->query("UPDATE `flower_plants` SET `name` = '$name', `botanical_name` = '$botanical_name', `height` = '$height', `width` = '$width', `color` = '$color', `sunlight` = '$sunlight', `fragrant` = '$fragrant', `description` = '$description', `stock` = $stock,`price` = $price WHERE `flower_plants`.`id` = $id");
		 
		
		if($query)
		echo"1 record updated";
		else
		echo"Update fail";
	
	}