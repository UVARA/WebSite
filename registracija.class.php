<?php
require_once "unosubazu.class.php";
class Registracija
{
	public function RegistrujKorisnika()
	{
		if(isset($_POST['username'],$_POST['password'],$_POST['email'],$_POST['submit']))
		{
				$username=trim($_POST['username']);
				$password=trim($_POST['password']);
				$pass=trim($_POST['pass']);
				$email=trim($_POST['email']);
			if(!empty($username) && !empty($password) && !empty($email))
			{
				if($password=$pass)
				{
					$korisnik=new Unosubazu($username,$password,$email);
					$korisnik->podaciubazu();
					echo "<p class='loginbox' >Uspesna registracija</p>";
				}
				else
				{
					echo "Pasword se ne podudara";
				}
			}
			else
			{
				echo "Unesite sve podatke";
			}
		}
	}
}


?>