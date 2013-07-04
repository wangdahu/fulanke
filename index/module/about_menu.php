<?php
function module_about_menu()
{
	global $smarty;
	$obj = new menu();
	$obj->set_where("men_type = 'about'");
	$obj->set_field('men_name,men_url');
	$smarty->assign('menu',$obj->get_list());
}

//红头船
?>