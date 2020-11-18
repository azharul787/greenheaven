	<style>
		.error_message_color{
			color:red;
		}
	
	</style>
	<div class="row">
		<div class="col-md-12">
			<div class="records_content_medicinal">
				<!--All Content Will display here-->
			</div>
		</div>
	</div>
	<!-- Product ************ Section -->
	<!-- Add New Record medicinal Form -->
	<div class="modal fade" id="add_new_record_medicinal_modal" tabindex="-1" role="dialog" aria-labelledby="add_medicinal_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="add_medicinal_modal">Add New Record</h4>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<form  method="post" name="myForm" id="medicin_add_form" enctype="multipart/form-data">
								<div class="col-sm-6 ">
									<label for="name">Name</label>
									<input type="text" name="medicinal_name" id="medicinal_name" class="form-control name" placeholder="Name"/>
									<br><span class="error_message_color" id="medicinal_name_error_message"></span>
								</div>
								<div class="col-sm-6  ">
									<label for="fname"> Botanical Name</label>
									<input type="text" name="medicinal_botanical_name" id="medicinal_botanical_name" class="form-control" placeholder=" Botanical Name" />
									<br><span id="medicinal_botanical_name_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6 ">
									<label for="height">Height</label>
									<input type="text" name="medicinal_height" id="medicinal_height" class="form-control" placeholder="Height"/>
									<br><span id="medicinal_height_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6 ">
									<label for="width">Width</label>
									<input type="text" name="medicinal_width" id="medicinal_width" class="form-control" placeholder="Width" />
									<br><span id="medicinal_width_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6  ">
									<label for="color">Color</label>
									<select class="form-control"id="medicinal_color" name="medicinal_color">
										<option value="">--Select One--</option>
										<option value="Green">Green</option>
										<option value="Blue">Blue</option>
										<option value="Gray">Gray</option>
										<option value="White green">White green</option>
									</select>
									<br><span id="medicinal_color_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6  ">
									<label for="sunlight">Sunlight</label>
									<select class="form-control"id="medicinal_sunlight" name="medicinal_sunlight">
										<option value="">--Select One--</option>
										<option value="Low">Low</option>
										<option value="Low Medium">Low Medium</option>	
										<option value="Medium">Medium</option>
										<option value="High medium">High medium</option>
										<option value="Low high">Low high</option>
										<option value="Medium high">Medium high</option>
										<option value="High">High</option>
									</select>
									<br><span id="medicinal_sunlight_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-12 ">
									<label for="price">Price</label>
									<input type="text" name="medicinal_price" id="medicinal_price" class="form-control" placeholder="price" />
									<br><span id="medicinal_price_error_message" class="error_message_color"width></span>
								</div>
								<div class="col-sm-12">
									<label for="text">Description</label>	
									<textarea cols="5" rows="3" id="medicinal_description" name="medicinal_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
									<br><span id="medicinal_description_error_message" class="error_message_color"></span>
								</div>		
								<!-- image. show here-->
								<div class="col-sm-12">
									<div id="targetLayer_medicinal" class=" img-responsive " >
										<p class="thumbnail " style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
									</div><br><br>
									<div id="uploadFormLayer">
										<input type="file" name="medicinal_image_name" id="medicinal_image_name" class="btn btn-default" onChange="showPreview_medicinal(this);"/><br/>
									</div>
								</div>
						</div>		
					</div>		
				</div>				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="medicinal_form_validation" >Add Record</button>
				</div>
			</form>
			</div>
		</div>
	</div>
	<!--Medicin form image show js file-------*****-->
	<script type="text/javascript">
		function showPreview_medicinal(objFileInput) 
			{
			if (objFileInput.files[0]) 
					{
					var fileReader = new FileReader();
					fileReader.onload = function (e) 
						{
							$("#targetLayer_medicinal").html('<img src="'+e.target.result+'" width="450px" height="250px" class="upload-preview" />');
						}
						fileReader.readAsDataURL(objFileInput.files[0]);
					}
			}
	</script>
	<!--Medicin form validation js file-------*****-->
	<script src="medicinal/medicinal_form_validation.js"></script>
	<!--  Update medicinal User details form -->
	<div class="modal fade" id="update_medicinal_modal" tabindex="-1" role="dialog" aria-labelledby="medicinal_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="medicinal_modal">Update</h2>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
							<div class="col-md-6">
								<label for="first_name">Name</label>
								<input type="text" id="update_medicinal_name" placeholder="Full Name" class="form-control"/>
								<br><span  id="update_medicinal_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="botanical_name">Botanical Name</label>
								<input type="text" id="update_medicinal_botanical_name" placeholder="Botanical Name" class="form-control"/>
								<br><span id="update_medicinal_botanical_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="height">Height</label>
								<input type="text" id="update_medicinal_height" placeholder="Height" class="form-control"/>
								<br><span id="update_medicinal_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-md-6">
								<label for="width">Width</label>
								<input type="text" id="update_medicinal_width" placeholder="Width" class="form-control"/>
								<br><span id="update_medicinal_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="update_medicinal_color" name="color">
									<option value="">--Select One--</option>
									<option value="Green">Green</option>
									<option value="Blue">Blue</option>
									<option value="Gray">Gray</option>
									<option value="White green">White green</option>
								</select>
								<br><span id="update_medicinal_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Sunlight</label><br/>
								<select class="form-control"id="update_medicinal_sunlight" name="sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="update_medicinal_sunlight_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12 ">
								<label for="price">Price</label>
								<input type="text" name="price" id="update_medicinal_price" class="form-control" placeholder="price" />
								<br><span id="update_medicinal_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="update_description">Description</label>	
								<textarea cols="5" rows="3" id="update_medicinal_description"  name="update_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="update_medicinal_description_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-12">
								<div id="targetLayer" class=" img-responsive " >
									<p class="thumbnail " style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
									</div><br><br>
								<div id="uploadFormLayer">
									<input type="file" name="Update_medicinal_image_name id="Update_medicinal_image_name" class="btn btn-default" onChange="showPreview(this);"/><br/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary"  id="update_medicinal_form_validation">Save Changes</button>
					<input type="hidden" id="hidden_user_id_medicin">
				</div>
			</div>
		</div>
	</div>
	<!-- Custom JS file -->
	<script src="medicinal/medicinal_update_form_validation.js"></script>
	<script type="text/javascript" src="medicinal/medicinal_data_upload.js"></script>
	<!--pagination script-->
	<script type="text/javascript">
		/*$(document).ready(function(){
			$('.pagination').pagination({
				items: <?php echo $total_records;?>,
				itemsOnPage: <?php echo $limit;?>,
				cssStyle: 'light-theme',
				currentPage : <?php echo $page;?>,
				hrefTextPrefix : 'index.php?page='
			});
		});*/
	</script>
	
	
	
	
	
	
	
	