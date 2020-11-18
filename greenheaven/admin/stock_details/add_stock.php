<?php
	include('../database_connection.php');
	//$myDate = date("d-m-Y  g:i A", strtotime($order_date));
	
	$product_type = $_POST['p_type'];
	$product_name = $_POST['p_name'];
	//$product_id = $_POST['product_id'];
	$entry_date = date("Y-m-d g:i A", strtotime($_POST['entry_date']));
	$quantity = $_POST['quantity'];
	
	$query = $database->query("INSERT INTO stock_entry SET product_type = '$product_type', product_name = '$product_name', entry_date = '$entry_date', quantity = '$quantity'");
	if($query)
	{
		//UPDATE `flower_plants` SET `stock` = '12' WHERE `flower_plants`.`id` = 8;
		//$query = $database->query("UPDATE '$product_type' SET (stock = $quantity) WHERE name = '$product_name'")
		$query = $database->query("UPDATE $product_type SET stock = stock + $quantity WHERE name = '$product_name'");
	}
	if($query)
	{
		echo "Add product to Stock successfull";
	}
	else
	{
		echo"Stock add Fail!";
	}
?>