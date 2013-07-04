<div class="here">友情链接</div>
<div class="block sheet">
      <table class="main_table">
        <tr>
          <td><b>文字</b></td>
          <td><b>网址</b></td>
          <td><b>图片</b></td>
          <td><b>排序</b></td>
          <td><b>描述</b></td>
          <td width="120px"><b>操作</b></td>
        </tr>
        {foreach from=$link name=link item=item}
        <tr>
          <td>{$item.lin_word}</td>
          <td>{$item.lin_url}</td>
          <td>{if $item.lin_img != 'none'}<img class="lin_img" src="{$item.lin_img}" />{else}{$item.lin_img}{/if}</td>
          <td>{$item.lin_index}</td>
          <td>{$item.lin_title}</td>
          <td>
            <a onClick="edit_link('{$item.values}')">[编辑]</a>
            <a onClick="del('link|{$item.lin_id}')">[删除]</a>
          </td>
        </tr>
        {/foreach}
        <tr>
          <td colspan="6">
			<div class="bt_row">
				<input class="button" type="button" onClick="show_box('add_link',350,250)" value="添加" />
			</div>
          </td>
        </tr>
      </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_link">
  <div class="head">
    <div class="title">添加友情链接</div>
    <div class="close" onClick="hide_box('add_link')">关闭</div>
  </div>
  <form id="form_add_link" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_link" />
    <table class="box_table">
      <tr>
        <td>文字：</td>
        <td><input name="lin_word" type="text" class="text" maxlength="40" value="" /></td>
      </tr>
      <tr>
        <td>网址：</td>
        <td><input name="lin_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>图片：</td>
        <td><input name="lin_img" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>排序：</td>
        <td><input name="lin_index" type="text" class="text" maxlength="10" value="" /></td>
      </tr>
      <tr>
        <td>描述：</td>
        <td><input name="lin_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_add_link',1)" value="提交" />
			</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="edit_link">
  <div class="head">
    <div class="title">编辑友情链接</div>
    <div class="close" onClick="hide_box('edit_link')">关闭</div>
  </div>
  <form id="form_edit_link" method="post" action="?/deal/dir-service/" target="deal">
  <input name="cmd" type="hidden" value="add_or_edit_link" />
  <input name="lin_id" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td>文字：</td>
        <td><input name="lin_word" type="text" class="text" maxlength="40" value="" /></td>
      </tr>
      <tr>
        <td>网址：</td>
        <td><input name="lin_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>图片：</td>
        <td><input name="lin_img" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>排序：</td>
        <td><input name="lin_index" type="text" class="text" maxlength="10" value="" /></td>
      </tr>
      <tr>
        <td>描述：</td>
        <td><input name="lin_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_edit_link',1)" value="提交" />
			</div>
		</td>
	  </tr>
    </table>
  </form>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function edit_link(val)
	{
		var arr = val.split("{v}");
		var obj = document.getElementById("form_edit_link");
		obj.lin_id.value = arr[0];
		obj.lin_word.value = arr[1];
		obj.lin_url.value = arr[2];
		obj.lin_img.value = arr[3];
		obj.lin_index.value = arr[4];
		obj.lin_title.value = arr[5];
		show_box("edit_link",350,250);
	}
</script>
{/literal}