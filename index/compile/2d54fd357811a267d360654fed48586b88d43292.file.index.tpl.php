<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:30:45
         compiled from "templates/default/index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80651d13a56685e04-30010093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d54fd357811a267d360654fed48586b88d43292' => 
    array (
      0 => 'templates/default/index\\index.tpl',
      1 => 1372667372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80651d13a56685e04-30010093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56834a2',
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56834a2')) {function content_51d13a56834a2($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name ="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
">
    <meta name ="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
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
            <?php echo $_smarty_tpl->getSubTemplate ("module/notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("module/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        <div id="right">
            <?php echo $_smarty_tpl->getSubTemplate ("module/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/best_product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/product_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("module/article_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("module/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>