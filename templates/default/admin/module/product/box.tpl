<div class="box" id="upl_img">
  <div class="head">
    <div class="title">上传图片</div>
    <div class="close" onClick="hide_box('upl_img')">关闭</div>
  </div>
  <form id="form_upl_img" method="post" enctype="multipart/form-data" action="?/deal/dir-product/" target="deal">
    <input name="cmd" type="hidden" value="upload" />
    <input name="dir" type="hidden" value="images/product/{$upl_date}/" />
    <input name="file" type="hidden" value="" />
	<input name="show_tag" type="hidden" value="" />
	<input name="form_tag" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td><input name="file_path" type="file" onChange="do_upload('form_upl_img',1)" /></td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="seo">
  <div class="head">
    <div class="title">进行简单优化</div>
    <div class="close" onClick="hide_box('seo')">关闭</div>
  </div>
  <form id="form_seo" method="post" action="">
    <table class="box_table">
      <tr>
        <td>页面关键字：</td>
        <td style="text-align:left;">
          <input name="seo_key" type="text" style="width:300px;" maxlength="200" value="" />
        </td>
      </tr>
      <tr>
        <td>页面描述：</td>
        <td style="text-align:left;">
          <textarea class="area" name="seo_des"></textarea>
        </td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onClick="get_seo('pro')" value="确定" /></td>
      </tr>
    </table>
  </form>
</div>