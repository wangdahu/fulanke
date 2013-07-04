<div class="box2" id="reg_login">
    <div class="head"><span>{$lang.user_register}</span></div>
    <div class="main">
    <form id="form_register" method="post" action="{$S_URL_PREFIX}info/">
        <input name="cmd" type="hidden" value="register"/>
        <table>
            <tr>
                <td class="l">{$lang.user_name}：</td>
                <td><input class="text" name="username" type="text" onkeyup="check_register('username',this.value)" /><span id="check_username"></span></td>
            </tr>
            <tr>
                <td class="l">{$lang.password}：</td>
                <td><input class="text" name="password" type="password" onkeyup="check_register('password',this.value)" /><span id="check_password"></span></td>
            </tr>
            <tr>
                <td class="l">{$lang.re_pwd}：</td>
                <td><input class="text" name="re_password" type="password" onkeyup="check_register('re_password',this.value)" /><span id="check_re_password"></span></td>
            </tr>
            <tr>
                <td class="l">{$lang.real_name}：</td>
                <td><input class="text" name="real_name" type="text" /></td>
            </tr>
            <tr>
                <td class="l">Email：</td>
                <td><input class="text" name="email" type="text" /></td>
            </tr>
            <tr>
                <td class="l">QQ：</td>
                <td><input class="text" name="qq" type="text" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.tel}：</td>
                <td><input class="text" name="tel" type="text" /></td>
            </tr>
            <tr>
                <td class="l">{$lang.address}：</td>
                <td><input class="text" name="address" type="text" /></td>
            </tr>
            <tr>
                <td class="l"></td>
                <td><input name="agreement" type="checkbox" checked="checked" value="1" />{$lang.i_agree}<a onclick="show_box('user_agreement',700,300);">《{$lang.agreement}》</a></td>
            </tr>
            <tr>
                <td class="l"></td>
                <td><input class="button" type="button" value="{$lang.submit}" onclick="submit_register()" /></td>
            </tr>
        </table>
    </form>
    </div>
</div>
<!-------------------------- BOX -------------------------->
<div class="alert" id="user_agreement">
    <div class="head">
		<div class="title">{$lang.agreement}</div>
		<div class="close" onclick="hide_box('user_agreement')">{$lang.close}</div>
    </div>
    <div class="agr_main">
	{$user_agreement}
	</div>
</div>
<!-------------------------- BOX -------------------------->
<script language="javascript">
	var lang_user_too_short = "{$lang.user_too_short}";
	var lang_user_too_long = "{$lang.user_too_long}";
	var lang_user_exists = "{$lang.user_exists}";
	var lang_user_can_be_used = "{$lang.user_can_be_used}";
	var lang_pwd_too_short = "{$lang.pwd_too_short}";
	var lang_pwd_too_long = "{$lang.pwd_too_long}";
	var lang_pwd_different = "{$lang.pwd_different}";
	var lang_pwd_can_be_used = "{$lang.pwd_can_be_used}";
	
	var lang_user_name_empty = "{$lang.user_name_empty}";
	var lang_pwd_empty = "{$lang.pwd_empty}";
	var lang_re_pwd_empty = "{$lang.re_pwd_empty}";
	var lang_real_name_empty = "{$lang.real_name_empty}";
	var lang_email_empty = "{$lang.email_empty}";
	var lang_qq_empty = "{$lang.qq_empty}";
	var lang_tel_empty = "{$lang.tel_empty}";
	var lang_address_empty = "{$lang.address_empty}";
	var lang_must_agree = "{$lang.must_agree}";
</script>
{literal}
<script language="javascript">
	function check_register(name,val)
	{
		switch(name)
		{
			case "username":
			if(val.length < 6)
			{
				document.getElementById("check_username").innerHTML = lang_user_too_short;
			}else if(val.length > 15){
				document.getElementById("check_username").innerHTML = lang_user_too_long;
			}else{
				ajax("post","?/info/","cmd=check_username&val=" + val,
				function(data)
				{
					if(data == 1)
					{
						document.getElementById("check_username").innerHTML = lang_user_exists;
					}else{
						document.getElementById("check_username").innerHTML = lang_user_can_be_used;
					}
				});
			}
			break;
			case "password":
			if(val.length < 6)
			{
				document.getElementById("check_password").innerHTML = lang_pwd_too_short;
			}else if(val.length > 15){
				document.getElementById("check_password").innerHTML = lang_pwd_too_long;
			}else{
				document.getElementById("check_password").innerHTML = lang_pwd_can_be_used;
			}
			break;
			case "re_password":
			var password = document.getElementById("form_register").password.value;
			if(val != password)
			{
				document.getElementById("check_re_password").innerHTML = lang_pwd_different;
			}else{
				document.getElementById("check_re_password").innerHTML = lang_pwd_can_be_used;
			}
			break;
		}
	}
	
	function submit_register()
	{
		var str = "";
		var obj = document.getElementById("form_register");
		if(obj.username.value == ""){str += "-" + lang_user_name_empty + "\n";}
		if(obj.password.value == ""){str += "-" + lang_pwd_empty + "\n";}
		if(obj.re_password.value == ""){str += "-" + lang_re_pwd_empty + "\n";}
		if(obj.real_name.value == ""){str += "-" + lang_real_name_empty + "\n";}
		if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
		if(obj.qq.value == ""){str += "-" + lang_qq_empty + "\n";}
		if(obj.tel.value == ""){str += "-" + lang_tel_empty + "\n";}
		if(obj.address.value == ""){str += "-" + lang_address_empty + "\n";}
		if(obj.agreement.checked == false){str += "-" + lang_must_agree + "\n";}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
</script>
{/literal}