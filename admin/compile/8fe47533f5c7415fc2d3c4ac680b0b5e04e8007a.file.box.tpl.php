<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:42
         compiled from "templates/default/admin\module\product\box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:655751d13aea1e0e05-20619759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe47533f5c7415fc2d3c4ac680b0b5e04e8007a' => 
    array (
      0 => 'templates/default/admin\\module\\product\\box.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '655751d13aea1e0e05-20619759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'upl_date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13aea2b464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13aea2b464')) {function content_51d13aea2b464($_smarty_tpl) {?><div class="box" id="upl_img">
  <div class="head">
    <div class="title">上传图片</div>
    <div class="close" onClick="hide_box('upl_img')">关闭</div>
  </div>
  <form id="form_upl_img" method="post" enctype="multipart/form-data" action="?/deal/dir-product/" target="deal">
    <input name="cmd" type="hidden" value="upload" />
    <input name="dir" type="hidden" value="images/product/<?php echo $_smarty_tpl->tpl_vars['upl_date']->value;?>
/" />
    <input name="file" type="hidden" value="" />
	<input name="show_tag" type="hidden" value="" />
	<input name="form_tag" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td><input name="file_path" type="file" onChange="do_upload('form_upl_img',1)" /></td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="seo">
  <div class="head">
    <div class="title">进行简单优化</div>
    <div class="close" onClick="hide_box('seo')">关闭</div>
  </div>
  <form id="form_seo" method="post" action="">
    <table class="box_table">
      <tr>
        <td>页面关键字：</td>
        <td style="text-align:left;">
          <input name="seo_key" type="text" style="width:300px;" maxlength="200" value="" />
        </td>
      </tr>
      <tr>
        <td>页面描述：</td>
        <td style="text-align:left;">
          <textarea class="area" name="seo_des"></textarea>
        </td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onClick="get_seo('pro')" value="确定" /></td>
      </tr>
    </table>
  </form>
</div><?php }} ?>