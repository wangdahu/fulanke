<?php
function select_tpl()
{
	include('admin/function.php');
	$tpl = post('tpl');
	$n = 'S_TPL_PATH';
	$c = S_TPL_PATH;
	$v = 'templates/'.$tpl.'/';
	edit_config($n,$c,$v);
	set_cookie('result',1);
}

function edit_tpl()
{
	$tpl_path = post('tpl_path');
	$tpl = post('tpl','no_filter');
	$tpl = str_replace('<text_area','<textarea',$tpl);
	$tpl = str_replace('</text_area>','</textarea>',$tpl);
	file_put_contents($tpl_path,$tpl);
	set_cookie('result',1);
}

function add_or_edit_focus()
{
	$pic_id = post('pic_id');
	$pic_path = post('pic_path');
	$pic_url = post('pic_url');
	$pic_title = post('pic_title');
	$pic_site = post('pic_site');
	if($pic_url == '' || $pic_url == 'http://')
	{
		$pic_url = 'index.php';
	}
	$obj = new picture();
	$obj->set_value('pic_path',$pic_path);
	$obj->set_value('pic_url',$pic_url);
	$obj->set_value('pic_title',$pic_title);
	$obj->set_value('pic_site',$pic_site);
	$obj->set_value('pic_type','focus');
	if($pic_id != '')
	{
		$obj->set_where("pic_id = $pic_id");
		$obj->edit();
	}else{
		$obj->set_value('pic_lang',S_LANG);
		$obj->add();
	}
	set_cookie('result',1);
}

function add_lang()
{
	include('admin/function.php');
	$chinese_name = post('chinese_name');
	$foreign_name = post('foreign_name');
	$pack_name = post('pack_name');
	$short_name = post('short_name');
	$index_entrance = post('index_entrance');
	$admin_entrance = post('admin_entrance');
	if($chinese_name != '' && $foreign_name != '' && $pack_name != '' && $index_entrance != '' && $admin_entrance != '' && $index_entrance != 'index.php' && $admin_entrance != 'admin.php')
	{
		$var_value = $pack_name .'{v}'. $index_entrance .'{v}'. $admin_entrance .'{v}'. $chinese_name .'{v}'. $foreign_name;
		
		$obj = new varia();
		$obj->add_var_value('languages',$var_value);
		
		$site = get_site_info();
		$obj->add_var_value('site_title',$site['title'],$pack_name);
		$obj->add_var_value('site_name',$site['name'],$pack_name);
		$obj->add_var_value('site_record',$site['record'],$pack_name);
		$obj->add_var_value('site_tech',$site['tech'],$pack_name);
		$obj->add_var_value('site_keywords',$site['keywords'],$pack_name);
		$obj->add_var_value('site_description',$site['description'],$pack_name);
		
		$obj->add_var_value('notice','',$pack_name,true);
		$obj->add_var_value('service_code','',$pack_name,true);
		$obj->add_var_value('user_agreement','',$pack_name,true);
		
		if(!file_exists('languages/'.$pack_name.'.php'))
		{
			copy('languages/'.S_LANG.'.php','languages/'.$pack_name.'.php');
		}
		
		if(S_MULTILINGUAL)
		{
			$file = file_get_contents('admin/index.txt');
			$file = str_replace('{$pack_name}',$pack_name,$file);
			$file = str_replace('{$index_entrance}',$index_entrance,$file);
			$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
			file_put_contents($index_entrance,$file);
			
			$file = file_get_contents('admin/admin.txt');
			$file = str_replace('{$pack_name}',$pack_name,$file);
			$file = str_replace('{$index_entrance}',$index_entrance,$file);
			$file = str_replace('{$admin_entrance}',$admin_entrance,$file);
			file_put_contents($admin_entrance,$file);
		}
		set_cookie('result',1);
	}
}

function del_lang()
{
	$id = post('id');
	$obj = new varia();
	$obj->set_where('');
	$obj->set_where("var_id = $id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$arr = explode('{v}',$one['var_value']);
		$pack_name = $arr[0];
		$index_entrance = $arr[1];
		$admin_entrance = $arr[2];
		if($index_entrance != 'index.php' && $admin_entrance != 'admin.php')
		{
			$obj->del();
			
			$table = array('article','booking','cat_art','cat_pro','comment','link','menu','message','picture','product','research','varia');
			//以下表不处理：admin,safe,users
			for($i = 0; $i < count($table); $i ++)
			{
				$tab = substr($table[$i],0,3);
				$obj = new $table[$i];
				$obj->set_where('');
				$obj->set_where($tab . "_lang = '$pack_name'");
				$obj->del();
			}
			
			if(file_exists($index_entrance)) unlink($index_entrance);
			if(file_exists($admin_entrance)) unlink($admin_entrance);
			if(file_exists('languages/'.$pack_name.'.php')) unlink('languages/'.$pack_name.'.php');
			
			set_cookie('result',1);
		}
	}
}

function select_lang()
{
	include('admin/function.php');
	$lang = post('lang');
	$n = 'S_LANG';
	$c = S_LANG;
	$v = substr($lang,0,-4);
	edit_config($n,$c,$v);
	set_cookie('result',1);
}

function edit_lang()
{
	$path = post('path');
	$lang_text = post('lang_text','no_filter');
	file_put_contents('languages/'.$path,$lang_text);
	set_cookie('result',1);
}

function upload()
{
	$dir = post('dir');
	$file = post('file');
	$extension = strtolower(get_file_name($file,'.'));
	if(strpos('asp,php,jsp,aspx',$extension) === false)
	{
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		set_cookie('file',$dir.$file);
	}
	set_cookie('result',1);
}


//红头船
?>