<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:15:10
         compiled from "templates/default/admin\module\basic\contact_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2941351d13a8ecdf217-37374443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73916ab1c9e692ed75462ee7972512f40c0da72' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\contact_list.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2941351d13a8ecdf217-37374443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a8ee9e34',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a8ee9e34')) {function content_51d13a8ee9e34($_smarty_tpl) {?><div class="here">联系方式</div>
<div class="block">
    <form id="form_edit_contact" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="edit_contact" />
        <table class="main_table">
            <tr>
                <td><b>提示词</b></td>
                <td><b>内容</b></td>
                <td><b>操作</b></td>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td><input name="cue[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cue'];?>
" /></td>
                <td><input name="content[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
" /></td>
                <td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /><span class="red" onClick="del('config|<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
')">[删除]</span></td>
            </tr>
            <?php } ?>
            <tr>
                <td colspan="3">
                    <div class="bt_row">
                        <input class="button" type="button" onClick="do_submit('form_edit_contact',0)" value="修改" />
                        <input class="button" type="button" onClick="show_box('add_contact',350,150)" value="添加" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_contact">
    <div class="head">
        <div class="title">添加联系方式</div>
        <div class="close" onclick="hide_box('add_contact')">关闭</div>
    </div>
    <form id="form_add_contact" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="add_contact" />
        <table class="box_table">
            <tr>
                <td>提示词：</td>
                <td><input name="cue" type="text" class="text" maxlength="50" /></td>
            </tr>
            <tr>
                <td>内容：</td>
                <td><input name="content" type="text" class="text" maxlength="150" /></td>
            </tr>
            <tr>
            	<td colspan="2">
                    <div class="bt_row">
                        <input class="button" type="button" onclick="do_submit('form_add_contact',1)" value="提交" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<!-------------------------- END BOX -------------------------->

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>