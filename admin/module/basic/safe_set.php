<?php
function module_safe_set()
{
	global $smarty;
	$smarty->assign('safe_admin_login_hours',get_varia('safe_admin_login_hours'));
	$smarty->assign('safe_admin_login_times',get_varia('safe_admin_login_times'));
	$smarty->assign('safe_user_login_hours',get_varia('safe_user_login_hours'));
	$smarty->assign('safe_user_login_times',get_varia('safe_user_login_times'));
	
	$smarty->assign('safe_register_hours',get_varia('safe_register_hours'));
	$smarty->assign('safe_register_times',get_varia('safe_register_times'));
	$smarty->assign('safe_message_hours',get_varia('safe_message_hours'));
	$smarty->assign('safe_message_times',get_varia('safe_message_times'));
	$smarty->assign('safe_comment_hours',get_varia('safe_comment_hours'));
	$smarty->assign('safe_comment_times',get_varia('safe_comment_times'));
	$smarty->assign('safe_research_hours',get_varia('safe_research_hours'));
	$smarty->assign('safe_research_times',get_varia('safe_research_times'));
	$smarty->assign('safe_booking_hours',get_varia('safe_booking_hours'));
	$smarty->assign('safe_booking_times',get_varia('safe_booking_times'));
	$smarty->assign('safe_edit_user_hours',get_varia('safe_edit_user_hours'));
	$smarty->assign('safe_edit_user_times',get_varia('safe_edit_user_times'));
	$smarty->assign('safe_edit_pwd_hours',get_varia('safe_edit_pwd_hours'));
	$smarty->assign('safe_edit_pwd_times',get_varia('safe_edit_pwd_times'));
	
}

//红头船
?>