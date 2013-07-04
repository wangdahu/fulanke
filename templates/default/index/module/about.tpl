<div class="box2" id="about">
    <div class="head">
        <span>{if $about}{$about.title}{else}{$lang.about_us}{/if}</span>
        <a class="more" href="{$S_URL_PREFIX}about/{$S_URL_SUFFIX}">{$lang.more}</a>
    </div>
    <div class="main">
        <div class="img"><img src="{$S_TPL_PATH}images/about.jpg" /></div>
        {if $about}
            {$about.text}
            <a class="more" href="{$S_URL_PREFIX}about/{$S_URL_SUFFIX}">【{$lang.detailed}】</a>
        {/if}
    </div>
</div>
<!-- 红头船 -->
