<style>
	.error_message_color{color:red;}

</style>
	<div class="row">
		<div class="col-md-12">
			<!--<h3 class="text-center">Flower Plants</h3><br>-->
			<div class="records_content_flower">
			<!-- All Content Will display here -->
			</div>
		</div>
	</div>
	<!--**Add New Record *-->
	<div class="modal fade" id="add_new_record_flower_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_flower">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel_flower">Add New Flower Plant</h4>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
						<!--<form action="#" method="post" name="myForm" id="medicin_add_form" enctype="multipart/form-data">-->
							<div class="col-sm-6 ">
								<label for="name">Name</label>
								<input type="text" name="flower_name" id="flower_name" class="form-control name" placeholder="Name"/>
								<br><span  id="flower_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="fname"> Botanical Name</label>
								<input type="text" name="flower_botanical_name" id="flower_botanical_name" class="form-control" placeholder=" Botanical Name" />
								<br><span id="flower_botanical_name_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="height">Height</label>
								<input type="text" name="flower_height" id="flower_height" class="form-control" placeholder="Height"/>
								<br><span id="flower_height_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6 ">
								<label for="width">Width</label>
								<input type="text" name="flower_width" id="flower_width" class="form-control" placeholder="Width" />
								<br><span id="flower_width_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">Color</label>
								<select class="form-control"id="flower_color" name="flower_color">
									<option value="">--Select One--</option>
									<option value="White">White</option>
									<option value="Red">Red</option>
									<option value="Orange">Orange</option>
									<option value="Yellow">Yellow</option>
									<option value="Pink">Pink</option>
								</select>
								<br><span id="flower_color_error_message" class="error_message_color"></span>
							</div>
							<div class="col-sm-6  ">
								<label for="sunlight">Sunlight</label><br/>
								<select class="form-control"id="flower_sunlight" name="flower_sunlight">
									<option value="">--Select One--</option>
									<option value="Low">Low</option>
									<option value="Low Medium">Low Medium</option>	
									<option value="Medium">Medium</option>
									<option value="High medium">High medium</option>
									<option value="Low high">Low high</option>
									<option value="Medium high">Medium high</option>
									<option value="High">High</option>
								</select>
								<br><span id="flower_sunlight_error_message" class="error_message_color"></span>
							</div> 
                            <div class="col-sm-12 form-group">
								<label for="fragrant" class="control-label">Fragrant</label>
								<label class="checkbox-inline"><input type="radio" name="flower_fragrant" id="flower_fragrant" class="form-control" value="Yes" />Yes</label>
                                 <label class="checkbox-inline"> <input type="radio" name="flower_fragrant" id="flower_fragrant" class="form-control" value="No" />No</label>
								<br><span id="fragrant_error_message" class="flower_error_form"></span>
							</div>
							<div class="col-sm-6">
								<label for="price">Price</label>
								<input type="text" name="flower_price" id="flower_price" class="form-control" placeholder="price" />
								<br><span id="flower_price_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-6">
								<label>Stock Quantity</label>
								<select class="form-control" id="flower_stock" name="" >
									<option vlaue="05">05</option>
									<option vlaue="06">06</option>
									<option vlaue="07">07</option>
									<option vlaue="08">08</option>
									<option vlaue="09">09</option>
									<option vlaue="10">10</option>
									<option vlaue="11">11</option>
									<option vlaue="12">12</option>
									<option vlaue="13">13</option>
									<option vlaue="14">14</option>
									<option vlaue="15">15</option>
									<option vlaue="16">16</option>
									<option vlaue="17">17</option>
									<option vlaue="18">18</option>
									<option vlaue="19">19</option>
									<option vlaue="20">20</option>
									<option vlaue="00">00</option>
								</select>
							</div>
							<div class="col-sm-12">
								<label for="text">Description</label>	
								<textarea cols="5" rows="3" id="flower_description" name="flower_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
								<br><span id="flower_description_error_message" class="error_message_color"></span>
							</div>
							<!-- image. show here-->
							<div class="col-sm-12">
								<div id="targetLayer_flower" class=" img-responsive " >
								<p class="thumbnail" id="flower_image_display" style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
								</div><br><br>
								<div id="uploadFormLayer">
									<input type="file" name="flower_image_name" id="flower_image_name" class="btn btn-default" onChange="showPreview_flower(this);"/><br/>
								</div>
							</div>				
						</div>		
					</div>		
				</div>							
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="flower_form_validation">Add Record</button>
				</div>
			</div>
		</div>					
		<!--* form image show js file-------*****-->
		<script type="text/javascript">
			function showPreview_flower(objFileInput) 
					{
						if (objFileInput.files[0]) 
							{
								var fileReader = new FileReader();
								fileReader.onload = function (e) 
									{
										$("#targetLayer_flower").html('<img src="'+e.target.result+'" width="450px" height="250px" class="upload-preview" />');
									}
									fileReader.readAsDataURL(objFileInput.files[0]);
							}
					}
		</script>
	</div>
	<!--*Update User details -->
	<div class="modal fade" id="update_user_flower_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_flower">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel_flower">Update</h2>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%;">
						<div class="row">
								<div class="col-md-6">
									<label for="first_name">Name</label>
									<input type="text" id="update_flower_name" name="update_flower_name" placeholder="Full Name" class="form-control"/>
									<br><span  id="update_flower_name_error_message" class="error_message_color"></span>
								</div>
								<div class="col-md-6">
									<label for="botanical_name">Botanical Name</label>
									<input type="text" id="update_flower_botanical_name" placeholder="Botanical Name="update_flower_botaical_name" class="form-control"/>
									<br><span id="update_flower_botanical_name_error_message" class="error_message_color"></span>
								</div>
								<div class="col-md-6">
									<label for="height">Height</label>
									<input type="text" id="update_flower_height" name="update_flower_height" placeholder="Contact Number" class="form-control"/>
									<br><span id="update_flower_height_error_message" class="error_message_color"></span>
								</div>
								<div class="col-md-6">
									<label for="width">Width</label>
									<input type="text" id="update_flower_width" name="update_flower_width" placeholder="Width" class="form-control"/>
									<br><span id="update_flower_width_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6  ">
									<label for="color">Color</label>
									<select class="form-control"id="update_flower_color" name="update_flower_color">
										<option value="">--Select One--</option>
										<option value="White">White</option>
										<option value="Red">Red</option>
										<option value="Orange">Orange</option>
										<option value="Yellow">Yellow</option>
										<option value="Pink">Pink</option>
									</select>
									<br><span id="update_flower_color_error_message" class="error_message_color"></span>
								</div>
								<div class="col-sm-6  ">
									<label for="color">Sunlight</label><br/>
									<select class="form-control"id="update_flower_sunlight" name="update_flower_sunlight">
										<option value="">--Select One--</option>
										<option value="Low">Low</option>
										<option value="Low Medium">Low Medium</option>	
										<option value="Medium">Medium</option>
										<option value="High medium">High medium</option>
										<option value="Low high">Low high</option>
										<option value="Medium high">Medium high</option>
										<option value="High">High</option>
									</select>
									<br><span id="update_flower_sunlight_error_message" class="error_message_color"></span>
								</div>                     
								<div class="col-sm-12">
									<label for="fragrant">Fragrant</label>
									<label class="checkbox-inline"><input type="radio" name="update_flower_fragrant" id="update_flower_fragrant" class="form-control" value="Yes" />Yes</label>
									<label class="checkbox-inline"> <input type="radio" name="update_flower_fragrant" id="update_flower_fragrant" class="form-control" value="No" />No</label>
									<br><span id="fragrant_error_message" class="flower_error_form"></span>
								</div>
								<div class="col-sm-6">
									<label for="price">Price</label>
									<input type="text" name="update_flower_price" id="update_flower_price" class="form-control" placeholder="price" />						
									<br><span id="update_flower_price_error_message" class="error_message_color"width></span>
								</div>
								<div class="col-sm-6">
									<label>Stock Quantity</label>
									<input type="text" class="form-control" id="update_flower_stock" name="upadate_flower_stock" />	
								</div>
								<div class="col-sm-12">
									<label for="update_flower_description">Description</label>	
									<textarea cols="5" rows="3" id="update_flower_description"  name="update_flower_description" class="form-control" placeholder="Do not type more than 200 words."></textarea>
									<br><span id="update_flower_description_error_message" class="error_message_color"></span>
								</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="update_flower_form_validation" >Save Changes</button>
					<input type="hidden" id="hidden_flower_user_id">
				</div>	
			</div>
		</div>
	</div>
	<!-- Custom JS file -->
	<script type="text/javascript" src="flower/flower_data_upload.js"></script>				
	<script type="text/javascript" src="flower/flower_form_validation.js"></script>				
	<script type="text/javascript" src="flower/flower_update_form_validation.js"></script>				
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
					