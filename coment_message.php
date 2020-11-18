<?php
	
	include('database_connection.php');
	//if(isset($_POST['submit'])){
							
		//$fullname = $_POST['fullname'];
		//$fullname = $database->real_escape_string($_POST['fullname']);
		$fullname = trim(strip_tags($_POST['fullname']));
		$message = trim(strip_tags($_POST['message']));
		
		$query = $database->query("INSERT INTO `coment` (`id`,  `fullname`, `message`) 
			VALUES (NULL,  '$fullname', '$message')");
		if($query)
			echo"Successfully send your coment Message";
			else
			echo"There was a problem sending Your coment Message";
		//}
?>