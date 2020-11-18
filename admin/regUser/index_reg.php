
						<div class="row">
							<div class="col-md-12">
								<!--<h3 class="text-center">Register Customer Records</h3><br>-->
								<div class="records_content">
									
								</div>
							</div>
						</div>
						<!-- /Content Section -->
						<!-- Modal - Add New Record/User -->
						<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Add New Record</h4>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="first_name">Full Name</label>
											<input type="text" id="fullname" placeholder="Full Name" class="form-control"/>
											<br><span id="fullname_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="text" id="email" placeholder="Email Address" class="form-control"/>
											<br><span id="email_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="Contact Number">Contact Number</label>
											<input type="text" id="contact_no" placeholder="Contact Number" class="form-control"/>
											<br><span id="contact_number_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" id="username" placeholder="Username" class="form-control"/>
											<br><span id="username_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" id="password" placeholder="password" class="form-control"/>
											<br><span id="password_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="Retype Password">Retype Password</label>
											<input type="password" id="retype_password" placeholder="Retype password" class="form-control"/>
											<br><span id="retype_password_error_message" class="error_message_color"></span>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary" id="registration_form_validation">Add Record</button>
									</div>
								</div>
							</div>
						</div>
						<!-- // Modal -->
						<!-- Modal Form Update Reg User details -->
						<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h2 class="modal-title" id="myModalLabel">Update Register User Record</h2>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label for="first_name">Full Name</label>
											<input type="text" id="update_fullname" placeholder="Full Name" class="form-control"/>
											<br><span id="update_fullname_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="email">Email Address</label>
											<input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
											<br><span id="update_email_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="Contact Number">Contact Number</label>
											<input type="text" id="update_contact_no" placeholder="Contact Number" class="form-control"/>
											<br><span id="update_contact_number_error_message" class="error_message_color"></span>
										</div>
										<div class="form-group">
											<label for="username">Username</label>
											<input type="text" id="update_username" placeholder="Username" class="form-control"/>
											<br><span id="update_username_error_message" class="error_message_color"></span>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-primary" id="registration_update_form_validation" >Save Changes</button>
										<input type="hidden" id="hidden_user_id">
									</div>
								</div>
							</div>
						</div>
						<!--Registration user js file-->
						<script type="text/javascript" src="regUser/registration_data_upload.js"></script>
						<script type="text/javascript" src="regUser/registration_form_validation.js"></script>
						<script type="text/javascript" src="regUser/registration_update_form_validation.js"></script>
						
						<script type="text/javascript">
							/*$(document).ready(function(){
							$('.pagination').pagination({
									items: <?php echo $total_records;?>
									itemsOnPage: <?php echo $limit;?>,
									cssStyle: 'light-theme',
									currentPage : <?php echo $page;?>,
									hrefTextPrefix : 'index.php?page=
								});
								});*/
						</script>