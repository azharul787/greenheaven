<?php

	include'../database_connection.php';
	$find = $_GET['find'];
	$p_name = $_GET['p_name'];
	echo $find;
	echo $p_name;
	//echo"<script>alert('$find')</script>";
	//echo"<script>alert('$p_name')</script>";
	//$id = 7;
	if($find == 'flower_plants')
		{
			$query = 'SELECT name FROM flower_plants';
		}
	if($find == 'fruit_plants')
		{
			$query = 'SELECT name FROM fruit_plants';
		}
	if($find == 'vegetable_plant')
		{
			$query = 'SELECT name FROM vegetable_plant';
		}
	if($find == 'decoration_plants')
		{
			$query = 'SELECT name FROM decoration_plants';
		}
	if($find == 'gardening_plants')
		{
			$query = 'SELECT name FROM gardening_plants';
		}
	if($find == 'medicinal_plant')
		{
			$query = 'SELECT name FROM medicinal_plant';
		}
	if($find == 'equipments')
		{
			$query = 'SELECT name FROM equipments';
		}
	if($find == 'p_name')
		{
			//$query = 'SELECT id from $find where name ='.$_GET['find'];
			//$query = 'SELECT id from flower_plants where name ='.$_GET['find'];
			$query = "SELECT id FROM flower_plants WHERE name = 'Kadam'";
			echo"<script>alert('query ok')</script>";
		}
	/*-------------------------*/
	if ($result = $database->query($query))
	{
		while($row = $result->fetch_array())
		{	
			echo '<option value='.$row[0].'>'.$row[0].'</option>';
			//echo"wht";
		}
	}

?>