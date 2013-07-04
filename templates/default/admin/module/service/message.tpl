<div class="here">留言列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>留言内容</b></td>
      <td width="80px"><b>通过审核</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$message name=message item=item}
    <tr>
      <td style="text-align:left;line-height:20px;">
        <div>
			【{$item.mes_type}】&nbsp;
			<b>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}：</b><span>{$item.mes_title}</span>
			&nbsp;[{$item.mes_add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
		</div>
        <div>{$item.mes_text}</div>
		{if $item.mes_reply != ''}
        <div><span class="red">管理员回复：</span>{$item.mes_reply}</div>
        {/if}
      </td>
      <td>
		{if $item.mes_show != 2}
        <input type="checkbox" {if $item.mes_show == 1}checked{/if} onClick="set_order('show','message',{$item.mes_id},this.checked)" />
		{else}悄悄话{/if}
      </td>
      <td>
        <a onClick="reply({$item.mes_id},'{$item.mes_reply}')">[回复]</a>
        <a onClick="del('message|{$item.mes_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="3">
		  {$link_page = 'service/mod-message'}
		  {include file="module/page_link.tpl"}
	  </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="reply">
	<div class="head">
		<div class="title">回复留言</div>
		<div class="close" onclick="hide_box('reply')">关闭</div>
	</div>
	<form id="form_reply_mes" method="post" action="?/deal/dir-service/" target="deal">
		<input name="cmd" type="hidden" value="reply_mes" />
		<table class="box_table">
			<tr>
				<td>
					<input name="mes_id" type="hidden" value="" />
					<textarea class="area" name="mes_reply"></textarea>
				</td>
			</tr>
			<tr>
				<td class="bt_row">
					<input class="button" type="button" onclick="do_submit('form_reply_mes',1)" value="提交" />
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
		document.getElementById("form_reply_mes").mes_id.value = id;
		document.getElementById("form_reply_mes").mes_reply.value = text;
	}
</script>
{/literal}