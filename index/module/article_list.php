<?php
function module_article_list()
{
	global $smarty;
	$obj = new cat_art();
	$obj->set_where('cat_best = 1');
	$best_cat = $obj->get_list();
	$art_list = array();
	if(count($best_cat) > 0)
	{
		$smarty->assign('show_all_art',0);
		for($i = 0; $i < count($best_cat); $i ++)
		{
			$cat = $best_cat[$i]['cat_id'];
			$family = implode(',',get_cat_family('cat_art',$cat));
			$obj = new article();
			$obj->set_where("art_cat_id in ($family)");
			$obj->set_page_size(get_varia('index_art_list_len'));
			$list = $obj->get_list();
			for($j = 0; $j < count($list); $j ++)
			{
				$list[$j]['short_title'] = cut_str($list[$j]['art_title'],20);
			}
			$art_list[$cat] = $list;
			unset($obj);
		}
		$smarty->assign('best_art_cat',$best_cat);
		$smarty->assign('art_list',$art_list);
	}else{
		$smarty->assign('show_all_art',1);
		$obj = new article();
		$obj->set_field('art_id,art_title,art_add_time');
		$obj->set_page_size(get_varia('index_art_list_len'));
		$smarty->assign('art_list',$obj->get_list());
	}
}

//红头船
?>