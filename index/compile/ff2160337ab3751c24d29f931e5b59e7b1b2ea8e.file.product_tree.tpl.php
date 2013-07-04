<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:17:41
         compiled from "templates/default/index\module\product_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2602251d13b25cd48e7-89784272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2160337ab3751c24d29f931e5b59e7b1b2ea8e' => 
    array (
      0 => 'templates/default/index\\module\\product_tree.tpl',
      1 => 1369375817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2602251d13b25cd48e7-89784272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'pro_tree' => 0,
    'item' => 0,
    'grade' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13b25da5f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13b25da5f5')) {function content_51d13b25da5f5($_smarty_tpl) {?><div class="box tree">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['pro_tree'];?>
</span></div>
    <div class="main">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pro_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['item']->value['grade']==2){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(2, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(3, null, 0);?><?php }?>
        <div class="cat<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/cat-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
        <?php } ?>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>