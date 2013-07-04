<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1759351d13a5705e040-45804245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f306ed910e278ca5c76822e7ad23a0d92148d91' => 
    array (
      0 => 'templates/default/index\\module\\about.tpl',
      1 => 1369374492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759351d13a5705e040-45804245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'about' => 0,
    'lang' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a5711933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a5711933')) {function content_51d13a5711933($_smarty_tpl) {?><div class="box2" id="about">
    <div class="head">
        <span><?php if ($_smarty_tpl->tpl_vars['about']->value){?><?php echo $_smarty_tpl->tpl_vars['about']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_us'];?>
<?php }?></span>
        <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
about/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
    </div>
    <div class="main">
        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/about.jpg" /></div>
        <?php if ($_smarty_tpl->tpl_vars['about']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['about']->value['text'];?>

            <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
about/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['lang']->value['detailed'];?>
】</a>
        <?php }?>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>