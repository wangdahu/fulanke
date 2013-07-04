<?php
function module_edit()
{
	global $smarty,$id;
	$obj = new product();
	$obj->set_where("pro_id = $id");
	$one = $obj->get_one();
	$smarty->assign('product',$one);
	$smarty->assign('upl_date',date('Ymd'));
	$smarty->assign('editor_text',$one['pro_text']);
	$obj = new cat_pro();
	$arr = reset_arr($obj->get_tree());
	$option = $obj->get_cat_option($arr,'id','name','grade',$one['pro_cat_id']);
	$smarty->assign('option',$option);
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