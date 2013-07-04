<div class="here">编辑模板文件 - {$tpl_path}</div>
<div class="block sheet">
  <form id="form_edit_tpl" method="post" action="?/deal/dir-file/" target="deal">
    <input name="cmd" type="hidden" value="edit_tpl" />
    <input name="tpl_path" type="hidden" value="{$tpl_path}" />
    <table class="main_table">
      <tr>
        <td>
          <textarea name="tpl" rows="20" cols="100">{$tpl}</textarea>
        </td>
      </tr>
      <tr>
        <td class="bt_row">
          <input class="button" type="submit" onclick="do_submit('form_edit_tpl',0)" value="提交" />
          <input class="button" type="button" onclick="go_back()" value="返回" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.为了避免&lt;textarea&gt;标签引起布局混乱，模板代码中的&lt;textarea&gt;标签都被置换成&lt;text_area&gt;，请不要修改，提交后程序会自动将其改回原状。
</div>
<iframe id="deal" name="deal"></iframe>