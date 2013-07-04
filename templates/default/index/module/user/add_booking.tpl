<div class="box2" id="user_center">
    <div class="head"><span>{$lang.order_product}</span></div>
    <div class="main add_booking">
    <form id="form_add_booking" method="post" action="{$S_URL_PREFIX}user/">
		<input name="cmd" type="hidden" value="add_booking"/>
		<input name="pro_id" type="hidden" value="{$pro_id}"/>
		<table class="sheet" cellspacing="1" cellpadding="0">
			<tr>
				<td class="l">{$lang.product_name}：</td>
				<td>{$pro_title}</td>
			</tr>
			<tr>
				<td class="l">{$lang.quantity}：</td>
				<td><input class="text" name="number" type="text" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.order_description}：</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td class="l">{$lang.consignee}：</td>
				<td><input class="text" name="consignee" type="text" value="{$boo_consignee}" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.email}：</td>
				<td><input class="text" name="email" type="text" value="{$boo_email}" /></td>
			</tr>
			<tr>
				<td class="l">{$lang.contact_tel}：</td>
				<td><input class="text" name="tel" type="text" value="{$boo_tel}" /></td>
			</tr>
			<tr>
				<td class="bt_row" colspan="2"><input class="button" type="button" onclick="submit_add_booking()" value="{$lang.edit}" /></td>
			</tr>
		</table>
    </form>
    </div>
</div>
<script language="javascript">
	var lang_enter_quantity = "{$lang.enter_quantity}";
	var lang_enter_order_text = "{$lang.enter_order_text}";
	var lang_enter_consignee = "{$lang.enter_consignee}";
	var lang_enter_email = "{$lang.enter_email}";
	var lang_enter_contact_tel = "{$lang.enter_contact_tel}";
</script>
{literal}
<script language="javascript">
function submit_add_booking()
{
	var str = "";
	var obj = document.getElementById("form_add_booking");
	if(obj.number.value == ""){str += "-" + lang_enter_quantity + "\n";}
	if(obj.text.value == ""){str += "-" + lang_enter_order_text + "\n";}
	if(obj.consignee.value == ""){str += "-" + lang_enter_consignee + "\n";}
	if(obj.email.value == ""){str += "-" + lang_enter_email + "\n";}
	if(obj.tel.value == ""){str += "-" + lang_enter_contact_tel + "\n";}
	if(str != "")
	{
        alert(str);
	}else{
		obj.submit();
	}
}
</script>
{/literal}
<!-- 红头船 -->