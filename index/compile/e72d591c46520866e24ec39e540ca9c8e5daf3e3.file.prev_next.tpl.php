<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:17:45
         compiled from "templates/default/index\module\prev_next.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1387451d13b29757eb7-52771224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e72d591c46520866e24ec39e540ca9c8e5daf3e3' => 
    array (
      0 => 'templates/default/index\\module\\prev_next.tpl',
      1 => 1369375773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1387451d13b29757eb7-52771224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'prev_title' => 0,
    'S_URL_PREFIX' => 0,
    'link_page' => 0,
    'prev_id' => 0,
    'S_URL_SUFFIX' => 0,
    'next_title' => 0,
    'next_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13b299764a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13b299764a')) {function content_51d13b299764a($_smarty_tpl) {?><div id="prev_next">
    <div class="prev"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prev'];?>
：<?php if ($_smarty_tpl->tpl_vars['prev_title']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/id-<?php echo $_smarty_tpl->tpl_vars['prev_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['prev_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></div>
    <div class="next"><?php echo $_smarty_tpl->tpl_vars['lang']->value['next'];?>
：<?php if ($_smarty_tpl->tpl_vars['next_title']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/id-<?php echo $_smarty_tpl->tpl_vars['next_id']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['next_title']->value;?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['none'];?>
<?php }?></div>
    <div class="clear"></div>
</div><?php }} ?>