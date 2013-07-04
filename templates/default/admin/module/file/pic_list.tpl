<div class="block fil_upl">
<form id="form_upl_img" method="post" enctype="multipart/form-data" action="?/deal/dir-file/" target="deal">
  <input name="cmd" type="hidden" value="upload" />
  <input name="dir" type="hidden" value="{$dir_path}/" />
  <input name="file" type="hidden" value="" />
  <span>上传图片</span>
  <input name="file_path" type="file" onChange="do_upload('form_upl_img',0)" />
</form>
</div>
<div class="here">图片列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td width="150px"><b>图片预览</b></td>
      <td><b>图片地址</b></td>
      <td width="120px"><b>数据库相关</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$list name=list item=item}
    <tr>
      <td><img src="{$dir_path}/{$item.name}" height="30px" /></td>
      <td>http://{$host}/{$dir_path}/{$item.name}</td>
      <td>
        {if $item.id}ID:{$item.id}{else}<span class="red">无关</span>{/if}
      </td>
      <td>
        <a href="{$dir_path}/{$item.name}">[查看]</a>
        {if not $item.id}<a onClick="del_file('{$dir_path}/{$item.name}')">[删除]</a>{/if}
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="30" height="30px">
      </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_file">
  <div class="close" onclick="hide_box('del_file')">关闭</div>
  <div class="main">您确定要删除该图片吗？
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