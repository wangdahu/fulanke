<?php
function module_booking_info()
{
	global $smarty,$pro_id;
	$obj = new booking();
	$obj->set_where("boo_pro_id = $pro_id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$one['pro_title'] = get_data('product',$one['boo_user_id'],'pro_title');
		$smarty->assign('booking',$one);
	}else{
		rhs_error();
	}
}

//红头船
?>