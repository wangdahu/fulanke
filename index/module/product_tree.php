<?php
function module_product_tree()
{
	global $smarty;
	$obj = new cat_pro();
	$smarty->assign('pro_tree',$obj->get_tree());
}

//红头船
?>