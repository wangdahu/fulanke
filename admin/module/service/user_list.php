<?php
function module_user_list()
{
	global $smarty,$page;
	$obj = new users();
	$obj->set_page_size(15);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('users',$sheet);
}

//红头船
?>