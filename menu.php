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
        <meta name="keywords" content="web design, affordable web design, professional web design">
        <meta name="author" content="Mehedi">
        <title>Cafe Dahlia | Menu</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="js/a.js"></script>
        <script>function vieworder () {
        document.getElementById("vobtn").style.display = "block"; }
        </script>
      </head>

  <body background="img/loginbg.jpg">
        <header>
          <div class="container">
            <div id="branding">
              <img src="./img/logo.png"> 
            </div>
            <nav>
              <ul>
                <li ><a href="index.php"><img src="./img/home.png"><br>Home</a></li>
                <li class="current"><a href="menu.php"><img src="./img/menu.png"><br>Food Menu</a></li>   
                <li><img src="./img/user.png"><br><?php echo $_SESSION['username']; ?></li>
                <li><a href="index.php?logout='1'"><img src="./img/logout.png"><br>Logout</a></li>
              </ul>
            </nav>
          </div>
        </header>

    
      <section id="full-col" >

         <div class="container">
       
            <h1 class="page-title">CHOOSE FROM THE SET MENU</h1>
          
            <section id="boxes">
                  <article id="main-col">
                 
                        <div class="box">
                          <img src="./img/seta.jpg">
                          <h3> SET A </h3>
                          <ul>
                          <li>Nasi Putih</li>
                          <li>Kari Daging Kentang </li>
                          <li>Labu Kuning Cangkuk Manis</li>
                          </ul>
                          <h2>Price: RM 5.50</h2>
                        </div>
                        
                     
                        <div class="box">
                         <img src="./img/setb.jpg">
                         <h3>SET B </h3>
                         <ul>
                           <li>Nasi Putih</li>
                           <li>Kari Kambing Kentang </li>
                           <li>Fried Long Bean</li>
                         </ul>
                         <h2>Price: RM 5.50</h2>                
                        </div>


                        <div class="box">
                         <img src="./img/setc.jpg">
                           <h3>SET C </h3>
                            <ul>
                              <li>Nasi Putih</li>
                              <li>Ayam Halila</li>
                              <li>Stew Round Cabbage</li>
                            </ul>
                            <h2>Price: RM 5.00</h2>                
                        </div>


                       <div class="box">
                           <img src="./img/setd.jpg">
                           <h3>SET D </h3>
                          <ul>
                           <li>Nasi Putih</li>
                           <li>Kari Ayam Kentang </li>
                            <li>Bean Sprout Bean Curd</li>
                          </ul>
                          <h2>Price: RM 5.00</h2>
                       </div>



                       <div class="box">
                           <img src="./img/sete.JPG">
                           <h3>SET E</h3>
                          <ul>
                           <li>Nasi Putih</li>
                           <li>Sweet and Sour Fish</li>
                           <li>Mixed Vegetables Chinese Style</li>
                          </ul>
                          <h2>Price: RM 10.00</h2>                
                       </div>


                       <div class="box">
                          <img src="./img/setf.jpg">
                          <h3>SET F</h3>
                          <ul>
                            <li>Spaghetti Cabonara</li>
                            <li>Beef Meetball</li>
                            <li>Egg Fried</li>

                          </ul>
                          <h2>Price: RM 5.50</h2>               
                       </div>

                      </article>
                 
                     </section>     
               



<!-- |||||||||||||   ASIDE  onclick="vieworder()"   |||||||||||||| -->
    
  

          <aside id="sidebar" >
                <div class="dark">
                  
                  <div class="container">
                        <h1>Order Your Food</h1>
                <!--        <iframe name="order" style="display:none;"></iframe>   -->
                        <form  target="order" class="quote" action= "orderform.php"  method="post" >
                     
                                      
                      <div>
                        <label><h2>Choose Set</h2></label><br><br>
                        <label>SET A<input type="number" name="set_A" min="0" max="10" placeholder="Please Set Quantity"></label>
                        <label>SET B<input type="number" name="set_B" min="0" max="10" placeholder="Please Set Quantity"></label>
                        <label>SET C<input type="number" name="set_C" min="0" max="10" placeholder="Please Set Quantity"></label>
                        <label>SET D<input type="number" name="set_D" min="0" max="10" placeholder="Please Set Quantity"></label>
                        <label>SET E<input type="number" name="set_E" min="0" max="10" placeholder="Please Set Quantity"></label>
                        <label>SET F<input type="number" name="set_F" min="0" max="10" placeholder="Please Set Quantity"></label>                                          
                      </div>

                      <div>                        
                        <label>COMMENT<textarea name = "comment" placeholder="if you have any comment please post here"></textarea></label>
                      </div><br>

                                     
                      <div>          
                        <button class="button_1"  type = "submit" >ORDER NOW </button>
                      </div>

                                 
                      <div>
                        <button  method="post" type="button" class="button_1"  id="vobtn" onclick= "document.getElementById('id01').style.display='block'" name = "vobtn">VIEW ORDER</button>
                        <label><h2>RM 5 Discount For Them Who Ordered More Than 2 Times. To Check Press 'VIEW ORDER' Button </h2></label> 
                      </div>
                        <!-- style="display: none;" -->
                    </form>                                       

          </aside> 
          </div> 
          </div>  
       
     </section>
        
    
 
