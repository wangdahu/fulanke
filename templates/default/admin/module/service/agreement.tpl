<div class="here">用户协议</div>
<div class="block">
  <form id="form_edit_agreement" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="edit_agreement" />
    <table class="main_table">
      <tr>
        <td>用户协议：</td>
        <td>
        <div class="editor">
          {include file='module/editor.tpl'}
        </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
		<div class="bt_row">
		<input class="button" type="submit" onclick="do_submit('form_edit_agreement',0)" value="修改" />
		</div>
		</td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
