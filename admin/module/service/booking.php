<?php
function module_booking()
{
	global $smarty,$page;
	$obj = new booking();
	$obj->set_table(S_DB_PREFIX.'product');
	$obj->set_where('pro_id = boo_pro_id');
	$obj->set_page_size(15);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['boo_user_id'],'use_username');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('booking',$sheet);
}

//红头船
?>