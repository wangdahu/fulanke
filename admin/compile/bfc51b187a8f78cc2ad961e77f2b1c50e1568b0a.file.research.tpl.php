<?php /* Smarty version Smarty-3.1.3, created on 2013-07-04 09:54:21
         compiled from "templates/default/admin\module\service\research.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630451d4cf93b34de8-01652553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc51b187a8f78cc2ad961e77f2b1c50e1568b0a' => 
    array (
      0 => 'templates/default/admin\\module\\service\\research.tpl',
      1 => 1372902860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630451d4cf93b34de8-01652553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d4cf9400559',
  'variables' => 
  array (
    'question' => 0,
    'item' => 0,
    'research' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4cf9400559')) {function content_51d4cf9400559($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><div class="here">问卷调查</div>
<div class="block sheet">
  <form id="form_edit_question" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="edit_question" />
    <table class="main_table">
      <tr>
        <td><b>问题</b></td>
        <td><b>表单类型</b></td>
        <td><b>答案选项</b></td>
        <td><b>操作</b></td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['question']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <tr>
        <td><input name="question[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['question'];?>
" /></td>
        <td>
        <select name="input_type[]" >
          <option value="radio" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='radio'){?>selected<?php }?>>单选框</option>
          <option value="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='checkbox'){?>selected<?php }?>>复选框</option>
          <option value="text" <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='text'){?>selected<?php }?>>文本框</option>
        </select>
        </td>
        <td><input name="answer[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['answer'];?>
" /></td>
        <td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><span class="red" onClick="del('varia|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</span></td>
      </tr>
      <?php } ?>
      <tr>
        <td class="bt_row" colspan="30">
          <input class="button" type="button" onClick="do_submit('form_edit_question',0)" value="修改" />
          <input class="button" type="button" onClick="show_box('add_question',350,175)" value="添加" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">调查结果</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>访客提交问卷</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td style="text-align:left;line-height:20px;">
        <div><b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?>匿名用户<?php }?></b>&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['res_add_time'],"%Y-%m-%d %H:%M:%S");?>
&nbsp;提交问卷：</div>
        <div><?php echo $_smarty_tpl->tpl_vars['item']->value['res_text'];?>
</div>
      </td>
      <td>
        <a onClick="del('research|<?php echo $_smarty_tpl->tpl_vars['item']->value['res_id'];?>
')">[删除]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2">
		  <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('service/mod-research', null, 0);?>
		  <?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	  </td>
    </tr>
  </table>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.答案选项之间使用|号隔开，个数不限，例如“答案一|答案二|答案三”。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_question">
  <div class="head">
    <div class="title">添加问题</div>
    <div class="close" onclick="hide_box('add_question')">关闭</div>
  </div>
  <form id="form_add_question" method="post" action="?/deal/dir-service/" target="deal">
  	<input name="cmd" type="hidden" value="add_question" />
    <table class="box_table">
      <tr>
        <td>问题：</td>
        <td class="f_l"><input name="question" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>表单类型：</td>
        <td class="f_l">
        <select name="input_type" >
          <option value="radio">单选框</option>
          <option value="checkbox">复选框</option>
          <option value="text">文本框</option>
        </select>
        </td>
      </tr>
      <tr>
        <td>答案选项：</td>
        <td class="f_l"><input name="answer" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onclick="do_submit('form_add_question',1)" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>