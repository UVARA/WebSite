<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

</body>
</html>
<?php
require_once "conn.db.php";
require_once "delete.class.php";
$delete = new Del();
$delete->dell();

class Showcomment extends Dbconn
{
	public function showcomments()
	{
		$query="SELECT * FROM comment";
		$result=$this->connect()->real_connect();
		$result=$this->connect()->query($query);
		while($row=$result->fetch_assoc())
		{
				echo "<div class='comment'><p class='commentText'>";
				echo $row['UID']."<br>";
				echo $row['COMMENT']."<br>";
				echo "</p>";
				echo "<br>";
				if($_SESSION['id']==1)
				{
					echo "<form class='deletebtn' action='' method='POST'>
					<input type='hidden' name='id' value='".$row['ID']."'>
					<input type='submit' name='delete' value='Delete'>
					<input type='submit' name='edit' value='Edit'>

					</form>";
					echo "<br><br>";
				}
				else if($_SESSION['id']==2 && $_COOKIE["uid"]==$row['UID'])
				{
					echo "<form class='deletebtn' action='' method='POST'>
					<input type='hidden' name='id' value='".$row['ID']."'>
					<input type='submit' name='delete' value='Delete'>
					<input type='submit' name='edit' value='Edit'>
					</form>";
					echo "<br><br>";
				}
				echo "</div>";	
		}
		$result=$this->connect()->close();
	}
}


?>