	<?php
	// check request
	if(isset($_POST['id']) && isset($_POST['id']) != "")
	{
		// include Database connection file
	    include"../database_connection.php";
		//$database = new mysqli('localhost','root','','green_heaven');
		
		$user_id = $_POST['id'];
		
		$query = $database->query("update feedback set status='Approved' WHERE id = '$user_id'");
		if ($query) 
		{
			echo "Feedback is approved";
		}
		else 
			echo "Error";
	}
	?>