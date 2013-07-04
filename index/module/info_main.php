<?php
function module_info_main()
{
	switch(post('cmd'))
	{
		case 'check_username': check_username();break;
		case 'register': register();break;
		case 'user_login': user_login();break;
		case 'add_message': add_message();break;
		case 'add_comment': add_comment();break;
		case 'add_research': add_research();break;
	}
}

function check_username()
{
	$use_username = post('val');
	$obj = new users();
	$obj->set_where("use_username = '$use_username'");
	if($obj->get_count() > 0)
	{
		echo 1;
	}else{
		echo 0;
	}
	exit();
}

function register()
{
	safe('register');
	global $smarty,$lang;
	$use_username = post('username');
	$use_password = post('password');
	$re_password = post('re_password');
	$use_real_name = post('real_name');
	$use_email = post('email');
	$use_qq = post('qq');
	$use_tel = post('tel');
	$use_address = post('address');
	$agreement = post('agreement');
	
	$flag = false;
	$obj = new users();
	$obj->set_where("use_username = '$use_username'");
	if(
	$obj->get_count() > 0 ||
	strlen($use_username) < 6 ||
	strlen($use_username) > 15 ||
	strlen($use_password) < 6 ||
	strlen($use_password) > 15 ||
	$use_password != $re_password ||
	$use_real_name == '' ||
	$use_email == '' ||
	$use_qq == '' ||
	$use_tel == '' ||
	$use_address == '' ||
	$agreement != 1
	){
		$info_text = $lang['submit_error_info'];
	}else{
		$flag = true;
		$use_password = md5($use_password);
		$obj->set_value('use_username',$use_username);
		$obj->set_value('use_password',$use_password);
		$obj->set_value('use_real_name',$use_real_name);
		$obj->set_value('use_email',$use_email);
		$obj->set_value('use_qq',$use_qq);
		$obj->set_value('use_tel',$use_tel);
		$obj->set_value('use_address',$use_address);
		$obj->set_value('use_reg_time',time());
		$obj->add();
		set_cookie('user_username',$use_username);
		set_cookie('user_password',$use_password);
	}
	if($flag)
	{
		$info_text = $lang['reg_success'];
		$link_href = S_ROOT.S_URL_PREFIX.'user/';
		$link_text = $lang['enter_user_center'];
	}else{
		$link_href = S_ROOT.S_URL_PREFIX.'user/mod-register/';
		$link_text = $lang['go_back'];
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_href',$link_href);
	$smarty->assign('link_text',$link_text);
}

function user_login()
{
	safe('user_login');
	global $smarty,$lang;
	$info_text = post('info_text');
	$link_text = post('link_text');
	$link_href = post('link_href');
	$username = post('username');
	$password = post('password');
	
	if(strlen($username) > 30){$username = substr($username,30);}
	if(strlen($password) > 30){$password = substr($password,30);}
	if($username == '' or $password == '')
	{
		unset_cookie('user_username');
		unset_cookie('user_password');
		$info_text = $lang['user_pwd_empty'];
		$link_text = $lang['re_login'];
	}else{
		$password = md5($password);
		$obj = new users();
		$obj->set_field('use_id,use_last_login');
		$obj->set_where("use_username = '$username'");
		$obj->set_where("use_password = '$password'");
		$one = $obj->get_one();
		if(count($one) !== 0)
		{
			set_cookie('user_username',$username);
			set_cookie('user_password',$password);
			$use_id = $one['use_id'];
			$use_prev_login = $one['use_last_login'];
			$use_last_login = time();
			$obj->set_value('use_prev_login',$use_prev_login);
			$obj->set_value('use_last_login',$use_last_login);
			$obj->set_where('');
			$obj->set_where("use_id = $use_id");
			$obj->edit();
			$info_text = $info_text != '' ? $info_text : $lang['user_login_success'];
			$link_text = $link_text != '' ? $link_text : $lang['enter_user_center'];
		}else{
			unset_cookie('user_username');
			unset_cookie('user_password');
			$info_text = $lang['not_exist_or_error'];
			$link_text = $lang['re_login'];
		}
	}
	$link_href = S_ROOT . S_URL_PREFIX . ($link_href != '' ? $link_href : 'user/');
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$link_text);
	$smarty->assign('link_href',$link_href);
}

