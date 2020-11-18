
 
<table class="table table-bordered table-striped table-responsive">
	<div class="row">
			<div class="col-md-2">
				<button type="button" class="pull-left btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="readRecords_gardening(search_type)"></button>
			</div>
			<div class="col-md-6"><h3 class="text-center">Gardening Plants</h3></div>
			<div class="col-md-3 ">
				<form class="navbar-form " role="search">
					<div class="input-group">
						<input type="text" class="form-control" id="search_item_gardening" placeholder="Search">
						<span class="input-group-btn">
						   <button class="btn btn-default" type="submit" onclick="readRecords_gardening('srcval_gardening')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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
			<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal_gardening">Add New Record</button>
		</th>
	</tr>
<?php
	// include Database connection file 
	include"../database_connection.php";
	
	$src_type = $_GET['src_val'];
	$search_itm = $_GET['search_itm_gardening'];
	//echo $src_type;
	//echo $search_itm;
	if($src_type == 'all')
		{
			$query = $database->query("SELECT * FROM gardening_plants");
		}
	elseif($src_type == 'srcval_gardening')
		{
			$query = $database->query("SELECT * FROM gardening_plants WHERE id like '%".$search_itm."%' or name like '%".$search_itm."%' or botanical_name like '%".$search_itm."%' or height like '%".$search_itm."%' or width like '%".$search_itm."%'or color like '%".$search_itm."%'or sunlight like '%".$search_itm."%'or description like '%".$search_itm."%' or price like '%".$search_itm."%'");
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
					<button onclick="GetUserDetails_gardening(<?php echo $row['id']; ?>)" class="btn btn-warning btn-xs glyphicon glyphicon-edit">
						Update
					</button>
				</td>
				<td>
					<button onclick="DeleteUser_gardening(<?php echo $row['id']; ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-remove">
						Delete
					</button>
				</td>
    		</tr>
    <?php		
    	}
    }
    else
    { 
    	echo "Records not found!";
    }

   
	
	
	
	// pagination start
	
	/*$limit = 5;  
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
	
	$start_from = ($page-1) * $limit;  

	
	//$sql = "SELECT COUNT(id) FROM registration";  
	$rs_result = $database->query("SELECT COUNT(id) FROM registration");  
	//$rs_result = mysqli_query($conn, $sql);  
	//$row = mysqli_fetch_row($rs_result);  
	$row = mysqli_fetch_row($rs_result);  
	
	$total_records = $row[0];  
	$total_pages = ceil($total_records / $limit);  
	$pagLink = "<nav><ul class='pagination'>";  
	for ($i=1; $i<=$total_pages; $i++) {  
				 $pagLink .= "<li><a href='regUser/readRecord.php?page=".$i."'>".$i."</a></li>";  
	};  
	echo $pagLink . "</ul></nav>";  */
	
	//pagination end
	
?>
<script type="text/javascript">
	/*$(document).ready(function(){
	$('.pagination').pagination({
			items: <?php echo $total_records;?>,
			itemsOnPage: <?php echo $limit;?>,
			cssStyle: 'light-theme',
			currentPage : <?php echo $page;?>,
			hrefTextPrefix : 'index.php?page='
		});
		});*/
	</script>