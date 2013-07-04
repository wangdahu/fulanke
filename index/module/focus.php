<?php
function module_focus()
{
	global $smarty,$url;
	if($url != '')
	{
		$arr = explode('/',$url);
		$url_page = $arr[1];
	}else{
		$url_page = 'index';
	}
	$obj = new picture();
	$obj->set_where("pic_type = 'focus'");
	$obj->set_where("pic_site = '$url_page'");
	$list = $obj->get_list();
	if(count($list) == 0)
	{
		$obj->set_where('');
		$obj->set_where("pic_lang = '".S_LANG."'");
		$obj->set_where("pic_type = 'focus'");
		$obj->set_where("pic_site = 'default'");
		$list = $obj->get_list();
	}
	$smarty->assign('focus',$list);
}

//红头船
?>