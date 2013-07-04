<div class="rec_sheet">
    <ul>
        {foreach from=$recruit name=recruit item=item}
        <li>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="title"><div>{$item.art_title}</div></td>
                    <td class="time">{$item.art_add_time|date_format:"%Y-%m-%d"}</td>
                </tr>
                <tr>
                	<td colspan="2" class="text">{$item.art_text}</td>
                </tr>
            </table>
        </li>
        {/foreach}
    </ul>
    {if !$recruit}<div class="not_found">{$lang.not_found}</div>{/if}
</div>
{$link_page = 'recruit'}
{include file="module/page_link.tpl"}
<!-- 红头船 -->
