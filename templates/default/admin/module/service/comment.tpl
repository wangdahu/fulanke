<div class="here">评论列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>评论内容</b></td>
      <td width="80px"><b>通过审核</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$comment name=comment item=item}
    <tr>
      <td style="text-align:left;line-height:20px;">
        <div>
		{section name=loop loop=$item.com_rank}<img src="{$S_TPL_PATH}images/star.gif" />{/section}&nbsp;
		<b>评论：</b><a href="{$S_URL_PREFIX}{$item.com_type}/id-{$item.com_page_id}/{$S_URL_SUFFIX}" target="_blank">《{$item.title}》</a>
		&nbsp;[{$item.com_add_time|date_format:"%Y-%m-%d %H:%M:%S"}]
		</div>
        <div>{$item.com_text}</div>
		{if $item.com_reply != ''}
        <div><span class="red">管理员回复：</span>{$item.com_reply}</div>
        {/if}
      </td>
      <td>
        <input type="checkbox" {if $item.com_show == 1}checked{/if} onClick="set_order('show','comment',{$item.com_id},this.checked)" />
      </td>
      <td>
        <a onClick="reply({$item.com_id},'{$item.com_reply}')">[回复]</a>
        <a onClick="del('comment|{$item.com_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="3">
		  {$link_page = 'service/mod-comment'}
		  {include file="module/page_link.tpl"}
	  </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="reply">
	<div class="head">
		<div class="title">回复评论</div>
		<div class="close" onclick="hide_box('reply')">关闭</div>
	</div>
	<form id="form_reply_comment" method="post" action="?/deal/dir-service/" target="deal">
		<input name="cmd" type="hidden" value="reply_comment" />
		<table class="box_table">
			<tr>
				<td>
					<input name="com_id" type="hidden" value="" />
					<textarea class="area" name="com_reply"></textarea>
				</td>
			</tr>
			<tr>
				<td class="bt_row">
					<input class="button" type="button" onclick="do_submit('form_reply_comment',1)" value="提交" />
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
		document.getElementById("form_reply_comment").com_id.value = id;
		document.getElementById("form_reply_comment").com_reply.value = text;
	}
</script>
{/literal}