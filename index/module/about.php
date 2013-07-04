<?php
function module_about()
{
	global $smarty;
	$about = array();
	$obj = new article();
	$obj->set_field('art_title,art_text');
	$obj->set_where("art_type = 'about'");
	$one = $obj->get_one();
	if(count($one) > 0)
	{
		$about_filter = intval(get_varia('about_filter'));
		$about_len = intval(get_varia('about_len'));
		$about['title'] = $one['art_title'];
		if($about_filter)
		{
			$about['text'] = cut_str(strip_tags($one['art_text']),$about_len);
		}else{
			$html = cut_str($one['art_text'],$about_len);
			$about['text'] = repair_html($html);
		}
	}
	$smarty->assign('about',$about);
}

//红头船
?>