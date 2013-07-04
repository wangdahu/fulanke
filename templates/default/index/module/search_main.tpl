<div class="img_sheet">
    {foreach from=$search name=search item=item}
    <div class="unit"><div class="in">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <td class="img">
                	<a href="{$S_URL_PREFIX}product/id-{$item.pro_id}/{$S_URL_SUFFIX}" target="_blank"><img src="{$S_ROOT}{$item.pro_reduce_img}" onload="picresize(this,150,150)"/></a>
                </td>
            </tr>
            <tr>
                <td class="title">
                	<a href="{$S_URL_PREFIX}product/id-{$item.pro_id}/{$S_URL_SUFFIX}" target="_blank">{$item.short_title}</a>
                </td>
            </tr>
        </table>
    </div></div>
    {/foreach}
    {if !$search}<div class="not_found">{$lang.not_found}</div>{/if}
	<div class="clear"></div>
</div>
{$link_page = 'search/key-'|cat:$key}
{include file="module/page_link.tpl"}
<!-- 红头船 -->
