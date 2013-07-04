<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:57
         compiled from "templates/default/admin\module\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1254051d13a81e91fc6-27511385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d57468a0a713896710ae4b4d14f3382108d0eaa' => 
    array (
      0 => 'templates/default/admin\\module\\header.tpl',
      1 => 1371085018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1254051d13a81e91fc6-27511385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_URL_SUFFIX' => 0,
    'S_MULTILINGUAL' => 0,
    'lang_pack' => 0,
    'S_LANG' => 0,
    'item' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a820e742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a820e742')) {function content_51d13a820e742($_smarty_tpl) {?><div id="header">
    <ul id="nav">
        <li><a href="?/basic/mod-basic_info/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">基本设置</a></li>
        <li><a href="?/product/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">产品管理</a></li>
        <li><a href="?/article/mod-sheet/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">文章管理</a></li>
        <li><a href="?/service/mod-user_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">用户互动</a></li>
        <li><a href="?/file/mod-tpl_list/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">文件管理</a></li>
    </ul>
    <div class="link">
        <a href="./" target="_blank">网站首页</a>
        <a href="?/out/">退出系统</a>
    </div>
	<?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>
	<div class="lang">
		当前语言：
        <select onchange="change_lang(this.value)">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<option <?php if ($_smarty_tpl->tpl_vars['S_LANG']->value==$_smarty_tpl->tpl_vars['item']->value['pack_name']){?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['admin_entrance'];?>
<?php if ($_smarty_tpl->tpl_vars['url']->value){?>?<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['chinese_name'];?>
</option>
			<?php } ?>
		</select>
	</div>
	<?php }?>
</div><?php }} ?>