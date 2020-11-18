
<!--header// End-->
<div class="product-model" id="fruit_product" >	 
	 <div class="container">
			<h2>Fruit Products</h2>			
		 <div class="col-md-12 product-model-sec" >
			<?php 
				 include('database_connection.php');
				//$database = new mysqli('localhost','root','','green_heaven');
				$query = $database->query("SELECT * FROM fruit_plants ORDER BY id");
				if($result = $query->num_rows > 0){
				while($row = $query->fetch_assoc())
					{	
				?>
				<a href="#" onclick="fruit_details( <?php echo $row['id']; ?>)">
					<div class="product-grid love-grid">
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="admin/fruit/<?php echo $row['image_name']; ?>" class="img-responsive" alt=""/>
							<div class="b-wrapper">
								<h4 class="b-animate b-from-left  b-delay03">							
									<button class="btns"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>Quick View</button>
								</h4>
							</div>
						</div>
				</a>						
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $row['name'] ; ?></h4>
								<p>ID: MP <?php echo $row['id'] ; ?></p>
								<span class="item_price">$ <?php echo $row['price']; ?></span>								
								<br><br>
								<input type="button" class="item_add items btn  my-cart-btn" value="ADD TO CART" data-id="<?php echo $row['id'] ; ?>" data-name="<?php echo $row['name'] ; ?>" data-summary="<?php echo $row['description'] ; ?>" data-price="<?php echo $row['price'] ; ?>" data-quantity="1" data-image="admin/fruit/<?php echo $row['image_name'] ; ?>">
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>	
					<?php 
					}
				}
				else
					echo"No Record Found";
					?>
					
			</div>
	</div>
</div> 

	<script>
		function fruit_details(f_id){ 
			var f_id = f_id
			$.ajax({
				type:"post",
				url:"fruit_details.php",
				data:{f_id:f_id},
				success:function(result){
					$('#display_fruit_details').html(result);
					$('#fruit_product').hide();
			}
			});
		}
		
	</script>
	
	<div id="display_fruit_details">
		
			<!-- Here will Display details product-->	
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	