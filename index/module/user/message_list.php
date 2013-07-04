<?php
function module_message_list()
{
	global $smarty,$page,$user_id;
	$obj = new message();
	$obj->set_where("mes_user_id = $user_id");
	$obj->set_page_size(5);
	$obj->set_page_num($page);	
	$smarty->assign('message',$obj->get_sheet());
	set_link($obj->get_page_sum());
}


//红头船
?>