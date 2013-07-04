<?php
function module_booking_list()
{
	global $smarty,$page,$user_id;
	$obj = new booking();
	$obj->set_table(S_DB_PREFIX.'product');
	$obj->set_field('boo_id,boo_pro_id,boo_number,boo_add_time,boo_reply,pro_title');
	$obj->set_where("boo_user_id = $user_id");
	$obj->set_where('pro_id = boo_pro_id');
	$obj->set_page_size(15);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('booking',$sheet);
}

//红头船
?>