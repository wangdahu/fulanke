<div class="here">联系方式</div>
<div class="block">
    <form id="form_edit_contact" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="edit_contact" />
        <table class="main_table">
            <tr>
                <td><b>提示词</b></td>
                <td><b>内容</b></td>
                <td><b>操作</b></td>
            </tr>
            {foreach from=$contact name=contact item=item}
            <tr>
                <td><input name="cue[]" type="text" class="text" maxlength="50" value="{$item.cue}" /></td>
                <td><input name="content[]" type="text" class="text" maxlength="150" value="{$item.content}" /></td>
                <td><input name="id[]" type="hidden" value="{$item.id}" /><span class="red" onClick="del('config|{$item.id}')">[删除]</span></td>
            </tr>
            {/foreach}
            <tr>
                <td colspan="3">
                    <div class="bt_row">
                        <input class="button" type="button" onClick="do_submit('form_edit_contact',0)" value="修改" />
                        <input class="button" type="button" onClick="show_box('add_contact',350,150)" value="添加" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_contact">
    <div class="head">
        <div class="title">添加联系方式</div>
        <div class="close" onclick="hide_box('add_contact')">关闭</div>
    </div>
    <form id="form_add_contact" method="post" action="?/deal/dir-basic/" target="deal">
        <input name="cmd" type="hidden" value="add_contact" />
        <table class="box_table">
            <tr>
                <td>提示词：</td>
                <td><input name="cue" type="text" class="text" maxlength="50" /></td>
            </tr>
            <tr>
                <td>内容：</td>
                <td><input name="content" type="text" class="text" maxlength="150" /></td>
            </tr>
            <tr>
            	<td colspan="2">
                    <div class="bt_row">
                        <input class="button" type="button" onclick="do_submit('form_add_contact',1)" value="提交" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<!-------------------------- END BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}