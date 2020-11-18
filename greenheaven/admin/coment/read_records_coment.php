<table class="table table-striped table-responsive table-bordered">
	<button type="button" class="btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="read_coment_message()"></button>
		<tr>
			<!--<td>Id</td>-->
			<td>Entry Date</td>
			<td>Product Name</td>
			<td>Product Id</td>
			<td>Full Name</td>
			<td>Message</td>
			<td>Approve</td>
			<td>Delete</td>
		</tr>
	<?php 
		include'../database_connection.php';
		//$database = new mysqli('localhost','root','','green_heaven');
		$query = $database->query("SELECT * FROM coment ");
		while($row = $query->fetch_assoc())
			{
		?>
			<tr>
				<!--<td><?php echo $row['id'] ; ?></td>-->
				<td><?php echo $row['entry_date'] ; ?></td>
				<td><?php echo $row['product_name'] ; ?></td>
				<td><?php echo $row['product_id'] ; ?></td>
				<td><?php echo $row['fullname'] ; ?></td>
				<td><?php echo $row['message'] ; ?></td>
				<td>
        <?php 
			if($row['status'] == 'Not Approved') { ?>
					<a href="#" class="btn btn-warning btn-xs glyphicon " onclick="approve_coment(<?php echo $row['id'] ; ?>)" > Approve Me</a>
                 <?php } else {   ?>
					<a href="#" class="btn btn-info btn-xs glyphicon glyphicon-ok" onclick="approve_coment(<?php echo $row['id'] ; ?>)" > Approved</a>
				<?php } ?>
                </td>
				<td>
					<a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="delete_coment(<?php echo $row['id'] ; ?>)" > Delete</a>
				</td>
			</tr>
		<?php 
			}
			?>
	</table>
					
					
					
					
					
					
					
					
					
					
					
					