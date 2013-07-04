<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:42
         compiled from "templates/default/admin\module\editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2469251d13aea18e436-01414866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8f9a71c1d7f1fbb1f8141d5965419fe8195a862' => 
    array (
      0 => 'templates/default/admin\\module\\editor.tpl',
      1 => 1369653211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2469251d13aea18e436-01414866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editor_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13aea1bd2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13aea1bd2d')) {function content_51d13aea1bd2d($_smarty_tpl) {?><script type="text/javascript" charset="utf-8" src="ueditor/editor_config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/editor_all.js"></script>
<script id="editor" name="editor" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['editor_text']->value;?>
</script>

<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>

<!-- 红头船 --><?php }} ?>