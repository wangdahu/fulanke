<div class="box tree">
    <div class="head"><span>{$lang.art_tree}</span></div>
    <div class="main">
        {foreach from=$art_tree name=art_tree item=item}
        {if $item.grade == 1}{$grade = 1}{elseif $item.grade == 2}{$grade = 2}{else}{$grade = 3}{/if}
        <div class="cat{$grade}"><a href="{$S_URL_PREFIX}article/cat-{$item.id}/{$S_URL_SUFFIX}">{$item.name}</a></div>
        {/foreach}
    </div>
</div>
<!-- 红头船 -->
