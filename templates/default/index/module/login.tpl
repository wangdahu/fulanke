<div class="box" id="login">
    <div class="head"><span>{if !$user_id}{$lang.user_login}{else}{$lang.user_center}{/if}</span></div>
    <div class="main">
	{if !$user_id}
        <form id="form_user_login" method="post" action="{$S_URL_PREFIX}info/">
            <input name="cmd" type="hidden" value="user_login"/>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="l">{$lang.account}：</td>
                    <td class="r"><input class="text" name="username" type="text" /></td>
                </tr>
                <tr>
                    <td class="l">{$lang.password}：</td>
                    <td class="r"><input class="text" name="password" type="password" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="button" type="submit" value="{$lang.login}" />&nbsp;&nbsp;
                        <input class="button" type="button" value="{$lang.register}" onclick="document.location.href='{$S_URL_PREFIX}user/mod-register/'" />
                    </td>
                </tr>
            </table>
        </form>
	{else}
		<table class="link" cellspacing="0" cellpadding="0">
			<tr>
				<td><a href="{$S_URL_PREFIX}user/mod-profile/{$S_URL_SUFFIX}">{$lang.user_info}</a></td>
				<td><a href="{$S_URL_PREFIX}user/mod-message_list/{$S_URL_SUFFIX}">{$lang.my_message}</a></td>
			</tr>
			<tr>
				<td><a href="{$S_URL_PREFIX}user/mod-comment_list/{$S_URL_SUFFIX}">{$lang.my_comments}</a></td>
				<td><a href="{$S_URL_PREFIX}user/mod-booking_list/{$S_URL_SUFFIX}">{$lang.my_booking}</a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="{$S_URL_PREFIX}user/mod-logout/{$S_URL_SUFFIX}">{$lang.log_out}</a></td>
			</tr>
		</table>
	{/if}
    </div>
</div>
<!-- 红头船 -->
