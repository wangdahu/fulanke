<div id="header">
    <div class="logo"><a href="./"><img src="{$S_ROOT}images/logo.jpg" /></a></div>
	{if $S_MULTILINGUAL}
	<div class="lang">
	{foreach from=$lang_pack name=lang_pack item=item}
		<a href="./{$item.index_entrance}{if $url_page}?/{$url_page}/{/if}">{$item.foreign_name}</a>
		{if !$smarty.foreach.lang_pack.last}&nbsp;&nbsp;|&nbsp;&nbsp; {/if}
	{/foreach}
	</div>
	{/if}
    <div class="search" {if $S_MULTILINGUAL}style="top:40px;"{/if}>
        <form id="form_search" method="post" action="{$S_URL_PREFIX}search/">
            <input class="text" name="key" type="text" maxlength="30" />
            {if $S_LANG == 'zh-cn'}
            <input class="bt" type="button" onclick="do_search()" value="{$lang.search}" />
            {else}
            <input class="bt" type="button" style="width:35px;font-size:10px;font-weight:normal;" onclick="do_search()" value="{$lang.search}"/>
            {/if}
        </form>
    </div>
    <div id="nav">
        <ul>
            {foreach from=$nav name=nav item=item}
            <li {if $smarty.foreach.nav.first}class="first"{/if}><a href="{$item.men_url}" {if $item.target == 1}target="_blank"{/if}>{$item.men_name}</a></li>
            {/foreach}
            <div class="clear"></div>
        </ul>
    </div>
</div>
<!-- 红头船 -->
