<?php
function module_user_edit()
{
	global $smarty,$id;
	$obj = new users();
	$obj->set_where("use_id = $id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$one['use_birthday_year'] = date('Y',$one['use_birthday']);
		$one['use_birthday_month'] = date('m',$one['use_birthday']);
		$one['use_birthday_day'] = date('d',$one['use_birthday']);
		$smarty->assign('profile',$one);
	}else{
		rhs_error();
	}
}

//红头船
?>