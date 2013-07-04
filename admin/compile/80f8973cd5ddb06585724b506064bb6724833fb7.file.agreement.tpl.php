<?php /* Smarty version Smarty-3.1.3, created on 2013-07-04 09:33:45
         compiled from "templates/default/admin\module\service\agreement.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1280551d4d0f9638700-60327502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f8973cd5ddb06585724b506064bb6724833fb7' => 
    array (
      0 => 'templates/default/admin\\module\\service\\agreement.tpl',
      1 => 1370967134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1280551d4d0f9638700-60327502',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d4d0f974f4f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4d0f974f4f')) {function content_51d4d0f974f4f($_smarty_tpl) {?><div class="here">用户协议</div>
<div class="block">
  <form id="form_edit_agreement" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="edit_agreement" />
    <table class="main_table">
      <tr>
        <td>用户协议：</td>
        <td>
        <div class="editor">
          <?php echo $_smarty_tpl->getSubTemplate ('module/editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
		<input class="button" type="submit" onclick="do_submit('form_edit_agreement',0)" value="修改" />
		</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
<?php }} ?>