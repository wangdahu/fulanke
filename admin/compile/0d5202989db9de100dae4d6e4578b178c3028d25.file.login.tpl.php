<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:50
         compiled from "templates/default/admin\module\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320151d13a7a298f39-96789869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d5202989db9de100dae4d6e4578b178c3028d25' => 
    array (
      0 => 'templates/default/admin\\module\\login.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320151d13a7a298f39-96789869',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a7a330ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a7a330ed')) {function content_51d13a7a330ed($_smarty_tpl) {?><div id="login">
    <form method="post" action="?/info/">
        <input name="cmd" type="hidden" value="admin_login" />
        <table cellspacing="1" cellpadding="0">
            <tr>
                <td class="c title" colspan="2">红头船企业网站系统后台登录</td>
            </tr>
            <tr>
                <td class="l">用户名：</td>
                <td class="r"><input class="text" name="username" type="text" /></td>
            </tr>
            <tr>
                <td class="l">密码：</td>
                <td class="r"><input class="text" name="password" type="password" /></td>
            </tr>
            <tr>
                <td class="c bt_row" colspan="2"><input class="button" type="submit" value="登录" /></td>
            </tr>
        </table>
    </form>
</div><?php }} ?>