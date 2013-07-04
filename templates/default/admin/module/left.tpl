<div id="left">
	<div style="height:53px;"></div>
    <ul>
        {if $url_page == 'basic'}
        <li><a href="?/basic/mod-basic_info/{$S_URL_SUFFIX}">基本信息</a></li>
        <li><a href="?/basic/mod-contact_list/{$S_URL_SUFFIX}">联系方式</a></li>
        <li><a href="?/basic/mod-site_set/{$S_URL_SUFFIX}">网站设置</a></li>
        <li><a href="?/basic/mod-nav_list/{$S_URL_SUFFIX}">导航管理</a></li>
        <li><a href="?/basic/mod-title_list/{$S_URL_SUFFIX}">标题设置</a></li>
        <li><a href="?/basic/mod-show_set/{$S_URL_SUFFIX}">模块启闭</a></li>
		<li><a href="?/basic/mod-safe_set/{$S_URL_SUFFIX}">安全设置</a></li>
        <li><a href="?/basic/mod-admin_list/{$S_URL_SUFFIX}">管理员帐号</a></li>
        <li><a href="?/basic/mod-db_set/{$S_URL_SUFFIX}">数据库管理</a></li>
        <li><a href="?/basic/mod-other/{$S_URL_SUFFIX}">其它设置</a></li>
        {elseif $url_page == 'product'}
        <li><a href="?/product/mod-sheet/{$S_URL_SUFFIX}">产品列表</a></li>
        <li><a href="?/product/mod-add/{$S_URL_SUFFIX}">添加产品</a></li>
        <li><a href="?/product/mod-cat/{$S_URL_SUFFIX}">产品分类</a></li>
        {elseif $url_page == 'article' || $url_page == 'about' || $url_page == 'recruit' || $url_page == 'download'}
        <li><a href="?/article/mod-sheet/{$S_URL_SUFFIX}">文章列表</a></li>
        <li><a href="?/article/mod-add/{$S_URL_SUFFIX}">添加文章</a></li>
        <li><a href="?/article/mod-cat/{$S_URL_SUFFIX}">文章分类</a></li>
        <li><a href="?/about/mod-sheet/{$S_URL_SUFFIX}">关于我们列表</a></li>
        <li><a href="?/about/mod-add/{$S_URL_SUFFIX}">添加关于我们</a></li>
        <li><a href="?/recruit/mod-sheet/{$S_URL_SUFFIX}">人才招聘列表</a></li>
        <li><a href="?/recruit/mod-add/{$S_URL_SUFFIX}">添加人才招聘</a></li>
        <li><a href="?/download/mod-sheet/{$S_URL_SUFFIX}">下载列表</a></li>
        <li><a href="?/download/mod-add/{$S_URL_SUFFIX}">添加下载</a></li>
        {elseif $url_page == 'service'}
		<li><a href="?/service/mod-user_list/{$S_URL_SUFFIX}">用户管理</a></li>
        <li><a href="?/service/mod-message/{$S_URL_SUFFIX}">留言管理</a></li>
		<li><a href="?/service/mod-comment/{$S_URL_SUFFIX}">评论管理</a></li>
		<li><a href="?/service/mod-booking/{$S_URL_SUFFIX}">产品订购</a></li>
        <li><a href="?/service/mod-research/{$S_URL_SUFFIX}">问卷调查</a></li>
        <li><a href="?/service/mod-notice/{$S_URL_SUFFIX}">网站公告</a></li>
        <li><a href="?/service/mod-online/{$S_URL_SUFFIX}">在线客服</a></li>
		<li><a href="?/service/mod-agreement/{$S_URL_SUFFIX}">用户协议</a></li>
        <li><a href="?/service/mod-link/{$S_URL_SUFFIX}">友情链接</a></li>
        {elseif $url_page == 'file'}
        <li><a href="?/file/mod-tpl_list/{$S_URL_SUFFIX}">选择模板</a></li>
        <li><a href="?/file/mod-tpl_files/{$S_URL_SUFFIX}">模板文件</a></li>
        <li><a href="?/file/mod-pic_lists/{$S_URL_SUFFIX}">图片管理</a></li>
        <li><a href="?/file/mod-focus_list/{$S_URL_SUFFIX}">焦点图片</a></li>
        <li><a href="?/file/mod-lang_list/{$S_URL_SUFFIX}">语言设置</a></li>
        <li><a href="?/file/mod-files_list/{$S_URL_SUFFIX}">资源管理</a></li>
        {/if}
    </ul>
    <div id="version">
        Powered by <a href="http://www.rhscms.com/" target="_blank">RHSCMS</a><br>
    </div>
</div>