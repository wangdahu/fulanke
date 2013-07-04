<div class="here">选择模板</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>模板预览</b></td>
      <td width="100px"><b>模板名称</b></td>
      <td><b>模板说明</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$tpl name=tpl item=item}
    <tr>
      <td class="img">
        <div class="unit">
          <table cellspacing="0" cellpadding="0">
            <tr><td>
              <img src="templates/{$item.name}/images/this.jpg" onload="picresize(this,50,50)"/>
            </td></tr>
          </table>
        </div>
      </td>
      <td><a href="templates/{$item.name}/images/this.jpg">{$item.name}</a></td>
      <td class="content" style="text-align:left;">
        {$item.text}
        <a href="templates/{$item.name}/readme.txt">[阅读原文]</a>
      </td>
      <td>
        {if $S_TPL_PATH != 'templates/'|cat:$item.name|cat:'/'}
          <a onClick="select_tpl('{$item.name}')">[使用该模板]</a>
        {else}
          <span class="red">[当前模板]</span>
        {/if}
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="30" height="30px"></td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="select_tpl">
  <div class="close" onclick="hide_box('select_tpl')">关闭</div>
  <div class="main">您确定使用该模板吗？
    <div class="bt_row">
      <form id="form_select_tpl" method="post" action="?/deal/dir-file/" target="deal">
	    <input name="cmd" type="hidden" value="select_tpl" />
        <input name="tpl" type="hidden" value="" />
        <input class="button" type="button" onclick="do_submit('form_select_tpl',1)" value="确定" />
        <input class="button" type="button" onclick="hide_box('select_tpl')" value="取消" />
      </form>
    </div>
  </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function select_tpl(val)
	{
		document.getElementById("form_select_tpl").tpl.value = val;
		show_box("select_tpl",300,125);
	}
</script>
{/literal}