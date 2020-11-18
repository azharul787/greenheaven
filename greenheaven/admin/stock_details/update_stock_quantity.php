<?php
	include('../database_connection.php');
	
	$id = $_POST['id'];
	$product_type = $_POST['product_type'];
	$product_name = $_POST['product_name'];
	$quantity = $_POST['quantity'];
	
	$query = $database->query("UPDATE stock_entry SET quantity = $quantity WHERE id = $id");
	if($query)
		{	/*--this is the query for update product in the product table--*/
			$result = $database->query("UPDATE $product_type SET stock = $quantity WHERE name = '$product_name'");
		}
	if($result)
		{
			echo "Update successfull";
		}
	else {
		echo"Update Fail";
	}
	
?>
	