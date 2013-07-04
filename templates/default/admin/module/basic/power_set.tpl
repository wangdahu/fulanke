<div class="here">权限设置 - {$admin.adm_username}</div>
<div class="block">
    <form id="form_power_set" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="power_set" />
		<input name="adm_id" type="hidden" value="{$id}" />
		<table class="main_table">
			<tr>
				{foreach from=$power name=power item=item}
				<td width="100px">{$item.name}：</td>
				<td>
				<input name="url[]" type="checkbox" {if $item.set}checked="checked"{/if} value="{$item.url}" />
				</td>
				{if $smarty.foreach.power.index mod 4 == 3}</tr><tr>{/if}
				{/foreach}
			</tr>
            <tr>
                <td colspan="8">
                    <div class="bt_row">
                        <input class="button" type="button" onClick="do_submit('form_power_set',0)" value="修改" />
                    </div>
                </td>
            </tr>
		</table>
	</form>
</div>
<iframe id="deal" name="deal"></iframe>