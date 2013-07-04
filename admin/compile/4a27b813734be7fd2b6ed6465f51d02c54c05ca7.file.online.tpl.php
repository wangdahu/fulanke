<?php /* Smarty version Smarty-3.1.3, created on 2013-07-04 09:33:41
         compiled from "templates/default/admin\module\service\online.tpl" */ ?>
<?php /*%%SmartyHeaderCode:868851d4d0f5c59f19-28688322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a27b813734be7fd2b6ed6465f51d02c54c05ca7' => 
    array (
      0 => 'templates/default/admin\\module\\service\\online.tpl',
      1 => 1370873911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868851d4d0f5c59f19-28688322',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d4d0f5db8e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4d0f5db8e8')) {function content_51d4d0f5db8e8($_smarty_tpl) {?><div class="here">在线客服</div>
<div class="block">
  <form id="form_edit_online" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="edit_online" />
    <table class="main_table">
      <tr>
        <td>获取代码：</td>
        <td class="sentence">
          请登录&nbsp;<a href="http://wp.qq.com/" target="_blank">http://wp.qq.com/</a>&nbsp;获取QQ在线客服代码<br />
        </td>
      </tr>
      <tr>
        <td>客服代码：</td>
        <td>
        <div class="editor">
          <?php echo $_smarty_tpl->getSubTemplate ('module/editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
			<input class="button" type="submit" onclick="do_submit('form_edit_online',0)" value="修改" />
		</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.填写客服代码之前先把编辑器切换到“源代码”模式。<br />
  2.此处可填写QQ、阿里旺旺等多种在线客服代码，但请注意所填写的代码是否会影响前台页面布局。<br />
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="show_html">
    <div class="close" onclick="hide_box('show_html')">关闭</div>
    <div class="main">请点击编辑器左上角的“HTML”小按钮切换到源代码模式</div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	show_box('show_html',430,95);
</script>
<?php }} ?>