<div class="here">编辑语言包 - {$path}</div>
<div class="block sheet">
  <form id="form_edit_lang" method="post" action="?/deal/dir-file/" target="deal">
    <input name="cmd" type="hidden" value="edit_lang" />
    <input name="path" type="hidden" value="{$path}" />
    <table class="main_table">
      <tr>
        <td>
          <textarea name="lang_text" rows="20" cols="100">{$lang_text}</textarea>
        </td>
      </tr>
      <tr>
        <td class="bt_row">
          <input class="button" type="submit" onclick="do_submit('form_edit_lang',0)" value="提交" />
          <input class="button" type="button" onclick="go_back()" value="返回" />
        </td>
      </tr>
    </table>
  </form>
</div>
<iframe id="deal" name="deal"></iframe>
