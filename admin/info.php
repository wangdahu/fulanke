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
$info = get_tpl_info('info');
run_module(explode('|',$info),'admin/module/');
$smarty->display('info.tpl');

//红头船
?>