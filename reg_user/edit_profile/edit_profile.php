	<?php
	
	include"../../database_connection.php";
	
	

	if(isset($_POST)){
		// get values
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$username = $_POST['username'];
		$old_password = md5($_POST['current_password']);
		$new_password = md5($_POST['new_password']);
	
		$result = $database->query("SELECT  password FROM registration WHERE id = $id");
		 if($result->num_rows >0)
			{
				
				$row = $result->fetch_assoc();
				//	echo 	$row['password']. " ".$old_password;
				
				if($_POST['new_password'] == "") $new_password = $old_password;
					
				if($row['password'] == $old_password)
					{
						
					 $query = $database->query("UPDATE registration SET fullname = '$fullname', email = '$email', contact_no = '$contact_no', password = '$new_password' WHERE id = '$id'");
					}
				else
				{
					echo"Password is not correct";
				}
			}
			
			else
				{
					//echo"Password is not correct";
					echo"Update Fail";
				}
				
		if($query)
			
		echo"1 record updated";
		else
		echo"Update fail";
	
	}