<?php
function module_recruit_main()
{
	global $smarty,$page;
	$obj = new article();
	$obj->set_field('art_title,art_text,art_add_time');
	$obj->set_where("art_type = 'recruit'");
	$obj->set_page_size(5);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	set_link($obj->get_page_sum());
	$smarty->assign('recruit',$sheet);
}

//红头船
?>