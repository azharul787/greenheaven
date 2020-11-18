
	<div class="row">
		<div class="col-md-12">
			<div class="records_content_fruit">
				<!-- All content will display here-->
			</div>
		</div>
	</div>
	<!-- - Add New Record -->
	<div class="modal fade" id="add_new_record_modal_fruit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_fruit">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel_fruit">Add New Fruit Plants</h4>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<!--<form action="#" method="post" name="myForm" id="medicin_add_form" enctype="multipart/form-data">-->
							<div class="col-sm-6 ">
								<label for="name">Name</label>
								<input type="text" name="fruit_name" id="fruit_name" class="form-control name" placeholder="Name"/>
								<br><span  id="fruit_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="fname"> Botanical Name</label>
								<input type="text" name="fruit_botanical_name" id="fruit_botanical_name" class="form-control" placeholder=" Botanical Name" />
								<br><span id="fruit_botanical_name_error_message" class="error_message_color"></span>
							</div>	
							<div class="col-sm-6 ">
								<label for="height">Height</label>
								<input type="text" name="fruit_height" id="fruit_height" class="form-control" placeholder="Height"/>
								<br><span id="fruit_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="width">Width</label>
								<input type="text" name="fruit_width" id="fruit_width" class="form-control" placeholder="Width" />
								<br><span id="fruit_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="fruit_color" name="fruit_color">
									<option value="">--Select One--</option>
									<option value="Green">Green</option>
									<option value="Red">Red</option>
									<option value="Yellow">Yellow</option>
									<option value="Orange">Orange</option>
								</select>
								<br><span id="fruit_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="sunlight">Sunlight</label><br/>
								<select class="form-control"id="fruit_sunlight" name="fruit_sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="fruit_sunlight_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12">
								<label for="price">Price</label>
								<input type="text" name="fruit_fruit" id="fruit_price" class="form-control" placeholder="price" />
								<br><span id="fruit_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="text">Description</label>	
								<textarea cols="5" rows="3" id="fruit_description" name="fruit_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="fruit_description_error_message" class="error_message_color"></span>
							</div>	
							<!-- image. show here-->
							<div class="col-sm-12">
								<div id="targetLayer_fruit" class=" img-responsive " >
									<p class="thumbnail" id="image_display_fruit" style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
								</div><br><br>
								<div id="uploadFormLayer">
									<input type="file" name="fruit_image_name" id="fruit_image_name" class="btn btn-default" onChange="showPreview_fruit(this);"/><br/>
								</div>
							</div>		
						</div>		
					</div>		
				</div>						
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="fruit_form_validation" >Add Record</button>
				</div>
			</div>
		</div>
		<!-- image show js file-------*****-->
		<script type="text/javascript">
			function showPreview_fruit(objFileInput) 
					{
						if (objFileInput.files[0]) 
							{
								var fileReader = new FileReader();
								fileReader.onload = function (e) 
									{
										$("#targetLayer_fruit").html('<img src="'+e.target.result+'" width="450px" height="250px" class="upload-preview" />');
									}
										fileReader.readAsDataURL(objFileInput.files[0]);
							}
					}
		</script>
	</div>
	<!-- Modal - Update User details -->
	<div class="modal fade" id="update_user_modal_fruit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_fruit">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel_fruit">Update</h2>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<div class="col-md-6">
								<label for="first_name">Name</label>
								<input type="text" id="update_fruit_name" placeholder="Name" class="form-control"/>
								<br><span  id="update_fruit_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="botanical_name">Botanical Name</label>
								<input type="text" id="update_fruit_botanical_name" placeholder="Botanical Name" class="form-control"/>
								<br><span id="update_fruit_botanical_name_error_message" class="error_message_color"></span>
							</div>				
							<div class="col-md-6">
								<label for="height">Height</label>
								<input type="text" id="update_fruit_height" placeholder="Height" class="form-control"/>
								<br><span id="update_fruit_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="width">Width</label>
								<input type="text" id="update_fruit_width" placeholder="Width" class="form-control"/>
								<br><span id="update_fruit_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="update_fruit_color" name="color">
									<option value="">--Select One--</option>
									<option value="Green">Green</option>
									<option value="Red">Red</option>
									<option value="Yellow">Yellow</option>
									<option value="Orange">Orange</option>
								</select>
								<br><span id="update_fruit_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6">
								<label for="color">Sunlight</label><br/>
								<select class="form-control"id="update_fruit_sunlight" name="update_fruit_sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="update_fruit_sunlight_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12 ">
								<label for="price">Price</label>
								<input type="text" name="price" id="update_fruit_price" class="form-control" placeholder="price" />							
								<br><span id="update_fruit_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="update_description">Description</label>	
								<textarea cols="5" rows="3" id="update_fruit_description"  name="update_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="update_fruit_description_error_message" class="error_message_color"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="update_fruit_form_validation" >Save Changes</button>
					<input type="hidden" id="hidden_user_id_fruit">
				</div>
			</div>
		</div>
	</div>
	<!-- Custom JS file -->
	<script type="text/javascript" src="fruit/fruit_data_upload.js"></script>
	<script type="text/javascript" src="fruit/fruit_form_validation.js"></script>					
	<script type="text/javascript" src="fruit/fruit_update_form_validation.js"></script>					
	<script type="text/javascript">
		/*$(document).ready(function()
			{
				$('.pagination').pagination({
				items: <?php echo $total_records;?>,
				itemsOnPage: <?php echo $limit;?>,
				cssStyle: 'light-theme',
				currentPage : <?php echo $page;?>,
				hrefTextPrefix : 'index.php?page='
			});
		});*/
	</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	