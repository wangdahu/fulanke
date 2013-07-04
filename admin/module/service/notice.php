<?php
function module_notice()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('editor_text',$obj->get_value('notice',true));
}

//红头船
?>