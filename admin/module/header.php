<?php
function module_header()
{
	global $smarty;
	$obj = new varia();
	$obj->set_where("var_name = 'languages'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = explode('{v}',$list[$i]['var_value']);
		$list[$i]['pack_name'] = $arr[0];
		$list[$i]['index_entrance'] = $arr[1];
		$list[$i]['admin_entrance'] = $arr[2];
		$list[$i]['chinese_name'] = $arr[3];
		$list[$i]['foreign_name'] = $arr[4];
	}
	$smarty->assign('lang_pack',$list);
}

//红头船
?>