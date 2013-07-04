<div class="here">语言列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>中文名</b></td>
	  <td><b>外语名</b></td>
	  <td><b>语言包</b></td>
	  <td><b>前台入口</b></td>
	  <td><b>后台入口</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
	{foreach from=$lang name=lang item=item}
    <tr>
      <td>{$item.chinese_name}</td>
	  <td>{$item.foreign_name}</td>
	  <td>{$item.pack_name}</td>
	  <td>{$item.index_entrance}</td>
	  <td>{$item.admin_entrance}</td>
      <td>
	  {if $item.index_entrance != 'index.php'}
	  <a onClick="del_lang('{$item.var_id}')">[删除]</a>
	  {else}
	  <span class="red">[系统保护]</span>
	  {/if}
	  </td>
    </tr>
	{/foreach}
    <tr>
      <td colspan="6">
          <div class="bt_row">
            <input class="button" type="button" onClick="show_box('add_lang',330,240)" value="添加" />
          </div>
	  </td>
    </tr>
  </table>
</div>
<div class="here">语言包</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>文件名</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$pack name=pack item=item}
    <tr>
      <td>{$item.name}</td>
      <td>
        <a href="?/file/mod-lang_edit/path-{$item.name}/{$S_URL_SUFFIX}">[编辑]</a>
        {if $item.name != $S_LANG|cat:'.php'}<a onClick="select_lang('{$item.name}')">[使用]</a>{else}<span class="red">[使用中]</span>{/if}
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="2" height="30px"></td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_lang">
  <div class="head">
    <div class="title">添加语言</div>
    <div class="close" onclick="hide_box('add_lang')">关闭</div>
  </div>
  <form id="form_add_lang" method="post" action="?/deal/dir-file/" target="deal">
    <input name="cmd" type="hidden" value="add_lang" />
    <table class="box_table">
      <tr>
        <td>中文名：</td>
        <td><input name="chinese_name" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>外语名：</td>
        <td><input name="foreign_name" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>语言包：</td>
        <td><input name="pack_name" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>前台入口：</td>
        <td><input name="index_entrance" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>后台入口：</td>
        <td><input name="admin_entrance" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="bt_row">
            <input class="button" type="button" onclick="do_submit('form_add_lang',1)" value="提交" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="del_lang">
    <div class="close" onclick="hide_box('del_lang')">关闭</div>
    <div class="main">您确定要删除该语言吗？
        <div class="bt_row">
        <form id="form_del_lang" method="post" action="?/deal/dir-file/" target="deal">
            <input name="cmd" type="hidden" value="del_lang" />
            <input name="table" type="hidden" value="config" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit2('form_del_lang')" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_lang')" value="取消" />
		</form>
        </div>
    </div>
</div>
<div class="box" id="select_lang">
  <div class="close" onclick="hide_box('select_lang')">关闭</div>
  <div class="main">您确定使用该语言包吗？
    <div class="bt_row">
      <form id="form_select_lang" method="post" action="?/deal/dir-file/" target="deal">
	  	<input name="cmd" type="hidden" value="select_lang" />
        <input name="lang" type="hidden" value="" />
        <input class="button" type="button" onclick="do_submit('form_select_lang',1)" value="确定" />
        <input class="button" type="button" onclick="hide_box('select_lang')" value="取消" />
      </form>
    </div>
  </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function select_lang(val)
	{
		document.getElementById("form_select_lang").lang.value = val;
		show_box("select_lang",300,125);
	}
	function del_lang(val)
	{
		var obj = document.getElementById("form_del_lang");
		obj.id.value = val;
		show_box("del_lang",300,125);
	}
	function do_submit2(id)
	{
		document.getElementById(id).submit();
		setInterval("if_success_then_reload2()",500);
	}
	function if_success_then_reload2()
	{
		if(get_cookie("result") == 1)
		{
			document.location.href = "admin.php?/file/mod-lang_list/" ;
		}
	}
</script>
{/literal}