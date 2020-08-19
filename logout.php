<?php

class Logout
{
	public function loggout()
	{
		if(isset($_POST['logout']))
		{
			session_destroy();
			setcookie("uid","",time()-3600);
			header("Location:login.php");
		}
	}
}

?>