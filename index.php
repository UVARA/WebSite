<?php
require_once "registracija.class.php";
$korisnik=new Registracija();
$korisnik->RegistrujKorisnika();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="height: 500px" class="loginbox">
		<img src="avatar.jpeg" class="avatar">
		<h1>Register</h1>
		<form action="" method="POST">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<p>Password</p>
			<input type="text" name="pass" placeholder="Re-enter Password">
			<p>Email</p>
			<input type="text" name="email" placeholder="Enter E-mail">
			<input type="submit" name="submit">
			<a href="login.php">Already have an account?</a>
		</form>
	</div>
</body>
</html>