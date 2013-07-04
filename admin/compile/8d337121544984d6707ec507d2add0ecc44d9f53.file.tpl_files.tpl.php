<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:51:59
         compiled from "templates/default/admin\module\file\tpl_files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2973051d1432fd4bbe4-79720758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d337121544984d6707ec507d2add0ecc44d9f53' => 
    array (
      0 => 'templates/default/admin\\module\\file\\tpl_files.tpl',
      1 => 1369755612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2973051d1432fd4bbe4-79720758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl' => 0,
    'item' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1432ff1655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1432ff1655')) {function content_51d1432ff1655($_smarty_tpl) {?><div class="here">当前使用模板文件</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>文件名</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
</td>
      <td>
        <a href="?/file/mod-tpl_edit/path-<?php echo $_smarty_tpl->tpl_vars['item']->value['path_str'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[编辑]</a>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30" height="30px"></td>
    </tr>
  </table>
</div><?php }} ?>