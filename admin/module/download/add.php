<?php
function module_add()
{
	global $smarty;
	$smarty->assign('editor_text','');
	$smarty->assign('site_keywords',get_varia('site_keywords'));
	$smarty->assign('site_description',get_varia('site_description'));
}

//红头船
?>