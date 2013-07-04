<div class="box2" id="user_center">
    <div class="head"><span>{$lang.order_info}</span></div>
    <div class="main">
        <table class="sheet" cellspacing="1" cellpadding="0">
            <tr>
                <td class="l">{$lang.product_name}：</td>
                <td>{$booking.pro_title}</td>
			</tr>
            <tr>
                <td class="l">{$lang.quantity}：</td>
                <td>{$booking.boo_number}</td>
			</tr>
            <tr>
                <td class="l">{$lang.order_description}：</td>
                <td>{$booking.boo_text}</td>
			</tr>
            <tr>
                <td class="l">{$lang.consignee}：</td>
                <td>{$booking.boo_consignee}</td>
			</tr>
            <tr>
                <td class="l">{$lang.email}：</td>
                <td>{$booking.boo_email}</td>
			</tr>
            <tr>
                <td class="l">{$lang.contact_tel}：</td>
                <td>{$booking.boo_tel}</td>
			</tr>
            <tr>
                <td class="l">{$lang.order_time}：</td>
                <td>{$booking.boo_add_time}</td>
			</tr>
            <tr>
                <td class="l">{$lang.reply}：</td>
                <td>{$booking.boo_reply}</td>
			</tr>
            <tr>
                <td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="go_back()" value="{$lang.go_back}" />
					</div>
				</td>
			</tr>
		</table>
    </div>
</div>
<!-- 红头船 -->