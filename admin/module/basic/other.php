<?php
function module_other()
{
	global $smarty;
	$smarty->assign('S_SESSION',S_SESSION);
	$smarty->assign('S_WEAK_STATIC',S_WEAK_STATIC);
	$smarty->assign('S_SHAM_STATIC',S_SHAM_STATIC);
	$smarty->assign('S_PURE_STATIC',S_PURE_STATIC);
	
	$smarty->assign('about_filter',get_varia('about_filter'));
	$smarty->assign('about_len',get_varia('about_len'));
	$smarty->assign('index_img_list_len',get_varia('index_img_list_len'));
	$smarty->assign('index_art_list_len',get_varia('index_art_list_len'));
	$smarty->assign('img_list_len',get_varia('img_list_len'));
	$smarty->assign('art_list_len',get_varia('art_list_len'));
	$smarty->assign('reduce_img_width',get_varia('reduce_img_width'));
	$smarty->assign('reduce_img_height',get_varia('reduce_img_height'));
	$smarty->assign('sentmail',intval(get_varia('sentmail')));
	$smarty->assign('sentmail_smtp',get_varia('sentmail_smtp'));
	$smarty->assign('sentmail_send',get_varia('sentmail_send'));
	$smarty->assign('sentmail_password',get_varia('sentmail_password'));
	$smarty->assign('sentmail_receive',get_varia('sentmail_receive'));
}

//红头船
?>