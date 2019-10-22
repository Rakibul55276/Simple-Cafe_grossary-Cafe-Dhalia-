<?php
session_start();

	$connect = new mysqli('localhost', 'id4011974_mehedihasan', 'sony50200' ,'id4011974_cafe_dahlia');

	if ( $connect->connect_error){
		die('connection failed');
	} else
	echo 'connection successfull';



if (isset($_POST['adminregistration']))
	{


    $name = $_POST ['name'];
	$user_type = 'admin';
	$username = $_POST ['username'];
	$email = $_POST ['email'];
	$password_1 = $_POST ['password_1'];
	$password_2 = $_POST ['password_2'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];


	 
	
				$sql = "INSERT INTO users (user_type, name, username, email,phone,address, password) 
						VALUES( '$user_type', '$name', '$username', '$email', '$phone', '$address', '$password_1')";

				if ($connect->query($sql) === TRUE) {

					echo ("<SCRIPT LANGUAGE='JavaScript'>
		      				window.alert('New Admin Registered')
          	 			  	window.location.href='usermanagement.php';
             			    </SCRIPT>");

					
				} else {

					echo ("<SCRIPT LANGUAGE='JavaScript'>
		      				window.alert('New Admin Registration Failed !! Try again or check Server Status')
          	 			  	window.location.href='usermanagement.php';
             			    </SCRIPT>");
				   
				}


	}


	if (isset($_POST['deleteadmin']))
	{
			$id    = $_POST ['id'];
		 	$sql = "DELETE FROM users WHERE id='$id'";

		 	if ($connect->query($sql) === TRUE)
		 	{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
				       window.alert('User has been DELETED !!')
		          	   window.location.href='usermanagement.php';
		               </SCRIPT>");

			} else
				 {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
			        window.alert('USER could not be DELETED Please Check Server Configuration!!')
		       	    window.location.href='usermanagement.php';
		            </SCRIPT>");			   
				 }


	}





				$connect->close();

				?>