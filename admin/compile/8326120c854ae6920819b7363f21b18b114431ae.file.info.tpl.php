<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:56
         compiled from "templates/default/admin\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1995151d13a801a88d5-28624264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8326120c854ae6920819b7363f21b18b114431ae' => 
    array (
      0 => 'templates/default/admin\\info.tpl',
      1 => 1369373430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1995151d13a801a88d5-28624264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'info_text' => 0,
    'link_href' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a802d4e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a802d4e5')) {function content_51d13a802d4e5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
</head>
<body>
<div>
    <script language="javascript">
		alert("<?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
");
		document.location.href = "<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
";
    </script>
</div>
</body>
</html>
<?php }} ?>