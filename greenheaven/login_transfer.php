<?php
if (isset($_POST['login_submit']))
			{
				include('database_connection.php');
				
				$email = trim($_POST['email']);
				$password = trim($_POST['password']);
				$password= md5($password);
				
				$query = $database->query("SELECT * FROM `registration` WHERE email ='$email' and password='$password'");
				if($result = $query->num_rows == 1)
					{
						if($email == 'greenheaven32@gmail.com')
						{
							session_start();
							$_SESSION['username']=$email;
							$database->query("update registration set status='online' where email='$email'");
							//header("location:http://greenheaven.rf.gd/admin/index.php");
							header("location:http://localhost/greenheaven/06-12-17/admin/index.php");
						}
						else
						{
							session_start();
							$_SESSION['username']=$email;
							$database->query("update registration set status='online' where email='$email'");
							//header("location:http://greenheaven.rf.gd/reg_user/index.php");
							header("location:http://localhost/greenheaven/06-12-17/reg_user/index.php");
						}
					}
					else
					{
					echo "<div style='color:red;'><p>Email or password is incorrect. Please Try again</p></div>";	
					}
			
			
			}
			
			?>