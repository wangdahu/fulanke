<div id="prev_next">
    <div class="prev">{$lang.prev}：{if $prev_title}<a href="{$S_URL_PREFIX}{$link_page}/id-{$prev_id}/{$S_URL_SUFFIX}">{$prev_title}</a>{else}{$lang.none}{/if}</div>
    <div class="next">{$lang.next}：{if $next_title}<a href="{$S_URL_PREFIX}{$link_page}/id-{$next_id}/{$S_URL_SUFFIX}">{$next_title}</a>{else}{$lang.none}{/if}</div>
    <div class="clear"></div>
</div>