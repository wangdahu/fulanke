<?php
function module_tpl_files()
{
	global $smarty;
	$arr = array();
	$i = 0;
	$dir = substr(S_TPL_PATH,0,-1);	
	$tpl = get_tpl_files($arr,$i,$dir);
	$smarty->assign('tpl',$tpl);
}

function get_tpl_files(&$arr,&$i,&$dir)
{
	if(is_dir($dir))
	{
		$list = scandir($dir);
		foreach($list as $file)
		{
			if($file != 'images' && $file != '.' && $file != '..')
			{
				$val = $dir.'/'.$file;
				if(!is_dir($val))
				{
					$arr[$i]['path'] = substr($val,strlen(S_TPL_PATH));
					$arr[$i]['path_str'] = rawurlencode(substr($val,strlen(S_TPL_PATH)));
					$i ++;
				}else{
					$arr = get_tpl_files($arr,$i,$val);
				}
			}
		}
	}
	return $arr;
}

//红头船
?>