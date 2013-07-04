<?php
function module_product_list()
{
	global $smarty;
	$obj = new cat_pro();
	$obj->set_where('cat_best = 1');
	$best_cat = $obj->get_list();
	$pro_list = array();
	for($i = 0; $i < count($best_cat); $i ++)
	{
		$cat = $best_cat[$i]['cat_id'];
		$family = implode(',',get_cat_family('cat_pro',$cat));
		$obj = new product();
		$obj->set_field('pro_id,pro_title,pro_reduce_img');
		$obj->set_where("pro_cat_id in ($family)");
		$obj->set_page_size(get_varia('index_img_list_len'));
		$list = $obj->get_list();
		for($j = 0; $j < count($list); $j ++)
		{
			$list[$j]['short_title'] = cut_str($list[$j]['pro_title'],10);
		}
		$pro_list[$cat] = $list;
		unset($obj);
	}
	$smarty->assign('best_pro_cat',$best_cat);	
	$smarty->assign('product_list',$pro_list);
}

//红头船
?>