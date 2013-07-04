<?php
function module_about_main()
{
	global $smarty,$id;
	$obj = new article();
	$obj->set_field('art_title,art_text');
	if($id)
	{
		$obj->set_where("art_id = $id");
	}else{
		$obj->set_where("art_type = 'about'");
	}
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$smarty->assign('about',$one['art_text']);
	}else{
		$smarty->assign('about','');
	}
}

//红头船
?>