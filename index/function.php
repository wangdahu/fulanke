<?php
function initial($table)
{
	global $smarty,$url,$lang,$user_id;
	$tab = substr($table,0,3);
	$id = get_global('id',0);
	$cat = get_global('cat',0);
	$user_id = check_user_login();
	$smarty->assign('site_title',get_varia('site_title'));
	$smarty->assign('channel_title',get_channel_title());
	if($url != '')
	{
		$arr = explode('/',$url);
		$url_page = $arr[1];
	}else{
		$url_page = 'index';
	}
	$smarty->assign('url',$url);
	$smarty->assign('url_page',$url_page);
	$smarty->assign('user_id',$user_id);
	$smarty->assign('lang',$lang);
	$smarty->assign('S_ROOT',S_ROOT);
	$smarty->assign('S_TPL_PATH',S_ROOT . S_TPL_PATH);
	$smarty->assign('S_LANG',S_LANG);
	$smarty->assign('S_URL_PREFIX',S_ROOT . S_URL_PREFIX);
	$smarty->assign('S_URL_SUFFIX',S_URL_SUFFIX);
	$smarty->assign('S_MULTILINGUAL',S_MULTILINGUAL);
	if($id == 0)
	{
		$smarty->assign('keywords',get_varia('site_keywords'));
		$smarty->assign('describe',get_varia('site_description'));		
		$smarty->assign('page_title','');
		$smarty->assign('cat_name','');
	}else{
		$smarty->assign('keywords',get_data($table,$id,$tab.'_keywords'));
		$smarty->assign('describe',get_data($table,$id,$tab.'_description'));		
		$smarty->assign('page_title',get_data($table,$id,$tab.'_title'));
		$smarty->assign('cat_id',get_data($table,$id,$tab.'_cat_id'));
		$smarty->assign('cat_name',get_data('cat_'.$tab,get_data($table,$id,$tab.'_cat_id'),'cat_name'));
	}
	if($cat != 0 && $id == 0) $smarty->assign('cat_name',get_data('cat_'.$tab,$cat,'cat_name'));
}

function get_channel_title()
{
	global $url;
	$return = '';
	$priority = 0;
	$obj = new varia();
	$obj->set_where("var_name = 'title'");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$arr = explode('{v}',$list[$i]['var_value']);
		if(substr($url,1,strlen($arr[0])) == $arr[0] && intval($arr[2]) >= $priority)
		{
			$return = $arr[1];
			$priority = intval($arr[2]);
		}
	}
	return $return;
}

function get_tpl_info($tag_name)
{
	$xml = new domdocument();
	$xml->load(S_TPL_PATH.'index/config.xml');
	$tag = $xml->getelementsbytagname($tag_name)->item(0)->getelementsbytagname('*');
	$nodes_num = $tag->length;
	$return = '';
	for($i = 0; $i < $nodes_num; $i ++)
	{
		$text = $tag->item($i)->nodeValue;
		if(substr($text,0,1) != '*') $return = $return.$text.'|';
	}
	unset($tag);
	unset($xml);
	return substr($return,0,strlen($return)-1);
}

function set_link($page_sum)
{
	global $smarty,$cat,$page;
	$smarty->assign('page_sum',$page_sum);
	$smarty->assign('cat',$cat);
	$smarty->assign('page',num_bound(1,$page_sum,$page));
}

function set_parameter()
{
	global $url,$smarty;
	if($url != '')
	{
		$arr = explode('/',$url);
		for($i = 0; $i < count($arr); $i ++)
		{
			$strpos = strpos($arr[$i],'-');
			if($strpos)
			{
				$name = substr($arr[$i],0,$strpos);
				$value = substr($arr[$i],$strpos + 1);
				global $$name;
				$$name = $value;
				$smarty->assign($name,$value);
			}
		}
	}
}

function get_global($str,$val = '')
{
	global $$str,$smarty;
	if(is_null($$str))
	{
		$smarty->assign($str,$val);
		return $val;
	}else{
		return $$str;
	}
}

function run_module($arr,$path = '')
{
	for($i = 0; $i < count($arr); $i ++)
	{
		if($arr[$i] != '')
		{
			if(($module = strrchr($arr[$i],'/')) == '')
			{
				$module = $arr[$i];
			}else{
				$module = substr($module,1);
			}
			include($path.$arr[$i].'.php');
			$func = 'module_'.$module;
			$func();
		}
	}
}

function create_html($url)
{
	if(S_WEAK_STATIC)
	{
		$html = ob_get_contents();
		if($url == '')
		{
			if(S_FLASH != 1)
			{
				$path = '/' . S_URL_SUFFIX;
			}else{
				$path = '/flash.html';
			}
		}else{
			$path = $url;
		}
		$path = 'html' . $path;
		if(substr($path,-1) == '/')
		{
			$path .= S_URL_SUFFIX;
		}
		if(!file_exists($path))
		{
			$dir = dirname($path);
			if(!is_dir($dir))
			{
				mkdir($dir,0777,true);
			}
			file_put_contents($path,$html);
		}
	}
}

//红头船
?>