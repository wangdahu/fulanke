<div class="here">产品列表</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>图片</b></td>
      <td><b>标题</b></td>
      <td width="45px"><b>排序</b></td>
      <td width="40px"><b>推荐</b></td>
      <td width="40px"><b>置顶</b></td>
      <td width="40px"><b>显示</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    {foreach from=$product name=product item=item}
    <tr>
      <td class="pic">
        <div class="unit">
          <table cellspacing="0" cellpadding="0">
            <tr><td>
              <img src="{$item.pro_reduce_img}" onload="picresize(this,50,50)"/>
            </td></tr>
          </table>
        </div>
      </td>
      <td>{$item.pro_title}</td>
      <td onClick="show_edit('index_{$item.pro_id}')">
      <span id="index_{$item.pro_id}_1">{$item.pro_index}<img src="{$S_TPL_PATH}images/pencil.gif"></span>
      <span id="index_{$item.pro_id}_2" style="display:none;">
		  <input type="text" id="index_{$item.pro_id}" value="{$item.pro_index}" style="width:30px;" onBlur="set_order('index','product',{$item.pro_id},this.value)" />
	  </span>
      </td>
      <td><input  type="checkbox" {if $item.pro_best == 1}checked{/if} onClick="set_order('best','product',{$item.pro_id},this.checked)" /></td>
      <td><input  type="checkbox" {if $item.pro_top == 1}checked{/if} onClick="set_order('top','product',{$item.pro_id},this.checked)" /></td>
      <td><input  type="checkbox" {if $item.pro_show == 1}checked{/if} onClick="set_order('show','product',{$item.pro_id},this.checked)" /></td>
      <td>
        <a href="{$S_URL_PREFIX}product/id-{$item.pro_id}/{$S_URL_SUFFIX}" target="_blank">[查看]</a>&nbsp;
        <a href="?/product/mod-edit/id-{$item.pro_id}/{$S_URL_SUFFIX}">[编辑]</a>&nbsp;
        <a onClick="del_product('{$item.pro_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="30">{include file="module/page_link.tpl"}</td>
    </tr>
  </table>
</div>
<div class="here">产品搜索</div>
<div class="block">
<form id="form_search" method="post" action="?/product/mod-sheet/">
<table class="main_table">
  <tr>
    <td align="right" width="150px">
      <select name="field">
        <option value="pro_title">产品标题</option>
        <option value="pro_number">产品编号</option>
        <option value="pro_text">产品描述</option>
      </select>
    </td>
    <td>
      <input name="key" type="text" />
      <input class="button" type="button" value="搜索产品" onclick="do_search()"/>
    </td>
  </tr>
</table>
</form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_product">
    <div class="close" onclick="hide_box('del_product')">关闭</div>
    <div class="main">您确定要删除该产品吗？
        <div class="bt_row">
        <form id="form_del_product" method="post" action="?/deal/dir-product/" target="deal">
            <input name="cmd" type="hidden" value="del_product" />
            <input name="table" type="hidden" value="product" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del_product',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_product')" value="取消" />
		</form>
        </div>
    </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function do_search()
	{
		var obj = document.getElementById("form_search");
		obj.action = obj.action + 'field-' + obj.field.value + '/' + 'key-' + obj.key.value + '/';
		obj.submit();
	}
	function del_product(val)
	{
		var obj = document.getElementById("form_del_product");
		obj.id.value = val;
		show_box("del_product",300,125);
	}
</script>
{/literal}