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

                 <div class="admincontainer">
                  <label><a href="ordermanagement.php"><img src="./img/order.png"><h1> ORDER MANAGEMENT <h1></a></label>
                 </div>

                 <div class="cadmincontainer">
                  <label ><a href="menumanagement.php"><img src="./img/menu.png"><h1> MENU MANAGEMENT <h1></a></label>
                 </div>    
              </section>
           </div>

        <section>


             <aside id="adminform">
                 <div class="dark">              
                    <h1>MENU LIST</h1>
                    <div class="space"></div>
                    <div class= "container">                                
                    <div class="menut">
                       <form>

                         <?php
                             $conn = mysqli_connect("localhost", "root", "sony50200", "cafe_dahlia");

                             $username = $_SESSION['username'];

                             $sql = "SELECT * FROM menu";

                             $query = mysqli_query($conn, $sql) or die(mysqli_error());

                             echo '<form name="viewMenu" method="post">';

                             echo "<table>";
                             echo "<tr><th>ID</th><th>MENU NAME</th><th>PRICE</th></tr>";

                            while($row = mysqli_fetch_assoc($query))
                             {
                                 $id = $row['id'];
                                 $menuname = $row['menuname'];
                                 $price = $row['price'];
                                 echo "<tr><td style='width: 50px;'>".$id."</td> <td>".$menuname."</td><td>".$price."</td></tr>";
                             } 

                            echo "</table>";
                                                            
                             ?>
                        </form>
                      </div>
                </div>           
              </aside>

              <div class= "container">
                 <div class="container5">
                    <aside id="adminform">
                        <div class="dark">
                          
                          <h1>ADD NEW MENU</h1>
                          
                          <div class="space"></div>      
                                          
                          <div class="acontainer">
                            <form method="post" action="updatemenu.php">                       
                                <div>
                                  <label>MENU NAME<input type="text" name="menuname" required></label>                
                                </div>

                                <div>
                                  <label>PRICE<input type="text" name="price" required></label>
                                </div>
                                           
                                <div class="space"><br><br><br></div>
                      
                                <div>
                                  <button type="submit" class="button_1" name="addmenu">ADD MENU</button>
                                </div>                   
                            </form>

                          </div>           
                        </div>
                    </aside>
               </div>   


                   <div class="container5">
                           <aside id="adminform">
                                <div class="dark">  
                            
                                    <h1>DELETE MENU</h1>
                                    <div class="container">
                                    </div>

                                    <div class="space"></div>      
                                                    
                                    <div class="acontainer">

                                      <form method="post" action="updatemenu.php">
                                       
                                        <div>
                                          <label>ID<input type="text" name="id" required></label>                
                                        </div>
                                                                 
                                        <div class="space"><br><br><br></div>
                              
                                        <div>
                                          <button type="submit" class="button_1" name="deletemenu">DELETE MENU</button>
                                        </div>
                                     
                                      </form>

                                    </div>           
                                </div>    
                          </aside>
                    </div>


              </div>  

    </section>


    <footer>
      <p>Dahlia Cafe, Copyright &copy; 2017</p>
    </footer>

  </body>
 

</html>
