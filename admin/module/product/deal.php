<?php
function add_or_edit_product()
{
	$pro_id = post('pro_id');
	$pro_title = post('pro_title');
	$pro_number = post('pro_number');
	$pro_cat_id = post('pro_cat_id');
	$pro_img = post('pic_path');
	$pro_price = post('pro_price');
	$pro_text = post('editor','loose');
	$pro_keywords = post('pro_keywords');
	$pro_description = post('pro_description');
	$pro_add_time = time();
	if($pro_img != '')
	{
		$img_name = get_file_name($pro_img,'/');
		$pro_reduce_img = str_replace($img_name,'reduce_'.$img_name,$pro_img);
	}else{
		$pro_img = 'images/no_img.gif';
		$pro_reduce_img = 'images/no_img.gif';
	}
	$pro_description = cut_str($pro_description,250);
	$obj = new product();
	$obj->set_value('pro_title',$pro_title);
	$obj->set_value('pro_number',$pro_number);
	$obj->set_value('pro_cat_id',$pro_cat_id);
	$obj->set_value('pro_img',$pro_img);
	$obj->set_value('pro_reduce_img',$pro_reduce_img);
	$obj->set_value('pro_price',$pro_price);
	$obj->set_value('pro_text',$pro_text);
	$obj->set_value('pro_keywords',$pro_keywords);
	$obj->set_value('pro_description',$pro_description);
	$obj->set_value('pro_add_time',$pro_add_time);
	if($pro_id != '')
	{
		$obj->set_where("pro_id = $pro_id");
		$obj->edit();
	}else{
		$obj->set_value('pro_lang',S_LANG);
		$obj->add();
	}
	set_cookie('result',1);
}

function del_product()
{
	$id = post('id');
	$obj = new product();
	$obj->set_field('pro_reduce_img,pro_img');
	$obj->set_where("pro_id = $id");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$img_reduce_path = $one['pro_reduce_img'];
		$img_path = $one['pro_img'];
		$obj->del();
		if($path = realpath($img_reduce_path))
		{
			if(file_exists($path) && $img_reduce_path != 'images/no_img.gif') unlink($path);
		}
		if($path = realpath($img_path))
		{
			if(file_exists($path) && $img_reduce_path != 'images/no_img.gif') unlink($path);
		}
	}
	set_cookie('result',1);
}

function edit_cat()
{
	$obj = new cat_pro();
	for($i = 0; $i < count($_POST['cat_id']); $i ++)
	{
		$cat_parent_id = strict($_POST['cat_parent_id'][$i]);
		$cat_name = strict($_POST['cat_name'][$i]);
		$cat_id = strict($_POST['cat_id'][$i]);
		$obj->set_value('cat_parent_id',$cat_parent_id);
		$obj->set_value('cat_name',$cat_name);
		$obj->set_where('');
		$obj->set_where("cat_id = $cat_id");
		$obj->edit();
	}
	set_cookie('result',1);
}

function add_cat()
{
	$cat_parent_id = post('cat_parent_id');
	$cat_name = post('cat_name');
	$obj = new cat_pro();
	$obj->set_value('cat_parent_id',$cat_parent_id);
	$obj->set_value('cat_name',$cat_name);
	$obj->set_value('cat_lang',S_LANG);
	$obj->add();
	set_cookie('result',1);
}

function upload()
{
	$dir = post('dir');
	$file = rawurlencode(post('file'));
	$extension = strtolower(get_file_name($file,'.'));
	if(strpos('jpg,gif,png,bmp,jpeg',$extension) !== false)
	{
		if(!is_dir($dir))
		{
			mkdir($dir,0777,true);
		}
		move_uploaded_file($_FILES['file_path']['tmp_name'],$dir.$file);
		include('include/resizeimage.class.php');
		$width = intval(get_varia('reduce_img_width'));
		$height = intval(get_varia('reduce_img_height'));
		$resizeimage = new resizeimage($dir.$file,$width,$height,false,$dir.'reduce_'.$file);
		set_cookie('img',$dir.$file);
	}
}

//红头船
?>