<!-- The Modal -->
    <div id="id01" class="modal" name= "orderconfirmation">

      <span onclick="document.getElementById('id01').style.display='none'" 
          class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form id= "orderform" action= "updateorders.php" name= "orderform" class="modal-content animate" method="post">
             
              <div class="container">
               <div id="loginlogo">
                <img src="./img/logo.png">
               </div>
              </div>

               <div class="container">


                         <?php
                            $conn = mysqli_connect("localhost", "root", "sony50200", "cafe_dahlia");

                            $username = $_SESSION['username'];

                            $sql= "SELECT t1.* FROM orderform t1
                            WHERE t1.id = (SELECT t2.id
                                             FROM orderform t2
                                             WHERE t2.username = '$username'            
                                             ORDER BY t2.id DESC
                                             LIMIT 1)";

                       /*     $sql = "SELECT id,username,set_A,set_B,set_C,set_D,set_E,set_F,price FROM orderform WHERE username = '$username'"; */
                            $query = mysqli_query($conn, $sql);

                            if ($row = mysqli_fetch_assoc($query)) { 
                                $id = $row ['id'];
                                $set_A = $row['set_A'];
                                $set_B = $row['set_B'];
                                $set_C = $row['set_C'];
                                $set_D = $row['set_D'];
                                $set_E = $row['set_E'];
                                $set_F = $row['set_F'];
                                $price = $row['price'];
                                $status = $row['status'];
                                $comment = $row['comment'];
                                $reply = $row['reply'];
                                $discount = $row['discount'];
                               
                           
                            echo '<form name="viewOrder" action="updateorders.php" method="post">';
                            
                            echo '<table>

                                      <tr>
                                        <td> <input style="display: none;" type="number"  name="id" value="'.$id.'" /></td> 
                                      <tr>
                                        <td> <label>SET A<input type="number" min="0" max="15" name="set_A" value="'.$set_A.'" /></td> 
                                      <tr>  
                                        <td> <label>SET B<input type="number" min="0" max="15" name="set_B" value="'.$set_B.'" /></td> 
                                      <tr>   
                                        <td> <label>SET C<input type="number" min="0" max="15" name="set_C" value="'.$set_C.'" /></td> 
                                      <tr>   
                                        <td> <label>SET D<input type="number" min="0" max="15" name="set_D" value="'.$set_D.'" /></td> 
                                      <tr>                                           
                                        <td> <label>SET E<input type="number" min="0" max="15" name="set_E" value="'.$set_E.'" /></td> 
                                      <tr>  
                                        <td> <label>SET F<input type="number" min="0" max="15" name="set_F" value="'.$set_F.'" /></td>
                                      <tr>
                                        <td> <label><h3>TOTAL PRICE &nbsp &nbsp '.$price.' &nbsp (RM '.$discount.' DISCOUNT APPLIED)</td>  

                                      <tr>
                                        <td> <label><h2>STATUS : &nbsp &nbsp '.$status.' </td>

                                      <tr>
                                        <td> <label><h3>Previous Comment and Reply</td>

                                       <tr>
                                        <td><label>ME :<input type="text"  name="comment" value="'.$comment.'" readonly /></td>
                                       <tr>
                                        <td><label>ADMIN :<input type="text"  name="reply" value="'.$reply.'" readonly /></td>                                                                                     
                                    
                                    </table>';                                   
                                    echo '</form>';
                            }                                   
                            ?> 

                     
                         <button class="button_1" name ="update" type="submit">UPDATE ORDER</button></td>
                         <button class="button_1" name="delete" type="submit">DELETE ORDER</button></td>
                         <button class="button_1" type="button" onclick="document.getElementById('id01').style.display='none'" >GO BACK</button>
                     

                    </div>    
                  </form>
           
              </div>

        


          <footer>
            <p>Dahlia Cafe, Copyright &copy; 2017</p>
          </footer>

    </body>
  </html>