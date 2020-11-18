	<?php
	// include Database connection file
	 include"../database_connection.php";
	//$database = new mysqli('localhost','root','','green_heaven');
	// check request
	if(isset($_POST['id']) && isset($_POST['id']) != "")
		{
			// get User ID
			$user_id = $_POST['id'];
		
			// Get User Details
			$result = $database->query( "SELECT * FROM medicinal_plant WHERE id = '$user_id'");
			$response = array();
			   if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
						{
							$response = $row;
						}
				}
			else
			{
				$response['status'] = 200;
				$response['message'] = "Data not found!";
			}
			// display JSON data
			echo json_encode($response);
		}
	else
		{
			$response['status'] = 200;
			$response['message'] = "Invalid Request!";
		}