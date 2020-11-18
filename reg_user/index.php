<?php 
	// connecting to the database 
	session_start();
	if(!isset($_SESSION['username']) ) die("You are not authorized user");
	require_once '../database_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="../admin/file/JQuery3.2.1.min.js" ></script>
	<script src="../admin/file/js/bootstrap.min.js"></script>
	<link href="../admin/file/css/bootstrap.css" rel="stylesheet">
	<link href="../admin/file/index_page_style_sheet.css" rel="stylesheet">

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
                        <a class="navbar-brand" href="#">Registered User Page</a>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </span>
                            </div>
                        </form>
					<!-- From This section have to add-->
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a id="flag" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   
                                </a>
                               <!-- <ul class="dropdown-menu dropdown-menu-flag" role="menu">
                                    <li>
                                        <a href="#">
                                            <img src="../images/azharul.jpg" alt="login_user" width="28px" height="18px">
											<span>Azharul</span> 
                                        </a>
                                    </li>
                                </ul>-->
                            </li>
                            <li class="dropdown">
								<?php
								
								require_once '../database_connection.php';
								$email = $_SESSION['username'];
								$query = $database->query("SELECT * FROM registration where email = '$email' ");
								$row = $query->fetch_assoc()
									
									
								?>
								<?php
									if( $row['image_name'] == "")
									{
									?>
									
									<a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../images/profile_picture.png" class="img-responsive img-thumbnail img-circle" alt="thumbnail"><span class="caret"></span><?php echo $row['fullname']; ?> </a>
								<?php 
										}
									else 
									{
									?>
									
									<a id="user-profile" href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $row['image_name']; ?>" class="img-responsive img-thumbnail img-circle" alt="image"><span class="caret"></span><?php echo $row['fullname']; ?> </a>
								<?php
									}
								?>
								<?php
									
									?>
								<ul class="dropdown-menu dropdown-block" role="menu">
                                    <li><a href="#" class="tablink" onclick="openEvent(event, 'edit_profile')">Edit Profile</a></li>
                                   
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
								
                            </li>
                        </ul>
						<!-- This code section have to add-->
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
                        <a href="#" class="tablink" onclick="openEvent(event, 'home_page')">
                            <span class="sidebar-icon"><i class="fa fa-home"></i></span>
                            <span class="sidebar-title">Home</span>
                        </a>
                    </li> 
                    <li>
                        <a href="#" class="tablink" onclick="openEvent(event, 'edit_profile')" >
                            <span class="sidebar-icon"><span class="glyphicon glyphicon-edit"></span></span>
                            <span class="sidebar-title">Edit Profile</span>
                        </a>
                    </li>
					 <li>
                        <a href="#" class="tablink" onclick="openEvent(event, 'purchase_records')">
                            <span class="sidebar-icon"><span class="glyphicon glyphicon-list-alt"></span></span>
                            <span class="sidebar-title">Purchase Records</span>
                        </a>
                    </li>
					 <li>
                        <a href="#" class="tablink" onclick="openEvent(event, 'exclusive_offer')">
                            <span class="sidebar-icon"><span class="glyphicon glyphicon-bullhorn"></span></span>
                            <span class="sidebar-title">Exclusive Offers</span>
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
				<div id="home_page" class="city">
					<h2 class="text-center">Welcome to Your Home Page</h2>
				</div>
				<!--**************** Online user content content*******************-->
				<div id="edit_profile" class=" city" style="display:none">
					<?php
						include('edit_profile/index_edit_profile.php');	
					?>
				</div>
				<!--****************Role Content Start*********************-->
				<div id="purchase_records" class=" city" style="display:none">
					<?php
						include('purchase_record/index_purchase_record.php');	
					?>
				</div>	
				<div id="exclusive_offer" class=" city" style="display:none">
					<h2>Execlusive Offer Page</h2>
					<p>All Execlusive Offer Information will show here </p>
					<p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
				</div>
			</div>
		</main>
			<!-- ********************Body End--*********-->
	</div> 
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
					  tablinks[i].className = tablinks[i].className.replace(" active", ""); 
				  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.className += " active";
			}
	</script>
</body>
</html