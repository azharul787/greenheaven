
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Purchase Records</h3><br>
			<div class="records_content_purchase_record">
				<!--<button class="btn btn-default glyphicon glyphicon-refresh " onclick="read_purchase_rocords()"></button>-->
				<table class="table table-bordered table-striped table-responsive" style="width:100%;">
					<tr>
						<th>Serial</th>
						<!--<th>Id</th>-->
						<th>Order Date</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Contact Number</th>
						<th>Total Price</th>
						<th>View Details</th>		
					</tr>
				<?php 
					include"../database_connection.php";
					$email = $_SESSION['username'];
					
					$query = $database->query("SELECT * FROM orderlist WHERE email = '$email'");
					
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
						<!--<td><?php echo $row['order_id']; ?></td>-->
						<td><?php echo $myDate ; ?></td>
						<td><?php echo $row['fullname']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact_no']; ?></td>
						<td><?php echo $row['total_price']; ?></td>	
						
						<td>
							<button onclick="view_purchase_details(<?php echo $row['order_id']; ?>)"  class="btn btn-info btn-xs glyphicon glyphicon-eye-open"> View</button>
							
						</td>
					</tr>
					<?php
					
						}
					}
				else
				echo "No Record Found";
				?>
				</table>
			</div>
		</div>
	</div>
	<div class="container">
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title text-center">Order List Details</h4>
			</div>
			<div class="modal-body">
				<div id="view_purchase_details"></div>
			  
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	  
	</div>
	<!-- Custom JS file -->
	
	<script>
		function view_purchase_details(id) 
		{
			var view_id = id ;
			$.ajax({
				type:"post",
				url:"purchase_record/view_purchase_details.php",
				data:{view_id:view_id},
				success:function(result){
					$("#myModal").modal("show");
					$('#view_purchase_details').html(result);
				}
			});
		}
	
	</script>	
	
