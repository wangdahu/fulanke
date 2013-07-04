<?php
function module_focus_list()
{
	global $smarty;
	$obj = new picture();
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$list[$i]['values'] = $list[$i]['pic_id'].'{v}'.$list[$i]['pic_path'].'{v}'.$list[$i]['pic_url'].'{v}'.$list[$i]['pic_title'].'{v}'.$list[$i]['pic_site'];
	}
	$smarty->assign('focus',$list);
}

//红头船
?>