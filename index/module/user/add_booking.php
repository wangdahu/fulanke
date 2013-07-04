<?php
function module_add_booking()
{
	global $smarty,$user_id,$pro_id;
	$pro_title = get_data('product',$pro_id,'pro_title');
	$obj = new users();
	$obj->set_where("use_id = $user_id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$boo_consignee = $one['use_real_name'];
		$boo_email = $one['use_email'];
		$boo_tel = $one['use_tel'];
	}else{
		$boo_consignee = '';
		$boo_email = '';
		$boo_tel = '';
	}
	$smarty->assign('pro_title',$pro_title);
	$smarty->assign('boo_consignee',$boo_consignee);
	$smarty->assign('boo_email',$boo_email);
	$smarty->assign('boo_tel',$boo_tel);
}

//红头船
?>