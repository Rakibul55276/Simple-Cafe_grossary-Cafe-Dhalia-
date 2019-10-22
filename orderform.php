<?php
session_start();

	$connect = new mysqli('localhost', 'root', 'sony50200' ,'cafe_dahlia');

	if ( $connect->connect_error){
		die('connection failed');
	} else
	echo 'connection successfull';



    $username =	$_SESSION['username'];
	$set_A = $_POST ['set_A'];
	$set_B = $_POST ['set_B'];
	$set_C = $_POST ['set_C'];
	$set_D = $_POST ['set_D'];
	$set_E = $_POST ['set_E'];
	$set_F = $_POST ['set_F'];
	$comment = $_POST ['comment'];
	
	$discount = '';






	$sql ="SELECT * FROM orderform WHERE username = '$username'";
			$results = $connect->query($sql);

			if ($results-> num_rows > 2)
			{	

				$price   = (int)$_POST["set_A"]*5.5 + (int)$_POST["set_B"]*5.5+(int)$_POST["set_C"]*5 + (int)$_POST["set_D"]*5 +(int)$_POST["set_E"]*10 + (int)$_POST["set_F"]*5 - 5;
				$sql = "INSERT INTO orderform (id, username, set_A, set_B, set_C, set_D, set_E, set_F, price, discount, comment) VALUES ('','$username', '$set_A' , '$set_B', '$set_C', '$set_D', '$set_E', '$set_F' , '$price', '5', '$comment')";

					if ($connect->query($sql) === TRUE)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
		     		  		  window.alert('Order has been POSTED')
          	   		   		  window.location.href='menu.php';
                      		  </SCRIPT>");							
					}else{
							echo ("<SCRIPT LANGUAGE='JavaScript'>
		     		  		  window.alert('Could not Post the Order !! Please try Again and contact the ADMIN')
          	   		   		  window.location.href='menu.php';
                      		  </SCRIPT>");

						 }

			}else{
				$price   = (int)$_POST["set_A"]*5.5 + (int)$_POST["set_B"]*5.5+(int)$_POST["set_C"]*5 + (int)$_POST["set_D"]*5 +(int)$_POST["set_E"]*10 + (int)$_POST["set_F"]*5;

				$sql = "INSERT INTO orderform (id, username, set_A, set_B, set_C, set_D, set_E, set_F, price, discount, comment) VALUES ('','$username', '$set_A' , '$set_B', '$set_C', '$set_D', '$set_E', '$set_F' , '$price', '0', '$comment')";
				
					if ($connect->query($sql) === TRUE)
					{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
		     		  		  window.alert('Order has been Posted')
          	   		   		  window.location.href='menu.php';
                      		  </SCRIPT>");
													
					}else{
							echo ("<SCRIPT LANGUAGE='JavaScript'>
		     		  		  window.alert('Could not Post the Order !! Please try Again and contact the ADMIN')
          	   		   		  window.location.href='menu.php';
                      		  </SCRIPT>");

						 }

				}		
					

					$connect->close();

					?>