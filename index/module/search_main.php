<?php
function module_search_main()
{
	global $smarty,$page,$key;
	$key = rawurldecode($key);
	$obj = new product();
	$obj->set_field('pro_id,pro_title,pro_reduce_img');
	$obj->set_where("pro_title like '%" . $key . "%'");
	$obj->set_page_size(get_varia('img_list_len'));
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['short_title'] = cut_str($sheet[$i]['pro_title'],10);
	}
	set_link($obj->get_page_sum());
	$smarty->assign('search',$sheet);
	$smarty->assign('page_title',$key);
}

//红头船
?>