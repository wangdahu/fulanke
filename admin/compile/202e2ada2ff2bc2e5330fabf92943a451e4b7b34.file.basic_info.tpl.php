<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:58
         compiled from "templates/default/admin\module\basic\basic_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2480851d13a82564b81-17477920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '202e2ada2ff2bc2e5330fabf92943a451e4b7b34' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\basic_info.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2480851d13a82564b81-17477920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'root_dir' => 0,
    'now' => 0,
    'user_ip' => 0,
    'http_user_agent' => 0,
    'server_name' => 0,
    'server_addr' => 0,
    'server_port' => 0,
    'server_software' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a82694a6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a82694a6')) {function content_51d13a82694a6($_smarty_tpl) {?><div class="here">基本信息</div>
<div class="block">
  <table class="main_table">
    <tr>
      <td>当前版本：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</td>
      <td>最新版本：</td>
      <td width="50%"><div id="ver"><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</div></td>
    </tr>
    <tr>
      <td>网站目录：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['root_dir']->value;?>
</td>
      <td>服务器时间：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['now']->value;?>
</td>
    </tr>
    <tr>
      <td>用户IP：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user_ip']->value;?>
</td>
      <td>浏览器类型：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['http_user_agent']->value;?>
</td>
    </tr>
    <tr>
      <td>服务器名：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['server_name']->value;?>
</td>
      <td>服务器IP：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['server_addr']->value;?>
</td>
    </tr>
    <tr>
      <td>服务器端口：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['server_port']->value;?>
</td>
      <td>服务器版本：</td>
      <td><?php echo $_smarty_tpl->tpl_vars['server_software']->value;?>
</td>
    </tr>
  </table>
</div>
<div class="here">使用帮助</div>
<div class="block">
  <table class="main_table">
    <tr>
      <td><a href="http://www.rhscms.com/" target="_blank">官方网站</a></td>
      <td><a href="?/basic/mod-admin_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">修改密码</a></td>
      <td><a href="?/service/mod-message/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">留言管理</a></td>
      <td><a href="?/file/mod-pic_set/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">图片管理</a></td>
    </tr>
  </table>
</div>

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
<?php }} ?>