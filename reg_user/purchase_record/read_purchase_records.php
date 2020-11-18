
	<button class="btn btn-default glyphicon glyphicon-refresh " onclick="read_purchase_rocords()"></button>
	<table class="table table-bordered table-striped table-responsive" style="width:100%;">
						<tr>
							<th>Serial</th>
							<!--<th>Id</th>-->
							<th>Order Date</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Contact Number</th>
							<th>Total Price</th>
							<th>View Details</th>
							
						</tr>
	<?php 
		include"../../database_connection.php";
		//$email = $_SESSION['username'];
		//echo "<script>alert('$email')</script>";
		$email = 'liza@gmail.com';
		$query = $database->query("SELECT * FROM orderlist WHERE email = '$email'");
		
		if($query->num_rows > 0)
		{
			$serial = 0;
			while($row = $query->fetch_assoc())
			{ $serial ++;
				$order_date = $row['order_date']; 
				$myDate = date("d-m-Y  g:i A", strtotime($order_date));
	?>
    		<tr>
				
				<td><?php echo $serial; ?></td>
				<!--<td><?php echo $row['order_id']; ?></td>-->
				<td><?php echo $myDate ; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact_no']; ?></td>
				<td><?php echo $row['total_price']; ?></td>	
				
				<td>
					<button onclick="view_purchase_details(<?php echo $row['order_id']; ?>)"  class="btn btn-info btn-xs glyphicon glyphicon-eye-open"> View</button>
					
				</td>
				
    		</tr>
    <?php
	
    	}
	
    }
	else
	echo "No Record Found";
	echo $email;
   
?>
   </table>

  

	
	