
<!--now_online.php-->
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">Now Online Customers</h3><br>
			<div class="record_content_now_online">
				<!-- ALl content will display here-->
			</div>
		</div>
	</div>
	<script>
		function read_now_online_rocords() 
		{ 
			$.get("get_online_record.php", {}, function (data) {
				$(".record_content_now_online").html(data);
			});
		}
	
		$(document).ready(function () {
			/*-- READ recods on page load and call in the function-----*/
			read_now_online_rocords(); 
		});
	
	</script>