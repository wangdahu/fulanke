<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:52:07
         compiled from "templates/default/admin\module\file\tpl_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3243551d14337478144-13230762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f944244ed47a7c12a97e559b2b2dfa35853b3c' => 
    array (
      0 => 'templates/default/admin\\module\\file\\tpl_edit.tpl',
      1 => 1370988407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243551d14337478144-13230762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl_path' => 0,
    'tpl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1433762fcc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1433762fcc')) {function content_51d1433762fcc($_smarty_tpl) {?><div class="here">编辑模板文件 - <?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
</div>
<div class="block sheet">
  <form id="form_edit_tpl" method="post" action="?/deal/dir-file/" target="deal">
    <input name="cmd" type="hidden" value="edit_tpl" />
    <input name="tpl_path" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
" />
    <table class="main_table">
      <tr>
        <td>
          <textarea name="tpl" rows="20" cols="100"><?php echo $_smarty_tpl->tpl_vars['tpl']->value;?>
</textarea>
        </td>
      </tr>
      <tr>
        <td class="bt_row">
          <input class="button" type="submit" onclick="do_submit('form_edit_tpl',0)" value="提交" />
          <input class="button" type="button" onclick="go_back()" value="返回" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.为了避免&lt;textarea&gt;标签引起布局混乱，模板代码中的&lt;textarea&gt;标签都被置换成&lt;text_area&gt;，请不要修改，提交后程序会自动将其改回原状。
</div>
<iframe id="deal" name="deal"></iframe><?php }} ?>