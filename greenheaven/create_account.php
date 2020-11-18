 <?php
		// Registration area
		//if(isset($_POST[])){
		 include('database_connection.php');
						
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$fullname = $firstname. ' '.$lastname;
			$email = $_POST['email'];
			$contact_no = $_POST['contact_no'];
			$username = $_POST['username'];
			$password = trim($_POST['password']);
					
			$query = $database->query("INSERT INTO `registration` (`id`, `fullname`, `email`, `contact_no`, `username`, `password`, `image_name`, `status`) 
						VALUES (NULL, '$fullname', '$email', '$contact_no', '$username', '".md5($password)."', '', 'offline');");
				if($query)
					{
						echo "Registration Successfull";
						
					}
				else
					{
						echo "Registration fail";
							
					}
			//}
				
?>