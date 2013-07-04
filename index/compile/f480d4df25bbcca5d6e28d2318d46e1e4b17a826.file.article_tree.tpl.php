<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:30:53
         compiled from "templates/default/index\module\article_tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2489551d13e3d540a34-01437348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f480d4df25bbcca5d6e28d2318d46e1e4b17a826' => 
    array (
      0 => 'templates/default/index\\module\\article_tree.tpl',
      1 => 1369374856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2489551d13e3d540a34-01437348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'art_tree' => 0,
    'item' => 0,
    'grade' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13e3d62e32',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13e3d62e32')) {function content_51d13e3d62e32($_smarty_tpl) {?><div class="box tree">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['art_tree'];?>
</span></div>
    <div class="main">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_tree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['grade']==1){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(1, null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['item']->value['grade']==2){?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(2, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['grade'] = new Smarty_variable(3, null, 0);?><?php }?>
        <div class="cat<?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/cat-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></div>
        <?php } ?>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>