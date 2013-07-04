<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<title>RHSCMS 1.0 beta5 安装</title>
</head>
<body>
<?php
$list = scandir('./');
foreach($list as $file)
{
	if($file != '.' && $file != '..' && $file != 'del.php')
	{
		unlink($file);
	}
}

?>
删除文件成功，但无法完全删除，因为本程序不能删除自身。剩下的文件不会对网站安全构成威胁，若要彻底删除，请手动删除install文件夹
</body>
</html>