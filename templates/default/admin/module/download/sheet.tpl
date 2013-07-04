<div class="here">下载列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>标题</b></td>
      <td width="150px"><b>下载链接</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$article name=article item=item}
    <tr>
      <td>{$item.art_title}</td>
      <td><a href="{$item.art_url}">[点击下载]</a></td>
      <td onClick="show_edit('index_{$item.art_id}')">
      <span id="index_{$item.art_id}_1">{$item.art_index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
      <span id="index_{$item.art_id}_2" style="display:none;">
	  <input type="text" id="index_{$item.art_id}" value="{$item.art_index}" style="width:30px;" onBlur="set_order('index','article',{$item.art_id},this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" {if $item.art_top == 1}checked{/if} onClick="set_order('top','article',{$item.art_id},this.checked)" /></td>
      <td><input  type="checkbox" {if $item.art_show == 1}checked{/if} onClick="set_order('show','article',{$item.art_id},this.checked)" /></td>
      <td>
        <a href="?/download/mod-edit/id-{$item.art_id}/{$S_URL_SUFFIX}">[编辑]</a>&nbsp;
        <a onClick="del('article|{$item.art_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="6">
		  {$link_page = 'download/mod-sheet'}
		  {include file="module/page_link.tpl"}
	  </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}