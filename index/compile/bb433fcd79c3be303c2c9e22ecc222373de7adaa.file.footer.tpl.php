<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2955751d13a5778d9f3-18936509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb433fcd79c3be303c2c9e22ecc222373de7adaa' => 
    array (
      0 => 'templates/default/index\\module\\footer.tpl',
      1 => 1370819084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2955751d13a5778d9f3-18936509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_nav' => 0,
    'item' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a5787aaf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a5787aaf')) {function content_51d13a5787aaf($_smarty_tpl) {?><div id="footer">
    <div class="nav">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footer_nav']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a>
        <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footer_nav']['last']){?>|<?php }?>
        <?php } ?>
    </div>
    <div class="info">
        Powered by <a href="http://www.rhscms.com/" target="_blank">RHSCMS</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
</a>
        <?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>

    </div>
</div>
<!-- 红头船 -->
<?php }} ?>