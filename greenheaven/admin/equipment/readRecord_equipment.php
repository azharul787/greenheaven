
	<table class="table table-bordered table-striped table-responsive">
		<div class="row">
			<div class="col-md-2">
				<button type="button" class="pull-left btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="readRecords_equipment(search_type)"></button>
			</div>
			<div class="col-md-6"><h3 class="text-center">Equipment Product</h3></div>
			<div class="col-md-3 ">
				<form class="navbar-form " role="search">
					<div class="input-group">
						<input type="text" class="form-control" id="search_item_equipment" placeholder="Search">
						<span class="input-group-btn">
						   <button class="btn btn-default" type="submit" onclick="readRecords_equipment('srcval_equipment')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
            <th>Brand</th>
			<th>Shape</th>
			<th>Color</th>
			<th>Origin</th>
			<th>purpose</th>
			<th>Price</th>
			<th>Stock</th>
			<!--<th>Image Name</th>-->
			<th colspan="2">
				<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_equipment">Add New Record</button>
			</th>
		</tr>
<?php
	// include Database connection file 
	include"../database_connection.php";

		$src_type = $_GET['src_val'];
		$search_itm = trim($_GET['search_itm_equipment']);
		//echo $src_type;
		//echo $search_itm;
		if($src_type == 'all')
			{
				$query = $database->query("SELECT * FROM equipments");
			}
		elseif($src_type == 'srcval_equipment')
			{
				$query = $database->query("SELECT * FROM equipments WHERE id like '%".$search_itm."%' or name like '%".$search_itm."%' or type like '%".$search_itm."%' or brand like '%".$search_itm."%' or shape like '%".$search_itm."%'or color like '%".$search_itm."%'or origin like '%".$search_itm."%'or purpose like '%".$search_itm."%' or price like '%".$search_itm."%'");
			}
		if($query->num_rows > 0)
		{
			while($row = $query->fetch_assoc())
			{
    	?>
		<tr>	
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['brand']; ?></td>
			<td><?php echo $row['shape']; ?></td>
			<td><?php echo $row['color']; ?></td>
			<td><?php echo $row['origin']; ?></td>
			<td><?php echo $row['purpose']; ?></td>
			<td><?php echo $row['price']; ?></td>
		<?php if($row['stock'] == '0') { ?>
				<td class="stock_info">Out of Stock</td> 
		<?php } else { ?>
				<td><?php echo $row['stock']; } ?></td>
			<!--<td><?php echo $row['image_name']; ?></td>-->
			<td>
				<button onclick="GetUserDetails_equipment(<?php echo $row['id']; ?>)" class="btn btn-warning btn-xs glyphicon glyphicon-edit">
					Update
				</button>
			</td>
			<td>
				<button onclick="DeleteUser_equipment(<?php echo $row['id']; ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-remove">
					Delete
				</button>
			</td>
    	</tr>
    <?php	
			}
		}
    else
    {
    	echo "No records found!";
    }
	?>
   </table>
	

 
	

