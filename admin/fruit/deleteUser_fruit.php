	<?php
	// check request
	if(isset($_POST['id']) && isset($_POST['id']) != "")
	{
		// include Database connection file
	   include"../database_connection.php";
		//$database = new mysqli('localhost','root','','green_heaven');
		// get user id
		$user_id = $_POST['id'];
		$query = $database->query("SELECT image_name FROM fruit_plants WHERE id = '$user_id'");
		$row = $query->fetch_assoc();
		
		// delete User
		$query = $database->query("DELETE FROM fruit_plants WHERE id = '$user_id'");
		if ($query) 
		{
			unlink($row['image_name']);
			echo "1 record deleted";
		}
		else 
			echo"Delete fail";
	}
	?>