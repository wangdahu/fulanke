<div class="box tree">
    <div class="head"><span>{$lang.pro_tree}</span></div>
    <div class="main">
        {foreach from=$pro_tree name=pro_tree item=item}
        {if $item.grade == 1}{$grade = 1}{elseif $item.grade == 2}{$grade = 2}{else}{$grade = 3}{/if}
        <div class="cat{$grade}"><a href="{$S_URL_PREFIX}product/cat-{$item.id}/{$S_URL_SUFFIX}">{$item.name}</a></div>
        {/foreach}
    </div>
</div>
<!-- 红头船 -->
