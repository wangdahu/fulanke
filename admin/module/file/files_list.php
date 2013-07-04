<?php
function module_files_list()
{
	global $smarty;
	$list = get_file_sheet('resource');
	$smarty->assign('list',$list);
	$smarty->assign('host',$_SERVER['HTTP_HOST']);
}

function get_file_sheet($val)
{
	$arr = array();
	$i = 0;
	$list = scandir($val);
	foreach($list as $file)
	{
		if($file != '.' && $file != '..' && !is_dir($val.'/'.$file))
		{
			$arr[$i]['id'] = sel_file($val.'/'.$file);
			$arr[$i]['name'] = $file;
			$i ++;
		}
	}
	return $arr;
}

function sel_file($val)
{
  $return = get_id('product','pro_img',$val);
  if(!$return)
  {
	  $return = get_id('article','art_url',$val);
  }
  if(!$return)
  {
	  $return = get_id('picture','pic_path',$val);
  }
  return $return;
}

//红头船
?>