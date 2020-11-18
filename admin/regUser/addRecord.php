<?php
	if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['contact_no'])&& isset($_POST['username'])&& isset($_POST['password']))
	{
		// include Database connection file 
		include"../database_connection.php";
		//$mysqli = new mysqli('localhost','root','','green_heaven');

		// get values 
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		
		$query = $database->query( "INSERT INTO registration(fullname, email, contact_no, username, password)
		VALUES('$fullname', '$email', '$contact_no', '$username', '".md5($password)."')");
		
		if ($query) 
		{
	        echo "1 Record Added!";
	    }
		else
		{echo"upload fail";}
	   
	}
?>