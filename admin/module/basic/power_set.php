<?php
function module_power_set()
{
	global $smarty,$id;
	$obj = new admin();
	$obj->set_where("adm_id = $id");
	$one = $obj->get_one();
	$power = get_power_arr();
	if($one['adm_power'] == 'all')
	{
		for($i = 0; $i < count($power); $i ++)
		{
			$power[$i]['set'] = 1;
		}
	}elseif($one['adm_power'] != ''){
		$urls = explode('|',$one['adm_power']);
	}else{
		$urls = array();
	}
	if($one['adm_power'] != 'all')
	{
		for($i = 0; $i < count($power); $i ++)
		{
			for($j = 0; $j < count($urls); $j ++)
			{
				if($power[$i]['url'] == $urls[$j])
				{
					$power[$i]['set'] = 1;
					break;
				}else{
					$power[$i]['set'] = 0;
				}
			}
		}
	}
	$smarty->assign('admin',$one);
	$smarty->assign('power',$power);
}

function get_power_arr()
{
	$i = 0;
	$arr[$i]['name'] = '基本信息';
	$arr[$i++]['url'] = '/basic/mod-basic_info/';
	$arr[$i]['name'] = '联系方式';
	$arr[$i++]['url'] = '/basic/mod-contact_list/';
	$arr[$i]['name'] = '网站设置';
	$arr[$i++]['url'] = '/basic/mod-site_set/';
	$arr[$i]['name'] = '导航管理';
	$arr[$i++]['url'] = '/basic/mod-nav_list/';
	$arr[$i]['name'] = '标题设置';
	$arr[$i++]['url'] = '/basic/mod-title_list/';
	$arr[$i]['name'] = '模块启闭';
	$arr[$i++]['url'] = '/basic/mod-show_set/';
	$arr[$i]['name'] = '安全设置';
	$arr[$i++]['url'] = '/basic/mod-safe_set/';
	$arr[$i]['name'] = '管理员帐号';
	$arr[$i++]['url'] = '/basic/mod-admin_list/';
	$arr[$i]['name'] = '数据库管理';
	$arr[$i++]['url'] = '/basic/mod-db_set/';
	$arr[$i]['name'] = '其它设置';
	$arr[$i++]['url'] = '/basic/mod-other/';
	
	$arr[$i]['name'] = '产品列表';
	$arr[$i++]['url'] = '/product/mod-sheet/';
	$arr[$i]['name'] = '添加产品';
	$arr[$i++]['url'] = '/product/mod-add/';
	$arr[$i]['name'] = '产品分类';
	$arr[$i++]['url'] = '/product/mod-cat/';
	
	$arr[$i]['name'] = '文章列表';
	$arr[$i++]['url'] = '/article/mod-sheet/';
	$arr[$i]['name'] = '添加文章';
	$arr[$i++]['url'] = '/article/mod-add/';
	$arr[$i]['name'] = '文章分类';
	$arr[$i++]['url'] = '/article/mod-cat/';
	$arr[$i]['name'] = '关于我们列表';
	$arr[$i++]['url'] = '/about/mod-sheet/';
	$arr[$i]['name'] = '添加关于我们';
	$arr[$i++]['url'] = '/about/mod-add/';
	$arr[$i]['name'] = '人才招聘列表';
	$arr[$i++]['url'] = '/recruit/mod-sheet/';
	$arr[$i]['name'] = '添加人才招聘';
	$arr[$i++]['url'] = '/recruit/mod-add/';
	$arr[$i]['name'] = '下载列表';
	$arr[$i++]['url'] = '/download/mod-sheet/';
	$arr[$i]['name'] = '添加下载';
	$arr[$i++]['url'] = '/download/mod-add/';
	
	$arr[$i]['name'] = '用户管理';
	$arr[$i++]['url'] = '/service/mod-user_list/';
	$arr[$i]['name'] = '留言管理';
	$arr[$i++]['url'] = '/service/mod-message/';
	$arr[$i]['name'] = '评论管理';
	$arr[$i++]['url'] = '/service/mod-comment/';
	$arr[$i]['name'] = '产品订购';
	$arr[$i++]['url'] = '/service/mod-booking/';
	$arr[$i]['name'] = '问卷调查';
	$arr[$i++]['url'] = '/service/mod-research/';
	$arr[$i]['name'] = '网站公告';
	$arr[$i++]['url'] = '/service/mod-notice/';
	$arr[$i]['name'] = '在线客服';
	$arr[$i++]['url'] = '/service/mod-online/';
	$arr[$i]['name'] = '用户协议';
	$arr[$i++]['url'] = '/service/mod-agreement/';
	$arr[$i]['name'] = '友情链接';
	$arr[$i++]['url'] = '/service/mod-link/';
	
	$arr[$i]['name'] = '选择模板';
	$arr[$i++]['url'] = '/file/mod-tpl_list/';
	$arr[$i]['name'] = '模板文件';
	$arr[$i++]['url'] = '/file/mod-tpl_files/';
	$arr[$i]['name'] = '图片管理';
	$arr[$i++]['url'] = '/file/mod-pic_lists/';
	$arr[$i]['name'] = '焦点图片';
	$arr[$i++]['url'] = '/file/mod-focus_list/';
	$arr[$i]['name'] = '语言设置';
	$arr[$i++]['url'] = '/file/mod-lang_list/';
	$arr[$i]['name'] = '资源管理';
	$arr[$i++]['url'] = '/file/mod-files_list/';
		
	$arr[$i]['name'] = '权限设置';
	$arr[$i++]['url'] = '/basic/mod-power_set/';
	$arr[$i]['name'] = '编辑产品信息';
	$arr[$i++]['url'] = '/product/mod-edit/';
	$arr[$i]['name'] = '编辑文章';
	$arr[$i++]['url'] = '/article/mod-edit/';
	$arr[$i]['name'] = '编辑关于我们';
	$arr[$i++]['url'] = '/about/mod-edit/';
	$arr[$i]['name'] = '编辑人才招聘';
	$arr[$i++]['url'] = '/recruit/mod-edit/';
	$arr[$i]['name'] = '编辑下载';
	$arr[$i++]['url'] = '/download/mod-edit/';
	
	$arr[$i]['name'] = '编辑用户信息';
	$arr[$i++]['url'] = '/service/mod-user_edit/';
	$arr[$i]['name'] = '订购详情';
	$arr[$i++]['url'] = '/service/mod-booking_info/';
	
	$arr[$i]['name'] = '编辑模板文件';
	$arr[$i++]['url'] = '/file/mod-tpl_edit/';
	$arr[$i]['name'] = '图片列表';
	$arr[$i++]['url'] = '/file/mod-pic_list/';
	$arr[$i]['name'] = '编辑语言包';
	$arr[$i++]['url'] = '/file/mod-lang_edit/';
	
	for($i = 0; $i < count($arr); $i ++)
	{
		$arr[$i]['set'] = 0;
	}
	
	return $arr;
}

//红头船
?>