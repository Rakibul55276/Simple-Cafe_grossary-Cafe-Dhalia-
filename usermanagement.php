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
          <div class="cadmincontainer">
           <label><a href="usermanagement.php"><img src="./img/users.png"><h1> USER MANAGEMENT <h1></a></label>
          </div>

           <div class="admincontainer">
           <label><a href="ordermanagement.php"><img src="./img/order.png"><h1> ORDER MANAGEMENT <h1></a></label>
          </div>

           <div class="admincontainer">
           <label><a href="menumanagement.php"><img src="./img/menu.png"><h1> MENU MANAGEMENT <h1></a></label>
          </div>
        
        </section>

  </div>




     <aside id="adminform">
          <div class="dark">

              
          <h1>USER LIST</h1>

          <div class="space"></div>      
                          
          <div class="container">

                   <form>

                     <?php
                      $conn = new mysqli('localhost', 'id4011974_mehedihasan', 'sony50200' ,'id4011974_cafe_dahlia');

                         $username = $_SESSION['username'];

                         $sql = "SELECT * FROM users";

                         $query = mysqli_query($conn, $sql) or die(mysqli_error());

                         echo '<form name="viewuser" method="post">';

                         echo "<table>";
                         echo "<tr><th style='color= #e8491d;'>ID</th><th>USER TYPE</th><th>NAME</th><th>USER NAME</th><th>EMAIL</th><th>PHONE</th><th>ADDRESS</th></tr>";

                    while($row = mysqli_fetch_assoc($query))
                     {
                         $id = $row['id'];
                         $user_type = $row['user_type'];
                         $Name = $row['Name'];
                         $username = $row['username'];
                         $email = $row['email'];
                         $phone = $row['phone'];
                         $address = $row['address'];
                         echo "<tr><td style='width: 50px;'>".$id."</td> <td style='width:100px;'>".$user_type."</td><td>".$Name."</td><td>".$username."</td><td>".$email."</td><td>".$phone."</td><td>".$address."</td></tr>";
                     } 

                         echo "</table>";
                                                        
                         ?>
                  </form>

                  </div>
                  </div>
                
          </aside>

        </div>



   
  <div class ="container">
    <div class ="container5">
        
             <aside id="adminform">
                  <div class="dark">

                      
                  <h1>ADD NEW ADMIN</h1>

                  <div class="space"></div>                                  
                  <div class="acontainer">

                    <form method="post" action="updateuser.php">
                     
                          <div>
                            <label>Name<input type="text" name="name" required></label>                
                          </div>

                          <div>
                            <label>Username<input type="text" name="username" required></label>
                          </div>

                          <div>
                            <label>Email<input type="email" name="email" required></label>
                          </div>

                          <div>
                            <label>Phone No<input type="text" name="phone"required></label>     
                          </div>

                          <div>
                            <label>Address<input type="textarea" name="address" required></label>      
                          </div>

                          <div>
                            <label>Password<input type="password" name="password_1" required></label>
                          </div>

                          <div>
                            <label>Confirm password<input type="password" name="password_2" required></label>      
                          </div>
                        
                          <div class="space"><br><br><br></div>
                
                          <div>
                            <button type="submit" class="button_1" name="adminregistration">Register</button>
                          </div>
                    </form>


                  </div>        
                  </div>

            </aside>
          </div>


             <div class="container5">
                           <aside id="adminform">
                                <div class="dark">  
                            
                                    <h1>DELETE USER</h1>
                                    <div class="container">
                                    </div>

                                    <div class="space"></div>      
                                                    
                                    <div class="acontainer">

                                      <form method="post" action="updateuser.php">
                                       
                                        <div>
                                          <label>ID<input type="text" name="id" required></label>                
                                        </div>
                                                                 
                                        <div class="space"><br><br><br></div>
                              
                                        <div>
                                          <button type="submit" class="button_1" name="deleteadmin">DELETE USER</button>
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
