<div class="here">管理员帐号</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>用户名</b></td>
	  <td width="50px"><b>级别</b></td>
	  <td><b>上次登录时间</b></td>
	  <td><b>最后登录时间</b></td>
	  <td width="200px"><b>操作</b></td>
    </tr>
    {foreach from=$admin name=admin item=item}
    <tr>
      <td>{$item.adm_username}</td>
	  <td>{$item.adm_grade}</td>
	  <td>{if $item.adm_prev_login}{$item.adm_prev_login|date_format:"%Y-%m-%d %H:%M:%S"}{else}0{/if}</td>
	  <td>{if $item.adm_last_login}{$item.adm_last_login|date_format:"%Y-%m-%d %H:%M:%S"}{else}0{/if}</td>
	  <td>
	  	  {if $me.adm_grade < $item.adm_grade}
		  <a href="?/basic/mod-power_set/id-{$item.adm_id}/{$S_URL_SUFFIX}">[权限设置]</a>
		  <a onclick="edit_admin('{$item.adm_username}')">[修改密码]</a>
		  <a onclick="del_admin('{$item.adm_id}')">[删除]</a>
		  {else}
		  <a onclick="show_box('no_power',320,95)">[权限设置]</a>
		  <a onclick="show_box('no_power',320,95)">[修改密码]</a>
		  <a onclick="show_box('no_power',320,95)">[删除]</a>
		  {/if}
	  </td>
    </tr>
    {/foreach}
	<tr>
		<td colspan="5">
			<div class="bt_row">
				<input class="button" type="button" onClick="show_box('add_admin',350,180)" value="添加" />
			</div>
		</td>
	</tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="no_power">
    <div class="close" onclick="hide_box('no_power')">关闭</div>
    <div class="main">对不起，您只能对下级帐号进行操作</div>
</div>
<div class="box" id="add_admin">
    <div class="head">
        <div class="title">添加管理员帐号</div>
        <div class="close" onclick="hide_box('add_admin')">关闭</div>
    </div>
    <form id="form_add_admin" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="add_admin" />
        <table class="box_table">
            <tr>
                <td>用户名：</td>
                <td><input class="text" name="adm_username" type="text" /></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input class="text" name="adm_password" type="password" /></td>
            </tr>
            <tr>
                <td>重复密码：</td>
                <td><input class="text" name="re_password" type="password" /></td>
            </tr>
            <tr>
            	<td colspan="2">
                    <div class="bt_row">
                        <input class="button" type="button" onclick="check_add_admin()" value="提交" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="box" id="edit_admin">
    <div class="head">
        <div class="title">修改密码</div>
        <div class="close" onclick="hide_box('edit_admin')">关闭</div>
    </div>
    <form id="form_edit_admin" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="edit_admin" />
		<input name="adm_username" type="hidden" value="" />
        <table class="box_table">
            <tr>
                <td>用户名：</td>
                <td><input class="text" name="username" type="text" disabled="disabled" /></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input class="text" name="adm_password" type="password" /></td>
            </tr>
            <tr>
                <td>重复密码：</td>
                <td><input class="text" name="re_password" type="password" /></td>
            </tr>
            <tr>
            	<td colspan="2">
                    <div class="bt_row">
                        <input class="button" type="button" onclick="check_edit_admin()" value="提交" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="box" id="del_admin">
    <div class="close" onclick="hide_box('del_admin')">关闭</div>
    <div class="main">您确定要删除该帐号吗？
        <div class="bt_row">
        <form id="form_del_admin" method="post" action="?/deal/dir-basic/" target="deal">
            <input name="cmd" type="hidden" value="del_admin" />
            <input name="table" type="hidden" value="admin" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del_admin',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_admin')" value="取消" />
		</form>
        </div>
    </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function check_add_admin()
	{
		var obj = document.getElementById("form_add_admin");
		var str = "";
		if(obj.adm_username.value.length < 5)
		{
			str = "用户名长度不能小于5个字符";
		}else if(obj.adm_password.value.length < 5){
			str = "密码长度不能小于5个字符";
		}else if(obj.adm_password.value != obj.re_password.value){
			str = "两次输入密码不一致";
		}
		ajax("post","?/deal/dir-basic/","cmd=check_admin_name&name=" + obj.adm_username.value,
		function(data)
		{
			if(data == 1)
			{
				str = "对不起，用户名已存在";
			}
			if(str != "")
			{
				document.getElementById("result_main").innerHTML = str;
				hide_box("add_admin");
				show_box("result",280,95);
			}else{
				do_submit("form_add_admin",1);
			}
		});
	}
	function edit_admin(val)
	{
		document.getElementById("form_edit_admin").adm_username.value = val;
		document.getElementById("form_edit_admin").username.value = val;
		show_box('edit_admin',350,180);
	}
	function check_edit_admin()
	{
		var obj = document.getElementById("form_edit_admin");
		var str = "";
		if(obj.adm_password.value.length < 5){
			str = "密码长度不能小于5个字符";
		}else if(obj.adm_password.value != obj.re_password.value){
			str = "两次输入密码不一致";
		}
		if(str != "")
		{
			document.getElementById("result_main").innerHTML = str;
			hide_box("edit_admin");
			show_box("result",280,95);
		}else{
			do_submit("form_edit_admin",1);
		}
	}
	function del_admin(val)
	{
		var obj = document.getElementById("form_del_admin");
		obj.id.value = val;
		show_box("del_admin",300,125);
	}
</script>
{/literal}