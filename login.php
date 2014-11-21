<?php
	
	include 'functions/db_conn.php';
	include 'functions/users.php';
	session_start();
	$errors[] = array();
	$username = $_POST['username'];
	$password = $_POST['password'];

	//client validation
	if(empty($username) === true){
		$errors[] =  'empty username field';
	}else if(empty($password) === true){
		$errors[] =  'empty password field';
	}else if(user_exists($username) === false){
		$errors[] =  'user does not exist' ;
	}else if(user_active($username) === false){
		$errors[] = 'user is not activated';
	}else{
		
		$login = login($username, $password);
		if($login === false){
			$errors[] =  'Username and password combination is incorrect';
		}else{
			//set user cookie
			//redirect user home
			mysql_close();
			$_SESSION['id'] = $login;
			$_SESSION['loggedin'] = true;
			header("location:profile.php");
		}
	}
	//server validation
?>