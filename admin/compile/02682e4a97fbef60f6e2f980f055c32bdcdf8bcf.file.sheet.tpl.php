<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:32
         compiled from "templates/default/admin\module\article\sheet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:404051d13ae04d1520-04011207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02682e4a97fbef60f6e2f980f055c32bdcdf8bcf' => 
    array (
      0 => 'templates/default/admin\\module\\article\\sheet.tpl',
      1 => 1370991934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '404051d13ae04d1520-04011207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13ae0803b5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13ae0803b5')) {function content_51d13ae0803b5($_smarty_tpl) {?><div class="here">文章列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td width="120px"><b>分类</b></td>
      <td><b>标题</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><?php if ($_smarty_tpl->tpl_vars['item']->value['cat_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_name'];?>
<?php }else{ ?>无<?php }?></td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</td>
      <td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
')">
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif"></span>
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
_2" style="display:none;">
	  <input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_index'];?>
" style="width:30px;" onBlur="set_order('index','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['art_top']==1){?>checked<?php }?> onClick="set_order('top','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.checked)" /></td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['art_show']==1){?>checked<?php }?> onClick="set_order('show','article',<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
,this.checked)" /></td>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" target="_blank">[查看]</a>&nbsp;
        <a href="?/article/mod-edit/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[编辑]</a>&nbsp;
        <a onClick="del('article|<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
')">[删除]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30"><?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
    </tr>
  </table>
</div>
<div class="here">文章搜索</div>
<div class="block">
<form id="form_search" method="post" action="?/article/mod-sheet/">
<table class="main_table">
  <tr>
    <td align="right" width="150px">
      <select name="field">
        <option value="art_title">文章标题</option>
        <option value="art_author">文章作者</option>
        <option value="art_text">文章正文</option>
      </select>
    </td>
    <td>
      <input name="key" type="text" />
      <input class="button" type="button" value="搜索文章" onclick="do_search()"/>
    </td>
  </tr>
</table>
</form>
</div>
<iframe id="deal" name="deal"></iframe>

<script language="javascript">
	get_result(0);
	function do_search()
	{
		var obj = document.getElementById("form_search");
		obj.action = obj.action + 'field-' + obj.field.value + '/' + 'key-' + obj.key.value + '/';
		obj.submit();
	}
</script>
<?php }} ?>