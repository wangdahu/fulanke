<div class="box2" id="user_center">
    <div class="head"><span>{$lang.my_booking}</span></div>
    <div class="main">
    <table class="sheet" cellspacing="1" cellpadding="0">
        <tr class="c">
            <td><b>{$lang.product_name}</b></td>
            <td width="80px"><b>{$lang.quantity}</b></td>
            <td width="150px"><b>{$lang.order_time}</b></td>
            <td width="100px"><b>{$lang.operating}</b></td>
        </tr>
        {foreach from=$booking name=booking item=item}
        <tr class="c">
            <td>{$item.pro_title}</td>
            <td>{$item.boo_number}</td>
            <td>{$item.boo_add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
            <td><a class="booking" href="{$S_URL_PREFIX}user/mod-booking_info/pro_id-{$item.boo_pro_id}/{$S_URL_SUFFIX}">[{$lang.view_details}]</a>&nbsp;</td>
        </tr>
        {/foreach}
    </table>
	{$link_page = 'user/mod-booking_list'}
	{include file="module/page_link.tpl"}
    </div>
</div>
<!-- 红头船 -->