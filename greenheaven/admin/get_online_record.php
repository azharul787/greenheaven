<!--get_online_record.php-->

<table class="table table-bordered table-striped table-responsive" style="width:80%;margin:0 auto;">
	<button style="margin-left:113px;" class=" btn btn-default glyphicon glyphicon-refresh " onclick="read_now_online_rocords()"></button>
	<tr style="font-weight:bold;">
		<th>No</th>
		<th>Name</th>
		<th>Status</th>
	</tr>
	<?php 
		include('database_connection.php');
		$query = $database->query("SELECT * FROM registration where status = 'online'");
	
		if($query->num_rows > 0 )
			{    
                $serial = 0;
				while($row = $query->fetch_assoc())
				{ 
                    $serial ++ ;

		?>
	<tr >
		<td><?php echo $serial; ?></td>
		<td><?php echo $row['fullname']; ?></td>
		<td style="color:#009;font-weight:bold;"> <?php echo $row['status']; ?></td>
	</tr>
	<?php
				}
			}
			else
				echo "No Record Found";
	?>
</table>