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
	


	 if (isset($_POST['update']))
	 { 

	 			$id    = $_POST ['id'];				
				$status = $_POST['status'];
				$reply = $_POST ['reply'];
				
			

			$sql= "UPDATE orderform SET status ='$status',
										reply ='$reply'
												                                      
			                            WHERE id = '$id'";


			if ($connect->query($sql) === TRUE)
			{
				
				echo ("<SCRIPT LANGUAGE='JavaScript'>
		     		   window.alert('Status Updated')
          	   		   window.location.href='ordermanagement.php';
                      </SCRIPT>");
			/*	header('location: ordermanagement.php'); */	

			}else
			{
				echo ( "<SCRIPT LANGUAGE='JavaScript'>
		       	 		window.alert('Could Not Update, Make Sure You Typed Proper ID')
          	  	 		window.location.href='ordermanagement.php';
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
          	   window.location.href='ordermanagement.php';
               </SCRIPT>");

	} else
		 {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
	        window.alert('Could not Cancel Your Order please Contact ADMIN!!')
       	    window.location.href='ordermanagement.php';
            </SCRIPT>");			   
		 }

}






$connect->close();

?>