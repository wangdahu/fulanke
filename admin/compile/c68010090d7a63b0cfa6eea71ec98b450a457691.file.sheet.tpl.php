<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:33
         compiled from "templates/default/admin\module\product\sheet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2445451d13ae1d89c03-56021614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68010090d7a63b0cfa6eea71ec98b450a457691' => 
    array (
      0 => 'templates/default/admin\\module\\product\\sheet.tpl',
      1 => 1370991184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445451d13ae1d89c03-56021614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13ae218c6f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13ae218c6f')) {function content_51d13ae218c6f($_smarty_tpl) {?><div class="here">产品列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片</b></td>
      <td><b>标题</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>推荐</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td class="pic">
        <div class="unit">
          <table cellspacing="0" cellpadding="0">
            <tr><td>
              <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_reduce_img'];?>
" onload="picresize(this,50,50)"/>
            </td></tr>
          </table>
        </div>
      </td>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pro_title'];?>
</td>
      <td onClick="show_edit('index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
')">
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
_1"><?php echo $_smarty_tpl->tpl_vars['item']->value['pro_index'];?>
<img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/pencil.gif"></span>
      <span id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
_2" style="display:none;">
		  <input type="text" id="index_<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_index'];?>
" style="width:30px;" onBlur="set_order('index','product',<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
,this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['pro_best']==1){?>checked<?php }?> onClick="set_order('best','product',<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
,this.checked)" /></td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['pro_top']==1){?>checked<?php }?> onClick="set_order('top','product',<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
,this.checked)" /></td>
      <td><input  type="checkbox" <?php if ($_smarty_tpl->tpl_vars['item']->value['pro_show']==1){?>checked<?php }?> onClick="set_order('show','product',<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
,this.checked)" /></td>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" target="_blank">[查看]</a>&nbsp;
        <a href="?/product/mod-edit/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[编辑]</a>&nbsp;
        <a onClick="del_product('<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
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
<div class="here">产品搜索</div>
<div class="block">
<form id="form_search" method="post" action="?/product/mod-sheet/">
<table class="main_table">
  <tr>
    <td align="right" width="150px">
      <select name="field">
        <option value="pro_title">产品标题</option>
        <option value="pro_number">产品编号</option>
        <option value="pro_text">产品描述</option>
      </select>
    </td>
    <td>
      <input name="key" type="text" />
      <input class="button" type="button" value="搜索产品" onclick="do_search()"/>
    </td>
  </tr>
</table>
</form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_product">
    <div class="close" onclick="hide_box('del_product')">关闭</div>
    <div class="main">您确定要删除该产品吗？
        <div class="bt_row">
        <form id="form_del_product" method="post" action="?/deal/dir-product/" target="deal">
            <input name="cmd" type="hidden" value="del_product" />
            <input name="table" type="hidden" value="product" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del_product',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_product')" value="取消" />
		</form>
        </div>
    </div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
	function do_search()
	{
		var obj = document.getElementById("form_search");
		obj.action = obj.action + 'field-' + obj.field.value + '/' + 'key-' + obj.key.value + '/';
		obj.submit();
	}
	function del_product(val)
	{
		var obj = document.getElementById("form_del_product");
		obj.id.value = val;
		show_box("del_product",300,125);
	}
</script>
<?php }} ?>