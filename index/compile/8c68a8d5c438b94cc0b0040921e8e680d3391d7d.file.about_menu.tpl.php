<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:30:49
         compiled from "templates/default/index\module\about_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406451d13e39a54a29-71009293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c68a8d5c438b94cc0b0040921e8e680d3391d7d' => 
    array (
      0 => 'templates/default/index\\module\\about_menu.tpl',
      1 => 1369374546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406451d13e39a54a29-71009293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13e39ac2f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13e39ac2f4')) {function content_51d13e39ac2f4($_smarty_tpl) {?><div class="box tree">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['about_menu'];?>
</span></div>
    <div class="main">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="cat1"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></div>
        <?php } ?>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>