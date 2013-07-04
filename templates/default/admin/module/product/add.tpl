<div class="here">添加产品</div>
<div class="block">
  <form id="form_add_pro" method="post" action="?/deal/dir-product/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_product" />
    <table class="main_table">
      <tr>
        <td>产品名称：</td>
        <td><input name="pro_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td>产品编号：</td>
        <td><input name="pro_number" type="text" class="text" maxlength="200" value="" /></td>
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
        <span id="show_pic_{$upl_index}"></span>
        <input class="button" type="button" onClick="before_upload('upl_img','form_upl_img','show_pic_{$upl_index}','pic_path_{$upl_index}')" value="上传图片" />
        <input name="pic_path" id="pic_path_{$upl_index}" type="hidden" maxlength="250" value="" />
        </td>
      </tr>
      <tr>
        <td>产品价格：</td>
        <td><input name="pro_price" type="text" class="text" maxlength="40" value="" /></td>
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
            <input class="text" name="pro_keywords" id="pro_keywords" type="text" maxlength="200" value="{$site_keywords}" />
            <textarea class="area" name="pro_description" id="pro_description">{$site_description}</textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
          <input class="button" type="submit" onClick="do_submit('form_add_pro',0)" value="提交" />
		</div>
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.提交表单之后，页面不会自动刷新，这是为了方便用户填写下一个产品信息，减少重复输入。若要刷新，请点击左边导航栏“添加产品”。<br />
  2.进行搜索引擎优化（SEO）有助于提高搜索引擎排名，为网站带来更多流量。若不填写页面关键字和描述，系统会自动采用默认的关键字和描述。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/product/box.tpl'}
<!-------------------------- BOX -------------------------->