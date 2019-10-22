<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img/loginbg.jpg">


	<aside id="loginform" >
          <div class="dark">

          			<div class="container">
						<div id="loginlogo">
							<img src="./img/logo.png">
						</div>
					</div>

					<h1>Sign Up</h1>


					<div class="space"></div>
			
          		            
   				<div class="container">

   					<form method="post" action="register.php">


   						<div>
   							<label>Name<input type="text" name="name"></label>   							
   						</div>

   						<div>
   							<label>Username<input type="text" name="username" ></label>
   						</div>

   						<div>
   							<label>Email<input type="email" name="email"></label>
   						</div>

   						<div>
							<label>Phone No<input type="text" name="phone"></label>			
						</div>

   						<div>
							<label>Address<input type="textarea" name="address"></label>			
						</div>

   						<div>
   							<label>Password<input type="password" name="password_1"></label>
   						</div>


   						<div>
							<label>Confirm password<input type="password" name="password_2"></label>			
						</div>



						

						<div class="space"><br><br><br></div>
		
						<div>
							<button type="submit" class="button_1" name="reguser">Register</button>
						</div>


							<p>Already a member?</p>

						<div>
							<button type="button" class="button_1" name="signin" onclick = "document.location.href='login.php'" >Sign In </a></button>
						</div>

				</form>

						</div>
						</div>

						<div >
							<?php include('errors.php'); ?>
						</div>

		</aside>
</body>
</html>