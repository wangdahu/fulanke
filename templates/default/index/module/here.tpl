<div class="here">
    <span>{$channel_title}</span>
    <div class="link">
        <a href="./">{$lang.home}</a>
        {if $channel_title}<img src="{$S_TPL_PATH}images/here_img.jpg" /><a href="{$S_URL_PREFIX}{$url_page}/{$S_URL_SUFFIX}">{$channel_title}</a>{/if}
        {if $cat_name}<img src="{$S_TPL_PATH}images/here_img.jpg" /><a href="{$S_URL_PREFIX}{$url_page}/cat-{$cat_id}/{$S_URL_SUFFIX}">{$cat_name}</a>{/if}
        {if $page_title}<img src="{$S_TPL_PATH}images/here_img.jpg" /><a href="?{$url}">{$page_title|truncate:20}</a>{/if}
    </div>
</div>
<!-- 红头船 -->