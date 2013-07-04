<div class="block fil_upl">
<form id="form_upl_file" method="post" enctype="multipart/form-data" action="?/deal/dir-file/" target="deal">
  <input name="cmd" type="hidden" value="upload" />
  <input name="dir" type="hidden" value="resource/" />
  <input name="file" type="hidden" value="" />
  <span>上传文件</span>
  <input name="file_path" type="file" onChange="do_upload('form_upl_file',0)" />
</form>
</div>
<div class="here">下载资源</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>资源地址</b></td>
      <td width="120px"><b>数据库相关</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$list name=list item=item}
    <tr>
      <td>http://{$host}/resource/{$item.name}</td>
      <td>
        {if $item.id}ID:{$item.id}{else}<span class="red">无关</span>{/if}
      </td>
      <td>
        {if not $item.id}<a onClick="del_file('resource/{$item.name}')">[删除]</a>{else}无{/if}
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="3" height="30px">
      </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_file">
  <div class="close" onclick="hide_box('del_file')">关闭</div>
  <div class="main">您确定要删除该文件吗？
    <div class="bt_row">
      <form id="form_del_file" method="post" action="?/deal/" target="deal">
	  	<input name="cmd" type="hidden" value="del_file" />
        <input name="path" type="hidden" value="" />
        <input class="button" type="button" onclick="do_submit('form_del_file',1)" value="确定" />
        <input class="button" type="button" onclick="hide_box('del_file')" value="取消" />
      </form>
    </div>
  </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}