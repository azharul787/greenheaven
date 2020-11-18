	
	/*--READ all product records--*/
	var p_stock_type = "Flowers";
	function read_product_stock_details(st) 
	{ 
		var p_stock_type = st;
		if(st == "Flowers")
			{
				/*--This is the default--*/
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Flower")
			{
				//var src_itm = document.getElementById('search_stock').value;
				//alert(src_itm);
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Fruit")
			{
				//var src_itm = document.getElementById('search_stock').value;
				//alert(src_itm);
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Vegetable")
			{
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Decoration")
			{
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Gardening")
			{
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Medicinal")
			{
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
		if(st == "Equipment")
			{
				$.get("stock_details/read_product_stock_details.php", {src_tp:st}, function (data) {
					$(".product_stock_content").html(data);
				});
			}
	}		
	/** --READ stock records---*/
	var stock_type = "all";
	function read_stock_details(st) 
	{ 
		var stock_type = st;
		if(st == "all")
			{
				$.get("stock_details/read_stock_details.php", {src_tp:st,src_item}, function (data) {
					$(".stock_content").html(data);
				});
			}
		if(st == "src_itm")
			{
				var src_item = document.getElementById('search_stock').value;
				//alert(src_item);
				$.get("stock_details/read_stock_details.php", {src_tp:st,src_item}, function (data) {
					$(".stock_content").html(data);
				});
			}
		
	}
	/*-End To collect the product type-*/
	function add_stock(){
		
		var p_type = $('#product_type').val();
		var p_name = $('#product_name').val();
		var entry_date = $('#entry_date').val();
		var quantity = $('#stock_qut').val();
		//alert(p_type)
		$.post("stock_details/add_stock.php", { p_type: p_type, p_name: p_name, entry_date:entry_date, quantity:quantity},
			function (data) {
				alert(data)
				// hide modal popup
				$("#myModal_add").modal("hide");
				// reload Users by using read_stock_details();
				read_stock_details(stock_type);
			}
		);
	}
	
	/*---- Edit stock data this function is used for edit stock----*/
	function edit_stock(id) 
		{
			var edit_id = id ;
			// alert(view_id)
			$.ajax({
				type:"post",
				url:"stock_details/get_edit_stock_data.php",
				data:{edit_id:edit_id},
				success:function(result){
					$("#myModal_edit").modal("show");
					$('.edit_product_stock').html(result);
				}
			});
		}
	/*--Update stock data--*/
	function update_stock()
		{	
			var id = $('#update_id').val();
			var product_type = $('#update_product_type').val();
			var product_name = $('#update_product_name').val();
			var quantity = $('#update_quantity').val();
			//alert(product_type);
			$.post("stock_details/update_stock_quantity.php", {id:id, product_type:product_type, product_name:product_name, quantity:quantity},
				function (data) {
						alert(data)
						$("#myModal_edit").modal("hide");
						// reload Users by using read_contact_message
						read_stock_details(stock_type);
				}
			);
		}
	// Delete Stock data Record 
	function delete_stock(id,p_t) 
	{
		//alert(p_t);
		var conf = confirm("Do you really want to delete Stock Quantity?");
		if (conf == true) {
			$.post("stock_details/delete_stock_details.php", {id: id},
				function (data) {
						alert(data)
						// reload Users by using read_contact_message
						read_stock_details(stock_type);
				}
			);
		}
	}

	$(document).ready(function () 
		{
		// READ recods on page load
		read_product_stock_details(p_stock_type); // calling function
		read_stock_details(stock_type); // calling function
	//});
	
	
	//$(document).ready(function()
		//{
		//	getList();
			
		$('select').change(getList);

	function getList()
			{
				var url, target;
				var id = $(this).attr('id');
				var p_type = $('#product_type').val();
				var p_name = $('#product_name').val();
				//alert(p_type);
				if(id != undefined) var selectedValue = $(this).val();
				//alert(selectedValue)
				if(id == 'product_type')
					{
						//alert(selectedValue);
						url = 'stock_details/get_product_list.php?find='+ selectedValue;
						//url = 'stock_details/get_product_list.php?find=product_type&product_id'+ selectedValue;
						target = 'product_name';
					}
				if(id == 'product_name')
					{	
						//alert(p_type);
						//alert(p_name);
						url = 'stock_details/get_product_list.php?find=p_type&p_name'+ selectedValue;
						target = 'product_id';
					}
				$.get(url,{ },function(data)
							{
								//alert(data);				
								$('#'+target).html(data);
							})
			}
		});