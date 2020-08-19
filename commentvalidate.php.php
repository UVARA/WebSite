<?php
require_once "commentinsert.php";
class Validate 
{
	public function commentvalidation()
	{
		if(isset($_POST['comment'], $_POST['addcomm'], $_POST['uid']))
		{
			$comment=trim($_POST['comment']);
			$uid=$_POST['uid'];

			if(!empty($comment))
			{
				$insertcom=new Insert($comment,$uid);
				$insertcom->insertcomment();
			}
		}
	}
}

?>