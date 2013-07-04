<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:17:41
         compiled from "templates/default/index\module\here.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304751d13b25dc9280-22767786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7366ef5db7aa0465d00ce22750870ffd89e31461' => 
    array (
      0 => 'templates/default/index\\module\\here.tpl',
      1 => 1369375273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304751d13b25dc9280-22767786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel_title' => 0,
    'lang' => 0,
    'S_TPL_PATH' => 0,
    'S_URL_PREFIX' => 0,
    'url_page' => 0,
    'S_URL_SUFFIX' => 0,
    'cat_name' => 0,
    'cat_id' => 0,
    'page_title' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13b25f32b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13b25f32b8')) {function content_51d13b25f32b8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.truncate.php';
?><div class="here">
    <span><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</span>
    <div class="link">
        <a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.jpg" /><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.jpg" /><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
/cat-<?php echo $_smarty_tpl->tpl_vars['cat_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.jpg" /><a href="?<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,20);?>
</a><?php }?>
    </div>
</div>
<!-- 红头船 --><?php }} ?>