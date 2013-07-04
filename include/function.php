<?php
//获取配置值
function get_varia($var_name)
{
	$obj = new varia();
	return $obj->get_value($var_name);
}
//获取指定ID的数据
function get_data($table,$id,$field)
{
	$obj = new $table();
	$obj->set_field($field);
	$obj->set_where(substr($table,0,3).'_id = '.$id);
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		return $one[$field];
	}else{
		return false;
	}
}
//获取指定数据的ID
function get_id($table,$field,$value)
{
	$obj = new $table();
	$obj->set_field(substr($table,0,3).'_id');
	if(!is_numeric($value))
	{
		$obj->set_where("$field = '$value'");
	}else{
		$obj->set_where("$field = $value");
	}
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		return $one[substr($table,0,3).'_id'];
	}else{
		return false;
	}
}
//获取指定ID的分类及其所有子类
function get_cat_family($table,$id)
{
	$obj = new $table();
	$list = $obj->get_list();
	$arr = array();
	for($i = 0; $i < count($list); $i++)
	{
		$arr[$i][0] = $list[$i]['cat_id'];
		$arr[$i][1] = $list[$i]['cat_parent_id'];
	}
	$family = array();
	$family[0] = $id;
	$flag = 1;
	while($flag == 1)
	{
		$flag = 0;
		for($i = 0; $i < count($family); $i ++)
		{
			for($j = 0; $j < count($arr); $j ++)
			{
				if($family[$i] == $arr[$j][1])
				{
					$family[count($family)] = $arr[$j][0];
					$arr[$j][1] = -1;
					$flag = 1;
				}
			}
		}
	}
  return $family;
}
//严格过滤字符串中的危险符号
function strict($str)
{
	if(S_MAGIC_QUOTES_GPC)
	{
		$str = stripslashes($str);
	}
	$str = str_replace('<','&#60;',$str);
	$str = str_replace('>','&#62;',$str);
	$str = str_replace('?','&#63;',$str);
	$str = str_replace('%','&#37;',$str);
	$str = str_replace(chr(39),'&#39;',$str);
	$str = str_replace(chr(34),'&#34;',$str);
	$str = str_replace(chr(13).chr(10),'',$str);
	return $str;
}
//宽松过滤字符串中的危险符号
function loose($str)
{
	if(S_MAGIC_QUOTES_GPC)
	{
		$str = stripslashes($str);
	}
	$str = str_replace(chr(39),'&#39;',$str);
	$str = str_replace(chr(60).chr(63),'',$str);
	$str = str_replace(chr(63).chr(62),'',$str);
	$str = str_replace(chr(60).chr(37),'',$str);
	$str = str_replace(chr(37).chr(62),'',$str);
	$str = str_replace(chr(13).chr(10),'',$str);
	return $str;
}
//不过滤
function no_filter($str)
{
	if(S_MAGIC_QUOTES_GPC)
	{
		$str = stripslashes($str);
	}
	return $str;
}
//截取字符串
function cut_str($string,$sublen,$start = 0)
{
	$pr = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
	preg_match_all($pr,$string,$t_string);
	$return = join('',array_slice($t_string[0],$start,$sublen));
	if(count($t_string[0]) - $start > $sublen)
	{
		return $return.'...';
	}else{
		return $return;
	}
}
//修复HTML标签
function repair_html(&$html)
{
	$a = strlen(strrchr($html,'<'));
	$b = strlen(strrchr($html,'>'));
	if($a < $b || ($a != 0 && $b == 0))
	{
		$html = substr($html,0,-$a);
	}
	return $html;
}
//数字限界
function num_bound($min,$max,$num)
{
	$num = intval($num);
	if($min < $max)
	{
		if($num < $min) $num = $min;
		else if($num > $max) $num = $max;
	}else{
		$num = $min;
	}
	return $num;
}
//获取完整路径中的文件名或扩展名
function get_file_name($full_path,$str)
{
	if($full_path != '')
	{
		return substr(strrchr($full_path,$str),1);
	}else{
		return '';
	}
}
//获取本页面URL
function get_url($filter = 'loose')
{
	$url = $filter($_SERVER['QUERY_STRING']);
	return $url;
}
//设置session
function set_session($name,$value,$filter = 'strict')
{
	if(S_SESSION)
	{
		$_SESSION[$name] = $filter($value);
	}else{
		setcookie($name,$filter($value));
	}
}
//获取session
function get_session($name,$filter = 'strict')
{
	if(S_SESSION)
	{
		return $filter(isset($_SESSION[$name])?$_SESSION[$name]:'');
	}else{
		return $filter(isset($_COOKIE[$name])?$_COOKIE[$name]:'');
	}
}
//销毁session
function unset_session($name)
{
	if(S_SESSION)
	{
		unset($_SESSION[$name]);
	}else{
		setcookie($name,'',0);
	}
}
//设置cookie
function set_cookie($name,$value,$filter = 'strict',$expire = 0)
{
	if($expire != 0)
	{
		setcookie($name,$filter($value));
	}else{
		setcookie($name,$filter($value),$expire);
	}
}
//获取cookie
function get_cookie($name,$filter = 'strict')
{
	return $filter(isset($_COOKIE[$name])?$_COOKIE[$name]:'');
}
//销毁cookie
function unset_cookie($name)
{
	setcookie($name,'',0);
}
//获取post
function post($val,$filter = 'strict')
{
	return $filter(isset($_POST[$val])?$_POST[$val]:'');
}
//获取get
function get($val,$filter = 'strict')
{
	return $filter(isset($_GET[$val])?$_GET[$val]:'');
}
//获取客户端IP
function get_ip()
{
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')) $ip = getenv('HTTP_CLIENT_IP');
	else if (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')) $ip = getenv('HTTP_X_FORWARDED_FOR');
	else if (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'),'unknown')) $ip = getenv('REMOTE_ADDR');
	else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')) $ip = $_SERVER['REMOTE_ADDR'];
	else $ip = '0.0.0.0';
	if(!is_numeric(str_replace('.','',$ip))) $ip = '0.0.0.0';
	return $ip; 
}
//检查用户是否登录
function check_user_login()
{
	global $user_id;
	$username = get_cookie('user_username');
	$password = get_cookie('user_password');
	if($username != '' && $password != '')
	{
		$obj = new users();
		$obj->set_field('use_id');
		$obj->set_where("use_username = '$username'");
		$obj->set_where("use_password = '$password'");
		$one = $obj->get_one();
		if(count($one) !== 0)
		{
			$user_id = $one['use_id'];
			return intval($user_id);
		}else{
			return 0;
		}
	}else{
		return 0;
	}
}
//检查管理员是否登录
function check_admin_login()
{
    global $admin_id;
    $username = get_session('admin_username');
    $password = get_session('admin_password');
    if($username != '' && $password != '')
    {
        $obj = new admin();
        $obj->set_field('adm_id');
        $obj->set_where("adm_username = '$username'");
        $obj->set_where("adm_password = '$password'");
        $one = $obj->get_one();
        if(count($one) !== 0)
        {
            $admin_id = $one['adm_id'];
            return intval($admin_id);
        }else{
            return 0;
        }
    }else{
        return 0;
    }
}
//获取属性列表中的某个属性值
function get_attribute($att_str,$att_name)
{
	$result = '';
	$arr = explode('{v}',$att_str);
	for($i = 0; $i < count($arr); $i ++)
	{
		$arr2 = explode(':',$arr[$i]);
		if(isset($arr2[1]))
		{
			if($arr2[0] == $att_name){$result = $arr2[1];}
		}
		
	}
	return $result;
}
//发送电子邮件
function call_send_email($title,$text,$user_id = 0,$user_email = '')
{
	$site_name = get_varia('site_name');
	$user_name = get_data('users',$user_id,'use_username');
	if(!$user_name)
	{
		$user_name = 'IP为' . get_ip() . '的匿名用户';
	}
	$info = "网站名称: $site_name <br />";
	$info .= "用户名称: $user_name <br />";
	if($user_email != '')
	{
		$info .= "用户邮箱: $user_email <br />";
	}
	$text =  $info . '<br />' . $text;
	
	$smtp = get_varia('sentmail_smtp');
	$send = get_varia('sentmail_send');
	$password = get_varia('sentmail_password');
	$receive = get_varia('sentmail_receive');
	send_email($smtp,$send,$password,$receive,$title,$text);
}
//发送电子邮件
function send_email($smtp,$send,$password,$receive,$title,$text)
{
	include('include/phpmailer/class.phpmailer.php');
	$mail = new PHPMailer();   
	$mail->IsSMTP();
	$mail->CharSet = 'utf-8';
	$mail->Host = $smtp;
	$mail->SMTPAuth = true;
	$mail->Username = $send;
	$mail->Password = $password;
	$mail->From = $send;
	$mail->FromName = '';
	$mail->AddAddress($receive,'');
	$mail->WordWrap = 50;
	$mail->IsHTML(true);
	$mail->Subject = $title;
	$mail->Body = $text;
	$mail->AltBody = '';
	$mail->Send();
}
//安全函数
function safe($action)
{
	$ip = get_ip();
	$hours = intval(get_varia('safe_'.$action.'_hours'));
	$times = intval(get_varia('safe_'.$action.'_times'));
	$time = time() - $hours * 60 * 60;
    $obj = new safe();
    $obj->set_where("saf_action = '$action'");
    $obj->set_where("saf_time < $time");
    $obj->del();
    $obj->set_where('');
    $obj->set_where("saf_ip = '$ip'");
    $obj->set_where("saf_action = '$action'");
	if($obj->get_count() > $times - 1)
	{
		header('location:./safe.html');
		exit();		
	}else{
        $obj->set_value("saf_ip",$ip);
        $obj->set_value("saf_action",$action);
        $obj->set_value("saf_time",time());
        $obj->add();
	}
}
//复制目录
function copy_dir($src,$dst)
{
	$dir = opendir($src);
    mkdir($dst,0777,true);
    while(false !== ($file = readdir($dir)))
	{
        if(($file != '.') && ($file != '..'))
		{
            if(is_dir($src.'/'.$file))
			{
                copy_dir($src.'/'.$file,$dst.'/'.$file);
            }else{
                copy($src.'/'.$file,$dst.'/'.$file);
            }
        }
    }
    closedir($dir);
}
//删除目录
function del_dir($src)
{
	$dir = opendir($src);
    while(false !== ($file = readdir($dir)))
	{
        if(($file != '.') && ($file != '..'))
		{
            if(is_dir($src.'/'.$file))
			{
                del_dir($src.'/'.$file);
            }else{
                unlink($src.'/'.$file);
            }
        }
    }
    closedir($dir);
}
//生成随机数
function get_random($val = '',$len = 3)
{
	if($val == '')
	{
		return time() . str_pad(mt_rand(1,pow(10,$len) - 1),$len,'0',STR_PAD_LEFT);
	}else{
		return $val . str_pad(mt_rand(1,pow(10,$len) - 1),$len,'0',STR_PAD_LEFT);
	}
}
//提示出错
function rhs_error()
{
	echo 'RHS Error:' . $_SERVER['REQUEST_URI'];
	exit();
}

//红头船
?>