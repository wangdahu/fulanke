<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:14
         compiled from "templates/default/index\module\notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1887751d13a56bc5732-24926286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f0514374bb0b691b8c1c307c0194e76c2b9e733' => 
    array (
      0 => 'templates/default/index\\module\\notice.tpl',
      1 => 1369375565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1887751d13a56bc5732-24926286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56bfbba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56bfbba')) {function content_51d13a56bfbba($_smarty_tpl) {?><div class="box" id="notice">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['notice'];?>
</span></div>
    <div class="main">
    	<?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

    </div>
</div>
<!-- 红头船 -->
<?php }} ?>