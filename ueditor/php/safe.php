<?php
session_start();
if(isset($_SESSION['session_id']))
{
	if($_SESSION['session_id'] != session_id())
	{
		exit();
	}
}else{
	header('location:../../safe.html');
	exit();
}

//红头船
?>