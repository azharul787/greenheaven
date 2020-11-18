 <table class="table table-bordered table-striped table-responsive">
				<tr>
					<th>Product Id</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					
				</tr>
					<?php 
						include "../database_connection.php";
						$id   = trim($_REQUEST['view_id']);	
						$query = $database->query("SELECT * FROM order_details WHERE id = $id ");
						if($query){
							while($row = $query->fetch_assoc())
							{
					?>
				<tr>
					<td><?php echo $row['product_id']; ?> </td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo $row['unit_price']; ?></td>
				</tr>
				<?php
							}
						}
						else
							echo"No Record Found";
						
						?>
						
					<!--<tr>
						<td><input type="text" id="product_id"></td>
						<td><span id="product_id"></span></td>
						<td id="product_name"></td>
						<td id="quantity"></td>
						<td id="unit_price"></td>
					
					</tr>-->
			  </table>