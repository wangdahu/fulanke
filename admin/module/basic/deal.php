<?php
function edit_contact()
{
	$obj = new varia();
	for($i = 0; $i < count($_POST['id']); $i ++)
	{
		$cue = strict($_POST['cue'][$i]);
		$content = strict($_POST['content'][$i]);
		$id = strict($_POST['id'][$i]);
		$val = $cue.'{v}'.$content;
		$obj->set_value('var_value',$val);
		$obj->set_where('');
		$obj->set_where("var_id = $id");
		$obj->edit();
	}
	set_cookie('result',1);
}

function add_contact()
{
	$cue = post('cue');
	$content = post('content');
	$val = $cue.'{v}'.$content;
	$obj = new varia();
	$obj->set_value('var_name','contact');
	$obj->set_value('var_value',$val);
	$obj->set_value('var_lang',S_LANG);
	$obj->add();
	set_cookie('result',1);
}

function del_contact()
{
	$id = post('id');
	$obj = new varia();
	$obj->set_where("var_id = $id");
	$obj->del();
	set_cookie('result',1);
}

function edit_site()
{
	$site_title = post('site_title');
	$site_name = post('site_name');
	$site_domain = post('site_domain');
	$site_record = post('site_record');
	$site_record_url = post('site_record_url');
	$site_tech = post('site_tech');
	$site_tech_url = post('site_tech_url');
	$site_keywords = post('site_keywords');
	$site_description = cut_str(post('site_description'),250);
	$statistical_code = post('statistical_code','loose');
	$share_code = post('share_code','loose');
	
	$obj = new varia();
	$obj->edit_var_value('site_title',$site_title);
	$obj->edit_var_value('site_name',$site_name);
	$obj->edit_var_value('site_domain',$site_domain);
	$obj->edit_var_value('site_record',$site_record);
	$obj->edit_var_value('site_record_url',$site_record_url);
	$obj->edit_var_value('site_tech',$site_tech);
	$obj->edit_var_value('site_tech_url',$site_tech_url);
	$obj->edit_var_value('site_keywords',$site_keywords);
	$obj->edit_var_value('site_description',$site_description);
	$obj->edit_var_value('statistical_code',$statistical_code,true);
	$obj->edit_var_value('share_code',$share_code,true);
	set_cookie('result',1);
}

function edit_nav()
{
	for($i = 0; $i < count($_POST['id']); $i ++)
	{
		$word = strict($_POST['word'][$i]);
		$link = strict($_POST['link'][$i]);
		$id = strict($_POST['id'][$i]);
		$obj = new menu();
		$obj->set_value('men_name',$word);
		$obj->set_value('men_url',$link);
		$obj->set_where("men_id = $id");
		$obj->edit();
	}
	set_cookie('result',1);
}

function add_nav()
{
	$type = post('type');
	$word = post('word');
	$link = post('link');
	$obj = new menu();
	$obj->set_value('men_type',$type);
	$obj->set_value('men_name',$word);
	$obj->set_value('men_url',$link);
	$obj->set_value('men_lang',S_LANG);
	$obj->add();
	set_cookie('result',1);
}

function edit_title()
{
	for($i = 0; $i < count($_POST['id']); $i ++)
	{
		$site = strict($_POST['site'][$i]);
		$title = strict($_POST['title'][$i]);
		$priority = strict($_POST['priority'][$i]);
		$id = strict($_POST['id'][$i]);
		$val = $site.'{v}'.$title.'{v}'.intval($priority);
		$obj = new varia();
		$obj->set_value('var_value',$val);
		$obj->set_where("var_id = $id");
		$obj->edit();
	}
	set_cookie('result',1);
}

function add_title()
{
	$site = post('site');
	$title = post('title');
	$priority = post('priority');
	$val = $site.'{v}'.$title.'{v}'.intval($priority);
	$obj = new varia();
	$obj->set_value('var_name','title');
	$obj->set_value('var_value',$val);
	$obj->set_value('var_lang',S_LANG);
	$obj->add();
	set_cookie('result',1);
}

