<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:14
         compiled from "templates/default/index\module\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179551d13a56e0fec5-61326686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce632d99018811159746f510f6c980cb6db61b9e' => 
    array (
      0 => 'templates/default/index\\module\\contact.tpl',
      1 => 1369374940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179551d13a56e0fec5-61326686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'contact' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56e6e54',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56e6e54')) {function content_51d13a56e6e54($_smarty_tpl) {?><div class="box" id="contact">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['contact'];?>
</span></div>
    <div class="main">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contact']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <span><?php echo $_smarty_tpl->tpl_vars['item']->value['word'];?>
：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<br />
        <?php } ?>
    </div>
</div>
<!-- 红头船 --><?php }} ?>