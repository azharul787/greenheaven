	<link href="stock_details/stock_style.css" rel="stylesheet">
	<div class="row">
		<div class="col-md-12">
			 
			<nav class="navbar navbar-invers navbar_color">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav stock">
							<li>
								<button type="button" class="btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="read_product_stock_details(p_stock_type),read_stock_details(stock_type)" ></button>
							</li>
							<li class="dropdown select_stock" >
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Select Product<span class="caret"></span></a>
								<ul class="dropdown-menu stock_menu">
									<li><a href="#" onclick="read_product_stock_details('Flower')">Flower Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Fruit')">Fruit Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Vegetable')">Vegetable Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Decoration')">Decoration Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Gardening')" >Gardening Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Medicinal')">Medicinal Plant</a></li>
									<li><a href="#" onclick="read_product_stock_details('Equipment')">Equipment</a></li>
								 </ul>
							</li>
							<li><a href="#" class="stock_header">Stock Details</a></li>
						</ul>
						<form action="#" class="navbar-form navbar-right">
							 <div class="input-group ">
								<div class="stock_search">
									<input type="text" class="form-control" placeholder="Search" id="search_stock" >
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit" onclick="read_stock_details('src_itm')" ><i class="glyphicon glyphicon-search"></i></button>
									</div>
								</div>
							 </div>
						</form>		
					</div>
				</div>
			</nav>
			<div class="" style="margin-left:10px;">
				<div class="row" style="width:100%;">
					<div class="col-md-4">
						<div class="product_stock_content" >
					
						<!-- All Content Will display here -->
						</div>
					</div>				
					<div class="col-md-8">
						<div class="stock_content" >
					
						<!-- All Content Will display here -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Add product stock modal-->
    <div class="container">
	  <div class="modal fade" id="myModal_add" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title text-center">Product Stock Entry</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div id="add_stock_modal">
						<div class="col-sm-6">
							<label>Product Type</label>
							<select class="form-control product_type" id="product_type" >
								<option value="">--Select--</option>
								<option value="flower_plants">Flower</option>
								<option value="fruit_plants">Fruit</option>
								<option value="vegetable_plant">Vegetable</option>
								<option value="decoration_plants">Decoration</option>
								<option value="gardening_plants">Gardening</option>
								<option value="medicinal_plant">Medicinal</option>
								<option value="equipments">Equipment</option>
							</select>
						</div>
						<div class="col-sm-6">
							<label>Product Name</label>
							<select class="form-control product_name" id="product_name">
								<!--<option value="Mango">mango</option>
								<option value="ango">ango</option>-->
							</select>
						</div>
						<!--<div class="col-sm-4">
							<label>Product Id</label>
							<select class="form-control" id="product_id">
								
							</select>
						</div>-->
						<div class="col-sm-6">
							<label>Entry Date</label>
							<input type="date" class="form-control" id="entry_date" >
						</div>
						<div class="col-sm-6">
							<label>Product Quantity</label>
							<input type="text" class="form-control" id="stock_qut">
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <button type="button" class="btn btn-success" onclick="add_stock()">Add Stock</button>
			</div>
		</div>
		  
		</div>
	  </div>
	</div>
	<!-- Edit product stock modal-->
	<div class="container">
	  <div class="modal fade" id="myModal_edit" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title text-center">Product Stock Entry</h4>
			</div>
			<div class="modal-body">
				<div class="edit_product_stock">
				
				</div>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-success" onclick="update_stock()" >Submit</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	<!-- Custom JS file -->
	<script src="stock_details/stock_details_controller.js"></script>