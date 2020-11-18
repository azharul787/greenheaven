
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
								<button type="button" class="btn btn-xm btn-default glyphicon glyphicon-refresh" onclick="sold_stock()" ></button>
							</li>
						<!--	<li class="dropdown select_stock" >
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
							</li>-->
							<li><a href="#" class="sold_stock_header">Sold Stock Details</a></li>
						</ul>
						<form action="#" class="navbar-form navbar-right">
							 <div class="input-group ">
								<div class="stock_search">
									<input type="text" class="form-control" placeholder="Search" id="sold_stock" >
									<div class="input-group-btn">
										<button class="btn btn-default" type="submit" onclick="sold_stock_details('src_itm')" ><i class="glyphicon glyphicon-search"></i></button>
									</div>
								</div>
							 </div>
						</form>		
					</div>
				</div>
			</nav>
			<div class="sold_record_content">
				<!-- All Content Will display here -->
			</div>
		</div>
	</div>
	<!-- Custom JS file -->
	<script src="sold_stock/sold_stock_controller.js"></script>	
    