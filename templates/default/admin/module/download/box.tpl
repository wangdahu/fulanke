<div class="box" id="upl_file">
  <div class="head">
    <div class="title">上传文件</div>
    <div class="close" onClick="hide_box('upl_file')">关闭</div>
  </div>
  <form id="form_upl_file" method="post" enctype="multipart/form-data" action="?/deal/dir-article/" target="deal">
    <input name="cmd" type="hidden" value="upload" />
    <input name="dir" type="hidden" value="resource/" />
    <input name="file" type="hidden" value="" />
	<input name="show_tag" type="hidden" value="" />
	<input name="form_tag" type="hidden" value="" />
    <table class="box_table">
      <tr>
        <td><input name="file_path" type="file" onChange="do_upload('form_upl_file',1)" /></td>
      </tr>
    </table>
  </form>
</div>
<div class="box" id="web_url">
	<div class="head">
		<div class="title">网络文件</div>
		<div class="close" onclick="hide_box('web_url')">关闭</div>
	</div>
	<form id="form_web_url" method="post">
		<input name="show_tag" type="hidden" value="" />
		<input name="form_tag" type="hidden" value="" />
		<table class="box_table">
			<tr>
				<td>
					<input name="file_path" type="text" value="http://" />
					<input class="button" type="button" onclick="set_web_url('form_web_url')" value="确定" />
				</td>
			</tr>
		</table>
	</form>
</div>