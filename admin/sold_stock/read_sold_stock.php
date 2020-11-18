	<table class="table table-striped table-responsive table-bordered">
	
		<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Delete</th>
		</tr>
	<?php 
		include'../database_connection.php';
		$query = $database->query("SELECT * FROM sold_stock ");
		while($row = $query->fetch_assoc())
			{
				
	?>
		<tr>
			<td><?php echo $row['product_id'] ; ?></td>
			<td><?php echo $row['product_name'] ; ?></td>
			<td><?php echo $row['quantity'] ; ?></td>
			
		<!--	<td>
				<a href="#" class="btn btn-info btn-xs glyphicon glyphicon-ok" onclick="reply_contact(<?php echo $row['id'] ; ?>)" > Reply</a>
			</td>-->
			<td>
				<a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="delete_order_details(<?php echo $row['id'] ; ?>)" > Delete</a>
			</td>
		</tr>
		<?php 
			}
		?>
	</table>