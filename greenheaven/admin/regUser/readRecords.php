
	<table class="table table-bordered table-striped table-responsive">
		<div class="row">
			<div class="col-md-2">
				<button type="button" class="pull-left btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="readRecords(search_type)"></button>
			</div>
			<div class="col-md-6"><h3 class="text-center">Register Customer Records</h3></div>
			<div class="col-md-3 ">
				<form class="navbar-form " role="search">
					<div class="input-group">
						<input type="text" class="form-control" id="search_item" placeholder="Search">
						<span class="input-group-btn">
						   <button class="btn btn-default" type="submit" onclick="readRecords('srcval')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
		<tr>
			<th>No.</th>
			<th>Full Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
			<th>Action</th>
			<th>
				<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
			</th>
		</tr>
	<?php
	include"../database_connection.php";
	$stype = $_GET['src'];
	$search_itm = $_GET['search_itm'];
		if($stype == 'all')
			{
				$query = $database->query("SELECT * FROM registration");
			}
		elseif($stype == 'srcval')
			{
				
				$query = $database->query("SELECT * FROM registration WHERE fullname like '%".$search_itm."%' or email like '%".$search_itm."%' or username like '%".$search_itm."%' or contact_no like '%".$search_itm."%'");
			}
	if($query->num_rows > 0)
    {
    	$number = 0;
		while($row = $query->fetch_assoc())
    	{ $number++;
			?>
    		<tr>
				<td><?php echo $number; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact_no']; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['password']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td>
					<button onclick="GetUserDetails(<?php echo $row['id']; ?>)" class="btn btn-warning btn-xs glyphicon glyphicon-edit">
						Update
					</button>
				</td>
				<td>
					<button onclick="DeleteUser(<?php echo $row['id']; ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-remove">
						Delete
					</button>
				</td>
    		</tr>
    <?php 	
    	}
    }
    else
    {
    	// records now found 
    	echo "Records not found!";
    }

   
	
	
	
	// pagination start
	/*
	$limit = 5;  
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
	echo $pagLink . "</ul></nav>";  
	
	*/
	
?>
<script type="text/javascript">
	/*$(document).ready(function(){
	$('.pagination').pagination({
			items: <?php echo $total_records;?>
			itemsOnPage: <?php echo $limit;?>,
			cssStyle: 'light-theme',
			currentPage : <?php echo $page;?>,
			hrefTextPrefix : 'index.php?page='
		});
		});*/
</script>