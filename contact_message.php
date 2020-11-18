<?php
						
	include('database_connection.php');
		
		$name = trim(strip_tags($_POST['c_fullname']));
		$email = trim(strip_tags($_POST['c_email']));
		$contact_no = trim(strip_tags($_POST['c_contact_no']));
		$subject = trim(strip_tags($_POST['c_subject']));
		$message = trim(strip_tags($_POST['c_message']));
							
		$query = $database->query("INSERT INTO `contact` (`id`,  `name`, `email`,`contact_no`, `subject`, `message`) 
				VALUES (NULL, '$name', '$email', '$contact_no', '$subject', '$message')");
			if($query)
				{echo"Successfully send your contact Message";}
			else
			{echo"There was a problem sending Your Contact Message";}
		
			
?>