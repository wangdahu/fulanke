<?php /* Smarty version Smarty-3.1.3, created on 2013-07-04 09:52:20
         compiled from "templates/default/admin\module\service\booking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1725751d4d5547a02f2-68619094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e45edf3e2652c35148ae1c75c1f3166e19d78658' => 
    array (
      0 => 'templates/default/admin\\module\\service\\booking.tpl',
      1 => 1370968569,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1725751d4d5547a02f2-68619094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'booking' => 0,
    'item' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d4d5549a4ec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d4d5549a4ec')) {function content_51d4d5549a4ec($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\xampp\htdocs\fulanke\smarty\plugins\modifier.date_format.php';
?><div class="here">产品订购列表</div>
<div class="block sheet">
    <table class="main_table">
        <tr>
			<td width="100px"><b>用户名</b></td>
            <td><b>产品名称</b></td>
            <td width="80px"><b>订购数量</b></td>
            <td width="150px"><b>订购时间</b></td>
            <td width="120px"><b>操作</b></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['booking']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
			<td><a href="?/service/mod-user_edit/id-<?php echo $_smarty_tpl->tpl_vars['item']->value['boo_user_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user_name'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['pro_title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['boo_number'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['boo_add_time'],"%Y-%m-%d %H:%M:%S");?>
</td>
            <td>
				<a class="booking" href="?/service/mod-booking_info/pro_id-<?php echo $_smarty_tpl->tpl_vars['item']->value['boo_pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[查看详情]</a>
				<a onclick="del('booking|<?php echo $_smarty_tpl->tpl_vars['item']->value['boo_id'];?>
')">[删除]</a>
			</td>
        </tr>
        <?php } ?>
    </table>
	<?php $_smarty_tpl->tpl_vars['link_page'] = new Smarty_variable('service/mod-booking', null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<iframe id="deal" name="deal"></iframe>

<script language="javascript">
	get_result(0);
</script>
<?php }} ?>