function edit_show()
{
	$id = post('id');
	$arr = explode('-',$id);
	$xml_path = S_TPL_PATH.'index/config.xml';
	$xml = new domdocument();
	$xml->load($xml_path);
	$tag = $xml->getelementsbytagname('site')->item(0)->getelementsbytagname('*');
	$len = $tag->length;
	$page_name = '';
	$page_node = '';
	$flag = 0;
	for($i = 0; $i < $len; $i ++)
	{
		$node_name = $tag->item($i)->nodeName;
		$node_text = str_replace('*','',$tag->item($i)->nodeValue);
		if($node_name == $arr[0])
		{
			$flag = 1;
		}elseif($node_name != 'module')
		{
			$flag = 0;
		}
		if($flag == 1 && $node_name == 'module' && $node_text == $arr[1])
		{
			if(intval($arr[2]))
			{
				$tag->item($i)->nodeValue = $node_text;
				edit_tpl_show($arr[0],$arr[1],1);
			}else{
				$tag->item($i)->nodeValue = '*'.$node_text;
				edit_tpl_show($arr[0],$arr[1],0);
			}
		}
	}
	echo 1;
}

function edit_tpl_show($page_name,$node_text,$val)
{
	$path = S_TPL_PATH.'index/'.$page_name.'.tpl';
	$file = file_get_contents($path);
	if($val)
	{
		$file = str_replace('{*include file="module/'.$node_text.'.tpl"*}','{include file="module/'.$node_text.'.tpl"}',$file);
	}else{
		$file = str_replace('{include file="module/'.$node_text.'.tpl"}','{*include file="module/'.$node_text.'.tpl"*}',$file);
	}
	file_put_contents($path,$file);
}

function power_set()
{
	global $admin_id;
	$adm_id = post('adm_id');
	$obj = new admin();
	$obj->set_where("adm_id = $admin_id");
	$a = $obj->get_one();
	$obj->set_where('');
	$obj->set_where("adm_id = $adm_id");
	$b = $obj->get_one();
	if($a['adm_grade'] < $b['adm_grade'])
	{
		$adm_power = '';
		for($i = 0; $i < count($_POST['url']); $i ++)
		{
			$adm_power .= strict($_POST['url'][$i]) . '|';
		}
		$adm_power = substr($adm_power,0,-1);
		$obj->set_value('adm_power',$adm_power);
		$obj->set_where('');
		$obj->set_where("adm_id = $adm_id");
		$obj->edit();
		set_cookie('result',1);
	}
}

function check_admin_name()
{
	$name = post('name');
	$obj = new admin();
	$obj->set_where("adm_username = '$name'");
	if($obj->get_count())
	{
		echo 1;
	}else{
		echo 0;
	}
}

function add_admin()
{
	global $admin_id;
	$adm_username = post('adm_username');
	$adm_password = post('adm_password');
	$re_password = post('re_password');	
	$obj = new admin();
	$obj->set_where("adm_id = $admin_id");
	$one = $obj->get_one();
	$adm_grade = $one['adm_grade'] + 1;
	$obj->set_where('');
	$obj->set_where("adm_username = '$adm_username'");
	if($obj->get_count() == 0 && strlen($adm_username) >= 5 && strlen($adm_password) >= 5 && $adm_password == $re_password)
	{
		$obj->set_value('adm_username',$adm_username);
		$obj->set_value('adm_password',md5($adm_password));
		$obj->set_value('adm_grade',$adm_grade);
		$obj->add();
		set_cookie('result',1);
	}
}

function edit_admin()
{
	global $admin_id;
	$adm_username = post('adm_username');
	$adm_password = post('adm_password');
	$re_password = post('re_password');	
	$obj = new admin();
	$obj->set_where("adm_id = $admin_id");
	$a = $obj->get_one();
	$obj->set_where('');
	$obj->set_where("adm_username = '$adm_username'");
	$b = $obj->get_one();
	if($obj->get_count())
	{
		if($a['adm_grade'] < $b['adm_grade'])
		{
			if(strlen($adm_password) >= 5 && $adm_password == $re_password)
			{
				$obj->set_value('adm_password',md5($adm_password));
				$obj->edit();
				set_cookie('result',1);
			}
		}
	}
}

function del_admin()
{
	global $admin_id;
	$adm_id = post('id');
	$obj = new admin();
	$obj->set_where("adm_id = $admin_id");
	$a = $obj->get_one();
	$obj->set_where('');
	$obj->set_where("adm_id = $adm_id");
	$b = $obj->get_one();
	if($obj->get_count())
	{
		if($a['adm_grade'] < $b['adm_grade'])
		{
			$obj->del();
			set_cookie('result',1);
		}
	}
}

function db_backup()
{
	$file = '#'.date('Ymdhis').'.php';
	if(copy(S_DB_PATH.S_DB_NAME,S_DB_PATH.'backup/'.$file))
	{
		set_cookie('result',1);
	}
}

