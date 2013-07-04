<div class="box2" id="user_center">
    <div class="head"><span>{$lang.my_comments}</span></div>
    <div class="main">
        <div class="mes_sheet">
            <ul>
                {foreach from=$comment name=comment item=item}
                <li>
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td height="30px">
						{section name=loop loop=$item.com_rank}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
						<b>{$lang.comment}:</b><a href="{$S_URL_PREFIX}{$item.com_type}/id-{$item.com_page_id}/{$S_URL_SUFFIX}" target="_blank">《{$item.title}》</a>
						&nbsp;&nbsp;[{$item.com_add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
                    </tr>
                    <tr>
                        <td><div class="txt">{$item.com_text}</div></td>
                    </tr>
                    {if $item.com_reply}
                    <tr>
                        <td><div class="reply"><span>{$lang.reply}：</span>{$item.com_reply}</div></td>
                    </tr>
                    {/if}
                </table>
                </li>
                {/foreach}
            </ul>
            {if !$comment}<div class="not_found">{$lang.not_found}</div>{/if}
        </div>
        {$link_page = 'user/mod-comment_list'}
        {include file="module/page_link.tpl"}
    </div>
</div>
<!-- 红头船 -->