

	<div class="row">
		<div class="col-md-12">
			<div class="records_content_equipment">
			</div>
		</div>
	</div>
	<!-- Add New Record-->
	<div class="modal fade" id="add_new_record_equipment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_equipment">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel_equipment">Add New Equipment</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<!--<form action="#" method="post" name="myForm" id="medicin_add_form" enctype="multipart/form-data">-->
						<div class="col-sm-6 ">
							<label for="name">Name</label>
							<input type="text" name="equipment_name" id="equipment_name" class="form-control name" placeholder="Name"/>
							<br><span  id="equipment_name_error_message" class="error_message_color"></span>
						</div>
						<div class="col-sm-6  ">
							<label for="type">Type</label>
							<select class="form-control" name="equipment_type" id="equipment_type">
									<option value="" >--Select One--</option>
									<option value="Spades and digging tools" >Spades and digging tools</option>
									<option value="Pruners and cutting tools" >Pruners and cutting tools</option>
									<option value="Brushes and rakes" >Brushes and rakes</option>
									<option value="plant protection and support" >plant protection and support</option>
									<option value="Wheel barrows" >Wheel barrows</option>
							</select>
							<br><span id="equipment_type_error_message" class="error_message_color"></span>
						</div>
						<div class="col-sm-6">
                            <label for="brand">Brand</label>
                        	<select class="form-control" name="equipment_brand" id="equipment_brand">
                            	<option value="" >--Select One--</option>
                            	<option value="Unbranded">Unbranded</option>
                                <option value="Spear & Jackson" >Spear & Jackson</option>
                                <option value="Amtech" >Amtech</option>
                                <option value="Fiskars" >Fiskars</option>
                                <option value="True" >True</option>
                                <option value="Agri-Feb" >Agri-Feb</option>
                                <option value="Hydrafarm" >Hydrafarm</option>
                            </select>
                            <br><span id="equipment_brand_error_message" class="error_message_color"></span>
						</div>		
						<div class="col-sm-6 ">
							<label for="shape">Shape</label>
							<select class="form-control" name="equipment_shape" id="equipment_shape">
								<option value="" >--Select One--</option>
								<option value="Round" >Round</option>
								<option value="Squire" >Squire</option>
								<option value="Long" >Long</option>
								<option value="width" >width</option>
							</select>
							<br><span id="equipment_shape_error_message" class="error_message_color"></span>
						</div>				
						<div class="col-sm-6 ">
							<label for="color">color</label>
							<select class="form-control" name="equipment_color" id="equipment_color">
								<option value="" >--Select One--</option>
								<option value="Silvar">Silvar</option>
								<option value="Black">Black</option>
								<option value="Red">Red</option>
							</select>    
							<br><span id="equipment_color_error_message" class="error_message_color"></span>
						</div>					
						<div class="col-sm-6  ">
						 <label for="origin">Origin</label>
							<select class="form-control" name="equipment_origin" id="equipment_origin">
								<option value="" >--Select One--</option>
								 <option value="Bangladesh" >Bangladesh</option>
								 <option value="China" >China</option>
								<option value="Japan" >Japan</option>
								<option value="Thailand" >Thailand</option>
								<option value="England" >England</option>
							</select>
							<br><span id="equipment_origin_error_message_" class="error_message_color"></span>
						</div>
						<div class="col-sm-6">
							<label for="name">Purpose</label>
							<input type="text" name="equipment_purpose" id="equipment_purpose" class="form-control" placeholder="Purpose"/>
							<br><span id="equipment_purpose_error_message" class="error_message_color"></span>									
						</div>							
						<div class="col-sm-6">
							<label for="price">Price</label>
							<input type="text" name="equipment_price" id="equipment_price" class="form-control" placeholder="price"/>
							<br><span id="equipment_price_error_message" class="error_message_color"></span>									
						</div>					
						<!-- image. show here-->
						<div class="col-sm-12">
							<div id="targetLayer_equipment" class=" img-responsive " >
								<p class="thumbnail" id="equipment_image_display" style="height:250px;width:450px;padding:20px;text-align:center;">No Image</p>
							</div><br><br>
							<div id="uploadFormLayer">
								<input type="file" name="image_name" id="equipment_image_name" class="btn btn-default" onChange="showPreview_equipment(this);"/><br/>
							</div>
						</div>						
					</div>				
				</div>						
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="equipment_form_validation" >Add Record</button>
				</div>
			</div>
		</div>
		<!-- form image show js file-------*****-->
		<script type="text/javascript">
				function showPreview_equipment(objFileInput) 
					{
						if (objFileInput.files[0]) 
								{
								var fileReader = new FileReader();
									fileReader.onload = function (e) 
									{
										$("#targetLayer_equipment").html('<img src="'+e.target.result+'" width="450px" height="250px" class="upload-preview" />');
									}
										fileReader.readAsDataURL(objFileInput.files[0]);
								}
					}
		</script>
	</div>
	<!-- - Update User details -->
	<div class="modal fade" id="update_user_modal_equipment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_equipment">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="myModalLabel_equipment">Update Eequipment</h2>
				</div>
				<div class="modal-body">
					<div class="container" style="width:100%">
						<div class="row">
							<div class="col-md-6">
								<label for="first_name">Name</label>
								<input type="text" id="update_equipment_name" placeholder="Name" class="form-control"/>
								<br><span id="update_equipment_name_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-md-6">
								<label for="type">Type</label>
								<select class="form-control" id="update_equipment_type">
									<option value="" >--Select One--</option>
									<option value="Spades and digging tools" >Spades and digging tools</option>
									<option value="Pruners and cutting tools" >Pruners and cutting tools</option>
									<option value="Brushes and rakes" >Brushes and rakes</option>
									<option value="plant protection and support" >plant protection and support</option>
									<option value="Wheel barrows" >Wheel barrows</option>
								</select>
								<br><span id="update_equipment_type_error_message" class="error_message_color"width></span>
							</div>	
							<div class="col-md-6">
								<label for="brand">Brand</label>
								<select class="form-control" id="update_equipment_brand">
									<option value="" >--Select One--</option>
									<option value="Unbranded" >Unbranded</option>
									<option value="Spear & Jackson" >Spear & Jackson</option>
									<option value="Amtech" >Amtech</option>
									<option value="Fiskars" >Fiskars</option>
									<option value="True" >True</option>
									<option value="Agri-Feb" >Agri-Feb</option>
									<option value="Hydrafarm" >Hydrafarm</option>
								</select>
								<br><span id="update_equipment_brand_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-md-6">
								<label for="shape">Shape</label>
								<select class="form-control" id="update_equipment_shape">
									<option value="" >--Select One--</option>
									<option value="Round" >Round</option>
									<option value="Squire" >Squire</option>
									<option value="Long" >Long</option>
									<option value="width" >width</option>
								</select>
								<br><span id="update_equipment_shape_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-6  ">
								<label for="color">color</label>
								<select class="form-control" id="update_equipment_color">
									<option value="" >--Select One--</option>
									<option value="Silvar" >Silvar</option>
									<option value="Black" >Black</option>
								</select> 
								<br><span id="update_equipment_color_error_message" class="error_message_color"width></span>
							</div>						
							<div class="col-sm-6  ">
								<label for="origin">Origin</label>
								<select class="form-control" id="update_equipment_origin">
									<option value="" >--select one--</option>
									<option value="Bangladesh" >Bangladesh</option>
									<option value="China" >China</option>
									<option value="Japan" >Japan</option>
									<option value="Thailand" >Thailand</option>
									<option value="England" >England</option>
								</select>
								<br><span id="update_equipment_origin_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12 ">
								<label for="name">Purpose</label>
								<input type="text" name="purpose" id="update_equipment_purpose" class="form-control" placeholder="Purpose"/>
								<br><span id="update_equipment_purpose_error_message" class="error_message_color"width></span>
							</div>
							<div class="col-sm-12">
								<label for="price">Price</label>
								<input type="text" name="price" id="update_equipment_price" class="form-control" placeholder="price"/>
								<br><span id="update_equipment_price_error_message" class="error_message_color"width></span>
							</div>
							
						</div>
					</div>	
				</div>				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="update_equipment_form_validation" >Save Changes</button>
					<input type="hidden" id="hidden_user_id_equipment">
				</div>
			</div>
		</div>
	</div>
	<!--Custom Js File-->
	<script type="text/javascript" src="equipment/data_upload_equipment.js"></script>
	<script type="text/javascript" src="equipment/equipment_form_validation.js"></script>
	<script type="text/javascript" src="equipment/equipment_update_form_validation.js"></script>
						
						
					