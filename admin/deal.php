<?php
include('admin/common.php');

if(check_admin_login() > 0)
{
	$url = get_url();
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
            }
        }
    }
	if(isset($dir))
	{
		include('admin/module/'.$dir.'/deal.php');
	}
	$cmd = post('cmd');
	$cmd();
}
exit();

function get_upl_file_name()
{
	$dir = post('dir');
	$file = post('file');
	if($file != rawurlencode($file))
	{
		$file = date('Ymdhis').substr($file,-4);
	}
	$result = $file;
	for($i = 1; $i < 1000; $i ++)
	{
		if(file_exists($dir.$result))
		{
			$result = $i.'_'.$file;
		}else{
			break;
		}
	}
	echo $result;
}

function get_version()
{
	$str = file_get_contents('http://www.rhs'.'cms.com/njb/version.php');
	if(substr($str,0,9) == 'njb_send:')
	{
		echo $str;
	}else{
		echo '';
	}
}

function del_record()
{
	$table = post('table');
	$id = post('id');
	$obj = new $table();
	$obj->set_where(substr($table,0,3).'_id = '.$id);
	$obj->del();
	set_cookie('result',1);
}


function del_file()
{
	$path = post('path');
	$flag = false;
	$dir[0] = 'data/backup/';
	$dir[1] = 'images/';
	$dir[2] = 'resource/';
	for($i = 0; $i < count($dir); $i ++)
	{
		if(substr($path,0,strlen($dir[$i])) == $dir[$i])
		{
			$flag = true;
		}
	}
	if($flag)
	{
		if(unlink($path))
		{
			$result = 1;
		}
	}
	set_cookie('result',isset($result)?$result:0);
}

function set_order()
{
	$type = post('type');
	$table = post('table');
	$id = post('id');
	$val = post('val');
	$flag = 1;
	if($type == 'show' && ($table == 'cat_pro' || $table == 'cat_art'))
	{
		$flag = set_cat_show($table,$id,$val);
	}
	if($flag == 1)
	{
		$tab = substr($table,0,3);
		$obj = new $table();
		$obj->set_value($tab.'_'.$type,$val);
		$obj->set_where($tab.'_id = '.$id);
		$obj->edit();
		echo 1;
	}else{
		echo 0;
	}
}

function set_cat_show($table,$cat_id,$cat_show)
{
	$flag = 1;
	$family = get_cat_family($table,$cat_id);
	$cat_parent_id = get_data($table,intval($cat_id),'cat_parent_id');
	if($cat_parent_id != 0)
	{
		if(get_data($table,$cat_parent_id,'cat_show') == 0) $flag = 0;
	}
	if($flag != 0)
	{
		$len = count($family);
		if($len == 1)
		{
			$flag = 1;
		}elseif($len > 1){
			for($i = 1; $i < $len; $i ++)
			{
				if(get_data($table,$family[$i],'cat_show') == 1)
				{
					$flag = 2;
					break;
				}
			}
		}
	}
	return $flag;
}

function set_config()
{
	$var_name = post('var_name');
	$val = intval(post('val'));
	$obj = new varia();
	$obj->edit_var_value($var_name,$val);
	echo 1;
}

//红头船
?>