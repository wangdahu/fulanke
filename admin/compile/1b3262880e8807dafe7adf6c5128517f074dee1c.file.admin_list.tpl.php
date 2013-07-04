<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:36:47
         compiled from "templates/default/admin\module\basic\admin_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:924751d13f9f47c739-43883963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b3262880e8807dafe7adf6c5128517f074dee1c' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\admin_list.tpl',
      1 => 1371073322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924751d13f9f47c739-43883963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
    'item' => 0,
    'me' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13f9f7f7cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13f9f7f7cd')) {function content_51d13f9f7f7cd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><div class="here">管理员帐号</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>用户名</b></td>
	  <td width="50px"><b>级别</b></td>
	  <td><b>上次登录时间</b></td>
	  <td><b>最后登录时间</b></td>
	  <td width="200px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['adm_username'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['adm_grade'];?>
</td>
	  <td><?php if ($_smarty_tpl->tpl_vars['item']->value['adm_prev_login']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['adm_prev_login'],"%Y-%m-%d %H:%M:%S");?>
<?php }else{ ?>0<?php }?></td>
	  <td><?php if ($_smarty_tpl->tpl_vars['item']->value['adm_last_login']){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['adm_last_login'],"%Y-%m-%d %H:%M:%S");?>
<?php }else{ ?>0<?php }?></td>
	  <td>
	  	  <?php if ($_smarty_tpl->tpl_vars['me']->value['adm_grade']<$_smarty_tpl->tpl_vars['item']->value['adm_grade']){?>
		  <a href="?/basic/mod-power_set/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['adm_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[权限设置]</a>
		  <a onclick="edit_admin('<?php echo $_smarty_tpl->tpl_vars['item']->value['adm_username'];?>
')">[修改密码]</a>
		  <a onclick="del_admin('<?php echo $_smarty_tpl->tpl_vars['item']->value['adm_id'];?>
')">[删除]</a>
		  <?php }else{ ?>
		  <a onclick="show_box('no_power',320,95)">[权限设置]</a>
		  <a onclick="show_box('no_power',320,95)">[修改密码]</a>
		  <a onclick="show_box('no_power',320,95)">[删除]</a>
		  <?php }?>
	  </td>
    </tr>
    <?php } ?>
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
<?php }} ?>