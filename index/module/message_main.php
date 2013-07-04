<?php
function module_message_main()
{
	global $smarty,$page;
	$user_id = check_user_login();
	if($user_id > 0)
	{
		$user_name = get_data('users',$user_id,'use_username');
		$user_email = get_data('users',$user_id,'use_email');
	}else{
		$user_name = '';
		$user_email = '';
	}
	$obj = new message();
	$obj->set_page_size(5);
	$obj->set_page_num($page);	
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['mes_user_id'],'use_username');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('user_name',$user_name);
	$smarty->assign('user_email',$user_email);
	$smarty->assign('link_page','message');
	$smarty->assign('message',$sheet);
}

//红头船
?>