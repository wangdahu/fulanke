<?php
function do_create_static()
{
	$step = get_cookie('create_static_step');
	if($step != '')
	{
		switch($step)
		{
			case 'count':
			  set_cookie('create_static_sum',step_count());
			  set_cookie('create_static_id',get_start_id('product',''));
			break;
			case 'product_page':
			  $val = step_create_single_page('product','');
			  if($val != 0)
			  {
				  set_cookie('create_static_id',$val);
			  }else{
				  set_cookie('create_static_step','product_sheet_page');
				  set_cookie('create_static_page',1);
			  }
			break;
			case 'product_sheet_page':
			  $page_size = intval(get_varia('img_list_len'));
			  $val = step_create_sheet_page('product','',$page_size);
			  if($val != 0)
			  {
				  set_cookie('create_static_page',$val);
			  }else{
				  set_cookie('create_static_step','product_cat_sheet_page');
				  set_cookie('create_static_page',1);
				  set_cookie('create_static_cat',get_start_id('cat_pro',''));
			  }
			break;
			case 'product_cat_sheet_page':
			  $page_size = intval(get_varia('img_list_len'));
			  $val = step_create_cat_sheet_page('product','',$page_size);
			  if($val != 0 || $val === 'next_cat')
			  {
				  if($val == 'next_cat')
				  {
					  set_cookie('create_static_page',1);
				  }else{
					  set_cookie('create_static_page',$val);
				  }
			  }else{
				  set_cookie('create_static_step','article_page');
				  set_cookie('create_static_id',get_start_id('article','default'));
			  }
			break;
			case 'article_page':
			  $val = step_create_single_page('article','default');
			  if($val != 0)
			  {
				  set_cookie('create_static_id',$val);
			  }else{
				  set_cookie('create_static_step','article_sheet_page');
				  set_cookie('create_static_page',1);
			  }
			break;
			case 'article_sheet_page':
			  $page_size = intval(get_varia('art_list_len'));
			  $val = step_create_sheet_page('article','article',$page_size);
			  if($val != 0)
			  {
				  set_cookie('create_static_page',$val);
			  }else{
				  set_cookie('create_static_step','article_cat_sheet_page');
				  set_cookie('create_static_page',1);
				  set_cookie('create_static_cat',get_start_id('cat_art',''));
			  }
			break;
			case 'article_cat_sheet_page':
			  $page_size = intval(get_varia('art_list_len'));
			  $val = step_create_cat_sheet_page('article','default',$page_size);
			  if($val != 0 || $val === 'next_cat')
			  {
				  if($val == 'next_cat')
				  {
					  set_cookie('create_static_page',1);
				  }else{
					  set_cookie('create_static_page',$val);
				  }
			  }else{
				  set_cookie('create_static_step','about_page');
				  set_cookie('create_static_id',get_start_id('article','about'));
			  }
			break;
			case 'about_page':
			  $val = step_create_single_page('article','about');
			  if($val != 0)
			  {
				  set_cookie('create_static_id',$val);
			  }else{
				  set_cookie('create_static_step','recruit_sheet_page');
				  set_cookie('create_static_page',1);
			  }
			break;
			case 'recruit_sheet_page':
			  $val = step_create_sheet_page('article','recruit',5);
			  if($val != 0)
			  {
				  set_cookie('create_static_page',$val);
			  }else{
				  set_cookie('create_static_step','download_sheet_page');
				  set_cookie('create_static_page',1);
			  }
			break;
			case 'download_sheet_page':
			  $val = step_create_sheet_page('article','download',5);
			  if($val != 0)
			  {
				  set_cookie('create_static_page',$val);
			  }else{
				  set_cookie('create_static_step','message_sheet_page');
				  set_cookie('create_static_page',1);
			  }
			break;
			case 'message_sheet_page':
			  $page_size = 5;
			  $val = step_create_sheet_page('message','',$page_size);
			  if($val != 0)
			  {
				  set_cookie('create_static_page',$val);
			  }else{
				  set_cookie('create_static_step','index_page');
			  }
			break;
			case 'index_page':
			  $domain = $_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
			  $page_url = 'http://'.$domain.S_ROOT;
			  $html = file_get_contents($page_url);
			  set_cookie('create_static_created',get_cookie('create_static_created') + 1);
			  set_cookie('create_static_step','index_channel_page');
			break;
			case 'index_channel_page':
			  step_channel_page('index');
			  set_cookie('create_static_step','about_channel_page');
			break;
			case 'about_channel_page':
			  step_channel_page('about');
			  set_cookie('create_static_step','product_channel_page');
			break;
			case 'product_channel_page':
			  step_channel_page('product');
			  set_cookie('create_static_step','article_channel_page');
			break;
			case 'article_channel_page':
			  step_channel_page('article');
			  set_cookie('create_static_step','recruit_channel_page');
			break;
			case 'recruit_channel_page':
			  step_channel_page('recruit');
			  set_cookie('create_static_step','download_channel_page');
			break;
			case 'download_channel_page':
			  step_channel_page('download');
			  set_cookie('create_static_step','message_channel_page');
			break;
			case 'message_channel_page':
			  step_channel_page('message');
			  set_cookie('create_static_step','end');
			break;
		}
	}else{
		echo 'error';
	}
}

