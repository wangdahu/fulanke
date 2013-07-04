<div class="here">问卷调查</div>
<div class="block sheet">
  <form id="form_edit_question" method="post" action="?/deal/dir-service/" target="deal">
    <input name="cmd" type="hidden" value="edit_question" />
    <table class="main_table">
      <tr>
        <td><b>问题</b></td>
        <td><b>表单类型</b></td>
        <td><b>答案选项</b></td>
        <td><b>操作</b></td>
      </tr>
      {foreach from=$question name=question item=item}
      <tr>
        <td><input name="question[]" type="text" class="text" maxlength="50" value="{$item.question}" /></td>
        <td>
        <select name="input_type[]" >
          <option value="radio" {if $item.type == 'radio'}selected{/if}>单选框</option>
          <option value="checkbox" {if $item.type == 'checkbox'}selected{/if}>复选框</option>
          <option value="text" {if $item.type == 'text'}selected{/if}>文本框</option>
        </select>
        </td>
        <td><input name="answer[]" type="text" class="text" maxlength="150" value="{$item.answer}" /></td>
        <td><input name="id[]" type="hidden" value="{$item.id}" /><span class="red" onClick="del('varia|{$item.id}')">[删除]</span></td>
      </tr>
      {/foreach}
      <tr>
        <td class="bt_row" colspan="30">
          <input class="button" type="button" onClick="do_submit('form_edit_question',0)" value="修改" />
          <input class="button" type="button" onClick="show_box('add_question',350,175)" value="添加" />
        </td>
      </tr>
    </table>
  </form>
</div>
<div class="here">调查结果</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>访客提交问卷</b></td>
      <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$research name=research item=item}
    <tr>
      <td style="text-align:left;line-height:20px;">
        <div><b>{if $item.user_name}{$item.user_name}{else}匿名用户{/if}</b>&nbsp;{$item.res_add_time|date_format:"%Y-%m-%d %H:%M:%S"}&nbsp;提交问卷：</div>
        <div>{$item.res_text}</div>
      </td>
      <td>
        <a onClick="del('research|{$item.res_id}')">[删除]</a>
      </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="2">
		  {$link_page = 'service/mod-research'}
		  {include file="module/page_link.tpl"}
	  </td>
    </tr>
  </table>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.答案选项之间使用|号隔开，个数不限，例如“答案一|答案二|答案三”。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="add_question">
  <div class="head">
    <div class="title">添加问题</div>
    <div class="close" onclick="hide_box('add_question')">关闭</div>
  </div>
  <form id="form_add_question" method="post" action="?/deal/dir-service/" target="deal">
  	<input name="cmd" type="hidden" value="add_question" />
    <table class="box_table">
      <tr>
        <td>问题：</td>
        <td class="f_l"><input name="question" type="text" class="text" maxlength="50" /></td>
      </tr>
      <tr>
        <td>表单类型：</td>
        <td class="f_l">
        <select name="input_type" >
          <option value="radio">单选框</option>
          <option value="checkbox">复选框</option>
          <option value="text">文本框</option>
        </select>
        </td>
      </tr>
      <tr>
        <td>答案选项：</td>
        <td class="f_l"><input name="answer" type="text" class="text" maxlength="150" /></td>
      </tr>
      <tr>
        <td class="bt_row" colspan="30"><input class="button" type="button" onclick="do_submit('form_add_question',1)" value="提交" /></td>
      </tr>
    </table>
  </form>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
</script>
{/literal}