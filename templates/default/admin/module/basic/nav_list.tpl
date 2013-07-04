{foreach from=$nav name=nav item=cat}
<div class="here">导航管理 - {$cat.name}</div>
<div class="block">
  <form id="form_edit_nav_{$cat.type}" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="edit_nav" />
    <table class="main_table">
      <tr>
        <td><b>文字</b></td>
        <td><b>链接</b></td>
        <td width="45px"><b>排序</b></td>
        <td width="40px"><b>置顶</b></td>
        <td width="40px"><b>显示</b></td>
        <td><b>操作</b></td>
      </tr>
      {foreach from=$list[$cat.type] name=list item=item}
      <tr>
        <td><input name="word[]" type="text" class="text" maxlength="50" value="{$item.men_name}" /></td>
        <td><input name="link[]" type="text" class="text" maxlength="150" value="{$item.men_url}" /></td>
        <td style="text-align:center" onClick="show_edit('index_{$item.men_id}')">
        <span id="index_{$item.men_id}_1">{$item.men_index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
        <span id="index_{$item.men_id}_2" style="display:none;">
			<input type="text" id="index_{$item.men_id}" value="{$item.men_index}" style="width:30px;" onBlur="set_order('index','menu',{$item.men_id},this.value)" />
		</span>
        </td>
        <td style="text-align:center"><input  type="checkbox" {if $item.men_top == 1}checked{/if} onClick="set_order('top','menu',{$item.men_id},this.checked)" /></td>
        <td style="text-align:center"><input  type="checkbox" {if $item.men_show == 1}checked{/if} onClick="set_order('show','menu',{$item.men_id},this.checked)" /></td>
        <td><input name="id[]" type="hidden" value="{$item.men_id}" /><span class="red" onClick="del('menu|{$item.men_id}')">[删除]</span></td>
      </tr>
      {/foreach}
      <tr>
        <td colspan="6">
          <div class="bt_row">
            <input class="button" type="button" onClick="do_submit('form_edit_nav_{$cat.type}',0)" value="修改" />
            <input class="button" type="button" onClick="show_box('add_nav_{$cat.type}',350,150)" value="添加" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
{/foreach}
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{foreach from=$nav name=nav item=cat}
<div class="box" id="add_nav_{$cat.type}">
  <div class="head">
    <div class="title">添加{$cat.name}</div>
    <div class="close" onclick="hide_box('add_nav_{$cat.type}')">关闭</div>
  </div>
  <form id="form_add_nav_{$cat.type}" method="post" action="?/deal/dir-basic/" target="deal">
    <input name="cmd" type="hidden" value="add_nav" />
    <input name="type" type="hidden" value="{$cat.type}" />
    <table class="box_table">
      <tr>
        <td>文字：</td>
        <td><input name="word" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>链接：</td>
        <td><input name="link" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td colspan="30">
          <div class="bt_row">
            <input class="button" type="button" onclick="do_submit('form_add_nav_{$cat.type}',1)" value="提交" />
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
{/foreach}
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}