<?php
function module_link()
{
	global $smarty;
	$obj = new link();
	$obj->set_field('lin_url,lin_img,lin_word,lin_title');
	$obj->set_where("lin_img <> 'none'");
	$smarty->assign('img_link',$obj->get_list());
	$obj->set_where('');
	$obj->set_where("lin_lang = '".S_LANG."'");
	$obj->set_where("lin_img = 'none'");
	$smarty->assign('word_link',$obj->get_list());
}

//红头船
?>