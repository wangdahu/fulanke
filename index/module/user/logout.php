<?php
function module_logout()
{
	global $smarty,$lang;
	unset_cookie('user_username');
	unset_cookie('user_password');
	$info_text = $lang['have_to_exit'];
	$link_text = $lang['re_login'];
	$smarty->assign('show_info',1);
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_href',S_ROOT.S_URL_PREFIX.'user/');
	$smarty->assign('link_text',$link_text);
}

//红头船
?>