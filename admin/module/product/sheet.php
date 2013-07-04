<?php
function module_sheet()
{
	global $smarty,$field,$key,$page;
	$link_page = 'product/mod-sheet';
	if($field != '') $link_page = $link_page.'/field-'.$field;
	if($key != '') $link_page = $link_page.'/key-'.$key;
	$obj = new product();
	if($key != '')
	{
		$obj->set_where("$field like '%".rawurldecode($key)."%'");
	}
	$obj->set_page_size(10);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('link_page',$link_page);
	$smarty->assign('product',$sheet);
}

//红头船
?>