function db_restore()
{
	$file = post('file');
	if(substr($file,-4) == '.php')
	{
		if(file_exists(S_DB_PATH.S_DB_NAME))
		{
			if(copy(S_DB_PATH.'backup/'.$file,S_DB_PATH.S_DB_NAME))
			{
				$result = 1;
			}
		}
	}
	echo isset($result)?$result:0;
}

function set_multilingual()
{
	include('admin/function.php');
	$val = intval(post('multilingual'));
	edit_config('S_MULTILINGUAL',S_MULTILINGUAL,$val);
	$obj = new varia();
	$obj->set_where("var_name = 'languages'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = explode('{v}',$list[$i]['var_value']);
		$pack_name = $arr[0];
		$index_entrance = $arr[1];
		$admin_entrance = $arr[2];
		if($pack_name == 'zh-cn')
		{
			continue;
		}elseif($val == 1){
			if(!file_exists($index_entrance))
			{
				$file = file_get_contents('admin/index.txt');
				$file = str_replace('{$pack_name}',$pack_name,$file);
				$file = str_replace('{$index_entrance}',$index_entrance,$file);
				$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
				file_put_contents($index_entrance,$file);
			}
			if(!file_exists($admin_entrance))
			{
				$file = file_get_contents('admin/admin.txt');
				$file = str_replace('{$pack_name}',$pack_name,$file);
				$file = str_replace('{$index_entrance}',$index_entrance,$file);
				$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
				file_put_contents($admin_entrance,$file);
			}
		}elseif($val == 0){
			if(file_exists($index_entrance)) unlink($index_entrance);
			if(file_exists($admin_entrance)) unlink($admin_entrance);
		}
	}
	set_cookie('result',1);
}

function set_session_method()
{
	include('admin/function.php');
	$val = intval(post('val'));
	edit_config('S_SESSION',S_SESSION,$val);
	echo 1;
}

function clear_cache()
{
	$dir = 'admin/compile';
	$list = scandir($dir);
	foreach($list as $file)
	{
		if($file != '.' && $file != '..' && !is_dir($dir.'/'.$file))
		{
			unlink($dir.'/'.$file);
		}
	}
	$dir = 'index/compile';
	$list = scandir($dir);
	foreach($list as $file)
	{
		if($file != '.' && $file != '..' && !is_dir($dir.'/'.$file))
		{
			unlink($dir.'/'.$file);
		}
	}
	echo 1;
}

function set_weak_static()
{
	include('admin/function.php');
	$val = intval(post('val'));
	edit_config('S_WEAK_STATIC',S_WEAK_STATIC,$val);
	echo 1;
}

function set_sham_static()
{
	include('admin/function.php');
	$val = intval(post('val'));
	edit_config('S_SHAM_STATIC',S_SHAM_STATIC,$val);
	if($val)
	{
		edit_config('S_URL_PREFIX',S_URL_PREFIX,'');
		copy('admin/module/basic/htaccess.txt','.htaccess');
	}elseif(file_exists('.htaccess')){
		if(S_PURE_STATIC == 1)
		{
			edit_config('S_URL_PREFIX',S_URL_PREFIX,'html/');
		}else{
			edit_config('S_URL_PREFIX',S_URL_PREFIX,'?/');
		}
		unlink('.htaccess');
	}
	echo 1;
}

function set_pure_static()
{
	include('admin/function.php');
	$val = intval(post('val'));
	edit_config('S_PURE_STATIC',S_PURE_STATIC,$val);
	if($val)
	{
		edit_config('S_URL_PREFIX',S_URL_PREFIX,'html/');
	}else{
		edit_config('S_URL_PREFIX',S_URL_PREFIX,'?/');
	}
	echo 1;
}

function static_check()
{
	if(S_WEAK_STATIC == 1 && S_PURE_STATIC == 1)
	{
		echo 1;
	}else{
		echo 0;
	}
}

function clear_static()
{
	$prefix = post('prefix');
	if($prefix == '0')
	{
		$dir = 'html';
	}else{
		$dir = 'html/' . $prefix;
	}
	del_dir($dir);
	echo 1;
}

function save_sentmail()
{
	$smtp = post('smtp');
	$send = post('send');
	$password = post('password');
	$receive = post('receive');
	$obj = new varia();
	$obj->edit_var_value('sentmail_smtp',$smtp);
	$obj->edit_var_value('sentmail_send',$send);
	$obj->edit_var_value('sentmail_password',$password);
	$obj->edit_var_value('sentmail_receive',$receive);
	set_cookie('result',1);
}

function create_static()
{
	include('admin/module/basic/create_static.php');
	do_create_static();
}

//红头船
?>