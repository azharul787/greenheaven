
	<div class="row">
		<div class="col-md-12">
			
			<div class="records_content_gardening">
				<!--All Content Will display here-->
			</div>
		</div>
	</div>
	<!-- Modal - Add New Record/User -->
	<div class="modal fade" id="add_new_record_modal_gardening" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_gardening">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel_gardening">Upload Gardening Plant</h4>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<!--<form action="#" method="post" name="myForm" id="medicin_add_form" enctype="multipart/form-data">-->
							<div class="col-sm-6 ">
								<label for="name">Name</label>
								<input type="text" name="gardening_name" id="gardening_name" class="form-control name" placeholder="Name"/>
								<br><span  id="gardening_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="fname"> Botanical Name</label>
								<input type="text" name="gardening_botanical_name" id="gardening_botanical_name" class="form-control" placeholder=" Botanical Name" />
								<br><span id="gardening_botanical_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="height">Height</label>
								<input type="text" name="gardening_height" id="gardening_height" class="form-control" placeholder="Height"/>
								<br><span id="gardening_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="width">Width</label>
								<input type="text" name="gardening_width" id="gardening_width" class="form-control" placeholder="Width" />
								<br><span id="gardening_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="gardening_color" name="gardening_color">
									<option value="">--Select One--</option>
									<option value="Green">Green</option>
									<option value="Blue">Blue</option>
									<option value="Gray">Gray</option>
									<option value="White green">White green</option>
								</select>
								<br><span id="gardening_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="sunlight">Sunlight</label><br/>
								<select class="form-control"id="gardening_sunlight" name="gardening_sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="gardening_sunlight_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12">
								<label for="price">Price</label>
								<input type="text" name="gardening_price" id="gardening_price" class="form-control" placeholder="price" />
								<br><span id="gardening_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="text">Description</label>	
								<textarea cols="5" rows="3" id="gardening_description" name="gardening_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="gardening_description_error_message" class="error_message_color"></span>
							</div>
							<!-- image. show here-->
							<div class="col-sm-12">
								<div id="targetLayer_gardening" class=" img-responsive " >
									<p class="thumbnail" id="gardening_image_display" style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
								</div><br><br>
								<div id="uploadFormLayer">
									<input type="file" name="gardening_image_name" id="gardening_image_name" class="btn btn-default" onChange="showPreview_gardening(this);"/><br/>
								</div>
							</div>				
						</div>		
					</div>		
				</div>		
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="gardening_form_validation" >Add Record</button>
				</div>
			</div>
		</div>
		<!--form image show js file-------*****-->
		<script type="text/javascript">
				function showPreview_gardening(objFileInput) 
						{
							if (objFileInput.files[0]) 
								{
									var fileReader = new FileReader();
										fileReader.onload = function (e) 
											{
												$("#targetLayer_gardening").html('<img src="'+e.target.result+'" width="450px" height="250px" class="upload-preview" />');
											}
									fileReader.readAsDataURL(objFileInput.files[0]);
								}
						}
		</script>
	</div>
	<!-- Modal - Update User details -->
	<div class="modal fade" id="update_user_modal_gardening" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_gardening">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel_gardening">Update Gardening Records</h2>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<div class="col-md-6">
								<label for="first_name">Name</label>
								<input type="text" id="update_gardening_name" placeholder="Full Name" class="form-control"/>
								<br><span  id="update_gardening_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="botanical_name">Botanical Name</label>
								<input type="text" id="update_gardening_botanical_name" placeholder="Botanical Name" class="form-control"/>
								<br><span id="update_gardening_botanical_name_error_message" class="error_message_color"></span>
							</div>				
							<div class="col-md-6">
								<label for="height">Height</label>
								<input type="text" id="update_gardening_height" placeholder="Contact Number" class="form-control"/>
								<br><span id="update_gardening_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="width">Width</label>
								<input type="text" id="update_gardening_width" placeholder="Username" class="form-control"/>
								<br><span id="update_gardening_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="update_gardening_color" name="color">
									<option value="">--Select One--</option>
									<option value="Green">Green</option>
									<option value="Blue">Blue</option>
									<option value="Gray">Gray</option>
									<option value="White green">White green</option>
								</select>
								<br><span id="update_gardening_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="color">Sunlight</label><br/>
								<select class="form-control"id="update_gardening_sunlight" name="sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="update_gardening_sunlight_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12 ">
								<label for="price">Price</label>
								<input type="text" name="price" id="update_gardening_price" class="form-control" placeholder="price" />						
								<br><span id="update_gardening_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="update_description">Description</label>	
								<textarea cols="5" rows="3" id="update_gardening_description"  name="update_gardening_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="update_gardening_description_error_message" class="error_message_color"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="update_gardening_form_validation" >Save Changes</button>
					<input type="hidden" id="hidden_user_id_gardening">
				</div>
			</div>
		</div>
	</div>					
	<!-- Custom  JS file -->
	<script type="text/javascript" src="gardening/gardening_data_upload.js"></script>
	<script type="text/javascript" src="gardening/gardening_form_validation.js"></script>
	<script type="text/javascript" src="gardening/gardening_update_form_validation.js"></script>
						
						
				