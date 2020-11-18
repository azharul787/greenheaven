
<div class="single-sec" id="medicinal_product_details">
	 <div class="container">
		
		 <!-- start content -->	
		 <div><button class="btn btn-default btn-xm glyphicon glyphicon-chevron-left" onclick="back_medicinal()"> Back</button></div>
		 <div class="col-md-12 det">
			 <?php
				
				$id   = trim($_REQUEST['f_id']);
					include('database_connection.php');
					//$database = new mysqli('localhost','root','','green_heaven');
					$query = $database->query("SELECT * FROM medicinal_plant where id = $id ");
					if($result = $query->num_rows == 1 )
					{
					while($row = $query->fetch_assoc())
					{
								
			?>
			
				
			<div class="single_left">
				<img src="admin/medicinal/<?php echo $row['image_name'] ;?>" height="300" width="300" />
			</div>
			<div class="single-right">
				<h3>Product Name: <b><?php echo $row['name']; ?></b></h3>
				<div class="id"><h4>MDP <?php echo $row['id'] ; ?></h4></div>
					<form action="" class="sky-form">
						<fieldset>					
							<section>
							     <div class="rating">
									<input type="text" name="stars-rating" id="stars-rating-5" value="5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4" value="4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3" value="3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2" value="2 ">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1" value="1" >
									<label for="stars-rating-1"><i class="icon-star"></i></label>
									<div class="clearfix"></div>
								 </div>
							</section>
						</fieldset>
					</form>
					<div class="cost">
						 <div class="prdt-cost">
							 <ul>
								 <li>MRP: <del>$ 650</del></li>								 
								 <li>Sellling Price:</li>
								 <li class="active item_price">$ <?php echo $row['price'] ; ?> </li>
								 <li>
									<input type="button" class="item_add items btn  my-cart-btn" value="ADD TO CART" data-id="<?php echo $row['id'] ; ?>" data-name="<?php echo $row['name'] ; ?>" data-summary="<?php echo $row['description'] ; ?>" data-price="<?php echo $row['price'] ; ?>" data-quantity="1" data-image="admin/medicinal/<?php echo $row['image_name'] ; ?>">
								</li>
							 </ul>
						 </div>
						 <div class="check">
							 <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Enter pin code for delivery & availability</p>
							 <form class="navbar-form navbar-left" role="search">
								  <div class="form-group">
									<input type="text" class="form-control" placeholder="Enter Pin code">
								  </div>
								  <button type="submit" class="btn btn-default">Verify</button>
							 </form>
						 </div>
						 <div class="clearfix"></div>
					</div>
					<div class="item-list">
						 <ul>
							 <li>Name: <?php echo $row['name'] ; ?>.</li>
							 <li>Botanical Name: <?php echo $row['botanical_name'] ; ?>.</li>
							 <li>Height: <?php echo $row['height'] ; ?>".</li>
							 <li>Width: <?php echo $row['width'] ; ?>".</li>
							 <li>Color: <?php echo $row['color'] ; ?>.</li>
							 <li>Sunlight: <?php echo $row['sunlight'] ; ?>.</li>
							
						 </ul>
					</div>
					<div class="single-bottom1">
						<h6>Details</h6>
						<p class="prod-desc"><?php echo $row['description'] ; ?></p>
					</div>	
			</div>
			<div class="clearfix"></div>
				  <?php
						}
					}
				else
					echo"<h3 style='color:red'>No Record Found</h3>";
				?>
								
					<div class="sofaset-info">
						 <h4>How To Maintain this Plant.</h4>
						 <ul>
							 <li><b>Light:</b> Light is a plant's most basic need. Plants process food through photosynthesis, which occurs in sunlight. Different plants have different light needs. Check with professionals to learn which type of light your particular plant needs.Direct sunlight: sunlight hits the plant directly, without any barrier- Indirect sunlight: light shines in a room but not directly on a plant- Diffused light: light is filtered through a screen or sheer curtain before reaching the plant.</li>
							 <li><b>Water:</b> You can kill your plant with kindness by overwatering it. This is the most common mistake beginning gardeners make. Different plants need different levels of moisture between watering.  Check the soil between waterings with a stick, or even your finger, pushing below the top layer of soil to determine how moist the soil is.- A watering can is an excellent choice for watering plants. Water well around the base.- Water plants thoroughly. Water should drain from the hole in the bottom of the pot.- Use lukewarm or warm water, since cold water can shock the roots.- After watering your plants, give them a humidity boost by spritzing them with water.</li>
							 <li><b>Soil:</b> Check the soil between waterings with a stick, or even your finger, pushing below the top layer of soil to determine how moist the soil is.</li>
							 <li><b>Food:</b> Plants have individual nutrition needs, and beginning gardeners should be careful not to overfeed their plants. Plant food comes in three forms- - Water-soluble: a liquid mixed with water and poured on the plant- Spikes: a solid food that is pushed directly into the soil and releases nutrients slowly- Granular: sprinkled around the base of a plant and watered in.</li>
							 <li><b>When to Repot:</b>When a plant becomes top-heavy or its roots grow out of the drainage hole, it's time to repot.- Always choose a container that has a drainage hole.- Placing a small piece of net over the drainage hole keeps dirt from leaking out of the pot during waterings.- Always use potting soil for your plants rather than dirt from the yard.- Dampen the potting soil before placing it around your plant.</li> 						 
						 </ul>
				  </div>
		 
			<div class="arrivals">	
				<h3>Related Products</h3>
				<?php 
				 include('database_connection.php');
				//$database = new mysqli('localhost','root','','green_heaven');
				$query = $database->query("SELECT * FROM medicinal_plant ORDER BY id LIMIT 4");
				if($result = $query->num_rows > 0){
				while($row = $query->fetch_assoc())
					{	
				?>
				<div class="col-md-3 feature-grid jewel">
					 <a href="#" class="tablink" onclick="openEvent(event, 'medicinal')" ><img src="admin/medicinal/<?php echo $row['image_name']; ?>" alt=""/>	
						 <div class="arrival-info">
							 <h4><?php echo $row['name'] ; ?></h4>
							 <p> $ <?php echo $row['price'] ; ?></p>
							 <span class="pric1"><del>$ 180</del></span>
							 <span class="disc">[12% Off]</span>
						 </div>
						 <div class="viw">
							<a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</a>
						 </div>
						 <div class="shrt">
							<a href="#"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>Shortlist</a>
						 </div></a>
				 </div>
				 <?php 
					}
				}
				else
					echo"No Record Found";
					?>
				 
			</div>			
	 </div>
		
		     <div class="clearfix"></div>
			 <div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="#" method="post" id="contact_form_validation" name="contact_form">
					    	
							<div>
						     	<span><label>Name</label></span>
						    	<span><input name="name" type="text" id="fullname" class="fullname textbox" placeholder="Full Name"></span>
								<br><span class="error_message_color" id="name_error_message" style="color:red;"></span>
						    </div>
						    <div>
						    	<label>MESSAGE</label>
						    	<textarea name="message" id="message" class="message" placeholder="Type Your Message here" ></textarea>
								<br><span class="error_message_color" id="message_error_message" style="color:red;"></span>
						    </div>
						   <div>
						   		<span><input type="button" name="button"  onclick="coment_message()" class="mybutton" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>
	  </div>
</div>
 <!-- After back, hide the details product-->
	<script>
			function back_medicinal()
				{
					$('#medicinal_product').show();
					$('#medicinal_product_details').hide();	
				}
	</script>