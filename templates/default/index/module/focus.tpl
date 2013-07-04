<div id="focus">
    {if $focus}
    <div id="focus_bg"></div>
    <div id="focus_show"></div>
    <div id="focus_img">
        {foreach from=$focus name=focus item=item}
        <div name="focus_img" id="focus_{$smarty.foreach.focus.iteration}">{$S_ROOT}{$item.pic_path}|{$item.pic_url}|{$item.pic_title}</div>
        {/foreach}
    </div>
    <script type="text/javascript" src="{$S_TPL_PATH}js/focus.js"></script>
    {/if}
</div>
<!-- 红头船 -->
