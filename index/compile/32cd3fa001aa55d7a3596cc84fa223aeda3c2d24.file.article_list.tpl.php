<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\article_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682851d13a5745ddf4-38050276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32cd3fa001aa55d7a3596cc84fa223aeda3c2d24' => 
    array (
      0 => 'templates/default/index\\module\\article_list.tpl',
      1 => 1370974047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682851d13a5745ddf4-38050276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_all_art' => 0,
    'best_art_cat' => 0,
    'cat' => 0,
    'S_URL_PREFIX' => 0,
    'S_URL_SUFFIX' => 0,
    'lang' => 0,
    'art_list' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a57758b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a57758b8')) {function content_51d13a57758b8($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['show_all_art']->value!=1){?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_art_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['cat']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['cat']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['cat']->iteration++;
 $_smarty_tpl->tpl_vars['cat']->last = $_smarty_tpl->tpl_vars['cat']->iteration === $_smarty_tpl->tpl_vars['cat']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['best_art_cat']['last'] = $_smarty_tpl->tpl_vars['cat']->last;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==0){?><div><?php }?>
    <div class="box2 list art_list_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2;?>
">
        <div class="head">
            <span><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</span>
            <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/cat-<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
        </div>
        <ul class="main">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value[$_smarty_tpl->tpl_vars['cat']->value['cat_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
                <div class="clear"></div>
            </li>
            <?php } ?>
        </ul>
    </div>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['index']%2==1||$_smarty_tpl->getVariable('smarty')->value['foreach']['best_art_cat']['last']){?><div class="clear"></div></div><?php }?>
    <?php } ?>
<?php }else{ ?>
    <div class="box2 list art_list_all">
        <div class="head">
            <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['article'];?>
</span>
            <a class="more" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['more'];?>
</a>
        </div>
        <ul class="main">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['art_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
article/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['art_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
                <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
                <div class="clear"></div>
            </li>
            <?php } ?>
        </ul>
    </div>
<?php }?>
<!-- 红头船 -->
<?php }} ?>