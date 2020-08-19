<?php
require_once "conn.db.php";
class Del extends Dbconn
{
	public function dell()
	{
		if(isset($_POST['delete']))
		{
			$id = $_POST['id'];
			$query = "DELETE FROM comment WHERE ID='$id'";
			$result=$this->connect()->real_connect();
			$result=$this->connect()->query($query);
			$result=$this->connect()->close();
		}
	}
}

?>