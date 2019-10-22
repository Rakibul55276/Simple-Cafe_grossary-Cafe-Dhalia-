<?php
session_start();

$name = "";
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

	// connect to database
	$connect = new mysqli('localhost', 'id4011974_mehedihasan', 'sony50200' ,'id4011974_cafe_dahlia');

// Check connection
if ( $connect->connect_error){
		die('connection failed');
	} else
	echo 'connection successfull';



	 if (isset($_POST['update']))
	 { 
				$username =	$_SESSION['username'];
				$set_A = $_POST ['set_A'];
				$set_B = $_POST ['set_B'];
				$set_C = $_POST ['set_C'];
				$set_D = $_POST ['set_D'];
				$set_E = $_POST ['set_E'];
				$set_F = $_POST ['set_F']; 
				$id    = $_POST ['id'];
				$status= $_POST ['status'];


			$price   = (int)$_POST["set_A"]*5.5 + (int)$_POST["set_B"]*5.5+(int)$_POST["set_C"]*5 + (int)$_POST["set_D"]*5 +(int)$_POST["set_E"]*10 + (int)$_POST["set_F"]*5;

			$sql= "UPDATE orderform SET set_A ='$set_A',
										set_B ='$set_B',
										set_C ='$set_C',
										set_D ='$set_D',
										set_E ='$set_E',
										set_F ='$set_F',
			 							price ='$price',
			 										                                      
			                            WHERE id = '$id'";


			if ($connect->query($sql) === TRUE)
			{

				echo ("<SCRIPT LANGUAGE='JavaScript'>
		      		  window.alert('Your Order has been UPDATED!!')
          	 		  window.location.href='menu.php';
             		  </SCRIPT>");

				
			} else
				{	
					echo ("<SCRIPT LANGUAGE='JavaScript'>
		      		window.alert('Your Cannot be UPDATED!! Please Contact ADMIN!!')
          	 		window.location.href='menu.php';
             		</SCRIPT>");		   
				}

	}


 if (isset($_POST['delete']))
 { 

 	$id    = $_POST ['id'];

 	$sql = "DELETE FROM orderform WHERE id='$id'";

 	if ($connect->query($sql) === TRUE)
 	{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		       window.alert('Your Order has been Cancelled!!')
          	   window.location.href='menu.php';
               </SCRIPT>");

	} else
		 {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Could not Cancel Your Order please Contact ADMIN!!')
       	    window.location.href='menu.php';
            </SCRIPT>");			   
		 }

}




$connect->close();

?>