<?php
function module_best_product()
{
	global $smarty;
	$obj = new product();
	$obj->set_field('pro_id,pro_title,pro_reduce_img');
	$obj->set_where('pro_best = 1');
	$obj->set_page_size(10);
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$list[$i]['short_title'] = cut_str($list[$i]['pro_title'],10);
	}
	$smarty->assign('best_product',$list);
}

//红头船
?>