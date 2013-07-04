<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:42:52
         compiled from "templates/default/index\module\message_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3074351d1410ced73f4-36111429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1f63095abd2dbcb35608885a2aecc95ffe9fe84' => 
    array (
      0 => 'templates/default/index\\module\\message_main.tpl',
      1 => 1371169289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3074351d1410ced73f4-36111429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'item' => 0,
    'lang' => 0,
    'S_URL_PREFIX' => 0,
    'user_name' => 0,
    'user_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1410d3969a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1410d3969a')) {function content_51d1410d3969a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><div class="mes_sheet">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li>
			<table cellspacing="0" cellpadding="0">
				<tr>
					<td height="30px"><b><?php if ($_smarty_tpl->tpl_vars['item']->value['user_name']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['anonymous_user'];?>
<?php }?>：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_title'];?>
</span>&nbsp;&nbsp;[ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['mes_add_time'],"%Y-%m-%d %H:%M:%S");?>
 ]</td>
				</tr>
				<tr>
					<td><div><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_text'];?>
</div></td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['mes_reply']){?>
				<tr>
					<td><div class="reply"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['reply'];?>
：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_reply'];?>
</div></td>
				</tr>
				<?php }?>
			</table>
		</li>
		<?php } ?>
	</ul>
    <?php if (!$_smarty_tpl->tpl_vars['message']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
</div>
<?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('message', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="leave_word">
	<form id="form_add_message" method="post" action="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
info/">
		<input name="cmd" type="hidden" value="add_message"/>
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_name'];?>
：</td>
				<td><?php if ($_smarty_tpl->tpl_vars['user_name']->value){?><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['anonymous_user'];?>
<?php }?>&nbsp;&nbsp;</td>
			</tr>
			<tr>
				<td class="l">E-mail：</td>
				<td><input name="email" class="text" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_email']->value;?>
" /></td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['message_type'];?>
：</td>
				<td>
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['leave_word'];?>
" checked="checked" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['leave_word'];?>
&nbsp;&nbsp;
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['complaints'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['complaints'];?>
&nbsp;&nbsp;
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['ask'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['ask'];?>
&nbsp;&nbsp;
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['aftermarket'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['aftermarket'];?>
&nbsp;&nbsp;
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['buy'];?>
" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['buy'];?>
&nbsp;&nbsp;
				</td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['theme'];?>
：</td>
				<td>
					<input name="title" class="text" type="text" maxlength="30"/>&nbsp;&nbsp;
					<input name="show" type="checkbox" value="2"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['secret'];?>

				</td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_content'];?>
：</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td class="bt_row" colspan="2">
					<input class="button" type="button" onclick="submit_add_message()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" />&nbsp;&nbsp;
					<input class="button" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['reset'];?>
"/>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="space"></div>
<script language="javascript">
	var lang_email_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['email_empty'];?>
";
	var lang_mes_title_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_title_empty'];?>
";
	var lang_mes_text_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_text_empty'];?>
";
</script>

<script language="javascript">
function submit_add_message()
{
	var str = "";
	var obj = document.getElementById("form_add_message");
	if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
	if(obj.title.value == ""){str += "-" + lang_mes_title_empty + "\n";}
	if(obj.text.value == ""){str += "-" + lang_mes_text_empty + "\n";}
	if(str != "")
	{
		alert(str);
	}else{
		obj.submit();
	}
}
</script>

<!-- 红头船 --><?php }} ?>