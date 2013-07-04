<div class="here">当前使用模板文件</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>文件名</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$tpl name=tpl item=item}
    <tr>
      <td>{$item.path}</td>
      <td>
        <a href="?/file/mod-tpl_edit/path-{$item.path_str}/{$S_URL_SUFFIX}">[编辑]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="30" height="30px"></td>
    </tr>
  </table>
</div>