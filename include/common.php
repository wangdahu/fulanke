<?php
include('include/config.php');
include('include/function.php');
include('include/class/database.class.php');
include('include/class/table.class.php');

date_default_timezone_set('PRC');

header('Content-Type:text/html;charset=utf-8');
header('Cache-Control:private,no-cache,must-revalidate,max-age=0');
header('Expires:' . date('D, d M Y H:i:s e',0));
header('Last-Modified:' . date('D, d M Y H:i:s e',0));
header('Pragma:no-cache');

session_cache_limiter('nocache');
session_start();

//红头船
?>