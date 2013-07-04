<?php
function module_lang_edit()
{
	global $smarty,$path;
	$lang_text = file_get_contents('languages/'.$path);
	$smarty->assign('lang_text',$lang_text);
}

//红头船
?>