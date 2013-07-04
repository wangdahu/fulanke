<div class="here">
    <span>{if $page_title}{$page_title}{else}{$channel_title}{/if}</span>
    <div class="link">
        <a href="./">{$lang.home}</a>
        {if $channel_title}<img src="{$S_TPL_PATH}images/here_img.jpg" /><a href="{$S_URL_PREFIX}{$url_page}/{$S_URL_SUFFIX}">{$channel_title}</a>{/if}
        {if $page_title}<img src="{$S_TPL_PATH}images/here_img.jpg" /><a href="?{$url}">{$page_title}</a>{/if}
    </div>
</div>
<div id="about_main">
	{$about}
</div>
<!-- 红头船 -->
