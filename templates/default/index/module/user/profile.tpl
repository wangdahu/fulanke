<div class="box2" id="user_center">
    <div class="head"><span>{$lang.user_info}</span></div>
    <div class="main">
    <form id="form_edit_profile" method="post" action="{$S_URL_PREFIX}user/">
        <input name="cmd" type="hidden" value="edit_profile"/>
        <table class="sheet" cellspacing="1" cellpadding="0">
            <tr>
                <td class="l">{$lang.birthday}：</td>
                <td>
                    <select name="birthday_year">
                        <option value="0">{$lang.select}</option>
                        {section name=loop loop=100}
                        {$val = 1913 + $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_year}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>&nbsp;&nbsp;
                    <select name="birthday_month">
                        <option value="0">{$lang.select}</option>
                        {section name=loop loop=12}
                        {$val = $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_month}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>&nbsp;&nbsp;
                    <select name="birthday_day">
                        <option value="0">{$lang.select}</option>
                        {section name=loop loop=31}
                        {$val = $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_day}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>
                </td>
            </tr>
            <tr>
                <td class="l">{$lang.sex}：</td>
                <td>
                    <input name="sex" type="radio" value="0" {if $profile.use_sex == 0}checked="checked"{/if} />{$lang.secrecy}&nbsp;&nbsp;
                    <input name="sex" type="radio" value="1" {if $profile.use_sex == 1}checked="checked"{/if} />{$lang.male}&nbsp;&nbsp;
                    <input name="sex" type="radio" value="2" {if $profile.use_sex == 2}checked="checked"{/if} />{$lang.female}
                </td>
            </tr>
            <tr>
                <td class="l">{$lang.real_name}：</td>
                <td><input class="text" name="real_name" type="text" value="{$profile.use_real_name}" /></td>
            </tr>
            <tr>
                <td class="l">Email：</td>
                <td><input class="text" name="email" type="text" value="{$profile.use_email}" /></td>
            </tr>
            <tr>
                <td class="l">QQ：</td>
                <td><input class="text" name="qq" type="text" value="{$profile.use_qq}" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.tel}：</td>
                <td><input class="text" name="tel" type="text" value="{$profile.use_tel}" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.phone}：</td>
                <td><input class="text" name="phone" type="text" value="{$profile.use_phone}" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.address}：</td>
                <td><input class="text" name="address" type="text" value="{$profile.use_address}" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.pwd_question}：</td>
                <td>
                    <select name="question">
                        <option value="0">{$lang.select_pwd_question}</option>
                        <option value="friend_birthday" {if $profile.use_question == 'friend_birthday'}selected="selected"{/if}>{$lang.friend_birthday}</option>
                        <option value="old_address" {if $profile.use_question == 'old_address'}selected="selected"{/if}>{$lang.old_address}</option>
                        <option value="motto" {if $profile.use_question == 'motto'}selected="selected"{/if}>{$lang.motto}</option>
                        <option value="favorite_movie" {if $profile.use_question == 'favorite_movie'}selected="selected"{/if}>{$lang.favorite_movie}</option>
                        <option value="favorite_song" {if $profile.use_question == 'favorite_song'}selected="selected"{/if}>{$lang.favorite_song}</option>
                        <option value="favorite_food" {if $profile.use_question == 'favorite_food'}selected="selected"{/if}>{$lang.favorite_food}</option>
                        <option value="interest" {if $profile.use_question == 'interest'}selected="selected"{/if}>{$lang.interest}</option>
                        <option value="favorite_novel" {if $profile.use_question == 'favorite_novel'}selected="selected"{/if}>{$lang.favorite_novel}</option>
                        <option value="favorite_equipe" {if $profile.use_question == 'favorite_equipe'}selected="selected"{/if}>{$lang.favorite_equipe}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="l">{$lang.pwd_answer}：</td>
                <td><input class="text" name="answer" type="text" value="{$profile.use_answer}" /></td>
            </tr>
            <tr>
                <td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_profile()" value="{$lang.edit}" /></td>
            </tr>
        </table>
    </form>
    <div class="space"></div>
    <form id="form_edit_pwd" method="post" action="{$S_URL_PREFIX}user/">
        <input name="cmd" type="hidden" value="edit_pwd"/>
        <table class="sheet" cellspacing="1" cellpadding="0">
            <tr>
                <td class="l">{$lang.old_pwd}：</td>
                <td><input class="text" name="old_pwd" type="password" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.new_pwd}：</td>
                <td><input class="text" name="new_pwd" type="password" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.re_pwd}：</td>
                <td><input class="text" name="re_pwd" type="password" /></td>
            </tr>
            <tr>
                <td colspan="2" class="bt_row"><input class="button" type="button" onclick="submit_edit_pwd()" value="{$lang.edit}" /></td>
            </tr>
        </table>
    </form>
    </div>
</div>
<script language="javascript">
	var lang_real_name_empty = "{$lang.real_name_empty}";
	var lang_email_empty = "{$lang.email_empty}";
	var lang_qq_empty = "{$lang.qq_empty}";
	var lang_tel_empty = "{$lang.tel_empty}";
	var lang_address_empty = "{$lang.address_empty}";
	var lang_old_pwd_too_short = "{$lang.old_pwd_too_short}";
	var lang_old_pwd_too_long = "{$lang.old_pwd_too_long}";
	var lang_new_pwd_too_short = "{$lang.new_pwd_too_short}";
	var lang_new_pwd_too_long = "{$lang.new_pwd_too_long}";
	var lang_pwd_different = "{$lang.pwd_different}";
</script>
{literal}
<script language="javascript">
function submit_edit_profile()
{
	var str = "";
	var obj = document.getElementById("form_edit_profile");
	if(obj.real_name.value == ""){str += "-" + lang_real_name_empty + "\n";}
	if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
	if(obj.qq.value == ""){str += "-" + lang_qq_empty + "\n";}
	if(obj.tel.value == ""){str += "-" + lang_tel_empty + "\n";}
	if(obj.address.value == ""){str += "-" + lang_address_empty + "\n";}
	if(str != "")
	{
		alert(str);
	}else{
		obj.submit();
	}
}
function submit_edit_pwd()
{
	var str = "";
	var obj = document.getElementById("form_edit_pwd");
	var old_pwd = obj.old_pwd.value;
	var new_pwd = obj.new_pwd.value;
	var re_pwd = obj.re_pwd.value;
	if(old_pwd.length < 6){str += "-" + lang_old_pwd_too_short + "\n";}
	else if(old_pwd.length > 15){str += "-" + lang_old_pwd_too_long + "\n";}
	if(new_pwd.length < 6){str += "-" + lang_new_pwd_too_short + "\n";}
	else if(new_pwd.length > 15){str += "-" + lang_new_pwd_too_long + "\n";}
	if(new_pwd != re_pwd){str += "-" + lang_pwd_different + "\n";}
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