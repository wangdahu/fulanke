<?php
function module_cat()
{
	global $smarty;
	$list = array();
	$obj = new cat_pro();
	$arr = get_cat_sheet();
	for($i = 0; $i < count($arr); $i ++)
	{
		
		$list[$i]['id'] = $arr[$i]['id'];
		$list[$i]['parent'] = $arr[$i]['parent'];
		$list[$i]['name'] = $arr[$i]['name'];
		$list[$i]['index'] = $arr[$i]['index'];
		$list[$i]['best'] = $arr[$i]['best'];
		$list[$i]['top'] = $arr[$i]['top'];
		$list[$i]['show'] = $arr[$i]['show'];		
		$list[$i]['grade'] = $arr[$i]['grade'];
		$list[$i]['option'] = $obj->set_cat_option($arr,'id','name','grade',$arr[$i]['parent']);
		$list[$i]['exist_child'] = exist_child($arr[$i]['id']);
	}
	$smarty->assign('list',$list);
	$smarty->assign('cat_list',$obj->set_cat_option($arr,'id','name','grade',-1));
}

function get_cat_sheet()
{
	$arr = array();
	$flag = 0;
	$obj = new cat_pro();
	$list = $obj->get_list();
	if(count($list) > 0)
	{
		for($i = 0; $i < count($list); $i ++)
		{
			$arr[$i][0] = $list[$i]['cat_id'];
			$arr[$i][1] = $list[$i]['cat_parent_id'];
			$arr[$i][2] = $list[$i]['cat_name'];
			$arr[$i][3] = $list[$i]['cat_index'];
			$arr[$i][4] = $list[$i]['cat_best'];
			$arr[$i][5] = $list[$i]['cat_top'];
			$arr[$i][6] = $list[$i]['cat_show'];
			if($arr[$i][1] != 0) $flag = 1;
		}
		return reset_arr($obj->set_cat_order($arr,0,1,$flag));
	}else{
		return $arr;
	}
}

function reset_arr($arr)
{
	$return = array();
	for($i = 0; $i < count($arr); $i ++)
	{
		$return[$i]['id'] = $arr[$i][0];
		$return[$i]['parent'] = $arr[$i][1];
		$return[$i]['name'] = $arr[$i][2];
		$return[$i]['index'] = $arr[$i][3];
		$return[$i]['best'] = $arr[$i][4];
		$return[$i]['top'] = $arr[$i][5];
		$return[$i]['show'] = $arr[$i][6];		
		$return[$i]['grade'] = $arr[$i][7];
	}
	return $return;
}

function exist_child($val)
{
	$obj = new cat_pro();
	$obj->set_where("cat_parent_id = $val");
	if($obj->get_count() > 0)
	{
		return 1;
	}else{
		return 0;
	}
}

//红头船
?>