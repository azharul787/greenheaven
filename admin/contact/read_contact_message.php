	<table class="table table-striped table-responsive table-bordered">
	<div class="row">
			<div class="col-md-2">
				<button type="button" class="pull-left btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="read_contact_message(search_type)"></button>
			</div>
			<div class="col-md-6"><h3 class="text-center">Contact Message</h3></div>
			<div class="col-md-3 ">
				<form class="navbar-form " role="search">
					<div class="input-group">
						<input type="text" class="form-control" id="search_item_contact" placeholder="Search">
						<span class="input-group-btn">
						   <button class="btn btn-default" type="submit" onclick="read_contact_message('srcval_contact')" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
						</span>
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
		<tr>
			<td>Id</td>
			<td>Entry Date</td>
			<td>Name</td>
			<td>Email</td>
			<td>Contact Number</td>
			<td>Subject</td>
			<td>Message</td>
			<td>Reply</td>
			<td>Delete</td>
		</tr>
	<?php 
	include'../database_connection.php';
		
	$src_type = $_GET['src_val'];
	$search_itm = trim($_GET['search_itm_contact']);
	//echo $src_type;
	//echo $search_itm;
	if($src_type == 'all')
		{
			$query = $database->query("SELECT * FROM contact ");
		}
	elseif($src_type == 'srcval_contact')
		{
			$query = $database->query("SELECT * FROM contact WHERE id like '%".$search_itm."%' or entry_date like '%".$search_itm."%' or name like '%".$search_itm."%' or email like '%".$search_itm."%' or contact_no like '%".$search_itm."%' or subject like '%".$search_itm."%' or message like '%".$search_itm."%'");
		}
	if($query->num_rows > 0)
		{
		while($row = $query->fetch_assoc())
			{
				$entry_date = $row['entry_date']; 
				$myDate = date("d-m-Y  g:i A", strtotime($entry_date));
	?>
		<tr>
			<td><?php echo $row['id'] ; ?></td>
			<td><?php echo $myDate ; ?></td>
			<td><?php echo $row['name'] ; ?></td>
			<td><?php echo $row['email'] ; ?></td>
			<td><?php echo $row['contact_no'] ; ?></td>
			<td><?php echo $row['subject'] ; ?></td>
			<td><?php echo $row['message'] ; ?></td>
			<td>
				<a href="#" class="btn btn-info btn-xs glyphicon glyphicon-ok" onclick="reply_contact(<?php echo $row['id'] ; ?>)" > Reply</a>
			</td>
			<td>
				<a href="#" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="delete_contact_message(<?php echo $row['id'] ; ?>)" > Delete</a>
			</td>
		</tr>
		<?php 
			}
			}
			else
				echo"No Records Found!";
		?>
	</table>