<?php
function module_sheet()
{
	global $smarty,$page;
	$obj = new article();
	$obj->set_where("art_type = 'download'");
	$obj->set_page_size(10);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('article',$sheet);
}

//红头船
?>