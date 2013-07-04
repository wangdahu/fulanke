<?php
function initial($table)
{
    global $smarty,$url,$url_page,$admin_id;
    $admin_id = check_admin_login();
    if($url != '')
	{
		$arr = explode('/',$url);
		$url_page = $arr[1];
	}else{
		$url_page = 'admin';
	}
    $smarty->assign('site_title',get_varia('site_admin_title'));
    $smarty->assign('version',get_varia('version'));
	$smarty->assign('url',$url);
	$smarty->assign('url_page',$url_page);
    $smarty->assign('S_TPL_PATH',S_TPL_PATH);
	$smarty->assign('S_LANG',S_LANG);
	$smarty->assign('S_URL_PREFIX',S_ROOT . S_URL_PREFIX);
    $smarty->assign('S_URL_SUFFIX',S_URL_SUFFIX);
	$smarty->assign('S_MULTILINGUAL',S_MULTILINGUAL);
}

function get_tpl_info($tag_name)
{
    $xml = new domdocument();
    $xml->load(S_TPL_PATH.'admin/config.xml');
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

function check_power()
{
	global $url,$admin_id;
	$flag = 0;
	if($admin_id)
	{
		$obj = new admin();
		$obj->set_where("adm_id = $admin_id");
		$one = $obj->get_one();
		if($one['adm_power'] == 'all')
		{
			$flag = 1;
		}elseif($one['adm_power'] != ''){
			$urls = explode('|',$one['adm_power']);
			for($i = 0; $i < count($urls); $i ++)
			{
				if($urls[$i] == substr($url,0,strlen($urls[$i])))
				{
					$flag = 1;
					break;
				}
			}
		}
	}
	return $flag;
}

//修改配置文件
function edit_config($n,$c,$v)
{
	$file = file_get_contents('include/config.php');
	if(!is_numeric($c))
	{
		$file = str_replace("\$config['$n'] = '$c';","\$config['$n'] = '$v';",$file);
	}else{
		$file = str_replace("\$config['$n'] = $c;","\$config['$n'] = $v;",$file);
	}
	file_put_contents('include/config.php',$file);
}

function get_site_info()
{
	$site = array();
	$obj = new varia();
	$obj->set_where("(left(var_name,5) = 'site_' or var_name = 'statistical_code' or var_name = 'share_code')");
	$list = $obj->get_list();
	for($i = 0; $i < count($list); $i ++)
	{
		$val = $list[$i]['var_value'];
		switch($list[$i]['var_name'])
		{
			case 'site_title': $site['title'] = $val; break;
			case 'site_admin_title': $site['admin_title'] = $val; break;
			case 'site_name': $site['name'] = $val; break;
			case 'site_domain': $site['domain'] = $val; break;
			case 'site_record': $site['record'] = $val; break;
			case 'site_record_url': $site['record_url'] = $val; break;
			case 'site_tech': $site['tech'] = $val; break;
			case 'site_tech_url': $site['tech_url'] = $val; break;
			case 'site_keywords': $site['keywords'] = $val; break;
			case 'site_description': $site['description'] = $val; break;
			case 'statistical_code': $site['statistical_code'] = $list[$i]['var_text']; break;
			case 'share_code': $site['share_code'] = $list[$i]['var_text']; break;
		}
	}
	return $site;
}

//红头船
?>