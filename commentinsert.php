<?php
require_once "conn.db.php";
class Insert extends Dbconn
{
	private $comment;
	private $uid;


	public function __construct($comment,$uid)
	{
		$this->comment=$comment;
		$this->uid=$uid;
	}

	public function insertcomment()
	{
	
		$query="INSERT INTO comment (UID,COMMENT) VALUES ('$this->uid','$this->comment')";
		$result=$this->connect()->real_connect();
		$result=$this->connect()->query($query);
		$result=$this->connect()->close();
		echo "<h2>uspesno dodat komentar</h2>";
	}
}

?>