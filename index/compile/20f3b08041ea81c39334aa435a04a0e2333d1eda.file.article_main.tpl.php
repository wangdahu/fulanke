<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:30:53
         compiled from "templates/default/index\module\article_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895651d13e3d669ea9-10116353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f3b08041ea81c39334aa435a04a0e2333d1eda' => 
    array (
      0 => 'templates/default/index\\module\\article_main.tpl',
      1 => 1370974018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895651d13e3d669ea9-10116353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sheet' => 0,
    'article' => 0,
    'S_URL_PREFIX' => 0,
    'item' => 0,
    'S_URL_SUFFIX' => 0,
    'lang' => 0,
    'cat' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13e3d87757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13e3d87757')) {function content_51d13e3d87757($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
    <div class="art_sheet list">
        <ul class="main">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <?php if (!$_smarty_tpl->tpl_vars['article']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
    </div>
    <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable(('product/cat-').($_smarty_tpl->tpl_vars['cat']->value), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <div id="article">
        <div class="title">
        	<h3><?php echo $_smarty_tpl->tpl_vars['article']->value['art_title'];?>
</h3>
        </div>
        <div class="message">
        	<?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
：<?php echo $_smarty_tpl->tpl_vars['article']->value['art_author'];?>
&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_time'];?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['art_add_time'],"%Y-%m-%d %H:%M:%S");?>

        </div>
        <div class="main">
        	<?php echo $_smarty_tpl->tpl_vars['article']->value['art_text'];?>

        </div>
		<div class="share"><?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>
</div>
        <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('article', null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
<?php }?>
<!-- 红头船 -->
<?php }} ?>