<div class="here">订购详情</div>
<div class="block">
	<table class="main_table">
		<tr>
			<td width="150px">产品名称：</td>
			<td>{$booking.pro_title}</td>
		</tr>
		<tr>
			<td>订购数量：</td>
			<td>{$booking.boo_number}</td>
		</tr>
		<tr>
			<td>订购描述：</td>
			<td>{$booking.boo_text}</td>
		</tr>
		<tr>
			<td>联系人：</td>
			<td>{$booking.boo_consignee}</td>
		</tr>
		<tr>
			<td>电子邮件地址：</td>
			<td>{$booking.boo_email}</td>
		</tr>
		<tr>
			<td>联系电话：</td>
			<td>{$booking.boo_tel}</td>
		</tr>
		<tr>
			<td>订购时间：</td>
			<td>{$booking.boo_add_time}</td>
		</tr>
		<tr>
			<td>管理员答复：</td>
			<td>{$booking.boo_reply}</td>
		</tr>
		<tr>
			<td colspan="2">
				<div class="bt_row">
					<input class="button" type="button" onclick="reply({$booking.boo_id},'{$booking.boo_reply}')" value="答复" />
					<input class="button" type="button" onclick="go_back()" value="返回" />
				</div>
			</td>
		</tr>
	</table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="reply">
	<div class="head">
		<div class="title">产品订购答复</div>
		<div class="close" onclick="hide_box('reply')">关闭</div>
	</div>
	<form id="form_reply_booking" method="post" action="?/deal/dir-service/" target="deal">
		<input name="cmd" type="hidden" value="reply_booking" />
		<table class="box_table">
			<tr>
				<td>
					<input name="boo_id" type="hidden" value="" />
					<textarea class="area" name="boo_reply"></textarea>
				</td>
			</tr>
			<tr>
				<td class="bt_row">
					<input class="button" type="button" onclick="do_submit('form_reply_booking',1)" value="提交" />
				</td>
			</tr>
		</table>
	</form>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function reply(id,text)
	{
		show_box("reply",380,180);
		document.getElementById("form_reply_booking").boo_id.value = id;
		document.getElementById("form_reply_booking").boo_reply.value = text;
	}
</script>
{/literal}
