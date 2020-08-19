<?php
require_once "conn.db.php";
require_once "session.php";

class Uloguj extends Dbconn
{
	private $username;
	private $password;

	public function __construct($username,$password)
	{
		$this->username=$username;
		$this->password=$password;
	}

	public function ulogujme()
	{
		
		$query = "SELECT USERNAME,PASSWORD FROM korisnici WHERE USERNAME='$this->username' AND PASSWORD='$this->password'";
		$result = $this->connect()->real_connect();
		$result = $this->connect()->query($query);
		if($row=$result->fetch_assoc())
		{
			if($this->username=="admin" && $this->password=="123")
			{
				session_start();
				$_SESSION["id"]=1;
				setcookie("uid",$this->username);
				header("Location:home.php");
			}
			else
			{
				session_start();
				$_SESSION["id"]=2;
				setcookie("uid",$this->username);
				header("Location:home.php");
			}	
		}
		else
		{
			echo "pogresni username ili password";
		}
		$result=$this->connect()->close();
	}
}

?>
