<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:51:24
         compiled from "templates/default/admin\module\file\focus_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175751d1430c6f6940-41140060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6891a453f437d066086042c4af11988c2f4dc15b' => 
    array (
      0 => 'templates/default/admin\\module\\file\\focus_list.tpl',
      1 => 1370906518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175751d1430c6f6940-41140060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'focus' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1430ce0b73',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1430ce0b73')) {function content_51d1430ce0b73($_smarty_tpl) {?><div class="here">焦点图片</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片地址</b></td>
      <td><b>跳转地址</b></td>
      <td><b>文字说明</b></td>
      <td><b>位置标志</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="100px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['focus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_url'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_title'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_site'];?>
</td>
      <td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
')">
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['pic_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif"></span>
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
_2" style="display:none;">
	  <input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_index'];?>
" style="width:30px;" onBlur="set_order('index','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
,this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['pic_top']==1){?>checked<?php }?> onClick="set_order('top','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
,this.checked)" /></td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['pic_show']==1){?>checked<?php }?> onClick="set_order('show','picture',<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
,this.checked)" /></td>
      <td>
        <a onClick="edit_focus('<?php echo $_smarty_tpl->tpl_vars['item']->value['values'];?>
')">[编辑]</a>
        <a onClick="del('picture|<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_id'];?>
')">[删除]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="8">
		  <div class="bt_row">
			<input class="button" type="button" onClick="show_box('add_focus',350,210)" value="添加" />
		  </div>
      </td>
    </tr>
  </table>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.焦点图片可以采用相对路径（相对于网站首页）或以http://开头的网络路径。<br />
  2.可以在“图片管理”中上传图片后，复制其图片地址到此处添加焦点图片。<br />
  3.位置标志指的是页面URL中从问号后面开始的标识字符串，表示该焦点图片所在的页面，default表示全局。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_focus">
  <div class="head">
    <div class="title">添加焦点图片</div>
    <div class="close" onclick="hide_box('add_focus')">关闭</div>
  </div>
  <form id="form_add_focus" method="post" action="?/deal/dir-file/" target="deal">
  	<input name="cmd" type="hidden" value="add_or_edit_focus" />
    <table class="box_table">
      <tr>
        <td>图片地址：</td>
        <td><input name="pic_path" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>跳转地址：</td>
        <td><input name="pic_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>文字说明：</td>
        <td><input name="pic_title" type="text" class="text" maxlength="200" /></td>
      </tr>
      <tr>
        <td>位置标志：</td>
        <td><input name="pic_site" type="text" class="text" maxlength="200" value="default" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_add_focus',1)" value="提交" />
			</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="edit_focus">
  <div class="head">
    <div class="title">编辑焦点图片</div>
    <div class="close" onclick="hide_box('edit_focus')">关闭</div>
  </div>
  <form id="form_edit_focus" method="post" action="?/deal/dir-file/" target="deal">
  <input name="cmd" type="hidden" value="add_or_edit_focus" />
  <input name="pic_id" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td>图片地址：</td>
        <td><input name="pic_path" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>跳转地址：</td>
        <td><input name="pic_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>文字说明：</td>
        <td><input name="pic_title" type="text" class="text" maxlength="200" /></td>
      </tr>
      <tr>
        <td>位置标志：</td>
        <td><input name="pic_site" type="text" class="text" maxlength="200" value="default" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_edit_focus',1)" value="提交" />
			</div>
		</td>
	  </tr>
    </table>
  </form>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
	function edit_focus(val)
	{
		var arr = val.split("{v}");
		var obj = document.getElementById("form_edit_focus");
		obj.pic_id.value = arr[0];
		obj.pic_path.value = arr[1];
		obj.pic_url.value = arr[2];
		obj.pic_title.value = arr[3];
		obj.pic_site.value = arr[4];
		show_box("edit_focus",350,210);
	}
</script>
<?php }} ?>