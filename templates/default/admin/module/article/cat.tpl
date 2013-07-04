<div class="here">文章分类</div>
<div class="block sheet">
  <form id="form_edit_cat" method="post" action="?/deal/dir-article/" target="deal">
    <input name="cmd" type="hidden" value="edit_cat" />
      <table class="main_table">
        <tr>
          <td><b>上级分类</b></td>
          <td><b>分类名称</b></td>
          <td width="30px"><b>级数</b></td>
          <td width="45px"><b>排序</b></td>
          <td width="40px"><b>推荐</b></td>
          <td width="40px"><b>置顶</b></td>
          <td width="40px"><b>显示</b></td>
          <td><b>操作</b></td>
        </tr>
        {foreach from=$list name=list item=item}
        <tr>
          <td>
            <select name="cat_parent_id[]" class="cat_select">
              <option value="0">无</option>
              {$item.option}
			</select>
          </td>
          <td><input name="cat_name[]" type="text" class="text" maxlength="80" value="{$item.name}" /></td>
          <td>{$item.grade}</td>
          <td style="text-align:center" onClick="show_edit('index_{$item.id}')">
		  <span id="index_{$item.id}_1">{$item.index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
		  <span id="index_{$item.id}_2" style="display:none;">
			<input type="text" id="index_{$item.id}" value="{$item.index}" style="width:30px;" onBlur="set_order('index','cat_art',{$item.id},this.value)" />
		  </span>
          </td>
          <td style="text-align:center"><input  type="checkbox" {if $item.best == 1}checked{/if} onClick="set_order('best','cat_art',{$item.id},this.checked)" /></td>
          <td style="text-align:center"><input  type="checkbox" {if $item.top == 1}checked{/if} onClick="set_order('top','cat_art',{$item.id},this.checked)" /></td>
          <td style="text-align:center"><input  type="checkbox" {if $item.show == 1}checked{/if} onClick="set_order('show','cat_art',{$item.id},this.checked)" /></td>
          <td>
            <input name="cat_id[]" type="hidden" value="{$item.id}" />
            {if $item.exist_child == 0}
            <span class="red" onClick="del('cat_art|{$item.id}')">[删除]</span>
            {else}
            <span class="red" onClick="show_box('no_deal',300,100)">[删除]</span>
            {/if}
          </td>
        </tr>
        {/foreach}
        <tr>
          <td class="bt_row" colspan="30">
            <input class="button" type="button" onClick="do_submit('form_edit_cat',0)" value="修改" />
            <input class="button" type="button" onClick="show_box('add_cat',350,150)" value="添加" />
          </td>
        </tr>
      </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="no_deal">
  <div class="close" onclick="hide_box('no_deal')">关闭</div>
  <div class="main">操作失败，请先操作关联分类</div>
</div>
<div class="box" id="add_cat">
  <div class="head">
    <div class="title">添加文章分类</div>
    <div class="close" onClick="hide_box('add_cat')">关闭</div>
  </div>
  <form id="form_add_cat" method="post" action="?/deal/dir-article/" target="deal">
  	<input name="cmd" type="hidden" value="add_cat" />
    <table class="box_table">
      <tr>
        <td>上级分类：</td>
        <td style="text-align:left">
        <select name="cat_parent_id" >
          <option value="0">无</option>
		  {$cat_list}
        </select>
        </td>
      </tr>
      <tr>
        <td>分类名称：</td>
        <td style="text-align:left"><input name="cat_name" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onClick="do_submit('form_add_cat',1)" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}