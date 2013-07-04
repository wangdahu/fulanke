<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:32:31
         compiled from "templates/default/admin\module\service\user_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89451d13e9fcd2fc1-14711706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c8ba92ea998ccbd3a381792e87e5633de51fdf' => 
    array (
      0 => 'templates/default/admin\\module\\service\\user_list.tpl',
      1 => 1370968279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89451d13e9fcd2fc1-14711706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'item' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13e9ff2a60',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13e9ff2a60')) {function content_51d13e9ff2a60($_smarty_tpl) {?><div class="here">用户管理</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>用户名</b></td>
      <td><b>真实姓名</b></td>
      <td><b>E-mail</b></td>
	  <td><b>QQ</b></td>
	  <td><b>电话</b></td>
	  <td width="120px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_username'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_real_name'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_email'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_qq'];?>
</td>
	  <td><?php echo $_smarty_tpl->tpl_vars['item']->value['use_tel'];?>
</td>
	  <td>
		  <a href="?/service/mod-user_edit/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['use_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[编辑]</a>
		  <a onClick="del_user('<?php echo $_smarty_tpl->tpl_vars['item']->value['use_id'];?>
')">[删除]</a>
	  </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="7">
		  <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('service/mod-user_list', null, 0);?>
		  <?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_user">
    <div class="close" onclick="hide_box('del_user')">关闭</div>
    <div class="main">您确定要删除该用户吗？
        <div class="bt_row">
        <form id="form_del_user" method="post" action="?/deal/dir-service/" target="deal">
            <input name="cmd" type="hidden" value="del_user" />
            <input name="table" type="hidden" value="users" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del_user',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_user')" value="取消" />
		</form>
        </div>
    </div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
	function del_user(val)
	{
		var obj = document.getElementById("form_del_user");
		obj.id.value = val;
		show_box("del_user",300,125);
	}
</script>
<?php }} ?>