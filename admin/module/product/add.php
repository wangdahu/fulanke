<?php
function module_add()
{
	global $smarty;
	$obj = new cat_pro();
	$arr = reset_arr($obj->get_tree());
	$option = $obj->get_cat_option($arr,'id','name','grade',0);
	$smarty->assign('option',$option);
	$smarty->assign('editor_text','');
	$smarty->assign('site_keywords',get_varia('site_keywords'));
	$smarty->assign('site_description',get_varia('site_description'));
	$smarty->assign('upl_date',date('Ymd'));
}

function reset_arr($arr)
{
	$return = array();
	for($i = 0; $i < count($arr); $i ++)
	{
		$return[$i]['id'] = $arr[$i][0];
		$return[$i]['parent'] = $arr[$i][1];
		$return[$i]['name'] = $arr[$i][2];
		$return[$i]['grade'] = $arr[$i][6];
	}
	return $return;
}

//红头船
?>