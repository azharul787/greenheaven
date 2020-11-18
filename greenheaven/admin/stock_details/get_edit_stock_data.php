	<?php 
		include "../database_connection.php";
		$id   = trim($_REQUEST['edit_id']);	
		$query = $database->query("SELECT * FROM stock_entry WHERE id = $id ");
	if($query){
		while($row = $query->fetch_assoc())
			{
		?>
		<table class="table table-striped table-responsive table-bordered">
			<tr>
				<th>Product Type</th>
				<td style="text-transform:capitalize;"><?php echo $row['product_type']; ?></td>
				<input type="hidden" id="update_id" value="<?php echo $row['id']; ?>">
				<input type="hidden" id="update_product_type" value="<?php echo $row['product_type']; ?>">
			</tr>
			<tr>
				<th>Product Name</th>
				<td><?php echo $row['product_name']; ?></td>
				<input type="hidden"  id="update_product_name" value="<?php echo $row['product_name']; ?>">
			</tr>
			<tr>
				<th>Product Quantity</th>
				<td>
					<input type="text" class="form-control" id="update_quantity" value="<?php echo $row['quantity']; ?>">
				</td>
			</tr>
		</table>
	<?php 
			} 
		}
		else
		{
			echo "No Records found";
		}
		?>