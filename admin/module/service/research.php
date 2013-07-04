<?php
function module_research()
{
	global $smarty,$page;
	$obj = new research();
	$obj->set_page_size(10);
	$obj->set_page_num($page);
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['res_user_id'],'use_username');
		$sheet[$i]['res_text'] = str_replace('{v}','<br>',str_replace('[]','',$sheet[$i]['res_text']));
	}
	set_link($obj->get_page_sum());
	$question = get_question();
	$smarty->assign('question',$question);	
	$smarty->assign('research',$sheet);
}

function get_question()
{
	$arr = array();
	$obj = new varia();
	$obj->set_where("var_name = 'research'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$arr[$i]['id'] = $list[$i]['var_id'];
		$val = $list[$i]['var_value'];
		$site = strpos($val,'{v}');
		$arr[$i]['question'] = substr($val,0,$site);
		$val = substr($val,$site + 3);
		$site = strpos($val,'{v}');
		$arr[$i]['type'] = substr($val,0,$site);
		$arr[$i]['answer'] = str_replace('{v}','|',substr($val,$site + 3));
	}
	return $arr;
}

//红头船
?>