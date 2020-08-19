<?php

require_once "commentvalidate.php.php";
require_once "uloguj.class.php";
class Comment 
{

	public function Commentsection()
	{
		echo "
			<form class='insertcomm' action='' method='POST'>
			<div class='clearfix'>
			<input type='hidden' name='uid' value='".$_COOKIE["uid"]."'>
			<input type='text' name='comment' placeholder='Add Comment'><br>
			<input type='submit' name='addcomm' value='Dodaj Komentar'>
			</div></form>";
			$comment=new Validate();
			$comment->commentvalidation();
	}
}

?>