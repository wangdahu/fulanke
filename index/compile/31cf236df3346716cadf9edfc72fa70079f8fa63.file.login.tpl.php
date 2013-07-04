<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:14
         compiled from "templates/default/index\module\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118651d13a56c1c698-01071026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31cf236df3346716cadf9edfc72fa70079f8fa63' => 
    array (
      0 => 'templates/default/index\\module\\login.tpl',
      1 => 1371098676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118651d13a56c1c698-01071026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_id' => 0,
    'lang' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56debd9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56debd9')) {function content_51d13a56debd9($_smarty_tpl) {?><div class="box" id="login">
    <div class="head"><span><?php if (!$_smarty_tpl->tpl_vars['user_id']->value){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_login'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_center'];?>
<?php }?></span></div>
    <div class="main">
	<?php if (!$_smarty_tpl->tpl_vars['user_id']->value){?>
        <form id="form_user_login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
info/">
            <input name="cmd" type="hidden" value="user_login"/>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['account'];?>
：</td>
                    <td class="r"><input class="text" name="username" type="text" /></td>
                </tr>
                <tr>
                    <td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
：</td>
                    <td class="r"><input class="text" name="password" type="password" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" />&nbsp;&nbsp;
                        <input class="button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['register'];?>
" onclick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-register/'" />
                    </td>
                </tr>
            </table>
        </form>
	<?php }else{ ?>
		<table class="link" cellspacing="0" cellpadding="0">
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-profile/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_info'];?>
</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-message_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_message'];?>
</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-comment_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_comments'];?>
</a></td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-booking_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_booking'];?>
</a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-logout/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['log_out'];?>
</a></td>
			</tr>
		</table>
	<?php }?>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>