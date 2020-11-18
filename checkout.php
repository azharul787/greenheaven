<div class="container">
	
	<table class="table table-striped table-bordered">
				<tr>
					<th colspan="5"><h2 align="center"> Purchase Product details</h2></th>
				</tr>
				<tr>
					<th>Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Total Price</th>
				</tr>
<?php
	
	//$database = new mysqli('localhost','root','','green_heaven');
	include'database_connection.php';
	$data = $_POST['data'];
	$row = explode("\n",$data);
	$totalPrice= substr($row[0],13);
	for ($i = 4; $i < count($row); $i++)
	{
		$col = explode("\t",$row[$i]);
		
		$product_id =  $col[0];  // id 
		$product_name =  $col[1];         // Name = $col[1]
		$quantity =  $col[4];  // 
		$unit_price =  $col[3]; // quantity
		echo "
		<tr>
			<td>$product_name</td> 
			<td>$quantity</td> 
			<td>$unit_price</td> 
			<td>".($unit_price*$quantity)."</td> 
			
		</tr>
		";
		
	}
	?>
	<?php
		echo"
		<tr>
			<td colspan='3'><b>Total price:</b></td>
			<td>".$totalPrice."</td> 
		</tr>";
		
		?>	
	</table>
		<br><br>
	</div>	
	
	<?php 	
		
		
		
		
		//include('database_connection.php');
		
	/*	if(isset($_POST['comfirm_order']))
		{
			echo "<script>alert('testing')</script>";
			
		}*/

?>


	
<div class="container">
	 <div class="registration">
		  <div class="registration_left">
			 <h2>Shipping Address </h2>

			 <div class="registration_form">
				<form action="#" method="post">
					<div>
						<label>Full Name:
							<input placeholder="Full Name" name="fullname" type="text" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>Email:
							<input placeholder="Email Address" name="email" type="email" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>Contact Number:
							<input placeholder="Contact Number" type="text" name="contact_no" tabindex="4" required>
						</label>
					</div>
					<div>
						<label>Address:</label>
						<textarea cols="78" row="5" placeholder="Type your shipping  address" type="text" name="address" tabindex="4" required></textarea>
					</div>
					<div>
						<input type="hidden" name="data" value="<?php echo $data;?>" />
						<input type="submit" value="Confirm Order" name="comfirm_order" id="register-submit">
					</div>
					<!--<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to  &nbsp;<a class="terms" href="#"> terms of conditions</a> </label>
						<br/><span class="error_form" id="checkbox_error_message"></span>
					</div>-->
				</form>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>

