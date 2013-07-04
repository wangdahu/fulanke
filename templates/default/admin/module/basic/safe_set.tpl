<div class="here">安全设置</div>
<div class="block">
	<table class="main_table">
		<tr>
			<td width="30%">后台登录设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_admin_login_hours',this.value)" value="{$safe_admin_login_hours}" />
				小时内同一IP只能登录后台
				<input type="text" class="text2" onBlur="set_config('safe_admin_login_times',this.value)" value="{$safe_admin_login_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台登录设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_user_login_hours',this.value)" value="{$safe_user_login_hours}" />
				小时内同一IP只能登录前台
				<input type="text" class="text2" onBlur="set_config('safe_user_login_times',this.value)" value="{$safe_user_login_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台注册设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_register_hours',this.value)" value="{$safe_register_hours}" />
				小时内同一IP只能提交注册
				<input type="text" class="text2" onBlur="set_config('safe_register_times',this.value)" value="{$safe_register_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台留言设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_message_hours',this.value)" value="{$safe_message_hours}" />
				小时内同一IP只能提交留言
				<input type="text" class="text2" onBlur="set_config('safe_message_times',this.value)" value="{$safe_message_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台评论设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_comment_hours',this.value)" value="{$safe_comment_hours}" />
				小时内同一IP只能提交评论
				<input type="text" class="text2" onBlur="set_config('safe_comment_times',this.value)" value="{$safe_comment_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台问卷调查设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_research_hours',this.value)" value="{$safe_research_hours}" />
				小时内同一IP只能提交问卷调查
				<input type="text" class="text2" onBlur="set_config('safe_research_times',this.value)" value="{$safe_research_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台订购设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_booking_hours',this.value)" value="{$safe_booking_hours}" />
				小时内同一IP只能提交订购
				<input type="text" class="text2" onBlur="set_config('safe_booking_times',this.value)" value="{$safe_booking_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台设置编辑用户信息：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_edit_user_hours',this.value)" value="{$safe_edit_user_hours}" />
				小时内同一IP只能编辑用户信息
				<input type="text" class="text2" onBlur="set_config('safe_edit_user_times',this.value)" value="{$safe_edit_user_times}" />
				次
			</td>
		</tr>
		<tr>
			<td>前台修改密码设置：</td>
			<td>
				<input type="text" class="text2" onBlur="set_config('safe_edit_pwd_hours',this.value)" value="{$safe_edit_pwd_hours}" />
				小时内同一IP只能修改密码
				<input type="text" class="text2" onBlur="set_config('safe_edit_pwd_times',this.value)" value="{$safe_edit_pwd_times}" />
				次
			</td>
		</tr>
		<tr>
			<td colspan="2" height="30px"></td>
		</tr>
	</table>
</div>
<iframe id="deal" name="deal"></iframe>
