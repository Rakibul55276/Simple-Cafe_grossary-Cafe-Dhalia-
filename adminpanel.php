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
            
            <li><img src="./img/user.png" type="button" onclick="location heref= 'adminpanel.php'"><br><?php echo $_SESSION['username']; ?></li>
            <li><a href="index.php?logout='1'"><img src="./img/logout.png"><br>Logout</a></li>
            

          </ul>
        </nav>
      </div>

    </header>

    <div class="admincon">

      <section>

          <div class="cadmincontainer">
           <label><a href="adminpanel.php"><img src="./img/users.png"><h1> ADMIN HOME <h1></a></label>
          </div>

          <div class="admincontainer">
           <label><a href="usermanagement.php"><img src="./img/users.png"><h1> USER MANAGEMENT <h1></a></label>
          </div>

           <div class="admincontainer">
             <label><a href="ordermanagement.php"><img src="./img/order.png"><h1> ORDER MANAGEMENT <h1></a></label>
           </div>

           <div class="admincontainer">
            <label><a href="menumanagement.php"><img src="./img/menu.png"><h1> MENU MANAGEMENT <h1></a></label>
           </div>
    
       </section>

          <section id="admincover">
            <div class="container">
              <h1>WELCOME <?php echo $_SESSION['username']; ?></h1>
            </div>          
          </section>


      </div>

 
    <footer>
      <p>Dahlia Cafe, Copyright &copy; 2017</p>
    </footer>

  </div>
 

</html>
