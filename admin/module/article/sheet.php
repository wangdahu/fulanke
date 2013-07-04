<?php
function module_sheet()
{
	global $smarty,$field,$key,$page;
	$link_page = 'article/mod-sheet';
	if($field != '') $link_page = $link_page.'/field-'.$field;
	if($key != '') $link_page = $link_page.'/key-'.$key;
	$obj = new article();
	$obj->set_where("art_type = 'default'");
	if($key != '')
	{
		$obj->set_where("$field like '%".rawurldecode($key)."%'");
	}
	$obj->set_page_size(10);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['cat_name'] = get_data('cat_art',$sheet[$i]['art_cat_id'],'cat_name');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('link_page',$link_page);
	$smarty->assign('article',$sheet);
}

//红头船
?>