
			<table  class="table table-striped table-responsive table-bordered" tyle="width:70%;margin:0 auto;">
				
				<tr>
					<th colspan="7" class="product_header">
						All Store Information
					</th>
				</tr>
				<tr>
					<th>Id</th>
					<th>Eentry Date</th>
					<th>Product type</th>
					<th>Product Name</th>
					<th>Stock Status</th>
					<th colspan="2">
						<a href="#" class="btn btn-info  glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal_add" onclick="add_stock_modal()" > Add to Stock</a>
					</th>	
				</tr>
			<?php 
				include'../database_connection.php';
				/*--Catch the search type value into variable--*/
				$src_type = $_GET['src_tp'];
				$s_item = trim($_GET['src_item']);
			if($src_type == 'src_itm')
					{
						$query = $database->query("SELECT * FROM stock_entry WHERE id like '%".$s_item."%' or entry_date like '%".$s_item."%' or product_type like '%".$s_item."%' or product_name like '%".$s_item."%' or product_id like '%".$s_item."%' or quantity like '%".$s_item."%'");	
					}
				else
					{
						$query = $database->query("SELECT * FROM stock_entry ");
					}
			if($query->num_rows > 0)
				{
				while($row = $query->fetch_assoc())
					{		
						$myDate = date("d-m-Y  g:i A", strtotime($row['entry_date']));
			?>
				<tr>
					<td><?php echo $row['id'] ; ?></td>
					<td><?php echo $myDate ; ?></td>
			<?php 
				if($row['product_type'] == 'flower_plants'){?>	
					<td>Flower</td>
			<?php } if($row['product_type'] == 'fruit_plants'){ ?>
					<td>Fruit</td>
			<?php } if($row['product_type'] == 'vegetable_plant'){ ?>
					<td>Vegetable</td>
			<?php }if($row['product_type'] == 'decoration_plants'){?>	
					<td>Decoration</td>
			<?php } if($row['product_type'] == 'gardening_plants'){ ?>
					<td>Gardening</td>
			<?php } if($row['product_type'] == 'medicinal_plant'){ ?>
					<td>Medicinal</td>
			<?php } if($row['product_type'] == 'equipments') { ?>
					<td>Equipment</td> <?php } ?>
					<td><?php echo $row['product_name'] ; ?></td>
				<?php if($row['quantity'] == '0') { ?>
						<td class="stock_info">Out of Stock</td> 
				<?php } else { ?>
						<td><?php echo $row['quantity'];} ?></td>
					<td>
						<a href="#" class="btn btn-warning btn-xs glyphicon glyphicon-edit"  onclick="edit_stock(<?php echo $row['id'] ; ?>)" > Edit</a>
					</td>
					<td>
						<a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="delete_stock(<?php echo $row['id'] ; ?>)" > Delete</a>
					</td>
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
		