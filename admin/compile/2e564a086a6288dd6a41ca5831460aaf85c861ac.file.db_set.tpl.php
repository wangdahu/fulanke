<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:26
         compiled from "templates/default/admin\module\basic\db_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3082751d13adad1d251-08484510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e564a086a6288dd6a41ca5831460aaf85c861ac' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\db_set.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3082751d13adad1d251-08484510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'restore' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13adaedcef',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13adaedcef')) {function content_51d13adaedcef($_smarty_tpl) {?><div class="here">备份数据库</div>
<div class="block">
	<form id="form_db_backup" method="post" action="?/deal/dir-basic/" target="deal">
		<input name="cmd" type="hidden" value="db_backup" />
		<table class="main_table">
			<tr>
				<td>备份数据库：</td>
				<td><input class="button" type="button" onClick="do_submit('form_db_backup',1)" value="立即备份" /></td>
			</tr>
		</table>
	</form>
</div>
<div class="here">备份管理</div>
<div class="block">
<table class="main_table">
  <tr>
    <td><b>已备份数据库</b></td>
    <td><b>操作</b></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['restore']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
</td>
    <td>
      <span class="red" onClick="db_restore('<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
')">[还原]</span>
      <span class="red" onClick="del_file('data/backup/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
')">[删除]</span>
    </td>
  </tr>
  <?php } ?>
</table>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.本功能目前只能备份ACCESS数据库，如果您使用的是MYSQL数据库，本功能不起作用。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_file">
  <div class="close" onclick="hide_box('del_file')">关闭</div>
  <div class="main">您确定要删除该文件吗？
    <div class="bt_row">
      <form id="form_del_file" method="post" action="?/deal/" target="deal">
	  	<input name="cmd" type="hidden" value="del_file" />
        <input name="path" type="hidden" value="" />
        <input class="button" type="button" onclick="do_submit('form_del_file',1)" value="确定" />
        <input class="button" type="button" onclick="hide_box('del_file')" value="取消" />
      </form>
    </div>
  </div>
</div>
<div class="box" id="db_restore">
  <div class="close" onclick="hide_box('db_restore')">关闭</div>
  <div class="main">您确定要还原该备份文件吗？
    <div class="bt_row">
      <form id="form_db_restore" method="post">
        <input name="file" type="hidden" value="" />
        <input class="button" type="button" onclick="db_restore_ajax()" value="确定" />
        <input class="button" type="button" onclick="hide_box('db_restore')" value="取消" />
      </form>
    </div>
  </div>
</div>
<!-------------------------- END BOX -------------------------->

<script language="javascript">
	get_result(0);
	function db_restore(val)
	{
		document.getElementById("form_db_restore").file.value = val;
		show_box("db_restore",300,125);
	}
	function db_restore_ajax()
	{
		var file = document.getElementById("form_db_restore").file.value;
		ajax("post","?/deal/dir-basic/","cmd=db_restore&file="+file,
		function(data)
		{
			if(data == 1)
			{
				hide_box("db_restore");
				result();
			}
		});
	}
</script>
<?php }} ?>