<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:29:20
         compiled from "templates/default/admin\module\basic\show_set.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2817851d13de0e8b3a3-11457151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5103b82063e5c3e68f23d4249c69d2410a0157' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\show_set.tpl',
      1 => 1369923209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817851d13de0e8b3a3-11457151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13de11962d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13de11962d')) {function content_51d13de11962d($_smarty_tpl) {?><div class="here">模块启闭</div>
<div class="block">
  <table class="main_table">
    <tr>
      <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['show']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['show']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
      <td width="15%"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
：</td>
      <td width="35%">
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
-1" <?php echo $_smarty_tpl->tpl_vars['item']->value['yes'];?>
 onclick="edit_show(this.id)" />开启
        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
-0" <?php echo $_smarty_tpl->tpl_vars['item']->value['no'];?>
 onclick="edit_show(this.id)" />关闭
      </td>
      <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['show']['index']%2==1){?></tr><tr><?php }?>
      <?php } ?>
      <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['show']['last']%2==0){?>
      <td width="15%">&nbsp;</td>
      <td width="35%">&nbsp;</td>
      <?php }?>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>

<script language="javascript">
	function edit_show(id)
	{
		ajax("post","?/deal/dir-basic/","cmd=edit_show&id="+id,
		function(data)
		{
			if(data == 1) result();
		});
	}
</script>
<?php }} ?>