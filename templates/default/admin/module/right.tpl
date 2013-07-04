<div id="right">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    	<td colspan="2" style="height:53px;"></td>
    </tr>
    <tr>
        <td style="width:183px;"></td>
        <td>
            <div id="main">
			{if $check_power}
                {include file='module/box.tpl'}
                {$file = 'module/'|cat:$url_page|cat:'/'|cat:$mod|cat:'.tpl'}
                {include file=$file}
			{else}
				<div class="here">系统信息</div>
				<div class="block">
					<div class="no_power">
						对不起，您的权限不足，无法操作当前页面
					</div>
				</div>
			{/if}
            </div>
        </td>
    </tr>
</table>
</div>
