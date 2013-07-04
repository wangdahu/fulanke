<div class="here">编辑用户信息 - {$profile.use_username}</div>
<div class="block">
    <form id="form_edit_user" method="post" action="?/deal/dir-service/" target="deal">
        <input name="cmd" type="hidden" value="edit_user"/>
		<input name="use_id" type="hidden" value="{$profile.use_id}"/>
        <table class="main_table">
            <tr>
                <td width="250px">出生日期：</td>
                <td>
                    <select name="birthday_year">
                        <option value="0">请选择</option>
                        {section name=loop loop=100}
                        {$val = 1913 + $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_year}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>&nbsp;&nbsp;
                    <select name="birthday_month">
                        <option value="0">请选择</option>
                        {section name=loop loop=12}
                        {$val = $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_month}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>&nbsp;&nbsp;
                    <select name="birthday_day">
                        <option value="0">请选择</option>
                        {section name=loop loop=31}
                        {$val = $smarty.section.loop.index + 1}
                        <option value="{$val}" {if $val == $profile.use_birthday_day}selected="selected"{/if}>{$val}</option>
                        {/section}
                    </select>
                </td>
            </tr>
            <tr>
                <td>性&nbsp;&nbsp;别：</td>
                <td>
                    <input name="sex" type="radio" value="0" {if $profile.use_sex == 0}checked="checked"{/if} />保密&nbsp;&nbsp;
                    <input name="sex" type="radio" value="1" {if $profile.use_sex == 1}checked="checked"{/if} />男&nbsp;&nbsp;
                    <input name="sex" type="radio" value="2" {if $profile.use_sex == 2}checked="checked"{/if} />女
                </td>
            </tr>
            <tr>
                <td>真实姓名：</td>
                <td><input class="text" name="real_name" type="text" value="{$profile.use_real_name}" /></td>
            </tr>
            <tr>
                <td>Email：</td>
                <td><input class="text" name="email" type="text" value="{$profile.use_email}" /></td>
            </tr>
            <tr>
                <td>QQ：</td>
                <td><input class="text" name="qq" type="text" value="{$profile.use_qq}" /></td>
            </tr>
            <tr>
                <td>电话：</td>
                <td><input class="text" name="tel" type="text" value="{$profile.use_tel}" /></td>
            </tr>
            <tr>
                <td>手机：</td>
                <td><input class="text" name="phone" type="text" value="{$profile.use_phone}" /></td>
            </tr>
            <tr>
                <td>地址：</td>
                <td><input class="text" name="address" type="text" value="{$profile.use_address}" /></td>
            </tr>
            <tr>
                <td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="submit_edit_user()" value="修改" />
						<input class="button" type="button" onclick="go_back()" value="返回" />
					</div>
				</td>
            </tr>
        </table>
    </form>
</div>
<div class="here">修改用户密码 - {$profile.use_username}</div>
<div class="block">
    <form id="form_edit_pwd" method="post" action="?/deal/dir-service/" target="deal">
        <input name="cmd" type="hidden" value="edit_pwd"/>
		<input name="use_id" type="hidden" value="{$profile.use_id}"/>
        <table class="main_table">
            <tr>
                <td width="250px">新密码：</td>
                <td><input class="text" name="new_pwd" type="password" /></td>
            </tr>
            <tr>
                <td>确认密码：</td>
                <td><input class="text" name="re_pwd" type="password" /></td>
            </tr>
            <tr>
                <td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="submit_edit_pwd()" value="修改" />
						<input class="button" type="button" onclick="go_back()" value="返回" />
					</div>
				</td>
            </tr>
        </table>
    </form>
</div>
<iframe id="deal" name="deal"></iframe>
{literal}
<script language="javascript">
	function submit_edit_user()
	{
		var str = "";
		var obj = document.getElementById("form_edit_user");
		if(obj.real_name.value == ""){str = "真实姓名不能为空\n";}
		else if(obj.email.value == ""){str = "Email不能为空\n";}
		else if(obj.qq.value == ""){str = "QQ不能为空\n";}
		else if(obj.tel.value == ""){str = "电话不能为空\n";}
		else if(obj.address.value == ""){str = "地址不能为空\n";}
		if(str != "")
		{
			document.getElementById("result_main").innerHTML = str;
			show_box("result",280,95);
		}else{
			do_submit('form_edit_user',0);
		}
	}
	function submit_edit_pwd()
	{
		var str = "";
		var obj = document.getElementById("form_edit_pwd");
		var new_pwd = obj.new_pwd.value;
		var re_pwd = obj.re_pwd.value;
		if(new_pwd.length < 6){str = "新密码不能小于6个字符\n";}
		else if(new_pwd.length > 15){str = "新密码不能大于15个字符\n";}
		else if(new_pwd != re_pwd){str = "两次输入密码不一致\n";}
		if(str != "")
		{
			document.getElementById("result_main").innerHTML = str;
			show_box("result",280,95);
		}else{
			do_submit('form_edit_pwd',0);
		}
	}
</script>
{/literal}