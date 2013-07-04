<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:58
         compiled from "templates/default/admin\module\left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138151d13a82127f80-91541326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8530a8d37a5f8dadbe6f215022048f3cc1539966' => 
    array (
      0 => 'templates/default/admin\\module\\left.tpl',
      1 => 1371149714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2138151d13a82127f80-91541326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_page' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a823ce35',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a823ce35')) {function content_51d13a823ce35($_smarty_tpl) {?><div id="left">
	<div style="height:53px;"></div>
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['url_page']->value=='basic'){?>
        <li><a href="?/basic/mod-basic_info/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">基本信息</a></li>
        <li><a href="?/basic/mod-contact_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">联系方式</a></li>
        <li><a href="?/basic/mod-site_set/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">网站设置</a></li>
        <li><a href="?/basic/mod-nav_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">导航管理</a></li>
        <li><a href="?/basic/mod-title_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">标题设置</a></li>
        <li><a href="?/basic/mod-show_set/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">模块启闭</a></li>
		<li><a href="?/basic/mod-safe_set/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">安全设置</a></li>
        <li><a href="?/basic/mod-admin_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">管理员帐号</a></li>
        <li><a href="?/basic/mod-db_set/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">数据库管理</a></li>
        <li><a href="?/basic/mod-other/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">其它设置</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['url_page']->value=='product'){?>
        <li><a href="?/product/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">产品列表</a></li>
        <li><a href="?/product/mod-add/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">添加产品</a></li>
        <li><a href="?/product/mod-cat/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">产品分类</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['url_page']->value=='article'||$_smarty_tpl->tpl_vars['url_page']->value=='about'||$_smarty_tpl->tpl_vars['url_page']->value=='recruit'||$_smarty_tpl->tpl_vars['url_page']->value=='download'){?>
        <li><a href="?/article/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">文章列表</a></li>
        <li><a href="?/article/mod-add/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">添加文章</a></li>
        <li><a href="?/article/mod-cat/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">文章分类</a></li>
        <li><a href="?/about/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">关于我们列表</a></li>
        <li><a href="?/about/mod-add/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">添加关于我们</a></li>
        <li><a href="?/recruit/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">人才招聘列表</a></li>
        <li><a href="?/recruit/mod-add/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">添加人才招聘</a></li>
        <li><a href="?/download/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">下载列表</a></li>
        <li><a href="?/download/mod-add/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">添加下载</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['url_page']->value=='service'){?>
		<li><a href="?/service/mod-user_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">用户管理</a></li>
        <li><a href="?/service/mod-message/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">留言管理</a></li>
		<li><a href="?/service/mod-comment/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">评论管理</a></li>
		<li><a href="?/service/mod-booking/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">产品订购</a></li>
        <li><a href="?/service/mod-research/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">问卷调查</a></li>
        <li><a href="?/service/mod-notice/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">网站公告</a></li>
        <li><a href="?/service/mod-online/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">在线客服</a></li>
		<li><a href="?/service/mod-agreement/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">用户协议</a></li>
        <li><a href="?/service/mod-link/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">友情链接</a></li>
        <?php }elseif($_smarty_tpl->tpl_vars['url_page']->value=='file'){?>
        <li><a href="?/file/mod-tpl_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">选择模板</a></li>
        <li><a href="?/file/mod-tpl_files/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">模板文件</a></li>
        <li><a href="?/file/mod-pic_lists/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">图片管理</a></li>
        <li><a href="?/file/mod-focus_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">焦点图片</a></li>
        <li><a href="?/file/mod-lang_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">语言设置</a></li>
        <li><a href="?/file/mod-files_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">资源管理</a></li>
        <?php }?>
    </ul>
    <div id="version">
        Powered by <a href="http://www.rhscms.com/" target="_blank">RHSCMS</a><br>
    </div>
</div><?php }} ?>