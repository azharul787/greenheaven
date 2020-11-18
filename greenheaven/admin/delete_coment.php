	<?php
	
	if(isset($_POST['id']) && isset($_POST['id']) != "")
	{
	    include"database_connection.php";
		$user_id = $_POST['id'];
		
		$query = $database->query("DELETE FROM coments WHERE id = '$user_id'");
		if ($query) 
		{
			echo "1 record deleted";
		}
		else 
			echo"Delete fail";
	}
	?>