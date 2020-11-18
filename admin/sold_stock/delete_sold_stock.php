	<?php
	// check request
	if(isset($_POST['id']) && isset($_POST['id']) != "")
	{
		// include Database connection file
	  include'../database_connection.php';
		
		$user_id = $_POST['id'];
		$query = $database->query("DELETE FROM sold_stock WHERE id = '$user_id'");
		if ($query) 
		{
			echo "1 record deleted";
		}
		else 
			echo"Delete fail";
	}
	?>