function step_count()
{
	$sum = 8;
	//计算产品单页数
	$num = get_single_page_sum('product','');
	$sum += $num;
	//计算产品无分类页数
	$page_size = intval(get_varia('img_list_len'));
	$sum += get_page_sum($num,$page_size);
	//计算产品分类页数
	$sum += get_sheet_page_sum('product','',$page_size);
	//计算文章单页数
	$num = get_single_page_sum('article','default');
	$sum += $num;
	//计算文章无分类页数
	$page_size = intval(get_varia('art_list_len'));
	$sum += get_page_sum($num,$page_size);
	//计算文章分类页数
	$sum += get_sheet_page_sum('article','default',$page_size);
	//计算关于我们单页数
	$num = get_single_page_sum('article','about');
	$sum += $num;
	//计算人才招聘页数
	$num = get_single_page_sum('article','recruit');
	$sum += get_page_sum($num,5);
	//计算下载中心页数
	$num = get_single_page_sum('article','download');
	$sum += get_page_sum($num,5);
	//计算留言板页数
	$num = get_single_page_sum('message','');
	$sum += get_page_sum($num,5);
	return $sum;
}

function get_page_sum($record_count,$page_size)
{
	if($record_count % $page_size > 0)
	{
		return intval($record_count / $page_size) + 1;
	}else{
		return intval($record_count / $page_size);
	}
}

function get_single_page_sum($table,$type)
{
	global $db;
	$tab = substr($table,0,3);
	$db->reset();
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_show = 1";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_type = '$type' and ".$tab."_show = 1";
	}
	$db->sql_query($sql);
	return $db->get_record_count();
}

function get_sheet_page_sum($table,$type,$page_size)
{
	global $db;
	$tab = substr($table,0,3);
	$sum = 0;
	$arr = array();
	$db->reset();
	$db->sql_query("select * from ".S_DB_PREFIX."cat_".$tab." where cat_show = 1");
	$record_count = $db->get_record_count();
	for($i = 0; $i < $record_count; $i++)
	{
		$arr[$i] = $db->sql_result($i,'cat_id');
	}
	for($i = 0; $i < count($arr); $i++)
	{
		$family = implode(',',get_cat_family('cat_'.$tab,$arr[$i]));
		$db->reset();
		$db->sql_query("select * from ".S_DB_PREFIX.$table." where ".$tab."_cat_id in ($family) and ".$tab."_show = 1");
		$record_count = $db->get_record_count();
		$sum += get_page_sum($record_count,$page_size);
	}
	return $sum + count($arr);
}

function get_start_id($table,$type)
{
	global $db;
	$tab = substr($table,0,3);
	$db->reset();
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_show = 1 order by ".$tab."_id asc";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_type = '$type' and ".$tab."_show = 1 order by ".$tab."_id asc";
	}
	$db->sql_query($sql);
	if($db->get_record_count() > 0)
	{
		return $db->sql_result(0,$tab.'_id');
	}else{
		return 0;
	}
}

