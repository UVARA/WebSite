
<?php
require_once "conn.db.php";
class Unosubazu extends Dbconn
{
	private $username;
	private $password;
	private $email;

	public function __construct($username,$password,$email)
	{
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
	}
	public function podaciubazu()
	{
		
		$query="INSERT INTO korisnici (USERNAME,PASSWORD,EMAIL) VALUES ('$this->username','$this->password','$this->email')";
		$result=$this->connect()->real_connect();
		$result=$this->connect()->query($query);
		$result=$this->connect()->close();
	}
}


?>