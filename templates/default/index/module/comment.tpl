<div id="comment">
    <div class="head"><span>{$lang.user_comment}</span></div>
    <div class="main">
        <div class="mes_sheet">
            <ul>
                {foreach from=$comment name=comment item=item}
                <li>
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="30px"><span>{if $item.user_name}{$item.user_name}{else}{$lang.anonymous_user}{/if}</span>&nbsp;&nbsp;{$item.com_add_time}&nbsp;&nbsp;{$lang.said}：</td>
                            <td width="80px">{section name=loop loop=$item.com_rank}<img src="{$S_TPL_PATH}images/star.gif" />{/section}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><div class="txt">{$item.com_text}</div></td>
                        </tr>
                        {if $item.com_reply}
                        <tr>
                            <td colspan="2"><div class="reply"><span>{$lang.reply}：</span>{$item.com_reply}</div></td>
                        </tr>
                        {/if}
                    </table>
                </li>
                {/foreach}
            </ul>
            {if !$comment}<div class="not_found">{$lang.not_found}</div>{/if}
        </div>
		{$link_page = 'product/id-'|cat:$id}
        {include file="module/page_link.tpl"}
        <div id="leave_word">
        <form id="form_add_comment" method="post" action="{$S_URL_PREFIX}info/">
            <input name="cmd" type="hidden" value="add_comment"/>
            <input name="type" type="hidden" value="{$url_page}"/>
            <input name="page_id" type="hidden" value="{$id}"/>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="l">{$lang.user_name}：</td>
                    <td>{if $user_name}{$user_name}{else}{$lang.anonymous_user}{/if}</td>
                </tr>
                <tr>
                    <td class="l">E-mail：</td>
                    <td><input name="email" class="text" type="text" value="{$user_email}" /></td>
                </tr>
                <tr>
                    <td class="l">{$lang.comment_rank}：</td>
                    <td>
                        <input name="rank" type="radio" value="1" />{section name=loop loop=1}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
                        <input name="rank" type="radio" value="2" />{section name=loop loop=2}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
                        <input name="rank" type="radio" value="3" />{section name=loop loop=3}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
                        <input name="rank" type="radio" value="4" />{section name=loop loop=4}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
                        <input name="rank" type="radio" value="5" checked="checked" />{section name=loop loop=5}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;&nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="l">{$lang.comment_text}：</td>
                    <td><textarea name="text"></textarea></td>
                </tr>
                <tr>
                    <td class="bt_row" colspan="2">
                        <input class="button" type="button" onclick="submit_add_comment()" value="{$lang.submit}" />&nbsp;&nbsp;
                        <input class="button" type="reset" value="{$lang.reset}"/>
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</div>
<script language="javascript">
	var lang_email_empty = "{$lang.email_empty}";
	var lang_comment_text_empty = "{$lang.comment_text_empty}";
</script>
{literal}
<script language="javascript">
function submit_add_comment()
{
	var str = "";
	var obj = document.getElementById("form_add_comment");
	if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
	if(obj.text.value == ""){str += "-" + lang_comment_text_empty + "\n";}
	if(str != "")
	{
		alert(str);
	}else{
		obj.submit();
	}
}
</script>
{/literal}
<!-- 红头船 -->