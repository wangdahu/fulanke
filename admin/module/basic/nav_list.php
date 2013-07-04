<?php
function module_nav_list()
{
	global $smarty;
	
    $obj = new menu();
    $obj->set_where("men_type = 'header'");
    $list['header'] = $obj->get_list();
	$nav[0]['type'] = 'header';
	$nav[0]['name'] = '页头导航';
	
    $obj = new menu();
    $obj->set_where("men_type = 'footer'");
    $list['footer'] = $obj->get_list();
	$nav[1]['type'] = 'footer';
	$nav[1]['name'] = '页脚导航';

    $obj = new menu();
    $obj->set_where("men_type = 'about'");
    $list['about'] = $obj->get_list();
	$nav[2]['type'] = 'about';
	$nav[2]['name'] = '关于我们';
	
	$smarty->assign('nav',$nav);
	$smarty->assign('list',$list);
}

//红头船
?>