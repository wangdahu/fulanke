<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:58
         compiled from "templates/default/admin\module\right.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1788251d13a823fff93-04841458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be951c76ac71fedb789ddf1fcf9db36e49aaea68' => 
    array (
      0 => 'templates/default/admin\\module\\right.tpl',
      1 => 1369942874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1788251d13a823fff93-04841458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'check_power' => 0,
    'url_page' => 0,
    'mod' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a824cbc1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a824cbc1')) {function content_51d13a824cbc1($_smarty_tpl) {?><div id="right">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    	<td colspan="2" style="height:53px;"></td>
    </tr>
    <tr>
        <td style="width:183px;"></td>
        <td>
            <div id="main">
			<?php if ($_smarty_tpl->tpl_vars['check_power']->value){?>
                <?php echo $_smarty_tpl->getSubTemplate ('module/box.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <?php $_smarty_tpl->tpl_vars['file'] = new Smarty_variable((((('module/').($_smarty_tpl->tpl_vars['url_page']->value)).('/')).($_smarty_tpl->tpl_vars['mod']->value)).('.tpl'), null, 0);?>
                <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }else{ ?>
				<div class="here">系统信息</div>
				<div class="block">
					<div class="no_power">
						对不起，您的权限不足，无法操作当前页面
					</div>
				</div>
			<?php }?>
            </div>
        </td>
    </tr>
</table>
</div>
<?php }} ?>