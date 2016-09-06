<?php
error_reporting(E_ERROR);
require('include/common.php');
$url = get_url();
if(S_WEAK_STATIC)
{
	if($url == '')
	{
		if(S_FLASH != 1)
		{
			$path = '/' . S_URL_SUFFIX;
		}else{
			$path = '/flash.html';
		}
	}else{
		$path = $url;
	}
	$path = 'html' . $path;
	if(substr($path,-1) == '/')
	{
		$path .= S_URL_SUFFIX;
	}
	if(file_exists($path))
	{
		require($path);
		exit();
	}else{
		ob_start();
	}
}
if($url == '')
{
	if(S_FLASH != 1)
	{
		$path = 'index/index.php';
	}else{
		$path = 'index/flash.php';
	}
}else{
	$arr = explode('/',$url);
	$path = 'index/'.$arr[1].'.php';
}
require($path);

//红头船
?>
