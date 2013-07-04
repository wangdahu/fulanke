<?php
function module_pic_lists()
{
	global $smarty;
	$list_1 = get_file_sheet('images');
	$list_2 = get_folder_sheet('images/product');
	$list_3 = get_folder_sheet('images/editor');
	$smarty->assign('list_1',$list_1);
	$smarty->assign('list_2',$list_2);
	$smarty->assign('list_3',$list_3);
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

function get_folder_sheet($val)
{
	$arr = array();
	$i = 0;
	$list = scandir($val);
	foreach($list as $file)
	{
		if($file != '.' && $file != '..' && is_dir($val.'/'.$file))
		{
			$arr[$i]['name'] = $file;
			$arr[$i]['path_str'] = rawurlencode($val.'/'.$file);
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
	  $return = get_id('product','pro_reduce_img',$val);
  }
  if(!$return)
  {
	  $return = get_id('picture','pic_path',$val);
  }
  return $return;
}

//红头船
?>