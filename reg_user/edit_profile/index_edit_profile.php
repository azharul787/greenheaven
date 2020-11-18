	<style>
		.error_message_color{color:red;}
	</style>
	<div class="container">
			<div class="col-md-12">
				<h2 align="center">Edit User Profile</h2>
			</div>
		<div class="" style="width:50%;margin:0 auto;">
			<div class="col-md-12 well">
            <!--<script src="../../database_connection.php"></script>-->
				<?php 
					
					//include"../../database_connection.php";
					include"../database_connection.php";
					$email = $_SESSION['username'];
					$query = $database->query("SELECT * from registration where email = '$email'");
				    if($query->num_rows >0)
					{
						$row = $query->fetch_assoc();
					}
					?>
					<div class="col-md-6">
						<label for="first_name">Full Name</label>
						<input type="text" id="fullname" placeholder="Full Name" class="form-control" value="<?php echo $row['fullname']; ?>" />
						<br><span id="fullname_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-6">
						<label for="email">Email Address</label>
						<input type="text" id="email" placeholder="Email Address" class="form-control" value="<?php echo $row['email']; ?>"/>
						<br><span id="email_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-6">
						<label for="Contact Number">Contact Number</label>
						<input type="text" id="contact_no" placeholder="Contact Number" class="form-control" value="<?php echo $row['contact_no']; ?>"/>
						<br><span id="contact_number_error_message" class="error_message_color"></span>
					</div>				
					<div class="col-md-6">
						<label for="username">Username</label>
						<input type="text" id="username" placeholder="Username" class="form-control" value="<?php echo $row['username']; ?>"/>
						<br><span id="username_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-12">
						<label for="password">Current Password</label>
						<input type="password" id="current_password" placeholder="Old password" class="form-control"/>
						<br><span id="current_password_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-6">
						<label for="Retype Password">New Password</label>
						<input type="password" id="new_password" placeholder="New password" class="form-control"/>
						<br><span id="new_password_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-6">
						<label for="Retype Password">Retype New Password</label>
						<input type="password" id="retype_new_password" placeholder="Retype New password" class="form-control"/>
						<br><span id="retype_new_password_error_message" class="error_message_color"></span>
					</div>
					<div class="col-md-12">
						<input type="hidden" id="edit_id" value="<?php echo $row['id']; ?>">
						<button type="button" class="btn btn-success pull-right" id="update_profile">Update</button>
					</div>	
			</div>
		</div>
	</div>
	<script src="edit_profile/edit_profile_validation.js"></script>
	<script>
			function update_profile()
					{ 
						var id = $('#edit_id').val();
						var fullname = $('#fullname').val();
						var email = $('#email').val();
						var contact_no = $('#contact_no').val();
						var current_password = $('#current_password').val();
						var new_password = $('#new_password').val();
						
						$.post("edit_profile/edit_profile.php",{id:id,fullname:fullname, email:email,contact_no:contact_no,current_password:current_password,new_password:new_password},
				
								function (data) 
									{ 	
										alert(data)
									}
							)
					}	
	</script>