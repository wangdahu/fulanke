<?php
function module_edit()
{
	global $smarty,$id;
	$obj = new article();
	$obj->set_where("art_id = $id");
	$one = $obj->get_one();
	$smarty->assign('article',$one);
	$smarty->assign('editor_text',$one['art_text']);
}

//红头船
?>