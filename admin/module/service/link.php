<?php
function module_link()
{
	global $smarty;
	$obj = new link();
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$list[$i]['values'] = $list[$i]['lin_id'].'{v}'.$list[$i]['lin_word'].'{v}'.$list[$i]['lin_url'].'{v}'.$list[$i]['lin_img'].'{v}'.$list[$i]['lin_index'].'{v}'.$list[$i]['lin_title'];
	}
	$smarty->assign('link',$list);
}

//红头船
?>