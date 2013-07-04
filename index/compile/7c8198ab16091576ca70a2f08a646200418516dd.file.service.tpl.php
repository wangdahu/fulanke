<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:15
         compiled from "templates/default/index\module\service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3252251d13a578be8c3-33216470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c8198ab16091576ca70a2f08a646200418516dd' => 
    array (
      0 => 'templates/default/index\\module\\service.tpl',
      1 => 1371097039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3252251d13a578be8c3-33216470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'service_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a5793d7b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a5793d7b')) {function content_51d13a5793d7b($_smarty_tpl) {?><div id="service">
    <div id="service_img" onmousemove="show_service(143)"></div>
    <div class="main" onmouseout="show_service(33)">
        <div class="in">
        	<?php echo $_smarty_tpl->tpl_vars['service_code']->value;?>

        </div>
    </div>
</div>

<script language="javascript">
	function show_service(width)
	{
		document.getElementById("service").style.width = width + "px";
	}
</script>

<!-- 红头船 --><?php }} ?>