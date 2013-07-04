<div class="here">产品订购列表</div>
<div class="block sheet">
    <table class="main_table">
        <tr>
			<td width="100px"><b>用户名</b></td>
            <td><b>产品名称</b></td>
            <td width="80px"><b>订购数量</b></td>
            <td width="150px"><b>订购时间</b></td>
            <td width="120px"><b>操作</b></td>
        </tr>
        {foreach from=$booking name=booking item=item}
        <tr>
			<td><a href="?/service/mod-user_edit/id-{$item.boo_user_id}/{$S_URL_SUFFIX}">{$item.user_name}</a></td>
            <td>{$item.pro_title}</td>
            <td>{$item.boo_number}</td>
            <td>{$item.boo_add_time|date_format:"%Y-%m-%d %H:%M:%S"}</td>
            <td>
				<a class="booking" href="?/service/mod-booking_info/pro_id-{$item.boo_pro_id}/{$S_URL_SUFFIX}">[查看详情]</a>
				<a onclick="del('booking|{$item.boo_id}')">[删除]</a>
			</td>
        </tr>
        {/foreach}
    </table>
	{$link_page = 'service/mod-booking'}
	{include file="module/page_link.tpl"}
</div>
<iframe id="deal" name="deal"></iframe>
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}