<?php
include('smarty/Smarty.class.php');
include('index/common.php');
include('index/function.php');

$smarty = new Smarty;
$smarty->template_dir = S_TPL_PATH.'index/';
$smarty->compile_dir = 'index/compile/';
$smarty->cache_dir = 'index/cache/';
$url = get_url();
set_parameter();
initial('index');
$info = get_tpl_info('user');
run_module(explode('|',$info),'index/module/');
$smarty->display('user.tpl');

//红头船
?>