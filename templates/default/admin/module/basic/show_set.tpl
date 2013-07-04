<div class="here">模块启闭</div>
<div class="block">
  <table class="main_table">
    <tr>
      {foreach from=$show name=show item=item}
      <td width="15%">{$item.name}：</td>
      <td width="35%">
        <input type="radio" name="{$item.text}" id="{$item.text}-1" {$item.yes} onclick="edit_show(this.id)" />开启
        <input type="radio" name="{$item.text}" id="{$item.text}-0" {$item.no} onclick="edit_show(this.id)" />关闭
      </td>
      {if $smarty.foreach.show.index mod 2 == 1}</tr><tr>{/if}
      {/foreach}
      {if $smarty.foreach.show.last mod 2 == 0}
      <td width="15%">&nbsp;</td>
      <td width="35%">&nbsp;</td>
      {/if}
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
{literal}
<script language="javascript">
	function edit_show(id)
	{
		ajax("post","?/deal/dir-basic/","cmd=edit_show&id="+id,
		function(data)
		{
			if(data == 1) result();
		});
	}
</script>
{/literal}