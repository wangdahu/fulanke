<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:17:42
         compiled from "templates/default/index\module\product_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910851d13b260180d1-28702992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '317e92c9ca3f5076a965722969ef3965cdadb224' => 
    array (
      0 => 'templates/default/index\\module\\product_main.tpl',
      1 => 1371096912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910851d13b260180d1-28702992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sheet' => 0,
    'product' => 0,
    'S_URL_PREFIX' => 0,
    'item' => 0,
    'S_URL_SUFFIX' => 0,
    'S_ROOT' => 0,
    'lang' => 0,
    'cat' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13b262adbe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13b262adbe')) {function content_51d13b262adbe($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
    <div class="img_sheet">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
        <?php if (!$_smarty_tpl->tpl_vars['product']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
		<div class="clear"></div>
    </div>
    <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable(('product/cat-').($_smarty_tpl->tpl_vars['cat']->value), null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <div id="picture">
        <div class="img">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value['pro_img'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['pro_title'];?>
"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['product_attribute'];?>
</div>
        <div class="attribute">
        <table cellspacing="0" cellpadding="3">
            <tr>
                <td width="70px"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['product_name'];?>
：</span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['pro_title'];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
user/mod-add_booking/pro_id-<?php echo $_smarty_tpl->tpl_vars['product']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['lang']->value['order_now'];?>
】</a></td>
            </tr>
            <tr>
                <td><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['product_number'];?>
：</span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['pro_number'];?>
</td>
            </tr>
            <tr>
                <td><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['product_price'];?>
：</span></td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['pro_price'];?>
</td>
            </tr>
        </table>
        </div>
        <div class="head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['product_text'];?>
</div>
        <div class="txt"><?php echo $_smarty_tpl->tpl_vars['product']->value['pro_text'];?>
</div>
		<div class="share"><?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>
</div>
        <?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('product', null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
<?php }?>
<!-- 红头船 -->
<?php }} ?>