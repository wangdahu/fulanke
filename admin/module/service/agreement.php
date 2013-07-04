<?php
function module_agreement()
{
	global $smarty;
	$obj = new varia();
	$smarty->assign('editor_text',$obj->get_value('user_agreement',true));
}

//红头船
?>