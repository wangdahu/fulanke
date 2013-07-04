<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:50:47
         compiled from "templates/default/admin\module\file\pic_lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:730351d142e73793c1-95348865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7383537c9adc34870738ffac01c92c06cfd280' => 
    array (
      0 => 'templates/default/admin\\module\\file\\pic_lists.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730351d142e73793c1-95348865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list_1' => 0,
    'item' => 0,
    'host' => 0,
    'list_2' => 0,
    'S_URL_SUFFIX' => 0,
    'list_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d142e7a2b43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d142e7a2b43')) {function content_51d142e7a2b43($_smarty_tpl) {?><div class="block fil_upl">
<form id="form_upl_img" method="post" enctype="multipart/form-data" action="?/deal/dir-file/" target="deal">
  <input name="cmd" type="hidden" value="upload" />
  <input name="dir" type="hidden" value="images/" />
  <input name="file" type="hidden" value="" />
  <span>上传图片</span>
  <input name="file_path" type="file" onChange="do_upload('form_upl_img',0)" />
</form>
</div>
<div class="here">公共图片</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td width="150px"><b>图片预览</b></td>
      <td><b>图片地址</b></td>
      <td width="120px"><b>数据库相关</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><img src="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" height="30px" /></td>
      <td>http://<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['id']){?>ID:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<?php }else{ ?><span class="red">无关</span><?php }?>
      </td>
      <td>
        <a href="images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
">[查看]</a>
        <?php if (!$_smarty_tpl->tpl_vars['item']->value['id']){?><a onClick="del_file('images/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[删除]</a><?php }?>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30" height="30px">
      </td>
    </tr>
  </table>
</div>
<div class="here">产品图片</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片目录</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td>images/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
      <td>
        <a href="?/file/mod-pic_list/path-<?php echo $_smarty_tpl->tpl_vars['item']->value['path_str'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[进入查看]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30" height="30px">
      </td>
    </tr>
  </table>
</div>
<div class="here">编辑器图片</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片目录</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td>images/editor/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
      <td>
        <a href="?/file/mod-pic_list/path-<?php echo $_smarty_tpl->tpl_vars['item']->value['path_str'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[进入查看]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30" height="30px">
      </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_file">
  <div class="close" onclick="hide_box('del_file')">关闭</div>
  <div class="main">您确定要删除该图片吗？
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
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>