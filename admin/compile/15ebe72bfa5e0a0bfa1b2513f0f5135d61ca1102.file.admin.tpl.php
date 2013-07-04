<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:49
         compiled from "templates/default/admin\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1306451d13a79ef9330-92368211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ebe72bfa5e0a0bfa1b2513f0f5135d61ca1102' => 
    array (
      0 => 'templates/default/admin\\admin.tpl',
      1 => 1369756614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1306451d13a79ef9330-92368211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'show_main' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a7a258c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a7a258c8')) {function content_51d13a7a258c8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
    <link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
admin.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/admin.js"></script>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['show_main']->value){?>
    <?php echo $_smarty_tpl->getSubTemplate ("module/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("module/left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("module/right.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("module/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</body>
</html><?php }} ?>