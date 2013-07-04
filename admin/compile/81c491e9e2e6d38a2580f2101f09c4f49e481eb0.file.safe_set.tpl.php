<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:43:18
         compiled from "templates/default/admin\module\basic\safe_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2150851d141264375d1-80711872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c491e9e2e6d38a2580f2101f09c4f49e481eb0' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\safe_set.tpl',
      1 => 1370998526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2150851d141264375d1-80711872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'safe_admin_login_hours' => 0,
    'safe_admin_login_times' => 0,
    'safe_user_login_hours' => 0,
    'safe_user_login_times' => 0,
    'safe_register_hours' => 0,
    'safe_register_times' => 0,
    'safe_message_hours' => 0,
    'safe_message_times' => 0,
    'safe_comment_hours' => 0,
    'safe_comment_times' => 0,
    'safe_research_hours' => 0,
    'safe_research_times' => 0,
    'safe_booking_hours' => 0,
    'safe_booking_times' => 0,
    'safe_edit_user_hours' => 0,
    'safe_edit_user_times' => 0,
    'safe_edit_pwd_hours' => 0,
    'safe_edit_pwd_times' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d141266bc6f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d141266bc6f')) {function content_51d141266bc6f($_smarty_tpl) {?><div class="here">安全设置</div>
<div class="block">
	<table class="main_table">
		<tr>
			<td width="30%">后台登录设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_admin_login_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_hours']->value;?>
" />
				小时内同一IP只能登录后台
				<input type="text" class="text2" onBlur="set_config('safe_admin_login_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台登录设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_user_login_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_user_login_hours']->value;?>
" />
				小时内同一IP只能登录前台
				<input type="text" class="text2" onBlur="set_config('safe_user_login_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_user_login_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台注册设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_register_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_register_hours']->value;?>
" />
				小时内同一IP只能提交注册
				<input type="text" class="text2" onBlur="set_config('safe_register_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_register_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台留言设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_message_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_hours']->value;?>
" />
				小时内同一IP只能提交留言
				<input type="text" class="text2" onBlur="set_config('safe_message_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台评论设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_comment_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_hours']->value;?>
" />
				小时内同一IP只能提交评论
				<input type="text" class="text2" onBlur="set_config('safe_comment_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台问卷调查设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_research_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_research_hours']->value;?>
" />
				小时内同一IP只能提交问卷调查
				<input type="text" class="text2" onBlur="set_config('safe_research_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_research_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台订购设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_booking_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_booking_hours']->value;?>
" />
				小时内同一IP只能提交订购
				<input type="text" class="text2" onBlur="set_config('safe_booking_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_booking_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台设置编辑用户信息：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_edit_user_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_edit_user_hours']->value;?>
" />
				小时内同一IP只能编辑用户信息
				<input type="text" class="text2" onBlur="set_config('safe_edit_user_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_edit_user_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td>前台修改密码设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_edit_pwd_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_edit_pwd_hours']->value;?>
" />
				小时内同一IP只能修改密码
				<input type="text" class="text2" onBlur="set_config('safe_edit_pwd_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_edit_pwd_times']->value;?>
" />
				次
			</td>
		</tr>
		<tr>
			<td colspan="2" height="30px"></td>
		</tr>
	</table>
</div>
<iframe id="deal" name="deal"></iframe>
<?php }} ?>