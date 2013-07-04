<div class="here">文章列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td width="120px"><b>分类</b></td>
      <td><b>标题</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$article name=article item=item}
    <tr>
      <td>{if $item.cat_name}{$item.cat_name}{else}无{/if}</td>
      <td>{$item.art_title}</td>
      <td onClick="show_edit('index_{$item.art_id}')">
      <span id="index_{$item.art_id}_1">{$item.art_index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
      <span id="index_{$item.art_id}_2" style="display:none;">
	  <input type="text" id="index_{$item.art_id}" value="{$item.art_index}" style="width:30px;" onBlur="set_order('index','article',{$item.art_id},this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" {if $item.art_top == 1}checked{/if} onClick="set_order('top','article',{$item.art_id},this.checked)" /></td>
      <td><input  type="checkbox" {if $item.art_show == 1}checked{/if} onClick="set_order('show','article',{$item.art_id},this.checked)" /></td>
      <td>
        <a href="{$S_URL_PREFIX}article/id-{$item.art_id}/{$S_URL_SUFFIX}" target="_blank">[查看]</a>&nbsp;
        <a href="?/article/mod-edit/id-{$item.art_id}/{$S_URL_SUFFIX}">[编辑]</a>&nbsp;
        <a onClick="del('article|{$item.art_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="30">{include file="module/page_link.tpl"}</td>
    </tr>
  </table>
</div>
<div class="here">文章搜索</div>
<div class="block">
<form id="form_search" method="post" action="?/article/mod-sheet/">
<table class="main_table">
  <tr>
    <td align="right" width="150px">
      <select name="field">
        <option value="art_title">文章标题</option>
        <option value="art_author">文章作者</option>
        <option value="art_text">文章正文</option>
      </select>
    </td>
    <td>
      <input name="key" type="text" />
      <input class="button" type="button" value="搜索文章" onclick="do_search()"/>
    </td>
  </tr>
</table>
</form>
</div>
<iframe id="deal" name="deal"></iframe>
{literal}
<script language="javascript">
	get_result(0);
	function do_search()
	{
		var obj = document.getElementById("form_search");
		obj.action = obj.action + 'field-' + obj.field.value + '/' + 'key-' + obj.key.value + '/';
		obj.submit();
	}
</script>
{/literal}