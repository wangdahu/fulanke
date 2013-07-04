<?php
function module_online()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('editor_text',$obj->get_value('service_code',true));
}

//红头船
?>