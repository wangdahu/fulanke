<?php
function edit_user()
{
	$use_id = post('use_id');
	$use_birthday = mktime(8,0,0,post('birthday_month'),post('birthday_day'),post('birthday_year'));
	$use_sex = post('sex');
	$use_real_name = post('real_name');
	$use_email = post('email');
	$use_qq = post('qq');
	$use_tel = post('tel');
	$use_phone = post('phone');
	$use_address = post('address');
	
	$obj = new users();
	$obj->set_value('use_birthday',$use_birthday);
	$obj->set_value('use_sex',$use_sex);
	$obj->set_value('use_real_name',$use_real_name);
	$obj->set_value('use_email',$use_email);
	$obj->set_value('use_qq',$use_qq);
	$obj->set_value('use_tel',$use_tel);
	$obj->set_value('use_phone',$use_phone);
	$obj->set_value('use_address',$use_address);
	$obj->set_where("use_id = $use_id");
	$obj->edit();
	set_cookie('result',1);
}

function edit_pwd()
{
	$use_id = post('use_id');
	$new_pwd = post('new_pwd');
	$re_pwd = post('re_pwd');

	$use_password = md5($new_pwd);
	$obj = new users();
	$obj->set_value('use_password',$use_password);
	$obj->set_where('');
	$obj->set_where("use_id = $use_id");
	$obj->edit();
	set_cookie('result',1);
}

function del_user()
{
	$id = post('id');
	$obj = new users();
	$obj->set_where("use_id = $id");
	$obj->del();
	
	$obj = new comment();
	$obj->set_value('com_user_id',0);
	$obj->set_where("com_user_id = $id");
	$obj->edit();
	
	$obj = new message();
	$obj->set_value('mes_user_id',0);
	$obj->set_where("mes_user_id = $id");
	$obj->edit();
	
	set_cookie('result',1);
}

function reply_mes()
{
	$mes_id = post('mes_id');
	$mes_reply = post('mes_reply');
	$obj = new message();
	$obj->set_value('mes_reply',$mes_reply);
	$obj->set_where("mes_id = $mes_id");
	$obj->edit();
	set_cookie('result',1);
}

function reply_comment()
{
	$com_id = post('com_id');
	$com_reply = post('com_reply');
	$obj = new comment();
	$obj->set_value('com_reply',$com_reply);
	$obj->set_where("com_id = $com_id");
	$obj->edit();
	set_cookie('result',1);
}

function reply_booking()
{
	$boo_id = post('boo_id');
	$boo_reply = post('boo_reply');
	$obj = new booking();
	$obj->set_value('boo_reply',$boo_reply);
	$obj->set_where("boo_id = $boo_id");
	$obj->edit();
	set_cookie('result',1);
}

function add_question()
{
	$question = post('question');
	$input_type = post('input_type');
	$answer = post('answer');
	if($question !='' && $input_type != '' && $answer != '')
	{
		$val = $question.'{v}'.$input_type.'{v}'.str_replace('|','{v}',$answer);
		$obj = new varia();
		$obj->set_value('var_name','research');
		$obj->set_value('var_value',$val);
		$obj->set_value('var_lang',S_LANG);
		$obj->add();
	}
	set_cookie('result',1);
}

function edit_question()
{
	$obj = new varia();
	for($i = 0; $i < count($_POST['id']); $i ++)
	{
		$question = strict($_POST['question'][$i]);
		$input_type = strict($_POST['input_type'][$i]);
		$answer = strict($_POST['answer'][$i]);
		$id = strict($_POST['id'][$i]);
		if($question !='' && $input_type != '' && $answer != '')
		{
			$val = $question.'{v}'.$input_type.'{v}'.str_replace('|','{v}',$answer);
			$obj->set_value('var_value',$val);
			$obj->set_where('');
			$obj->set_where("var_id = $id");
			$obj->edit();
		}
	}
	set_cookie('result',1);
}

function edit_notice()
{
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('notice',$var_text,true);
	set_cookie('result',1);
}

function edit_online()
{
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('service_code',$var_text,true);
	set_cookie('result',1);
}

function edit_agreement()
{
	$var_text = post('editor','loose');
	$obj = new varia();
	$obj->edit_var_value('user_agreement',$var_text,true);
	set_cookie('result',1);
}

function add_or_edit_link()
{
	$lin_id = post('lin_id');
	$lin_word = post('lin_word');
	$lin_url = post('lin_url');
	$lin_img = post('lin_img');
	$lin_index = post('lin_index');
	$lin_title = post('lin_title');
	if(str_replace('http://','',$lin_img) == '')
	{
		$lin_img = 'none';
	}
	$obj = new link();
	$obj->set_value('lin_word',$lin_word);
	$obj->set_value('lin_url',$lin_url);
	$obj->set_value('lin_img',$lin_img);
	$obj->set_value('lin_index',$lin_index);
	$obj->set_value('lin_title',$lin_title);
	if($lin_id != '')
	{
		$obj->set_where("lin_id = $lin_id");
		$obj->edit();
	}else{
		$obj->set_value('lin_lang',S_LANG);
		$obj->add();
	}
	set_cookie('result',1);
}

//红头船
?>