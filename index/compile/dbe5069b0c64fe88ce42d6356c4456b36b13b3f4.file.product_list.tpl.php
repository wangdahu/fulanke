<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:419151d13a572e15e4-51247451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbe5069b0c64fe88ce42d6356c4456b36b13b3f4' => 
    array (
      0 => 'templates/default/index\\module\\product_list.tpl',
      1 => 1371168215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '419151d13a572e15e4-51247451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_pro_cat' => 0,
    'cat' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
    'lang' => 0,
    'product_list' => 0,
    'item' => 0,
    'S_ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a57435ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a57435ea')) {function content_51d13a57435ea($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_pro_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
<div class="box2 img_list">
    <div class="head">
        <span><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</span>
        <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/cat-<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
    </div>
    <div class="main">
		<div class="clear"></div>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <div class="unit"><div class="in">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="img">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_reduce_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_title'];?>
" onload="picresize(this,150,150)"/></a>
                    </td>
                </tr>
                <tr>
                    <td class="title">
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['pro_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
                    </td>
                </tr>
            </table>
        </div></div>
        <?php } ?>
        <div class="clear"></div>
    </div>
</div>
<?php } ?>
<!-- 红头船 -->
<?php }} ?>