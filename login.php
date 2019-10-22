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
					<img src="./img/logo.jpg">
				</div>
			</div>

			<h1>Login</h1>


			<div class="space"><br></div>
			
			
          		
            
   	<div class="container">

	<form method="post" action="login.php">

					
			<div>
				<label>Username<input type="text" placeholder="Enter Your User Name" name="username" ></label>			
			</div>

			<div>
				<label>Password<input type="password" placeholder="Enter Your Password" name="password"></label>			
			</div>

			<div class="space"><br><br><br></div>


			<div>
				<button type="submit" class="button_1" name="loginuser">Login</button>
			</div>


			<p>Not yet a member?</p>

			<div>
				<button type="button" class="button_1" name="signupuser" onclick = "document.location.href='register.php'" >Sign Up </a></button>
			</div>

	</form>

			</div>
			</div>

			<div>
				<?php include('errors.php'); ?>
			</div>

	</aside>


</body>
</html>