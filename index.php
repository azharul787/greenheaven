<?php
include('database_connection.php');

	if(isset($_POST['comfirm_order']))
	{
		$data = $_POST['data'];
		$row = explode("\n",$data);	
		$totalPrice= substr($row[0],13);
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$contact_no = $_POST['contact_no'];
		$address = $_POST['address'];
		
		
		$query = "INSERT INTO orderlist (order_id,fullname, email ,contact_no, address,total_price) VALUES (null,'$fullname', '$email', '$contact_no','$address',$totalPrice)";
		$result = $database->query($query);
		if($result) 
		{
			
			 $result2= $database->query("select order_id from orderlist order by order_id desc limit 1");
			 $id = $result2->fetch_row();
			 $order_id = $id[0];
		}
			
			for ($i = 4; $i < count($row); $i++)
			{
				$col = explode("\t",$row[$i]);
				
				$product_id =  $col[0];  
				$product_name =  $col[1];        
				$quantity =  $col[4];  
				$unit_price =  $col[3]; 
				$query = "INSERT INTO order_details (id, product_id, product_name, quantity, unit_price) VALUES ($order_id,$product_id, '$product_name', $quantity, $unit_price)";
				$result=$database->query($query);
			}
			
			if ($result)
			{
				echo "<script>alert('Order Submit successfully')</script>";
			} 
			else 
			{
				echo "<script>alert('Order Submit Fail')</script>";
			}
	
	}
	?>


	<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Green Heaven</title>
		<script src="file/JQuery1.12.4.min.js"></script>
		<script src="file/js/bootstrap.min.js"></script>
		<link href="file/css/bootstrap.css" rel="stylesheet">
		<link href="file/css/custom.css" re="stylesheet">
		<link href="file/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="" rel="icon">
			
	   <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="greenheaven nursery in bangladesh" />
