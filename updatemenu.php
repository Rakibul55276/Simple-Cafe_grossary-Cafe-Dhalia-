<?php
session_start();

	$connect = new mysqli('localhost', 'id4011974_mehedihasan', 'sony50200' ,'id4011974_cafe_dahlia');

	if ( $connect->connect_error){
		die('connection failed');
	} else
	echo 'connection successfull';



    $menuname = $_POST ['menuname'];
	$price = $_POST['price'];
	$id = '';
	

	if (isset($_POST['addmenu']))
	{ 
				$sql = "INSERT INTO menu (id, menuname, price) 
						VALUES( '', '$menuname', '$price')";

				if ($connect->query($sql) === TRUE)
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
		  			window.alert('New Menu as been ADDED !!')
          			window.location.href='menumanagement.php';
            		</SCRIPT>");
					
				} else
				 {
				   echo ("<SCRIPT LANGUAGE='JavaScript'>
		   		   window.alert('MENU has been DELETED !!')
	               window.location.href='menumanagement.php';
            	   </SCRIPT>");	
				 }

	}


	if (isset($_POST['deletemenu']))
	{ 

	 	$id    = $_POST ['id'];

	 	$sql = "DELETE FROM menu WHERE id='$id'";

	 	if ($connect->query($sql) === TRUE)
	 	{
	 	 	echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('MENU has been DELETED !!')
          	window.location.href='menumanagement.php';
            </SCRIPT>");
		} else 
		   {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
			    window.alert('MENU Could not be DELETED !! Please Contact ADMIN')
	          	window.location.href='menumanagement.php';
	            </SCRIPT>");
		   }

	}




$connect->close();

?>

				$connect->close();

				?>