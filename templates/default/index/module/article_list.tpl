{if $show_all_art != 1}
    {foreach from=$best_art_cat name=best_art_cat item=cat}
    {if $smarty.foreach.best_art_cat.index % 2 == 0}<div>{/if}
    <div class="box2 list art_list_{$smarty.foreach.best_art_cat.index % 2}">
        <div class="head">
            <span>{$cat.cat_name}</span>
            <a class="more" href="{$S_URL_PREFIX}article/cat-{$cat.cat_id}/{$S_URL_SUFFIX}">{$lang.more}</a>
        </div>
        <ul class="main">
            {foreach from=$art_list[$cat.cat_id] name=art_list item=item}
            <li>
                <a href="{$S_URL_PREFIX}article/id-{$item.art_id}/{$S_URL_SUFFIX}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
                <span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
                <div class="clear"></div>
            </li>
            {/foreach}
        </ul>
    </div>
    {if $smarty.foreach.best_art_cat.index % 2 == 1 || $smarty.foreach.best_art_cat.last}<div class="clear"></div></div>{/if}
    {/foreach}
{else}
    <div class="box2 list art_list_all">
        <div class="head">
            <span>{$lang.article}</span>
            <a class="more" href="{$S_URL_PREFIX}article/{$S_URL_SUFFIX}">{$lang.more}</a>
        </div>
        <ul class="main">
            {foreach from=$art_list name=art_list item=item}
            <li>
                <a href="{$S_URL_PREFIX}article/id-{$item.art_id}/{$S_URL_SUFFIX}" title="{$item.art_title}" target="_blank">{$item.short_title}</a>
                <span>{$item.art_add_time|date_format:"%Y-%m-%d"}</span>
                <div class="clear"></div>
            </li>
            {/foreach}
        </ul>
    </div>
{/if}
<!-- 红头船 -->
