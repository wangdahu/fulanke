<?php
function module_product_main()
{
	global $smarty,$cat,$page,$id;
	$obj = new product();
	if(!$id)
	{
		$obj->set_field('pro_id,pro_title,pro_reduce_img');
		if($cat)
		{
			$family = implode(',',get_cat_family('cat_pro',$cat));
			$obj->set_where("pro_cat_id in ($family)");
		}
		$obj->set_page_size(get_varia('img_list_len'));
		$obj->set_page_num($page);
		$sheet = $obj->get_sheet();
		for($i = 0; $i < count($sheet); $i ++)
		{
			$sheet[$i]['short_title'] = cut_str($sheet[$i]['pro_title'],10);
		}
		set_link($obj->get_page_sum());
		$smarty->assign('show_sheet',1);
		$smarty->assign('product',$sheet);
	}else{
		$obj->set_field('pro_id,pro_title,pro_number,pro_img,pro_text,pro_price');
		$obj->set_where("pro_id = $id");
		$one = $obj->get_one();
		$smarty->assign('product',$one);
		
		$obj->set_where('');
		$obj->set_where("pro_lang = '".S_LANG."'");
		$obj->set_where('pro_show = 1');
		$obj->set_where("pro_id < $id");
		$one = $obj->get_one();
		$smarty->assign('next_id',$one['pro_id']);
		$smarty->assign('next_title',cut_str($one['pro_title'],20));		

		$obj->set_where('');
		$obj->set_where("pro_lang = '".S_LANG."'");
		$obj->set_where('pro_show = 1');
		$obj->set_where("pro_id > $id");
		$obj->set_order('');
		$obj->set_order('pro_top','asc');
		$obj->set_order('pro_index','asc');
		$obj->set_order('pro_id','asc');
		$one = $obj->get_one();
		$smarty->assign('prev_id',$one['pro_id']);
		$smarty->assign('prev_title',cut_str($one['pro_title'],20));
		
		$obj = new varia();
		$smarty->assign('share_code',$obj->get_value('share_code',true));

		$smarty->assign('show_sheet',0);
	}
}

//红头船
?>