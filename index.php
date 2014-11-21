<?php include 'login.php';?>
<!DOCTYPE html>
<html>
  <?php include 'includes/head.php';?>
  
  <body>
  	<div id = "logo">
  	  	<div class = "pulse"></div>
  		<img src = "res/images/logo2@2x.png"/>
  	</div>
  	<div id = "tagline" class = "teal-gradient-text">
  		Monitor your business
  	</div>
  	<div id = "loginPanel">
  		<div id = "card">
  			<div id = "formCon">
	  			<h1> Sign in </h1>
	  			<span id="errorMessage"> Error Message Here</span>
	  			<form id="loginForm" action = "login.php" method="POST">
		  			<input class = "loginTextField" type = "text" name = "username" placeholder="username"/>
		  			<input class = "loginTextField" type = "password" name = "password" placeholder="password"/>
		  			<input class = "loginButton"type = "submit" value = "LOGIN" />
		  		</form>
		  		<div id = "forgot-signup">
			  		<a href="forgot.php">Forgot Password?</a> &nbsp&nbsp|&nbsp&nbsp
			  		<a href="registration.php">Sign-Up now</a> 
			  	</div>
  			</div>
  		</div>
  	</div>
  	<div id = "footer">
  		MiniBizi &copy 2014 All Rights Reserved
  		<ul>
  		<li><a href = "/contact">Contact</a></li>
  		<li><a href = "/about">About</a></li>
  		<li><a href = "/help">Help</a></li>
  		</ul>
  	</div>
  </body>
</html>