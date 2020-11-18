
	<link rel="stylesheet" href="file/cal_file/zebra_datepicker.min.css" type="text/css">
    <link rel="stylesheet" href="file/cal_file/examples.css" type="text/css">
	<?php
	// include Database connection file 
	include"../database_connection.php";
	?>
	<!--<div class="well">
        <div class="row">
			<div class="col-sm-1">
				<button class="btn btn-default btn-xm glyphicon glyphicon-refresh " onclick="read_order_list_rocords('all')"></button>
			</div>
			<div class="col-sm-2"><h3>Order List</h3></div>
			<div class="col-sm-1">From</div>
			<div class="col-sm-3">
				<input id="datepicker-range-start" type="text" style=";" class="form-control start_date" data-zdp_readonly_element="false">
			</div>
			<div class="col-sm-1">To</div>
			<div class="col-sm-3">
				<input id="datepicker-range-end" type="text" style="" class="form-control end_date" data-zdp_readonly_element="false">
			</div>
			<div class="col-sm-1">
				<button type="button" class="btn btn-default glyphicon glyphicon-search" onclick="read_order_list_rocords('dt')" ></button>
			</div>
        </div>
    </div>-->
	
	<table class="table table-bordered table-striped table-responsive" style="width:100%;">
		<tr style="">
			<th><button class="btn btn-default btn-xm glyphicon glyphicon-refresh " onclick="read_order_list_rocords('all')"></button></th>
			<th colspan="3"><h3 align="center">Order List</h3></th>
			<th colspan="2"><input id="datepicker-range-start" type="text" style=";" class="form-control start_date" data-zdp_readonly_element="false"></th>
			<th>To</th>
			<th colspan="2"><input id="datepicker-range-end" type="text" style="" class="form-control end_date" data-zdp_readonly_element="false"></th>
			<th><button type="button" class="btn btn-default glyphicon glyphicon-search" onclick="read_order_list_rocords('dt')" ></button></th>
		</tr>
		<tr>
			<th>Serial</th>
			<th>Id</th>
			<th>Order Date</th>
			<th>Full Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Total Price</th>
			<th>View Details</th>
			<th>Delivery Status</th>
			<th>Delete</th>
		</tr>
	<?php 

		$stype = $_GET['src'];
		if($stype == 'all')
			$query = $database->query("SELECT * FROM orderlist");
		elseif($stype == 'dt')
		{
			$start_date = $_GET['sdt'];
			$end_date = $_GET['edt'];
			 
			//$query = $database->query("SELECT * FROM orderlist");
			$query = $database->query("SELECT * FROM orderlist WHERE order_date BETWEEN '$start_date' AND '$end_date'");
		}
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
				<td><?php echo $row['order_id']; ?></td>
				<td><?php echo $myDate ; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['contact_no']; ?></td>
				<td><?php echo $row['total_price']; ?></td>	
				<td>
					<button onclick="view_order_list_details(<?php echo $row['order_id']; ?>)"  class="btn btn-info btn-xs glyphicon glyphicon-eye-open"> View</button>
				</td>
				<td>
					<?php 
						if($row['current_status'] == 'Not Approved') 
						{ 
					?>
						<button onclick="approve_order_list(<?php echo $row['order_id']; ?>)" class="btn btn-warning btn-xs glyphicon glyphicon-approve"> Delivery Me</button>
					<?php } else {   ?>
						<button onclick="approve_order_list(<?php echo $row['order_id']; ?>)" class="btn btn-info btn-xs glyphicon glyphicon-ok"> Deliveried</button>
					<?php } ?>
				</td>
				<td>
					<button onclick="Delete_order_list(<?php echo $row['order_id']; ?>)" class="btn btn-danger btn-xs glyphicon glyphicon-trash">
						Delete
					</button>
				</td>
    		</tr>
    <?php
    	}
    }
	else
		{
			echo "No Record Found";
		}
	?>
   </table>
   
<script>
	$(document).ready(function() {
		$('#datepicker-range-start').Zebra_DatePicker({
                 direction: 1 
               });

        $('#datepicker-range-end').Zebra_DatePicker({
                direction: false,
              pair: $('#datepicker-range-end')
			  });
	});
</script> 

 <!-- Jquery Plugin For Date Calender-->
 <script type="text/javascript" src="file/cal_file/zebra_datepicker.src.js"></script>
 <script type="text/javascript" src="file/cal_file/examples.js"></script>

  

	
	