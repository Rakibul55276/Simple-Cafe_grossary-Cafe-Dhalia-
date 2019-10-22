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
   
  <div id ="particles-js"></div>
  <script type ="text/javascript" src ="js/particles.js"></script>
  <script type ="text/javascript" src ="js/particles.min.js"></script>
  <script type ="text/javascript" src ="js/app.js"></script>

    <header>
      <div class="container">
        <div id="branding">
          <img src="./img/logo.png">
          
        </div>
        <nav>
          <ul>
            
            <li class="current"><a href="index.php"><img src="./img/home.png"><br>Home</a></li>
            <li><a href="menu.php"><img src="./img/menu.png"><br>Food Menu</a></li>   
            <li><img src="./img/user.png"><br><?php echo $_SESSION['username']; ?></li>
            <li><a href="index.php?logout='1'"><img src="./img/logout.png"><br>Logout</a></li>
            

          </ul>
        </nav>
      </div>

    </header>

    <section id="showcase">
      <div class="container">
        <h1>Welcome to Cafe Dahlia</h1>
        <p> Thank you for being with us </p>
      </div>
    
    </section>

  </div>



   <div class="container2">
    <setion id="boxes2">

        <div class="box1">
           <img src="./img/aboutus.png">
           <h1>About Us</h1>
           <ul>
            <li>Cafe Dahlia was established on 2000</li>
            <li>It has been awarded best UNIMAS student cafe on 2010</li>
            <li>Operationg hour: 8am morning - 10pm night</li>
           </ul>

        </div>

        <div class="box2">
           <img src="./img/contactus.png">
            <h1>Contact Us</h1>
             <ul>
              <li>Adress: Cafe Dahlia, Unimas</li>
              <li>Email: cafedahliararestautent@xxxx.com</li>
              <li>Phone Number: +601XXXXXXX, +603XXXXXXX</li>
             </ul>

        </div>
    </section>

  </div>




    <footer>
      <p>Dahlia Cafe, Copyright &copy; 2017</p>
    </footer>




  </body>
</html>
