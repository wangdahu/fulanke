<?php
function module_article_main()
{
	global $smarty,$cat,$page,$id;
	$obj = new article();
	if(!$id)
	{
		$obj->set_where("art_type = 'default'");
		if($cat)
		{
			$family = implode(',',get_cat_family('cat_art',$cat));
			$obj->set_where("art_cat_id in ($family)");
		}
		$obj->set_page_size(get_varia('art_list_len'));
		$obj->set_page_num($page);
		$sheet = $obj->get_sheet();
		for($i = 0; $i < count($sheet); $i ++)
		{
			$sheet[$i]['short_title'] = cut_str($sheet[$i]['art_title'],50);
		}
		set_link($obj->get_page_sum());
		$smarty->assign('show_sheet',1);
		$smarty->assign('article',$sheet);
	}else{
		$obj->set_field('art_id,art_title,art_author,art_add_time,art_text');
		$obj->set_where("art_id = $id");
		$one = $obj->get_one();
		$smarty->assign('article',$one);
		
		$obj->set_where('');
		$obj->set_where("art_lang = '".S_LANG."'");
		$obj->set_where('art_show = 1');
		$obj->set_where("art_type = 'default'");
		$obj->set_where("art_id < $id");
		$one = $obj->get_one();
		$smarty->assign('next_id',$one['art_id']);
		$smarty->assign('next_title',cut_str($one['art_title'],20));		

		$obj->set_where('');
		$obj->set_where("art_lang = '".S_LANG."'");
		$obj->set_where('art_show = 1');
		$obj->set_where("art_type = 'default'");
		$obj->set_where("art_id > $id");
		$obj->set_order('');
		$obj->set_order('art_top','asc');
		$obj->set_order('art_index','asc');
		$obj->set_order('art_id','asc');
		$one = $obj->get_one();
		$smarty->assign('prev_id',$one['art_id']);
		$smarty->assign('prev_title',cut_str($one['art_title'],20));
		
		$obj = new varia();
		$smarty->assign('share_code',$obj->get_value('share_code',true));
		
		$smarty->assign('show_sheet',0);
	}
}

//红头船
?>