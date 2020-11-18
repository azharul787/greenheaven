	<?php
	// include Database connection file
	include"../database_connection.php";
	//$database = new mysqli('localhost','root','','green_heaven');
	
	// check request
	if(isset($_POST))
	{
		// get values
		$id = $_POST['id'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$shape = $_POST['shape'];
		$color = $_POST['color'];
		$origin = $_POST['origin'];
		$purpose = $_POST['purpose'];
		$price = $_POST['price'];
	   // $image_name = $_POST['image_name'];

		// Updaste User details
	 	
		$query = $database->query("UPDATE `equipments` SET `name` = '$name', `type` = '$type', `brand` = '$brand', `shape` = '$shape', `color` = '$color', `origin` = '$origin', `purpose` = '$purpose', `price` = '$price' WHERE `equipments`.`id` = $id");
		 
		
		if($query)
		echo"1 record updated";
		else
		echo"Update fail";
	
	}