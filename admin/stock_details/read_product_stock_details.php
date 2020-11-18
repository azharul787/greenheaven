
			<table  class="table table-striped table-responsive table-bordered" tyle="width:70%;margin:0 auto;">
				
				<tr>
					<th colspan="5" class="product_header">
						<?php 
							$src_type = $_GET['src_tp'];
							echo $src_type.' Product'; 
						?>
					</th>
				</tr>
				<tr>
					<th>Product Id</th>
					<th>Product Name</th>
					<th>Stock Status</th>	
				</tr>
			<?php 
				include'../database_connection.php';
				/*--Catch the search type value into variable--*/
				$src_type = $_GET['src_tp'];
				//echo $src_type;
				//echo "sdsgsgs";
				
				if($src_type == 'Flowers')
					{
					$query = $database->query("SELECT id, name, stock FROM flower_plants ");
					}
				elseif($src_type == 'Flower')
					{
						$query = $database->query("SELECT id, name, stock FROM flower_plants ");
					}
				elseif($src_type == 'Fruit')
					{
						$query = $database->query("SELECT id, name, stock FROM fruit_plants ");
					}
				elseif($src_type == 'Vegetable')
					{
						$query = $database->query("SELECT id, name, stock FROM vegetable_plant ");
					}
				elseif($src_type == 'Decoration')
					{
						$query = $database->query("SELECT id, name, stock FROM decoration_plants ");
					}
				elseif($src_type == 'Gardening')
					{
						$query = $database->query("SELECT id, name, stock FROM gardening_plants ");
					}
				elseif($src_type == 'Medicinal')
					{
						$query = $database->query("SELECT id, name, stock FROM medicinal_plant ");
					}
				elseif($src_type == 'Equipment')
					{
						$query = $database->query("SELECT id, name, stock FROM equipments ");
					}
				if($query->num_rows > 0)
				{
				while($row = $query->fetch_assoc())
					{		
			?>
				<tr>
					<td><?php echo $row['id'] ; ?></td>
					<td><?php echo $row['name'] ; ?></td>
				<?php if($row['stock'] == '0') { ?>
						<td class="stock_info">Out of Stock</td> 
				<?php } else { ?>
						<td><?php echo $row['stock'];} ?></td>
					<!--<td>
						<a href="#" class="btn btn-warning btn-xs glyphicon glyphicon-edit"  onclick="edit_stock(<?php echo $row['id'] ; ?>)" > Edit</a>
					</td>
					<td>
						<a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="dele_stock(<?php echo $row['id'] ; ?>)" > Delete</a>
					</td>-->
				</tr>
				<?php 
					}
				}
				else
					{
						echo"No record found";
					}
				?>
			</table>
		