<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:42:48
         compiled from "templates/default/index\module\recruit_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3015451d14108e90cc2-49209830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8136b65ab27a0b761ac4d9c7acbcd75f6245610d' => 
    array (
      0 => 'templates/default/index\\module\\recruit_main.tpl',
      1 => 1369375856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3015451d14108e90cc2-49209830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recruit' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1410903356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1410903356')) {function content_51d1410903356($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><div class="rec_sheet">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recruit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li>
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="title"><div><?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
</div></td>
                    <td class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</td>
                </tr>
                <tr>
                	<td colspan="2" class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['art_text'];?>
</td>
                </tr>
            </table>
        </li>
        <?php } ?>
    </ul>
    <?php if (!$_smarty_tpl->tpl_vars['recruit']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
</div>
<?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('recruit', null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- 红头船 -->
<?php }} ?>