<?php
	//$mysqli = new mysqli('localhost','root','','jquery');
	include('database_connection.php');
	$em = trim($_POST['email']);
	//echo $em;
	
	$query = "SELECT email FROM registration WHERE email ='$em'";
	$result = $database->query($query);
	if($result)
		{
		   if($result->num_rows>0)
			{
			echo false;
			}
			else
			{
			echo true;
			}
		}
	else
		{
		echo false;	
		}
	
?>