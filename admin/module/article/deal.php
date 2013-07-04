<?php
function add_or_edit_article()
{
	$art_id = post('art_id');
	$art_type = post('art_type');
	$art_title = post('art_title');
	$art_cat_id = post('art_cat_id');
	$art_author = post('art_author');
	$art_url = post('file_path');
	$art_text = post('editor','loose');
	$art_keywords = post('art_keywords');
	$art_description = post('art_description');
	$art_add_time = time();
	if($art_cat_id == '')
	{
		$art_cat_id = 0;
	}
	$art_description = cut_str($art_description,250);
	$obj = new article();
	if($art_type != '')
	{
		$obj->set_value('art_type',$art_type);
	}
	$obj->set_value('art_title',$art_title);
	$obj->set_value('art_cat_id',$art_cat_id);
	$obj->set_value('art_author',$art_author);
	$obj->set_value('art_text',$art_text);
	$obj->set_value('art_url',$art_url);
	$obj->set_value('art_keywords',$art_keywords);
	$obj->set_value('art_description',$art_description);
	$obj->set_value('art_add_time',$art_add_time);
	if($art_id != '')
	{
		$obj->set_where("art_id = $art_id");
		$obj->edit();
	}else{
		$obj->set_value('art_lang',S_LANG);
		$obj->add();
	}
	set_cookie('result',1);
}

function edit_cat()
{
	$obj = new cat_art();
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
	$obj = new cat_art();
	$obj->set_value('cat_parent_id',$cat_parent_id);
	$obj->set_value('cat_name',$cat_name);
	$obj->set_value('cat_lang',S_LANG);
	$obj->add();
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
}

//红头船
?>