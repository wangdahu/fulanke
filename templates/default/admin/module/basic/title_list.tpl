<div class="here">标题设置</div>
<div class="block">
  <form id="form_edit_title" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="edit_title" />
    <table class="main_table">
      <tr>
        <td><b>位置标志</b></td>
        <td><b>标题</b></td>
        <td><b>优先级</b></td>
        <td><b>操作</b></td>
      </tr>
      {foreach from=$title name=title item=item}
      <tr>
        <td><input name="site[]" type="text" class="text" maxlength="50" value="{$item.site}" /></td>
        <td><input name="title[]" type="text" class="text" maxlength="150" value="{$item.title}" /></td>
        <td><input name="priority[]" type="text" class="text" maxlength="150" value="{$item.priority}" /></td>
        <td><input name="id[]" type="hidden" value="{$item.id}" /><span class="red" onClick="del('config|{$item.id}')">[删除]</span></td>
      </tr>
      {/foreach}
      <tr>
        <td class="bt_row" colspan="4">
          <input class="button" type="button" onClick="do_submit('form_edit_title',0)" value="修改" />
          <input class="button" type="button" onClick="show_box('add_title',350,185)" value="添加" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.这里的标题主要指的是页面标题，但不限于页面标题。例如产品展示页的页面标题中的“产品展示”就是在这里设置的，其页面位置导航中的“产品展示”也是在这里设置。<br />
  2.位置标志指的是页面URL中从问号后面开始的标识字符串，表示该标题所适用的页面。位置标志可以形如goods、article/cat-2/、article/cat-2/id-1/等。<br />
  3.当位置标志互相包含时，可以通过设定优先级避免冲突。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_title">
  <div class="head">
    <div class="title">添加标题</div>
    <div class="close" onclick="hide_box('add_title')">关闭</div>
  </div>
  <form id="form_add_title" method="post" action="?/deal/dir-basic/" target="deal">
  	<input name="cmd" type="hidden" value="add_title" />
    <table class="box_table">
      <tr>
        <td>标志：</td>
        <td><input name="site" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>标题：</td>
        <td><input name="title" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td>优先级：</td>
        <td><input name="priority" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onclick="do_submit('form_add_title',1)" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
<!-------------------------- END BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}