<?php
function module_title_list()
{
	global $smarty;
	$arr =array();
	$obj = new varia();
	$obj->set_where("var_name='title'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i++)
	{
		$val = explode('{v}',$list[$i]['var_value']);
		$arr[$i]['site'] = $val[0];
		$arr[$i]['title'] = $val[1];
		$arr[$i]['priority'] = $val[2];
		$arr[$i]['id'] = $list[$i]['var_id'];
	}
	$smarty->assign('title',$arr);
}

//红头船
?>