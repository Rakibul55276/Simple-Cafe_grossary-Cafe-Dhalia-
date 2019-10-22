<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Cafe Dahlia">
	 	<meta name="author" content="Mehedi">
    <title>Cafe Dahlia | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/a.js"></script>
	
  </head>
  <body> 
   
    <header>
      <div class="container">
        <div id="branding">
          <img src="./img/logo.png">
        </div>
        <nav>
          <ul>
          	
            <li><a href="adminpanel.php"><img src="./img/user.png" /></a><br><?php echo $_SESSION['username']; ?></li>    
            <li><a href="index.php?logout='1'"><img src="./img/logout.png"><br>Logout</a></li>
            

          </ul>
        </nav>
      </div>

    </header>

    <div class="admincon">

    <section>
       <div class="admincontainer">
       <label><a href="adminpanel.php"><img src="./img/user.png"><h1> ADMIN HOME <h1></a></label>
      </div>

      <div class="admincontainer">
       <label><a href="usermanagement.php"><img src="./img/users.png"><h1> USER MANAGEMENT <h1></a></label>
      </div>

       <div class="cadmincontainer">
       <label><a href="ordermanagement.php"><img src="./img/order.png"><h1> ORDER MANAGEMENT <h1></a></label>
      </div>

       <div class="admincontainer">
       <label><a href="menumanagement.php"><img src="./img/menu.png"><h1> MENU MANAGEMENT <h1></a></label>
      </div>
    
    </section>

  </div>


  <aside id="adminform">
          <div class="dark">              
          <h1>ORDER LIST</h1>
          <div class="space"></div>                                
          <div class="container3">

                   <form>

                     <?php
                         $conn = mysqli_connect("localhost", "root", "sony50200", "cafe_dahlia");

                         $username = $_SESSION['username'];

                         $sql = "SELECT * FROM orderform";

                         $query = mysqli_query($conn, $sql) or die(mysqli_error());

                         echo '<form name="viewOrder" method="post">';

                         echo "<table>";
                         echo "<tr><th>ID</th><th>CUSTOMER NAME</th><th>SET A</th><th>SET B</th><th>SET C</th><th>SET D</th><th>SET E</th><th>SET F</th><th>PRICE</th><th>COMMENT</th><th>REPLY</th><th>STATUS</th></tr>";

                    while($row = mysqli_fetch_assoc($query))
                     {
                         $id = $row['id'];
                         $username= $row['username'];
                         $set_A = $row['set_A'];
                         $set_B = $row['set_B'];
                         $set_C = $row['set_C'];
                         $set_D = $row['set_D'];
                         $set_E = $row['set_E'];
                         $set_F = $row['set_F'];
                         $price = $row['price'];
                         $comment = $row['comment'];
                         $reply = $row['reply'];
                         $status = $row['status'];
                         echo "<tr><td style='width: 50px;'>".$id."</td> <td style='width:150px;'>".$username."</td><td>".$set_A."</td><td>".$set_B."</td><td>".$set_C."</td><td>".$set_D."</td><td>".$set_E."</td><td>".$set_F."</td><td>".$price."</td><td>".$comment."</td><td>".$reply."</td><td>".$status."</td></tr>";
                     } 

                         echo "</table>";
                                                        
                         ?>
                  </form>

                  </div>
                  </div>
                
          </aside>

       


     <aside id="adminform">
       <div class="dark">   

          <h1>UPDATE STATUS AND COMMENT</h1> 

          <div class="space"></div>                               
          <div class="acontainer">
            <form method="post" action="updatestatus.php">
             
                 <div>
                      <label>ID<input type="text" name="id" placeholder="ID" required></label>                                                
                 </div>

                 <div>
                      <label>STATUS
                        <select name = "status">
                          <option value="NOT SERVED YET">NOT SERVED YET</option>
                          <option value="SERVED ALREADY">SERVED ALREADY</option>
                        </select>
                    </label>                                                
                 </div>
                
                 <div>
                    <label>REPLY<textarea name="reply" placeholder="Reply to Customer Comment"></textarea></label>
                 </div><br>

        
                <div>
                  <button type="submit" class="button_1" name="update">UPDATE</button>
                </div>
            
            </form>

          </div>
        </div>

    </aside>

  </div>



               <div class="container5">
                           <aside id="adminform">
                                <div class="dark">  
                            
                                    <h1>DELETE ORDER</h1>
                                    <div class="container">
                                    </div>

                                    <div class="space"></div>      
                                                    
                                    <div class="acontainer">

                                      <form method="post" action="updateorder.php">
                                       
                                        <div>
                                          <label>ID<input type="text" name="id" required></label>                
                                        </div>
                                                                 
                                        <div class="space"><br><br><br></div>
                              
                                        <div>
                                          <button type="submit" class="button_1" name="delete">DELETE ORDER</button>
                                        </div>
                                     
                                      </form>

                                    </div>           
                                </div>    
                          </aside>
                    </div>




    </section>

  </div>

 
    <footer>
      <p>Dahlia Cafe, Copyright &copy; 2017</p>
    </footer>

  </div>
 

</html>