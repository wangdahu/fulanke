<?php
function module_edit()
{
	global $smarty,$id;
	$obj = new article();
	$obj->set_where("art_id = $id");
	$one = $obj->get_one();
	$smarty->assign('article',$one);
	$smarty->assign('editor_text',$one['art_text']);
	$obj = new cat_art();
	$arr = reset_arr($obj->get_tree());
	$option = $obj->get_cat_option($arr,'id','name','grade',$one['art_cat_id']);
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