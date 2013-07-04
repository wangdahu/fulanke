<?php
if(check_user_login() !== 0)
{
	$cmd = post('cmd');
	$cmd();
}else{
	exit();
}

function edit_profile()
{
	safe('edit_user');
	global $smarty,$user_id,$lang;
	$use_birthday = mktime(8,0,0,post('birthday_month'),post('birthday_day'),post('birthday_year'));
	$use_sex = post('sex');
	$use_real_name = post('real_name');
	$use_email = post('email');
	$use_qq = post('qq');
	$use_tel = post('tel');
	$use_phone = post('phone');
	$use_address = post('address');
	$use_question = post('question');
	$use_answer = post('answer');
	
	if($use_real_name == '' || $use_email == '' || $use_qq == '' || $use_tel == '' || $use_address == '')
	{
		$info_text = $lang['submit_error_info'];
	}else{
		$obj = new users();
		$obj->set_value('use_birthday',$use_birthday);
		$obj->set_value('use_sex',$use_sex);
		$obj->set_value('use_real_name',$use_real_name);
		$obj->set_value('use_email',$use_email);
		$obj->set_value('use_qq',$use_qq);
		$obj->set_value('use_tel',$use_tel);
		$obj->set_value('use_phone',$use_phone);
		$obj->set_value('use_address',$use_address);
		$obj->set_value('use_question',$use_question);
		$obj->set_value('use_answer',$use_answer);
		$obj->set_where("use_id = $user_id");
		$obj->edit();
		$info_text = $lang['over'];
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['go_back']);
	$smarty->assign('link_href',S_ROOT.S_URL_PREFIX.'user/mod-profile/');
}

function edit_pwd()
{
	safe('edit_pwd');
	global $smarty,$user_id,$lang;
	$old_pwd = post('old_pwd');
	$new_pwd = post('new_pwd');
	$re_pwd = post('re_pwd');
	if(strlen($old_pwd) < 6 || strlen($old_pwd) > 15 || strlen($new_pwd) < 6 || strlen($new_pwd) > 15 || $new_pwd != $re_pwd)
	{
		$info_text = $lang['submit_error_info'];
	}else{
		$use_password = md5($old_pwd);
		$obj = new users();
		$obj->set_where("use_id = $user_id");
		$obj->set_where("use_password = '$use_password'");
		if($obj->get_count() > 0)
		{
			$use_password = md5($new_pwd);
			$obj->set_value('use_password',$use_password);
			$obj->set_where('');
			$obj->set_where("use_id = $user_id");
			$obj->edit();
			$info_text = $lang['over'];
		}else{
			$info_text = $lang['old_pwd_error'];
		}
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['go_back']);
	$smarty->assign('link_href',S_ROOT.S_URL_PREFIX.'user/mod-profile/');
}

function add_booking()
{
	safe('booking');
	global $smarty,$user_id,$lang;
	$boo_pro_id = post('pro_id');
	$boo_number = post('number');
	$boo_text = post('text');
	$boo_consignee = post('consignee');
	$boo_email = post('email');
	$boo_tel = post('tel');
	$link_text = $lang['go_back'];
	$link_href = S_ROOT.S_URL_PREFIX.'user/mod-add_booking/pro_id-'.$boo_pro_id.'/';
	if($boo_pro_id == '' || $boo_number == '' || $boo_text == '' || $boo_consignee == '' || $boo_email == '' || $boo_tel == '')
	{
		$info_text = $lang['submit_error_info'];
	}else{
		$obj = new booking();
		$obj->set_value('boo_user_id',$user_id);
		$obj->set_value('boo_pro_id',$boo_pro_id);
		$obj->set_value('boo_number',$boo_number);
		$obj->set_value('boo_text',$boo_text);
		$obj->set_value('boo_consignee',$boo_consignee);
		$obj->set_value('boo_email',$boo_email);
		$obj->set_value('boo_tel',$boo_tel);
		$obj->set_value('boo_add_time',time());
		$obj->set_value('boo_lang',S_LANG);
		$obj->add();
		if(intval(get_varia('sentmail')))
		{
			$email_title = '您的网站有了新的产品订购信息';
			$email_text = '产品名称：' . get_data('product',$boo_pro_id,'pro_title') . '<br />';
			$email_text .= "订购数量：$boo_number <br />";
			$email_text .= "联系人：$boo_consignee <br />";
			$email_text .= "电子邮箱：$boo_email <br />";
			$email_text .= "联系电话：$boo_tel <br />";
			$email_text .= "附加说明：$boo_text <br />";
			call_send_email($email_title,$email_text,$user_id);
		}
		$info_text = $lang['booking_success'];
		$link_text = $lang['enter_user_center'];
		$link_href = S_ROOT.S_URL_PREFIX.'user/mod-booking_list/';
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$link_text);
	$smarty->assign('link_href',$link_href);
}

//红头船
?>