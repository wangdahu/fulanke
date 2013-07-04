<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:28:56
         compiled from "templates/default/admin\module\basic\nav_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2585651d13dc86ee970-48023862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554cca4e378c1652a9033345dea91f0c2851d0db' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\nav_list.tpl',
      1 => 1370906518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2585651d13dc86ee970-48023862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav' => 0,
    'cat' => 0,
    'list' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13dc8a215c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13dc8a215c')) {function content_51d13dc8a215c($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<div class="here">导航管理 - <?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</div>
<div class="block">
  <form id="form_edit_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="edit_nav" />
    <table class="main_table">
      <tr>
        <td><b>文字</b></td>
        <td><b>链接</b></td>
        <td width="45px"><b>排序</b></td>
        <td width="40px"><b>置顶</b></td>
        <td width="40px"><b>显示</b></td>
        <td><b>操作</b></td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value[$_smarty_tpl->tpl_vars['cat']->value['type']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
      <tr>
        <td><input name="word[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
" /></td>
        <td><input name="link[]" type="text" class="text" maxlength="150" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" /></td>
        <td style="text-align:center" onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
')">
        <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif"></span>
        <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
_2" style="display:none;">
			<input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_index'];?>
" style="width:30px;" onBlur="set_order('index','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.value)" />
		</span>
        </td>
        <td style="text-align:center"><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['men_top']==1){?>checked<?php }?> onClick="set_order('top','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.checked)" /></td>
        <td style="text-align:center"><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['men_show']==1){?>checked<?php }?> onClick="set_order('show','menu',<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
,this.checked)" /></td>
        <td><input name="id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
" /><span class="red" onClick="del('menu|<?php echo $_smarty_tpl->tpl_vars['item']->value['men_id'];?>
')">[删除]</span></td>
      </tr>
      <?php } ?>
      <tr>
        <td colspan="6">
          <div class="bt_row">
            <input class="button" type="button" onClick="do_submit('form_edit_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
',0)" value="修改" />
            <input class="button" type="button" onClick="show_box('add_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
',350,150)" value="添加" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
<?php } ?>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<div class="box" id="add_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
">
  <div class="head">
    <div class="title">添加<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</div>
    <div class="close" onclick="hide_box('add_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
')">关闭</div>
  </div>
  <form id="form_add_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="add_nav" />
    <input name="type" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
" />
    <table class="box_table">
      <tr>
        <td>文字：</td>
        <td><input name="word" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>链接：</td>
        <td><input name="link" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td colspan="30">
          <div class="bt_row">
            <input class="button" type="button" onclick="do_submit('form_add_nav_<?php echo $_smarty_tpl->tpl_vars['cat']->value['type'];?>
',1)" value="提交" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
<?php } ?>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>