</head>
<body>
	<div class="navbar-fixed-top" >
	   <div class="top_bg">
			<div class="container">
				<div class="header_top-sec">
					<div class="top_right">
						<div class="logo">
							<a href="#"><h1 style="color:#FFF;">Green Heaven</h1></a>
						</div>
					</div>
					<div class="top_left">
						<ul>
							<li class="top_link"><a href="#/create_account" class="tablink" onclick="openEvent(event, 'create_account')" >Create Account</a></li>|
							<li class="top_link"><a href="#/login" class="tablink" onclick="openEvent(event, 'login')">Login</a></li>					
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default " style=";">
			<div class="container">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					 </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
						 <li>
							<a href="#" class="tablink" onclick="openEvent(event, 'home_pages')" >Home</a>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products  <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#/flower" class="tablink" onclick="openEvent(event, 'flower')" >Flower</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/fruit" class="tablink" onclick="openEvent(event, 'fruit')" >Fruit</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/vegetable" class="tablink" onclick="openEvent(event, 'vegetable')">Vegetable</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/gardening" class="tablink" onclick="openEvent(event, 'gardening')">Gardening</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/decoration" class="tablink" onclick="openEvent(event, 'decoration')">Decoration</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/medicinal" class="tablink" onclick="openEvent(event, 'medicinal')" >Medicinal</a></li>
						  </ul>
						</li>
					  <li class="dropdown">
						  <a href="#/equipment" class="tablink" onclick="openEvent(event, 'equipment')" >Equipment</a> 
					  </li>
					 
					  <li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reasearch <span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="#/flower_research" class="tablink" onclick="openEvent(event, 'flower_research')">Flower</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/fruit_research" class="tablink" onclick="openEvent(event, 'fruit_research')" >Fruit</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/vegetable_research" class="tablink" onclick="openEvent(event, 'vegetable_research')" >Vegetable</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/gardening_research" class="tablink" onclick="openEvent(event, 'gardening_research')" >Gardening</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/decoration_ressearch" class="tablink" onclick="openEvent(event, 'decoration_research')" >Decoration</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#/medicinal_research" class="tablink" onclick="openEvent(event, 'medicinal_research')" >Medicinal</a></li>
						  </ul>
					  </li>
					  <li class="dropdown">
						  <a href="#/about" class="tablink" onclick="openEvent(event, 'about')">About</a>
					  </li>
					  <li class="dropdown">
						  <a href="#/contact" class="tablink" onclick="openEvent(event, 'contact')" >Contact</a>
					  </li>
					   <li class="dropdown">
						  <a href="#/team_member" class="tablink" onclick="openEvent(event, 'team_member')">Team Member</a>
					  </li>
				  </ul>
				   <ul class="nav navbar-nav navbar-right">
						<li>
							<div class="" style="font-weight:800; font-size:14px; color:black ; pull-right">
								<a href="#">
									<h3>
									<div class="total">
										<span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
									</div>
									</h3>
									<p>Check Out</p>
								</a>
								<div class="clearfix"> </div>
							 </div>
						 </li>
					</ul>
				</div>  
			</div>
		</nav>
	</div>
	<div style="margin-bottom: 150px; position: relative;"></div>
	<main id="page-content-wrapper" role="main">
		<div>
			<!-- Content dislay area-->
			<div class="">
					<!-- All Content will display here-->
			</div>
			<div id="display_product">	
				<div id="home_pages" class="city">
					<?php 
						include('home_page.php');
					?>
				</div>
				<div id="create_account" class="city" style="display:none;">
					<?php 
						include('account.php');
					?>
				</div>
				<div id="login" class="city" style="display:none;">
					<?php 
						include('login.php');
					?>
				</div>
				<!-- *************Products content******Start ****here********-->
				<div id="flower" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('flower.php');	
						?>
					</div>
				</div>
				<div id="fruit" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('fruit.php');	
						?>
					</div>
				</div>
				<div id="vegetable" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('vegetable.php');	
						?>
					</div>
				</div>
				<div id="gardening" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('gardening.php');	
						?>
					</div>
				</div>
				<div id="decoration" class=" city" style="display:none;">
					<div style="width:100%">
						
						<?php 
							include('decoration.php');	
						?>
					</div>
				</div>
				<div id="medicinal" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('medicinal.php');	
						?>
					</div>
				</div>
				<!--Euipment content Strart here-->
				<div id="equipment" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('equipment.php');	
						?>
					</div>
				</div>
				<!--Research content-->
				<div id="flower_research" class=" city" style="display:none;">
					<div style="width:100%">	
						<?php 
							include('flower_research.php');	
						?>
					</div>
				</div>
				<div id="fruit_research" class=" city" style="display:none;">
					<div style="width:100%">	
						<?php 
							include('fruit_research.php');	
						?>
					</div>
				</div>
				<div id="vegetable_research" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('vegetable_research.php');	
						?>
					</div>
				</div>
				<div id="gardening_research" class=" city" style="display:none;">
					<div style="width:100%">	
						<?php 
							include('gardening_research.php');	
						?>
					</div>
				</div>
				<div id="decoration_research" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('decoration_research.php');	
						?>
					</div>
				</div>
				<div id="medicinal_research" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('medicinal_research.php');	
						?>
					</div>
				</div>
				<!--Research Content End-->
				<div id="about" class=" city" style="display:none;">
					<div style="width:100%">	
						<?php 
							include('about.php');
						?>
					</div>
				</div>
				<div id="contact" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('contact.php');
						?>
					</div>
				</div>
				<div id="team_member" class=" city" style="display:none;">
					<div style="width:100%">
						<?php 
							include('team_member.php');
						?>
					</div>
				</div>
				
			</div>
			<!-- order section-->
			<div id="order">
				<!-- Here will display All order and shiping content-->
			</div>
		</div>
	</main>
	
	<!--Routing-->
	<script>
		function openEvent(evt, cityName) 
			{
				/*-- check the product is hide or not--*/
			   if(cityName == 'flower')
				  {
					$('#flower_product').show();
					$('#flower_product_details').hide();
				  }
			  if(cityName == 'fruit')
				  {
					$('#fruit_product').show();
					$('#fruit_product_details').hide();
				  }
			 if(cityName == 'vegetable')
				  {
					$('#vegetable_product').show();
					$('#vegetable_product_details').hide();
				  }
			  if(cityName == 'gardening')
				  {
					$('#gardening_product').show();
					$('#gardening_product_details').hide();
				  }
			  if(cityName == 'decoration')
				  {
					$('#decoration_product').show();
					$('#decoration_product_details').hide();
				  }
			  if(cityName == 'medicinal')
				  {
					$('#medicinal_product').show();
					$('#medicinal_product_details').hide();
				  }
			  if(cityName == 'equipment')
				  {
					$('#equipment_product').show();
					$('#equipment_product_details').hide();
				  }
			

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
	<!-- Shoping Cart-->
	 <script type='text/javascript' src="file/jquery.mycart.js"></script>
	<script type="text/javascript">
					  $(function () {

						var goToCartIcon = function($addTocartBtn){
						  var $cartIcon = $(".my-cart-icon");
						  var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
						  $addTocartBtn.prepend($image);
						  var position = $cartIcon.position();
						  $image.animate({
							top: position.top,
							left: position.left
						  }, 500 , "linear", function() {
							$image.remove();
						  });
						}

						$('.my-cart-btn').myCart({
						  currencySymbol: '$',
						  classCartIcon: 'my-cart-icon',
						  classCartBadge: 'my-cart-badge',
						  classProductQuantity: 'my-product-quantity',
						  classProductRemove: 'my-product-remove',
						  classCheckoutCart: 'my-cart-checkout',
						  affixCartIcon: true,
						  showCheckoutModal: true,
						  numberOfDecimals: 2,
						  cartItems: [],
						  clickOnAddToCart: function($addTocart){
							goToCartIcon($addTocart);
						  },
						  afterAddOnCart: function(products, totalPrice, totalQuantity) {
							console.log("afterAddOnCart", products, totalPrice, totalQuantity);
						  },
						  clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
							console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
						  },
						  checkoutCart: function(products, totalPrice, totalQuantity) {
							var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
							checkoutString += "\n\n id \t name \t summary \t price \t quantity \t image path";
							//checkoutString += "\n\n id \t name \t price \t quantity \t totalPrice";
							$.each(products, function(){
							  //checkoutString += ("\n" + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
							  checkoutString += ("\n" + this.id + " \t " + this.name + " \t " + this.summary + " \t " + this.price + " \t " + this.quantity + " \t " + this.image + " \t " + this.totalPrice);
							});
							//alert(checkoutString)
							
							console.log("checking out", products, totalPrice, totalQuantity);
							
							//var total = checkoutString;
							$.post("checkout.php", {data:checkoutString})
								   .done(function( data ) {
									//alert( data );
									$('#order').html(data);
									$('#display_product').hide();
								  });
								
						
						  //alert("ok")
						  },
						 /* getDiscountPrice: function(products, totalPrice, totalQuantity) {
							console.log("calculating discount", products, totalPrice, totalQuantity);
							return totalPrice * 0.5;
						  }*/
						});
					  });
	</script>
	<!--coment section-->
	<script>
		function coment_message (){ 
			var fullname = $(".fullname").val(); alert(fullname);
			var message = $(".message").val();
			$.post("coment_message.php",{fullname:fullname, message:message},
				function (data) {
				alert(data);
				/*--- Empty the field --*/
				$(".fullname").val("");
				$(".message").val("");
				}
			)
		}	
	</script>
	<!--Feedback Section-->
	<div class="container">
	  <div class="modal fade" id="myModal_feedback" role="dialog">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title text-center">Your Feedback</h4>
			</div>
			<div class="modal-body">
				<form action="#" class="sky-form">
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Name" >
					</div>
					<!--<div class="form-group">
						<fieldset>		
							<label>Rating</label>
							<section>
							     <div class="rating">
									<input type="text" name="stars-rating" id="stars-rating-5" value="5">
									<label for="stars-rating-5"><i class="icon-star" ></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4" value="4">
									<label for="stars-rating-4"><i class="icon-star" ></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3" value="3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2" value="2 ">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1" value="1" >
									<label for="stars-rating-1"><i class="icon-star" ></i></label>
									<div class="clearfix"></div>
								 </div>
							</section>
						</fieldset>
					</div>-->
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" placeholder="Type Your Message"></textarea>
					</div>
					<div class="form-group"> 
						<button type="button" class="btn btn-info" onclick="feedback_message()">Submit</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
	</div>
	<script>
		/*--Feedback Section--*/
		function feedback_message(){ alert("ok")
			var rating = document.getElementById('stars-rating-5').value;
			var rating = document.getElementById('stars-rating-4').value;
			var rating = document.getElementById('stars-rating-3').value;
			var rating = document.getElementById('stars-rating-2').value;
			var rating = document.getElementById('stars-rating-1').value;
			alert(rating)
			$.post("send_feedback.php", {name:name,rating:rating,message:message},
				function (data) {
						alert(data)
					// close the modal
					//data-dismiss="modal"
				}
			);
			// alert(view_id)
			/*$.ajax({
				type:"post",
				url:"send_feedback.php",
				data:{name:name,rating:rating,message:message},
				success:function(result){
					$("#myModal").modal("show");
					$('#view_order_details').html(result);
				}
			});*/
		}
	</script>
	<!--Footer Start-->
	<div class="shoping" >
		 <div class="container" >
			 <div class="shpng-grids" >
				 <div class="col-md-4 shpng-grid">
					 <h3 style="color:#008040;">Free Shipping</h3>
					 <p style="color:#800040;">On Order Over $999</p>
				 </div>
				 <div class="col-md-4 shpng-grid">
					 <h3 style="color:#008040;">Order Return</h3>
					 <p style="color:#800040;">Return Within 14days</p>
				 </div>
				 <div class="col-md-4 shpng-grid">
					 <h3 style="color:#008040;">COD</h3>
					 <p style="color:#800040;">Cash On Delivery</p>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
	</div>
	<!--Footer-->
	<div class="footer">
		 <div class="container">
			 <div class="ftr-grids">
				 <div class="col-md-4 ftr-grid">
					 <h4>About Us</h4>
					 <ul>
						 <li><a href="#">Who We Are</a></li>
						 <li><a href="#">Contact Us</a></li>
						 <li><a href="#">Our Sites</a></li>
						 <li><a href="#">In The News</a></li>
						 <li><a href="#">Team</a></li>
						 <li><a href="#">Careers</a></li>					 
					 </ul>
				 </div>
				 <div class="col-md-4 ftr-grid">
					 <h4>Customer service</h4>
					 <ul>
						 <li><a href="#">FAQ</a></li>
						 <li><a href="#">Shipping</a></li>
						 <li><a href="#">Cancellation</a></li>
						 <li><a href="#">Returns</a></li>
						 <li><a href="#">Bulk Orders</a></li>
						 <li><a href="#">Buying Guides</a></li>					 
					 </ul>
				 </div>
				 <div class="col-md-4 ftr-grid">
					 <h4>Your account</h4>
					 <ul>
						 <li><a href="#">Your Account</a></li>
						 <li><a href="#">Personal Information</a></li>
						 <li><a href="#">Addresses</a></li>
						 <li><a href="#">Discount</a></li>
						 <li><a href="#">Track your order</a></li>					 					 
					 </ul>
				 </div>
				 
				 <div class="clearfix"></div>
			 </div>		
		 </div>
	</div>
	<!---->
	 <div class="copywrite">
		 <div class="container">
				 <p style="n">Copyright © 2017 Green Heaven. All Rights Reserved | Design by Afroza/Azharul/Tanzin/Mahmuda <a href="http://greenheaven32@gmail.com">greenheaven32@gmail.com</a></p>
		 </div>
	</div>

	</body>
</html>