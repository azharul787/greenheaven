
<!--Header End-->
<div class="container">
	  
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			
			 <style>
				.error_form{
					color:red;
				}
				
			 </style>
			 <div class="registration_form">
			 
			 <!-- Form -->
				<form id="medicinal_validation" action="#" method="post">
					<div>
						<label> <b>First Name:</b></label>
						<input placeholder="First name:" id="firstname" name="firstname" type="text" tabindex="1"  >
						<br><span class="error_form error" id="firstname_error_message" style="color:red;"></span>
					</div>
					<div>
						<label><b> Last Name:</b></label>
						<input placeholder="Last name:" id="lastname" name="lastname" type="text" tabindex="2"  >
						<br><span class="error_form" id="lastname_error_message" style="color:red;"></span>
					</div>
					<div>
						<label><b>Email:</b></label>
						<input placeholder="Email address" id="email" name="email" type="email" tabindex="3" >
						<br><span class="error_form" id="email_error_message" style="color:red;"></span>
					</div>
					<div>
						<label><b> Contact Number:</b></label>
						<input placeholder="Mobile:" type="text" id="contact_no" name="contact_no" tabindex="3" >
						<br><span class="error_form" id="contact_number_error_message" style="color:red;"></span>
					</div>	
					<div>
						<label><b>Username:</b>
						<input placeholder="User Name" type="text" name="username" id="username" tabindex="3" >
						<br><span class="error_form" id="username_error_message" style="color:red;"></span>
						</label>
					</div>	
						<div class="sky_form1">
							<label><b>Gender</b></label>
							<ul>
								<li><label class="radio left"><input type="radio" name="radio" checked="" ><i></i>Male</label></li>
								<li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
								<div class="clearfix"></div>
							</ul>
						</div>					
					<div>
						<label><b>Password</b>
						<input placeholder="Password" type="password" id="password" name="" tabindex="4" >
						<br/><span class="error_form" id="password_error_message" style="color:red;"></span>
						</label>
					</div>						
					<div>
						<label><b>Retype Password:</b></label>
						<input placeholder="Retype password" type="password" name="password" id="retype_password" tabindex="4" >
						<br/><span class="error_form" id="retype_password_error_message" style="color:red;"></span>
					</div>	
					
					<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" id="checkbox" checked ><i></i>i agree to  &nbsp;<a class="terms" href="#"> terms of condiions</a> </label>
						<br/><span class="error_form" id="checkbox_error_message" style="color:red;"></span>
					</div>
					<div>
						<input type="button" value="Create an account" name="sub_registration" id="create_accounts">
					</div>
				</form>
				<!-- /Form -->
			 </div>
			 <!--Validation script-->
			 <script src="account_validation.js"></script>
			 <script>
				function create_account() 
					{ 
						var firstname = $("#firstname").val();
						var lastname = $("#lastname").val();
						var email = $("#email").val();
						var contact_no = $("#contact_no").val();
						var username = $("#username").val();
						var password = $("#retype_password").val();
						
						$.post("create_account.php", {	firstname: firstname, 
														lastname:lastname,
														email: email,  
														contact_no: contact_no, 
														username: username, 
														password: password 
														}, 
								function (data) 
									{ 	
										alert(data)
										
										// clear fields from the popup
										$("#firstname").val("");
										$("#lastname").val("");
										$("#email").val("");
										$("#contact_no").val("");
										$("#username").val("");
										$("#password").val("");
										$("#retype_password").val("");
									});
					}
			 </script>
			
		 </div>
		 <div class="registration_left">
			 <h2>existing user</h2>
		
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="login_transfer.php" method="post">
					<div>
						<label>Email:
							<input placeholder="Email:" name="email" type="email" tabindex="3" required>
						</label>
					</div>
					<div>
						<label>Password:
							<input placeholder="Password" type="password" name="password" tabindex="4" required>
						</label>
					</div>						
					<div>
						<input type="submit" value="sign in" name="login_submit" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
