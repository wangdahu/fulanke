<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\best_product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073451d13a57166da2-47330636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c091927d82b6add9864de9fca93194974eee618' => 
    array (
      0 => 'templates/default/index\\module\\best_product.tpl',
      1 => 1371168009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073451d13a57166da2-47330636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
    'best_product' => 0,
    'item' => 0,
    'S_ROOT' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a572afdc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a572afdc')) {function content_51d13a572afdc($_smarty_tpl) {?><div class="box2" id="best_pro">
    <div class="head">
        <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['best_product'];?>
</span>
        <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
product/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
    </div>
    <div class="main">
        <!-------------------------->
        <div id="roll">
            <div id="roll_sheet" onmouseover="over_roll()" onmouseout="out_roll()">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <div name="roll_unit">
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
                </div>
                <?php } ?>
            </div>
        </div>
        <!-------------------------->
    </div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
js/roll.js"></script>
<!-- 红头船 -->
<?php }} ?>