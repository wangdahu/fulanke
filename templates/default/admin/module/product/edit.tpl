<div class="here">编辑产品信息</div>
<div class="block">
  <form id="form_edit_pro" method="post" action="?/deal/dir-product/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_product" />
    <input name="pro_id" type="hidden" value="{$id}" />
    <table class="main_table">
      <tr>
        <td width="100px">产品名称：</td>
        <td><input name="pro_title" type="text" class="text" maxlength="200" value="{$product.pro_title}" /></td>
      </tr>
      <tr>
        <td>产品编号：</td>
        <td><input name="pro_number" type="text" class="text" maxlength="200" value="{$product.pro_number}" /></td>
      </tr>
      <tr>
        <td>产品分类：</td>
        <td>
        <select name="pro_cat_id">
          <option value="0">请选择</option>
		  {$option}
		</select>
        </td>
      </tr>
	  {$upl_index = 1}
      <tr>
        <td>产品图片：</td>
        <td>
        <span id="show_pic_{$upl_index}"><img src="{$product.pro_img}" height="100px" /></span>
        <input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','show_pic_{$upl_index}','pic_path_{$upl_index}')" value="上传图片" />
        <input name="pic_path" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="{$product.pro_img}" />
        </td>
      </tr>
      <tr>
        <td>产品价格：</td>
        <td><input name="pro_price" type="text" class="text" maxlength="40" value="{$product.pro_price}" /></td>
      </tr>
      <tr>
        <td>产品描述：</td>
        <td>
        <div class="editor">
          {include file='module/editor.tpl'}
        </div>
        </td>
      </tr>
      <tr>
        <td>SEO：</td>
        <td>
          <input id="seo_bt" class="button" type="button" onClick="set_seo('pro')" value="进行优化" />
          <div style="display:none;">
            <input class="text" name="pro_keywords" id="pro_keywords" type="text" maxlength="200" value="{$product.pro_keywords}" />
            <textarea class="area" name="pro_description" id="pro_description">{$product.pro_description}</textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30">
          <input class="button" type="submit" onclick="do_submit('form_edit_pro',0)" value="提交" />
          <input class="button" type="button" onclick="go_back()" value="返回" />
        </td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/product/box.tpl'}
<!-------------------------- BOX -------------------------->