function add_message()
{
	safe('message');
	global $smarty,$user_id,$lang;
	$mes_email = post('email');
	$mes_type = post('type');
	$mes_title = post('title');
	$mes_text = post('text');
	$mes_show = post('show');
	if($mes_email == '' || $mes_type == '' || $mes_title == '' || $mes_text == '')
	{
		$info_text = $lang['submit_error_info'];
	}else{
		$mes_add_time = time();
		if($mes_show != '2')
		{
			$mes_show = '0';
		}
		$obj = new message();
		$obj->set_value('mes_user_id',$user_id);
		$obj->set_value('mes_type',$mes_type);
		$obj->set_value('mes_email',$mes_email);
		$obj->set_value('mes_title',$mes_title);
		$obj->set_value('mes_text',$mes_text);
		$obj->set_value('mes_add_time',$mes_add_time);
		$obj->set_value('mes_show',$mes_show);
		$obj->set_value('mes_lang',S_LANG);
		$obj->add();
		if(intval(get_varia('sentmail')))
		{
			$email_title = '您的网站有了新的留言';
			$email_text = "[$mes_type] $mes_title <br /> $mes_text";
			call_send_email($email_title,$email_text,$user_id,$mes_email);
		}
		$info_text = $lang['submit_message'];
	}
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['go_back']);
	$smarty->assign('link_href',S_ROOT.S_URL_PREFIX.'message/');	
}

function add_comment()
{
	safe('comment');
	global $smarty,$user_id,$lang;
	$com_type = post('type');
	$com_page_id = post('page_id');
	$com_email = post('email');
	$com_rank = post('rank');
	$com_text = post('text');
	if($com_type == '' || $com_page_id == '' || $com_rank == '' || $com_email == '' || $com_text == '')
	{
		$info_text = $lang['submit_error_info'];
	}else{
		$com_add_time = time();
		$obj = new comment();
		$obj->set_value('com_user_id',$user_id);
		$obj->set_value('com_type',$com_type);
		$obj->set_value('com_page_id',$com_page_id);
		$obj->set_value('com_email',$com_email);
		$obj->set_value('com_rank',$com_rank);
		$obj->set_value('com_text',$com_text);
		$obj->set_value('com_add_time',$com_add_time);
		$obj->set_value('com_show',0);
		$obj->set_value('com_lang',S_LANG);
		$obj->add();
		if(intval(get_varia('sentmail')))
		{
			$email_title = '您的网站有了新的评论';
			$str = get_data($com_type,$com_page_id,substr($com_type,0,3).'_title');
			$email_text = '评论：《' . $str . '》<br />' . $com_text;
			call_send_email($email_title,$email_text,$user_id,$com_email);
		}
		$info_text = $lang['submit_comment'];
	}
	$link_href = S_ROOT.S_URL_PREFIX.$com_type.'/id-'.$com_page_id.'/';
	$smarty->assign('info_text',$info_text);
	$smarty->assign('link_text',$lang['go_back']);
	$smarty->assign('link_href',$link_href);
}

function add_research()
{
	safe('research');
	global $smarty,$user_id,$lang;
	$k = 0;
	$text = '';
	$obj = new varia();
	$obj->set_where("var_name = 'research'");
	$list = $obj->get_list();
	if(count($list) > 0)
	{
		for($i = 0; $i < count($list); $i ++)
		{
			$arr = explode('{v}',$list[$i]['var_value']);
			$text = $text.$arr[0];
			for($j = 2; $j < count($arr); $j ++)
			{
				if($arr[1] != 'radio')
				{
					$val = post('res_'.$k);
					$text = $text.'['.$val.']';
					$k ++;
				}
			}
			if($arr[1] == 'radio')
			{
				$val = post('res_'.$k);
				$text = $text.'['.$val.']';
				$k ++;
			}
			$text = $text.'{v}';
		}
		$obj = new research();
		$obj->set_value('res_user_id',$user_id);
		$obj->set_value('res_add_time',time());
		$obj->set_value('res_text',$text);
		$obj->set_value('res_lang',S_LANG);
		$obj->add();
		if(intval(get_varia('sentmail')))
		{
			$email_title = '您的网站收到新的调查问卷';
			$email_text = str_replace('{v}','<br>',str_replace('[]','',$text));
			call_send_email($email_title,$email_text,$user_id);
		}
		$smarty->assign('info_text',$lang['submit_research']);
		$smarty->assign('link_text',$lang['go_back']);
		$smarty->assign('link_href',S_ROOT.S_URL_PREFIX.'message/');
	}
}

//红头船
?>