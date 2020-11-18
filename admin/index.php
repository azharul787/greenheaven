<?php 
	// connecting to the database 
	session_start();

	if(!isset($_SESSION['username']) ) 
		die("You are not authorized user");
	require_once 'database_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="file/JQuery3.2.1.min.js" ></script>
	<script src="file/js/bootstrap.min.js"></script>
	<link href="file/css/bootstrap.css" rel="stylesheet">
	<link href="file/css/bootstrap-theme.css" rel="stylesheet">
	<link href="file/font-awesome4.7/css/font-awesome.min.css" rel="stylesheet">
	<link href="file/index_page_style_sheet.css" rel="stylesheet">
	<link href="file/simplePagination.css" rel="stylesheet" />
    <!--<link href="file/datatables/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="file/datatables/css/jquery.dataTables.min.css" rel="stylesheet">-->
	<script src="file/jquery.simplePagination.js"></script>
</head>
<body>
	<!-- *********************header start--*********-->
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Green Heaven Admin Page</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <!--<form class="navbar-form navbar-left" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>-->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   
                                </a>
                                <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="images/azharul.jpg" alt="login_user" width="28px" height="18px">
											<span>Azharul</span> 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
								<?php
								
								require_once 'database_connection.php';
								
								$query = $database->query("SELECT * FROM registration where id = '1' ");
								while($row = $query->fetch_assoc())
									{
								?>
									<a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $row['image_name']; ?>" class="img-responsive img-thumbnail img-circle" alt="image"><span class="caret"></span><?php echo $row['fullname']; ?> </a>
                                <?php
									}
									?>
								<ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Admin</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
	<!-- *********************header End-*************sidebar start-*********-->
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="#" class="tablink" onclick="openEvent(event, 'home_pages')">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-user"></i></span>
                            <span class="sidebar-title">Customers</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'reg_user')"><i class="fa fa-caret-right"></i>Register Users</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'online_user')"><i class="fa fa-caret-right"></i>Now Online Users</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'contact_message')"><i class="fa fa-caret-right"></i>Contact Message</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-3">
                            <span class="sidebar-icon"><i class="fa fa-eye"></i></span>
                            <span class="sidebar-title">Views</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-3" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'feedbacks')" ><i class="fa fa-caret-right"></i>Feedback</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'coments')"><i class="fa fa-caret-right"></i>Comments</a></li>
                        </ul>
                    </li>
					<li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-4">
                            <span class="sidebar-icon"><i class="fa fa-upload"></i></span>
                            <span class="sidebar-title">Products</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-4" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'flower')" ><i class="fa fa-caret-right"></i>Flowers</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'fruit')" ><i class="fa fa-caret-right"></i>Fruits</a></li>
							<li><a href="#" class="tablink" onclick="openEvent(event, 'vegetable')"><i class="fa fa-caret-right"></i>Vegetables</a></li>
							<li><a href="#" class="tablink" onclick="openEvent(event, 'decoration')"><i class="fa fa-caret-right"></i>Decoration</a></li>
							<li><a href="#" class="tablink" onclick="openEvent(event, 'gardening')"><i class="fa fa-caret-right"></i>Gardening</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'medicinal')" ><i class="fa fa-caret-right"></i>Madicinal</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'equipment')" ><i class="fa fa-caret-right"></i>Equipments</a></li>
                        </ul>
                    </li>
					<li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-5">
                            <span class="sidebar-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Sales</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-5" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'order_list')" ><i class="fa fa-caret-right"></i>Order List</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'order_details')" ><i class="fa fa-caret-right"></i>Order Details</a></li>
						</ul>
                    </li>
                     <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-6">
                            <span class="sidebar-icon"><i class="fa fa-database"></i></span>
                            <span class="sidebar-title">Stock</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-6" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'stock')"><i class="fa fa-caret-right"></i>Stock Details</a></li>
                            <li><a href="#" class="tablink" onclick="openEvent(event, 'sold_stock')"><i class="fa fa-caret-right"></i>Sold Stock</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="tablink" onclick="openEvent(event, 'best_buyer')">
                            <span class="sidebar-icon"><i class="fa fa-shopping-cart"></i></span>
                            <span class="sidebar-title">Best Buyer</span>
                        </a>
                    </li>
					
                </ul>
            </aside>            
        </div>
		<!-- *********************Side bar  End--* and body start********-->
		<main id="page-content-wrapper" role="main">
			<div style="margin-left:10px">
				<!-- Content dislay area-->
				<div class="">
					<!-- All Content will display here-->
				</div>
				<!--Home page Content-->
				<div id="home_pages" class="city">
					<?php 
						include('home_page.php');
					?>
				</div>
				<!-- *************Customer content******Start ****here********-->
				<div id="reg_user" class="reg_user city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('regUser/index_reg.php');
						?>
					</div>
				</div>
			
				<!--**************** Online user content content*******************-->
				<div id="online_user" class="role city" style="display:none;">
				    <div style="width:100%">
    					<?php 
							include('now_online.php');
						?>
					</div>
				</div>
				<!--****************Role Content Start*********************-->
				
				<div id="contact_message" class="contact_message city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('contact/index_contact_message.php');
						?>
					</div>
				</div>
				<!-- *************Customer content******End ****here********-->
				<!-- *************View content******Start ****here********-->
				
				<div id="feedbacks" class="feedback city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('feedback/index_feedback.php');
						?>
					</div>
				</div>  
				<div id="coments" class="coment city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('coment/index_coment.php');
						?>
					</div>
				</div>
				<!-- *************View content******End ****here********-->
				<!-- ************* Upload content****Start ***Here**********-->
				<!--*****************Flower plannt upload****************-->
				<div id="flower" class="flower city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('flower/index_flower.php');
						?>
					</div>
				</div>
				<!--*****************fruit plannt upload****************-->
				<div id="fruit" class="fruit city" style="display:none;">
					 <div style="width:100%">
						<?php 
							include('fruit/index_fruit.php');
						?>
					</div>
				</div>
				<!--*****************Vegitable plannt upload****************-->
				<div id="vegetable" class="vagetable city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('vegetable/index_vegetable.php');
						?>
					</div>
				</div>
				<!--*****************Decoration plannt upload****************-->
				<div id="decoration" class="decoration city" style="display:none;">
					 <div style="width:100%">
						<?php 
							include('decoration/index_decoration.php');
						?>
					</div>
				</div>
				<!--*****************Gardening plannt upload****************-->
				<div id="gardening" class="gardening city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('gardening/index_gardening.php');
						?>
					</div>
				</div>
				<!--*****************medicin plant upload****************-->
				<div id="medicinal" class="medicinal city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('medicinal/index_medicinal.php');
						?>
					</div>
				</div>
				<div id="equipment" class="equipment city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('equipment/index_equipment.php');
						?>
					</div>
				</div>
					<!--upload content end here******************-->
				<div id="order_list" class="order_list city" style="display:none">
						<?php
							include('order_list/index_order_list.php');
						?>
				</div>
				<div id="order_details" class="order_details city" style="display:none">
					<?php
							//include('order_details/index_order_details.php');
					?>
					
				</div>
				<!--Stock  content start here******************-->
				<div id="stock" class=" city" style="display:none">
					<?php
						//include('stock_details.php');
						include('stock_details/index_stock_details.php');
					?>
				</div>
				<div id="sold_stock" class="order_details city" style="display:none">
					<?php
						//include('stock_details.php');
						include('sold_stock/index_sold_stock.php');
					?>
				</div>
				<div id="best_buyer" class="order_details city" style="display:none">
					<h2>Best Buyer</h2>
					<p>This is the Best Buyer Content</p>
					<p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
				</div>
				
			</div>
		</main>
			<!-- ********************Body End--*********-->
	</div> 
    <!--<script src="file/datatables/js/dataTables.bootstrap.js"></script>
    <script src="file/datatables/js/jquery.dataTables.min.js"></script>-->
	<script>
		function openEvent(evt, cityName) 
			{
			  var i, x, tablinks;
			  x = document.getElementsByClassName("city");
			  for (i = 0; i < x.length; i++) 
				  {
					 x[i].style.display = "none";
				  }
			  tablinks = document.getElementsByClassName("tablink");
			  for (i = 0; i < x.length; i++) 
				  {
					  tablinks[i].className = tablinks[i].className.replace(" activeNow", ""); 
				  }
			  document.getElementById(cityName).style.display = " block ";
			  evt.currentTarget.className += " activeNow";
			}
	</script>
</body>
</html