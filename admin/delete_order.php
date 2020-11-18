	<?php
	// check request
	if(isset($_POST['id']) && isset($_POST['id']) != "")
	{
		// include Database connection file
	   include"database_connection.php";
		//$database = new mysqli('localhost','root','','green_heaven');
	
		$user_id = $_POST['id'];
	
		$query = $database->query("DELETE FROM orderlist WHERE id = '$user_id'");
		if ($query) 
		{
			echo "1 record deleted";
		}
		else 
			echo"Delete fail";
	}
	?>