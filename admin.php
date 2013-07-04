<?php
include('include/common.php');
$url = get_url();
if($url == '')
{
	$path = 'admin/admin.php';
}else{
	$arr = explode('/',$url);
	$path = 'admin/'.$arr[1].'.php';
}
include($path);

//红头船
?>
