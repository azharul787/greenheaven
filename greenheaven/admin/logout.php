	<?php
	include('../database_connection.php');
	session_start();
	$email = $_SESSION['username'];
	unset($_SESSION['sess_user']);
	session_destroy();
	$database->query("update registration set status='offline' where email='$email'");
	header("location:http://greenheaven/06-12-17/index.php");
	//header("location:http://greenheaven.rf.gd/index.php");
	?>