<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:30:49
         compiled from "templates/default/index\module\about_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1295351d13e39ae97b5-71089793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a458e7207ff462b2efc12d2143c3344539a8c31' => 
    array (
      0 => 'templates/default/index\\module\\about_main.tpl',
      1 => 1369374523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295351d13e39ae97b5-71089793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'channel_title' => 0,
    'lang' => 0,
    'S_TPL_PATH' => 0,
    'S_URL_PREFIX' => 0,
    'url_page' => 0,
    'S_URL_SUFFIX' => 0,
    'url' => 0,
    'about' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13e39bbf4b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13e39bbf4b')) {function content_51d13e39bbf4b($_smarty_tpl) {?><div class="here">
    <span><?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
<?php }?></span>
    <div class="link">
        <a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.jpg" /><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.jpg" /><a href="?<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</a><?php }?>
    </div>
</div>
<div id="about_main">
	<?php echo $_smarty_tpl->tpl_vars['about']->value;?>

</div>
<!-- 红头船 -->
<?php }} ?>