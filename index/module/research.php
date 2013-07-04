<?php
function module_research()
{
	global $smarty;
	$obj = new varia();
	$obj->set_where("var_lang = '".S_LANG."'");
	$obj->set_where("var_name = 'research'");
	$list = $obj->get_list();
	$smarty->assign('research',$list);
}

//红头船
?>