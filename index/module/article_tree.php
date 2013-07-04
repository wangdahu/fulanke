<?php
function module_article_tree()
{
	global $smarty;
	$obj = new cat_art();
	$smarty->assign('art_tree',$obj->get_tree());
}

//红头船
?>