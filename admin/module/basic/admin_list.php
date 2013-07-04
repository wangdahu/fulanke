<?php
function module_admin_list()
{
	global $smarty,$admin_id;
	$obj = new admin();
	$list = $obj->get_list();
	$smarty->assign('admin',$list);
	
	$obj->set_where("adm_id = $admin_id");
	$one = $obj->get_one();
	$smarty->assign('me',$one);
}

//红头船
?>