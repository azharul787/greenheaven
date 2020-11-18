
	<table class="table table-bordered table-striped table-responsive">
		<div class="row">
			<div class="col-md-2">
				<button type="button" class="pull-left btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="readRecords_decoration(search_type)"></button>
			</div>
			<div class="col-md-6"><h3 class="text-center">Decoration Plants</h3></div>
			<div class="col-md-3 ">
				<form class="navbar-form " role="search">
					<div class="input-group">
						<input type="text" class="form-control" id="search_item_decoration" placeholder="Search">
						<span class="input-group-btn">
						   <button class="btn btn-default" type="submit" onclick="readRecords_decoration('srcval_decoration')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Botanical Name</th>
            <th>Height</th>
			<th>Width</th>
			<th>Color</th>
			<th>Sunlight</th>
		<!--<th>Description</th>-->
			<th>Price</th>
			<th>Stock</th>
		<!--<th>Image Name</th>-->
			<th colspan="2">
				<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal_decoration">Add New Record</button>
			</th>
		</tr>
<?php
	// include Database connection file 
	include"../database_connection.php";
	$src_type = $_GET['src_val'];
	$search_itm = trim($_GET['search_itm_decoration']);
	//echo $src_type;
	//echo $search_itm;
	if($src_type == 'all')
		{
			$query = $database->query("SELECT * FROM decoration_plants");
		}
	elseif($src_type == 'srcval_decoration')
		{
			$query = $database->query("SELECT * FROM decoration_plants WHERE id like '%".$search_itm."%' or name like '%".$search_itm."%' or botanical_name like '%".$search_itm."%' or height like '%".$search_itm."%' or width like '%".$search_itm."%'or color like '%".$search_itm."%'or sunlight like '%".$search_itm."%'or description like '%".$search_itm."%' or price like '%".$search_itm."%'");
		}
	if($query->num_rows > 0)
    {
    	
		while($row = $query->fetch_assoc())
    	{
    ?>	
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['botanical_name']; ?></td>
				<td><?php echo $row['height']; ?></td>
				<td><?php echo $row['width']; ?></td>
				<td><?php echo $row['color']; ?></td>
				<td><?php echo $row['sunlight']; ?></td>
			<!--<td><?php echo $row['description']; ?></td>-->
				<td><?php echo $row['price']; ?></td>
		<?php if($row['stock'] == '0') { ?>
				<td class="stock_info">Out of Stock</td> 
		<?php } else { ?>
				<td><?php echo $row['stock']; } ?></td>
			<!--<td><?php echo $row['image_name']; ?></td>-->
			
				<td>
					<button onclick="GetUserDetails_decoration(<?php echo $row['id']; ?>)" class="btn btn-warning btn-xs glyphicon glyphicon-edit">
						Update
					</button>
				</td>
				<td>
					<button onclick="DeleteUser_decoration(<?php echo $row['id']; ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-remove">
						Delete
					</button>
				</td>
    		</tr>
		
    <?php	
    	}
    }
    else
    {
     echo "No Record Founds!";	
    }

   ?>
	</table>