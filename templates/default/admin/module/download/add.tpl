<div class="here">添加下载</div>
<div class="block">
  <form id="form_add_art" method="post" action="?/deal/dir-article/" target="deal">
    <input name="cmd" type="hidden" value="add_or_edit_article" />
    <input name="art_type" type="hidden" value="download" />
    <table class="main_table">
      <tr>
        <td width="100px">文章标题：</td>
        <td><input name="art_title" type="text" class="text" maxlength="200" value="" /></td>
      </tr>
      <tr>
        <td>作者/来源：</td>
        <td><input name="art_author" type="text" class="text" maxlength="" value="" /></td>
      </tr>
	  {$upl_index = 1}
      <tr>
        <td>上传文件：</td>
        <td>
        <input class="button" type="button" onClick="before_upload('upl_file','form_upl_file','show_file_{$upl_index}','file_path_{$upl_index}')" value="上传文件" />
        <input class="button" type="button" onClick="before_set_url('web_url','form_web_url','show_file_{$upl_index}','file_path_{$upl_index}')" value="网络文件" />
        <input name="file_path" id="file_path_{$upl_index}" type="hidden" maxlength="250" value="" />
        <span id="show_file_{$upl_index}"></span>
        </td>
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
{include file='module/download/box.tpl'}
<!-------------------------- BOX -------------------------->