function step_create_single_page($table,$type)
{
	global $db;
	$tab = substr($table,0,3);
	$step_id = intval(get_cookie('create_static_id'));
	$db->reset();
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_show = 1 and ".$tab."_id = $step_id";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_type = '$type' and ".$tab."_show = 1 and ".$tab."_id = $step_id";
	}
	$db->sql_query($sql);
	if($db->get_record_count() > 0)
	{
		$page_name = ($type == '' || $type == 'default')?$table:$type;
		$domain = $_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
		$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/id-'.$step_id.'/'.S_URL_SUFFIX;
		$html = file_get_contents($page_url);
		set_cookie('create_static_created',get_cookie('create_static_created') + 1);
	}
	$db->reset();
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_show = 1 and ".$tab."_id > $step_id";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_type = '$type' and ".$tab."_show = 1 and ".$tab."_id > $step_id";
	}
	$db->sql_query($sql);
	if($db->get_record_count() > 0)
	{
		return $db->sql_result(0,$tab.'_id');
	}else{
		return 0;
	}
}

function step_create_sheet_page($table,$type,$page_size)
{
	global $db;
	$tab = substr($table,0,3);
	$step_page = intval(get_cookie('create_static_page'));
	$page_sum = -1;
	$db->reset();
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_show = 1";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_type = '$type' and ".$tab."_show = 1";
	}
	$db->sql_query($sql);
	$record_count = $db->get_record_count();
	if($record_count > 0)
	{
		$page_sum = get_page_sum($record_count,$page_size);
		if($page_sum >= $step_page)
		{
			$page_name = ($type == '' || $type == 'default')?$table:$type;
			$domain = $_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
			$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/cat-0/page-'.$step_page.'/'.S_URL_SUFFIX;
			$html = file_get_contents($page_url);
			set_cookie('create_static_created',get_cookie('create_static_created') + 1);
		}
	}
	if($page_sum - $step_page >= 0)
	{
		return $step_page + 1;
	}else{
		return 0;
	}
}

function step_create_cat_sheet_page($table,$type,$page_size)
{
	global $db;
	$tab = substr($table,0,3);
	$step_page = intval(get_cookie('create_static_page'));
	$step_cat = intval(get_cookie('create_static_cat'));
	$page_sum = -1;
	$family = implode(',',get_cat_family('cat_'.$tab,$step_cat));
	$page_name = ($type == '' || $type == 'default')?$table:$type;
	$domain = $_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
	$db->reset();
	echo $family;
	if($type == '')
	{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_cat_id in ($family) and ".$tab."_show = 1";
	}else{
		$sql = "select * from ".S_DB_PREFIX.$table." where ".$tab."_cat_id in ($family) and ".$tab."_type = '$type' and ".$tab."_show = 1";
	}
	$db->sql_query($sql);
	$record_count = $db->get_record_count();
	if($record_count > 0)
	{
		$page_sum = get_page_sum($record_count,$page_size);
		if($page_sum >= $step_page)
		{
			if($step_page == 1)
			{
				$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/cat-'.$step_cat.'/'.S_URL_SUFFIX;
				$html = file_get_contents($page_url);
				set_cookie('create_static_created',get_cookie('create_static_created') + 2);
			}else{
				set_cookie('create_static_created',get_cookie('create_static_created') + 1);
			}
			$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/cat-'.$step_cat.'/page-'.$step_page.'/'.S_URL_SUFFIX;
			$html = file_get_contents($page_url);
		}
	}else{
		$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/cat-'.$step_cat.'/'.S_URL_SUFFIX;
		$html = file_get_contents($page_url);
		set_cookie('create_static_created',get_cookie('create_static_created') + 1);
	}
	$db->reset();
	$db->sql_query("select * from ".S_DB_PREFIX."cat_".$tab." where cat_show = 1 and cat_id > $step_cat");
	$record_count = $db->get_record_count();
	if($page_sum - $step_page >= 0)
	{
		return $step_page + 1;
	}else{
		if($record_count > 0)
		{
			set_cookie('create_static_cat',$db->sql_result(0,'cat_id'));
			return 'next_cat';
		}else{
			return 0;
		}
	}
}

function step_channel_page($page_name)
{
	$domain = $_SERVER['SERVER_PORT'] == '80'?$_SERVER['SERVER_NAME']:$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
	$page_url = 'http://'.$domain.S_ROOT.'?/'.$page_name.'/'.S_URL_SUFFIX;
	$html = file_get_contents($page_url);
	set_cookie('create_static_created',get_cookie('create_static_created') + 1);
}

//红头船
?>