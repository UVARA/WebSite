<?php
require_once "uloguj.class.php";
class Login
{

	public function Loguj()
	{
		if(isset($_POST['username'],$_POST['password'],$_POST['submit']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			if(!empty($username) && !empty($password))
			{
				$korisnik=new Uloguj($username,$password);
				$korisnik->ulogujme();
			}
			else
			{
				echo "unesite podatke";
			}
	}	}
}

?>