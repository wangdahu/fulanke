<div class="here">基本信息</div>
<div class="block">
  <table class="main_table">
    <tr>
      <td>当前版本：</td>
      <td>{$version}</td>
      <td>最新版本：</td>
      <td width="50%"><div id="ver">{$version}</div></td>
    </tr>
    <tr>
      <td>网站目录：</td>
      <td>{$root_dir}</td>
      <td>服务器时间：</td>
      <td>{$now}</td>
    </tr>
    <tr>
      <td>用户IP：</td>
      <td>{$user_ip}</td>
      <td>浏览器类型：</td>
      <td>{$http_user_agent}</td>
    </tr>
    <tr>
      <td>服务器名：</td>
      <td>{$server_name}</td>
      <td>服务器IP：</td>
      <td>{$server_addr}</td>
    </tr>
    <tr>
      <td>服务器端口：</td>
      <td>{$server_port}</td>
      <td>服务器版本：</td>
      <td>{$server_software}</td>
    </tr>
  </table>
</div>
<div class="here">使用帮助</div>
<div class="block">
  <table class="main_table">
    <tr>
      <td><a href="http://www.rhs{**}cms.com/" target="_blank">官方网站</a></td>
      <td><a href="?/basic/mod-admin_list/{$S_URL_SUFFIX}">修改密码</a></td>
      <td><a href="?/service/mod-message/{$S_URL_SUFFIX}">留言管理</a></td>
      <td><a href="?/file/mod-pic_set/{$S_URL_SUFFIX}">图片管理</a></td>
    </tr>
  </table>
</div>
{literal}
<script language="javascript">
function get_version()
{
	ajax("post","?/deal/","cmd=get_version",
	function(data)
	{
		if(data.substr(0,9) == "njb_send:")
		{
			document.getElementById("ver").innerHTML = data.substr(9);
		}
	});
}
get_version();
</script>
{/literal}