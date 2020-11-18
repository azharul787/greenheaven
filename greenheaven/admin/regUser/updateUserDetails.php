	<?php
	// include Database connection file
	include"../database_connection.php";
	//$mysqli = new mysqli('localhost','root','','green_heaven');
	
	// check request
	if(isset($_POST))
	{
		// get values
		$id = $_POST['id'];
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$username = $_POST['username'];
	
		// Updaste User details
	 
		 $query = $database->query("UPDATE registration SET fullname = '$fullname', email = '$email', contact_no = '$contact_no', username = '$username' WHERE id = '$id'");
		
		if($query)
		echo"1 record updated";
		else
		echo"Update fail";
	
	}