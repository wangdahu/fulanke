<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:14
         compiled from "templates/default/index\module\focus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1563651d13a56b0fd49-55704993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84bdac912b1e2d44ea5bfef0e6f4dd03e7064aa' => 
    array (
      0 => 'templates/default/index\\module\\focus.tpl',
      1 => 1369375119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1563651d13a56b0fd49-55704993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'focus' => 0,
    'S_ROOT' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56ba029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56ba029')) {function content_51d13a56ba029($_smarty_tpl) {?><div id="focus">
    <?php if ($_smarty_tpl->tpl_vars['focus']->value){?>
    <div id="focus_bg"></div>
    <div id="focus_show"></div>
    <div id="focus_img">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['focus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['focus']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['focus']['iteration']++;
?>
        <div name="focus_img" id="focus_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['focus']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_path'];?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_url'];?>
|<?php echo $_smarty_tpl->tpl_vars['item']->value['pic_title'];?>
</div>
        <?php } ?>
    </div>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/focus.js"></script>
    <?php }?>
</div>
<!-- 红头船 -->
<?php }} ?>