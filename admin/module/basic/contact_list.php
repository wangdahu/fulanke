<?php
function module_contact_list()
{
	global $smarty;
	$arr = array();
	$obj = new varia();
	$obj->set_where("var_name = 'contact'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i++)
	{
		$val = explode('{v}',$list[$i]['var_value']);
		$arr[$i]['cue'] = $val[0];
		$arr[$i]['content'] = $val[1];
		$arr[$i]['id'] = $list[$i]['var_id'];
	}
	$smarty->assign('contact',$arr);
}

//红头船
?>