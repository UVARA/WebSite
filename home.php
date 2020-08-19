<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="stylehome.css">
</head>
<body>

<?php
	include "header.php";
	require_once "logout.php";
	require_once "comment.php";
	require_once "showcomment.php";

	if(isset($_SESSION["id"]) && $_SESSION["id"]==1)
	{
		echo "<div class='container'>";
		echo "<form class='forma' action='' method='POST'>
				<input type='submit' name='logout' value='LOGOUT'>
				</form>";
				$logout=new Logout();
				$logout->loggout();
				$comment= new Comment();
				$comment->Commentsection();
				$showcommen= new Showcomment();
				$showcommen->showcomments();
				echo "</div>";

	}
	else if(isset($_SESSION['id']) && $_SESSION['id']==2)
	{
		echo "<div class='container'>";
		echo "<form class='forma' action='' method='POST'>
				<input type='submit' name='logout' value='LOGOUT'>
				</form>";
				$logout=new Logout();
				$logout->loggout();
				$comment= new Comment();
				$comment->Commentsection();
				$showcommen= new Showcomment();
				$showcommen->showcomments();
				echo "</div>";

	}
	else 
	{
		echo "Please login, we will redirect you in second";
		header( "refresh:2;url=login.php" );
	}

?>
</body>
</html>






	

