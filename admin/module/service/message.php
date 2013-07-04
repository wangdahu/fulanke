<?php
function module_message()
{
	global $smarty,$page;
	$obj = new message();
	$obj->set_page_size(10);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['mes_user_id'],'use_username');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('message',$sheet);
}

//红头船
?>