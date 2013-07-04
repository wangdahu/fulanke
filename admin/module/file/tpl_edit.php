<?php
function module_tpl_edit()
{
	global $smarty,$path;
	$tpl_path = S_TPL_PATH.rawurldecode($path);
	$tpl = file_get_contents($tpl_path);
	$tpl = str_replace('<textarea','<text_area',$tpl);
	$tpl = str_replace('</textarea>','</text_area>',$tpl);
	$smarty->assign('tpl_path',$tpl_path);
	$smarty->assign('tpl',$tpl);
}

//红头船
?>