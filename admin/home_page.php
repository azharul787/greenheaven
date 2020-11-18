    <style>
        .txt_decoration{
            text-decoration:none;
            }
    </style>

    <div class="" style="height:60px">
		<h2 style="color:green;font-weight:bold;text-align:center;">Welcome to Green Heaven Admin Page</h2>

	</div>
	<div class="col-md-12">
		<div class="col-md-4">
          <!--  <a href="#" class="tablink txt_decoration" onclick="openEvent(event, 'order_list')">-->
    			<div class="well">
    			<?php 
    				include('database_connection.php');  
    				$query = $database->query("SELECT COUNT(current_status) FROM orderlist WHERE current_status = 'Not Approved'");  
    					while($row = $query->fetch_row()){	
    				?>
    				<h1>New Order<span class="badge pull-right"><?php echo $row[0] ; ?> </span></h1>
    			<?php
    				}
    					
    				?>
    			</div>
           <!-- </a>-->
		</div>
		<div class="col-md-4">
			<div class="well">
				<?php 
				$query = $database->query("SELECT COUNT(status) FROM registration WHERE status = 'online'");  
					while($row = $query->fetch_row()){	
				?>
				<h1>Now Online<span class="badge pull-right"><?php echo $row[0] ; ?> </span></h1>
			<?php
				}
					
				?>
			</div>
		</div>
		<div class="col-md-4">
           <!-- <a href="#" class="tablink txt_decoration" onclick="openEvent(event, 'coments')" >-->
    			<div class="well">
    			<?php
    				$query = $database->query("SELECT COUNT(status) FROM coment WHERE status = 'Not Approved'");
    				while($row = $query->fetch_row()){	
    			?>
    				<h1>Comment <span class="badge pull-right"><?php echo $row[0] ; ?></span></h1>
    				<?php
    					}
    				?>
    			</div>
           <!-- </a>-->
		</div>
	</div>