<?php
require_once "login.class.php";
$korisnik = new login();
$korisnik->Loguj();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox">
		<img src="avatar.jpeg" class="avatar">
		<h1>Login</h1>
	
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<a href="index.php">Dont have an account?</a>
		</form>
	</div>
</body>
</html>