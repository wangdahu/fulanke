<div id="header">
    <ul id="nav">
        <li><a href="?/basic/mod-basic_info/{$S_URL_SUFFIX}">基本设置</a></li>
        <li><a href="?/product/mod-sheet/{$S_URL_SUFFIX}">产品管理</a></li>
        <li><a href="?/article/mod-sheet/{$S_URL_SUFFIX}">文章管理</a></li>
        <li><a href="?/service/mod-user_list/{$S_URL_SUFFIX}">用户互动</a></li>
        <li><a href="?/file/mod-tpl_list/{$S_URL_SUFFIX}">文件管理</a></li>
    </ul>
    <div class="link">
        <a href="./" target="_blank">网站首页</a>
        <a href="?/out/">退出系统</a>
    </div>
	{if $S_MULTILINGUAL}
	<div class="lang">
		当前语言：
        <select onchange="change_lang(this.value)">
			{foreach from=$lang_pack name=lang_pack item=item}
			<option {if $S_LANG == $item.pack_name}selected="selected"{/if} value="{$item.admin_entrance}{if $url}?{$url}{/if}">{$item.chinese_name}</option>
			{/foreach}
		</select>
	</div>
	{/if}
</div>