<?php
include('smarty/Smarty.class.php');
include('admin/common.php');
include('admin/function.php');

$smarty = new Smarty;
$smarty->template_dir = S_TPL_PATH.'admin/';
$smarty->compile_dir = 'admin/compile/';
$smarty->cache_dir = 'admin/cache/';
$url = get_url();
set_parameter();
initial('admin');
session_destroy();
$smarty->assign('info_text','您已经退出系统');
$smarty->assign('link_href',$_SERVER['PHP_SELF']);
$smarty->display('info.tpl');

//红头船
?>