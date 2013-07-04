<?php
function module_contact()
{
	global $smarty;
	$contact = array();
	$obj = new varia();
	$obj->set_where("var_lang = '".S_LANG."'");
	$obj->set_where("var_name = 'contact'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = explode('{v}',$list[$i]['var_value']);
		$contact[$i]['word'] = $arr[0];
		$contact[$i]['content'] = $arr[1];
	}
	$smarty->assign('contact',$contact);
}

//红头船
?>