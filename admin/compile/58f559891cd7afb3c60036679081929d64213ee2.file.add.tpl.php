<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:41
         compiled from "templates/default/admin\module\product\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1235951d13ae9ee07f2-26802186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58f559891cd7afb3c60036679081929d64213ee2' => 
    array (
      0 => 'templates/default/admin\\module\\product\\add.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1235951d13ae9ee07f2-26802186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option' => 0,
    'upl_index' => 0,
    'site_keywords' => 0,
    'site_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13aea161ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13aea161ac')) {function content_51d13aea161ac($_smarty_tpl) {?><div class="here">添加产品</div>
<div class="block">
  <form id="form_add_pro" method="post" action="?/deal/dir-product/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_product" />
    <table class="main_table">
      <tr>
        <td>产品名称：</td>
        <td><input name="pro_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td>产品编号：</td>
        <td><input name="pro_number" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td>产品分类：</td>
        <td>
        <select name="pro_cat_id">
          <option value="0">请选择</option>
		  <?php echo $_smarty_tpl->tpl_vars['option']->value;?>

		</select>
        </td>
      </tr>
	  <?php $_smarty_tpl->tpl_vars['upl_index'] = new Smarty_variable(1, null, 0);?>
      <tr>
        <td>产品图片：</td>
        <td>
        <span id="show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
"></span>
        <input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','show_pic_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
','pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
')" value="上传图片" />
        <input name="pic_path" id="pic_path_<?php echo $_smarty_tpl->tpl_vars['upl_index']->value;?>
" type="hidden" maxlength="250" value="" />
        </td>
      </tr>
      <tr>
        <td>产品价格：</td>
        <td><input name="pro_price" type="text" class="text" maxlength="40" value="" /></td>
      </tr>
      <tr>
        <td>产品描述：</td>
        <td>
        <div class="editor">
          <?php echo $_smarty_tpl->getSubTemplate ('module/editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        </td>
      </tr>
      <tr>
        <td>SEO：</td>
        <td>
          <input id="seo_bt" class="button" type="button" onClick="set_seo('pro')" value="进行优化" />
          <div style="display:none;">
            <input class="text" name="pro_keywords" id="pro_keywords" type="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site_keywords']->value;?>
" />
            <textarea class="area" name="pro_description" id="pro_description"><?php echo $_smarty_tpl->tpl_vars['site_description']->value;?>
</textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
          <input class="button" type="submit" onClick="do_submit('form_add_pro',0)" value="提交" />
		</div>
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.提交表单之后，页面不会自动刷新，这是为了方便用户填写下一个产品信息，减少重复输入。若要刷新，请点击左边导航栏“添加产品”。<br />
  2.进行搜索引擎优化（SEO）有助于提高搜索引擎排名，为网站带来更多流量。若不填写页面关键字和描述，系统会自动采用默认的关键字和描述。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<?php echo $_smarty_tpl->getSubTemplate ('module/product/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-------------------------- BOX --------------------------><?php }} ?>