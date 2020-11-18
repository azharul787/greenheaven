<?php
	
		
		include"../database_connection.php";
		//$database = new mysqli('localhost','root','','green_heaven');

		
		$name = $_POST['name'];
		$type = $_POST['type'];
		$brand = $_POST['brand'];
		$shape = $_POST['shape'];
		$color = $_POST['color'];
		$origin = $_POST['origin'];
		$purpose = $_POST['purpose'];
		$price = $_POST['price'];
		$image_name = $_FILES['image_name'];
		
		$path = pathinfo($_FILES['image_name']['name'],PATHINFO_EXTENSION);
		$image = time().'.'.$path;
		move_uploaded_file($_FILES["image_name"]["tmp_name"], 'images/'.$image);
		$image_name = "images/" . $image;
		
		
		$query = $database->query("INSERT INTO `equipments` (`id`, `name`, `type`, `brand`, `shape`, `color`, `origin`, `purpose`, `price`, `image_name`) VALUES (NULL, '$name', '$type', '$brand', '$shape', '$color', '$origin', '$purpose', '$price', '$image_name')");
		
		if ($query) 
		{
	        echo "1 Record Added!";
	    }
		else
		{echo"upload fail";}
	   
	
	
?>