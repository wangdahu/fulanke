{if $show_sheet == 1}
    <div class="art_sheet list">
        <ul class="main">
            {foreach from=$article name=article item=item}
            <li>
                <a href="{$S_URL_PREFIX}article/id-{$item.art_id}/{$S_URL_SUFFIX}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
                <span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
                <div class="clear"></div>
            </li>
            {/foreach}
        </ul>
        {if !$article}<div class="not_found">{$lang.not_found}</div>{/if}
    </div>
    {$link_page = 'product/cat-'|cat:$cat}
    {include file="module/page_link.tpl"}
{else}
    <div id="article">
        <div class="title">
        	<h3>{$article.art_title}</h3>
        </div>
        <div class="message">
        	{$lang.author}：{$article.art_author}&nbsp;&nbsp;&nbsp;{$lang.add_time}：{$article.art_add_time|date_format:"%Y-%m-%d %H:%M:%S"}
        </div>
        <div class="main">
        	{$article.art_text}
        </div>
		<div class="share">{$share_code}</div>
        {$link_page = 'article'}
        {include file="module/prev_next.tpl"}
    </div>
{/if}
<!-- 红头船 -->
