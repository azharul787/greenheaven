	<?php
	/*
	
	// check request
	if(isset($_POST['id']) != "")
	{
		// include Database connection file
	    include"../database_connection.php";
		
		$order_id = $_POST['id'];
		$query = $database->query("SELECT * FROM order_details where id = $order_id");
		while($row = $query->fetch_assoc())
			{
				$product_id =  $row['product_id'];
				$product_name =  $row['product_name'];
				$quantity =  $row['quantity'];
			}
		if($query)
			{
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE flower_plants SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE fruit_plants SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE vegetable_plant SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE gardening_plants SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE decoration_plants SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE medicinal_plant SET stock = stock - $quantity WHERE id = $product_id");
					}
				if($product_id && $quantity != "")
					{
						$result = $database->query("UPDATE equipments SET stock = stock - $quantity WHERE id = $product_id");
					}
			} 
			/* insert into sold stock table--*/
		
/*

		if($product_id && $product_name &&$quantity != "")
				
					{
							$result2 = $database->query("INSERT INTO sold_stock SET product_id = '$product_id', product_name = '$product_name', quantity = $quantity");
							
					}	
			
		if($result2)
			{
				$query = $database->query("update orderlist set current_status ='Approved' WHERE order_id = '$order_id'");
			}
		if ($result) 
		{
			echo "Order is approved";
		}
		else 
			echo "An Error occered";
	}
	
	
	*/
	
	
	if(isset($_POST['id']) != "")
	{
		// include Database connection file
	    include"../database_connection.php";
		
		$order_id = $_POST['id'];
		
	    $result = $database->query("update orderlist set current_status ='Approved' WHERE order_id = ".$order_id);//.$order_id);
		if($result)
		{
				
			echo "Order is approved";
	
		    $query = $database->query("SELECT * FROM order_details where id = ".$order_id);
			while($row = $query->fetch_assoc())
			{
				$product_id =  $row['product_id'];
				$product_name =  trim($row['product_name']);
				$quantity =  $row['quantity'];
				
				if($product_id && $product_name && $quantity != "")
				{
					//echo"<script>alert(".$product_name.")</script>";	
					//$database->query("UPDATE flower_plants SET stock = stock - $quantity where name=".$product_name);
					$database->query("UPDATE flower_plants SET stock = stock - $quantity where name='$product_name'");
					$database->query("UPDATE fruit_plants SET stock = stock - $quantity where name='$product_name' ");
					$database->query("UPDATE vegetable_plant SET stock = stock - $quantity where name='$product_name' ");
					$database->query("UPDATE gardening_plants SET stock = stock - $quantity where name='$product_name' ");
					$database->query("UPDATE decoration_plants SET stock = stock - $quantity where name='$product_name' ");
					$database->query("UPDATE medicinal_plant SET stock = stock - $quantity where name='$product_name' ");
					$database->query("UPDATE equipments SET stock = stock - $quantity where name='$product_name' ");
					$database->query("INSERT INTO sold_stock SET product_id = '$product_id', product_name = '$product_name', quantity = $quantity");
				
				} 
				
			}	
			
		}	
		else 
			echo "An Error occered";
			
			
	}
	?>