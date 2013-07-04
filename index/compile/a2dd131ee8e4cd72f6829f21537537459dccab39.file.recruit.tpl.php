<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:42:48
         compiled from "templates/default/index\recruit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338151d14108cbb135-92433576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2dd131ee8e4cd72f6829f21537537459dccab39' => 
    array (
      0 => 'templates/default/index\\recruit.tpl',
      1 => 1372667438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338151d14108cbb135-92433576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'channel_title' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d14108e29fb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d14108e29fb')) {function content_51d14108e29fb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name ="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
    <meta name ="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/index.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/DD_belatedPNG_0.0.8a.js"></script>
    <script type="text/javascript">
    	DD_belatedPNG.fix("*");
    </script>
    <![endif]-->
</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ("module/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("module/focus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div id="main">
        <div id="left">
        	<?php echo $_smarty_tpl->getSubTemplate ("module/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div id="right">
            <?php echo $_smarty_tpl->getSubTemplate ("module/here.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/recruit_main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div class="clear"></div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("module/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>