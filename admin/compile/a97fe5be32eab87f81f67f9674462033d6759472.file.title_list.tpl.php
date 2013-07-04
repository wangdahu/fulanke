<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:35:59
         compiled from "templates/default/admin\module\basic\title_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301851d13f6f5f1d18-99633047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97fe5be32eab87f81f67f9674462033d6759472' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\title_list.tpl',
      1 => 1370619510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301851d13f6f5f1d18-99633047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13f6f7af39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13f6f7af39')) {function content_51d13f6f7af39($_smarty_tpl) {?><div class="here">标题设置</div>
<div class="block">
  <form id="form_edit_title" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="edit_title" />
    <table class="main_table">
      <tr>
        <td><b>位置标志</b></td>
        <td><b>标题</b></td>
        <td><b>优先级</b></td>
        <td><b>操作</b></td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['title']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <tr>
        <td><input name="site[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['site'];?>
" /></td>
        <td><input name="title[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" /></td>
        <td><input name="priority[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['priority'];?>
" /></td>
        <td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><span class="red" onClick="del('config|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</span></td>
      </tr>
      <?php } ?>
      <tr>
        <td class="bt_row" colspan="4">
          <input class="button" type="button" onClick="do_submit('form_edit_title',0)" value="修改" />
          <input class="button" type="button" onClick="show_box('add_title',350,185)" value="添加" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.这里的标题主要指的是页面标题，但不限于页面标题。例如产品展示页的页面标题中的“产品展示”就是在这里设置的，其页面位置导航中的“产品展示”也是在这里设置。<br />
  2.位置标志指的是页面URL中从问号后面开始的标识字符串，表示该标题所适用的页面。位置标志可以形如goods、article/cat-2/、article/cat-2/id-1/等。<br />
  3.当位置标志互相包含时，可以通过设定优先级避免冲突。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_title">
  <div class="head">
    <div class="title">添加标题</div>
    <div class="close" onclick="hide_box('add_title')">关闭</div>
  </div>
  <form id="form_add_title" method="post" action="?/deal/dir-basic/" target="deal">
  	<input name="cmd" type="hidden" value="add_title" />
    <table class="box_table">
      <tr>
        <td>标志：</td>
        <td><input name="site" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>标题：</td>
        <td><input name="title" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td>优先级：</td>
        <td><input name="priority" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onclick="do_submit('form_add_title',1)" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
<!-------------------------- END BOX -------------------------->

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>