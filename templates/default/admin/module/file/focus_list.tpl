<div class="here">焦点图片</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片地址</b></td>
      <td><b>跳转地址</b></td>
      <td><b>文字说明</b></td>
      <td><b>位置标志</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="100px"><b>操作</b></td>
    </tr>
    {foreach from=$focus name=focus item=item}
    <tr>
      <td>{$item.pic_path}</td>
      <td>{$item.pic_url}</td>
      <td>{$item.pic_title}</td>
      <td>{$item.pic_site}</td>
      <td onClick="show_edit('index_{$item.pic_id}')">
      <span id="index_{$item.pic_id}_1">{$item.pic_index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
      <span id="index_{$item.pic_id}_2" style="display:none;">
	  <input type="text" id="index_{$item.pic_id}" value="{$item.pic_index}" style="width:30px;" onBlur="set_order('index','picture',{$item.pic_id},this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" {if $item.pic_top == 1}checked{/if} onClick="set_order('top','picture',{$item.pic_id},this.checked)" /></td>
      <td><input  type="checkbox" {if $item.pic_show == 1}checked{/if} onClick="set_order('show','picture',{$item.pic_id},this.checked)" /></td>
      <td>
        <a onClick="edit_focus('{$item.values}')">[编辑]</a>
        <a onClick="del('picture|{$item.pic_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="8">
		  <div class="bt_row">
			<input class="button" type="button" onClick="show_box('add_focus',350,210)" value="添加" />
		  </div>
      </td>
    </tr>
  </table>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.焦点图片可以采用相对路径（相对于网站首页）或以http://开头的网络路径。<br />
  2.可以在“图片管理”中上传图片后，复制其图片地址到此处添加焦点图片。<br />
  3.位置标志指的是页面URL中从问号后面开始的标识字符串，表示该焦点图片所在的页面，default表示全局。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_focus">
  <div class="head">
    <div class="title">添加焦点图片</div>
    <div class="close" onclick="hide_box('add_focus')">关闭</div>
  </div>
  <form id="form_add_focus" method="post" action="?/deal/dir-file/" target="deal">
  	<input name="cmd" type="hidden" value="add_or_edit_focus" />
    <table class="box_table">
      <tr>
        <td>图片地址：</td>
        <td><input name="pic_path" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>跳转地址：</td>
        <td><input name="pic_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>文字说明：</td>
        <td><input name="pic_title" type="text" class="text" maxlength="200" /></td>
      </tr>
      <tr>
        <td>位置标志：</td>
        <td><input name="pic_site" type="text" class="text" maxlength="200" value="default" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_add_focus',1)" value="提交" />
			</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="edit_focus">
  <div class="head">
    <div class="title">编辑焦点图片</div>
    <div class="close" onclick="hide_box('edit_focus')">关闭</div>
  </div>
  <form id="form_edit_focus" method="post" action="?/deal/dir-file/" target="deal">
  <input name="cmd" type="hidden" value="add_or_edit_focus" />
  <input name="pic_id" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td>图片地址：</td>
        <td><input name="pic_path" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>跳转地址：</td>
        <td><input name="pic_url" type="text" class="text" maxlength="200" value="http://" /></td>
      </tr>
      <tr>
        <td>文字说明：</td>
        <td><input name="pic_title" type="text" class="text" maxlength="200" /></td>
      </tr>
      <tr>
        <td>位置标志：</td>
        <td><input name="pic_site" type="text" class="text" maxlength="200" value="default" /></td>
      </tr>
      <tr>
        <td colspan="2">
			<div class="bt_row">
			<input class="button" type="button" onClick="do_submit('form_edit_focus',1)" value="提交" />
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
	function edit_focus(val)
	{
		var arr = val.split("{v}");
		var obj = document.getElementById("form_edit_focus");
		obj.pic_id.value = arr[0];
		obj.pic_path.value = arr[1];
		obj.pic_url.value = arr[2];
		obj.pic_title.value = arr[3];
		obj.pic_site.value = arr[4];
		show_box("edit_focus",350,210);
	}
</script>
{/literal}