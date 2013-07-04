<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:15:11
         compiled from "templates/default/admin\module\basic\site_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2501851d13a8f7cb847-77844585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd37ca66e82aa7bd559f0ddb6d871c31ae4b628e1' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\site_set.tpl',
      1 => 1370874018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501851d13a8f7cb847-77844585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a8fab07a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a8fab07a')) {function content_51d13a8fab07a($_smarty_tpl) {?><div class="here">网站设置</div>
<div class="block">
  <form id="form_edit_site" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="edit_site" />
    <table class="main_table">
      <tr>
        <td>网站标题：</td>
        <td><input name="site_title" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['title'];?>
" /></td>
      </tr>
      <tr>
        <td>企业名称：</td>
        <td><input name="site_name" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
" /></td>
      </tr>
      <tr>
        <td>网站域名：</td>
        <td><input name="site_domain" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['domain'];?>
" /></td>
      </tr>
      <tr>
        <td>ICP备案号：</td>
        <td><input name="site_record" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
" /></td>
      </tr>
      <tr>
        <td>备案号链接：</td>
        <td><input name="site_record_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" /></td>
      </tr>
      <tr>
        <td>技术支持：</td>
        <td><input name="site_tech" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
" /></td>
      </tr>
      <tr>
        <td>技术支持链接：</td>
        <td><input name="site_tech_url" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" /></td>
      </tr>
      <tr>
        <td>网站关键字：</td>
        <td><input name="site_keywords" type="text" class="text" maxlength="200" value="<?php echo $_smarty_tpl->tpl_vars['site']->value['keywords'];?>
" /></td>
      </tr>
      <tr>
        <td>网站描述：</td>
        <td><textarea class="area" name="site_description"><?php echo $_smarty_tpl->tpl_vars['site']->value['description'];?>
</textarea></td>
      </tr>
      <tr>
        <td>统计代码：</td>
        <td>
			<textarea class="area" name="statistical_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>
</textarea><br />
			<div class="sentence">
			可到&nbsp;<a href="http://www.cnzz.com/" target="_blank">http://www.cnzz.com/</a>&nbsp;获取统计代码
			</div>
		</td>
      </tr>
      <tr>
        <td>分享代码：</td>
        <td>
			<textarea class="area" name="share_code"><?php echo $_smarty_tpl->tpl_vars['site']->value['share_code'];?>
</textarea><br />
			<div class="sentence">
			可到&nbsp;<a href="http://www.jiathis.com/" target="_blank">http://www.jiathis.com/</a>&nbsp;获取分享代码
			</div>
		</td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="bt_row">
            <input class="button" type="button" onclick="do_submit('form_edit_site',0)" value="修改" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe><?php }} ?>