<div class="here">添加文章</div>
<div class="block">
  <form id="form_add_art" method="post" action="?/deal/dir-article/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_article" />
    <input name="art_type" type="hidden" value="default" />
    <table class="main_table">
      <tr>
        <td width="100px">文章标题：</td>
        <td><input name="art_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td>文章分类：</td>
        <td>
        <select name="art_cat_id">
          <option value="0">请选择</option>
		  {$option}
        </select>
        </td>
      </tr>
      <tr>
        <td>作者/来源：</td>
        <td><input name="art_author" type="text" class="text" maxlength="" value="" /></td>
      </tr>
      <tr>
        <td>文章正文：</td>
        <td>
        <div class="editor">
          {include file='module/editor.tpl'}
        </div>
        </td>
      </tr>
      <tr>
        <td>SEO：</td>
        <td>
          <input id="seo_bt" class="button" type="button" onClick="set_seo('art')" value="进行优化" />
          <div style="display:none;">
            <input class="text" name="art_keywords" id="art_keywords" type="text" maxlength="200" value="{$site_keywords}" />
            <textarea class="area" name="art_description" id="art_description">{$site_description}</textarea>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
          <input class="button" type="submit" onClick="do_submit('form_add_art',0)" value="提交" />
		</div>
        </td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
{include file='module/article/box.tpl'}
<!-------------------------- BOX -------------------------->