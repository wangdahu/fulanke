<div class="here">用户管理</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>用户名</b></td>
      <td><b>真实姓名</b></td>
      <td><b>E-mail</b></td>
	  <td><b>QQ</b></td>
	  <td><b>电话</b></td>
	  <td width="120px"><b>操作</b></td>
    </tr>
    {foreach from=$users name=users item=item}
    <tr>
      <td>{$item.use_username}</td>
      <td>{$item.use_real_name}</td>
	  <td>{$item.use_email}</td>
      <td>{$item.use_qq}</td>
	  <td>{$item.use_tel}</td>
	  <td>
		  <a href="?/service/mod-user_edit/id-{$item.use_id}/{$S_URL_SUFFIX}">[编辑]</a>
		  <a onClick="del_user('{$item.use_id}')">[删除]</a>
	  </td>
    </tr>
    {/foreach}
    <tr>
      <td colspan="7">
		  {$link_page = 'service/mod-user_list'}
		  {include file="module/page_link.tpl"}
	  </td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="del_user">
    <div class="close" onclick="hide_box('del_user')">关闭</div>
    <div class="main">您确定要删除该用户吗？
        <div class="bt_row">
        <form id="form_del_user" method="post" action="?/deal/dir-service/" target="deal">
            <input name="cmd" type="hidden" value="del_user" />
            <input name="table" type="hidden" value="users" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del_user',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del_user')" value="取消" />
		</form>
        </div>
    </div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function del_user(val)
	{
		var obj = document.getElementById("form_del_user");
		obj.id.value = val;
		show_box("del_user",300,125);
	}
</script>
{/literal}