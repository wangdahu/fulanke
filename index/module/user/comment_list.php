<?php
function module_comment_list()
{
	global $smarty,$page,$user_id;
	$obj = new comment();
	$obj->set_where("com_user_id = $user_id");
	$obj->set_page_size(5);
	$obj->set_page_num($page);	
	$sheet = $obj->get_sheet();
	for($i = 0; $i < count($sheet); $i ++)
	{
		$sheet[$i]['user_name'] = get_data('users',$sheet[$i]['com_user_id'],'use_username');
		$table = $sheet[$i]['com_type'];
		$sheet[$i]['title'] = get_data($table,$sheet[$i]['com_page_id'],substr($table,0,3).'_title');
	}
	set_link($obj->get_page_sum());
	$smarty->assign('comment',$sheet);
}

//红头船
?>