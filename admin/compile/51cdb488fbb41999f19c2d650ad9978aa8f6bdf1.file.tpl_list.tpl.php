<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:50:38
         compiled from "templates/default/admin\module\file\tpl_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2170251d142de3dedf7-52871971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51cdb488fbb41999f19c2d650ad9978aa8f6bdf1' => 
    array (
      0 => 'templates/default/admin\\module\\file\\tpl_list.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2170251d142de3dedf7-52871971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tpl' => 0,
    'item' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d142de8466c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d142de8466c')) {function content_51d142de8466c($_smarty_tpl) {?><div class="here">选择模板</div>
<div class="block sheet">
  <table class="main_table">
    <tr>
      <td><b>模板预览</b></td>
      <td width="100px"><b>模板名称</b></td>
      <td><b>模板说明</b></td>
      <td width="150px"><b>操作</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tpl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
      <td class="img">
        <div class="unit">
          <table cellspacing="0" cellpadding="0">
            <tr><td>
              <img src="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/images/this.jpg" onload="picresize(this,50,50)"/>
            </td></tr>
          </table>
        </div>
      </td>
      <td><a href="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/images/this.jpg"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></td>
      <td class="content" style="text-align:left;">
        <?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>

        <a href="templates/<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
/readme.txt">[阅读原文]</a>
      </td>
      <td>
        <?php if ($_smarty_tpl->tpl_vars['S_TPL_PATH']->value!=(('templates/').($_smarty_tpl->tpl_vars['item']->value['name'])).('/')){?>
          <a onClick="select_tpl('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
')">[使用该模板]</a>
        <?php }else{ ?>
          <span class="red">[当前模板]</span>
        <?php }?>
      </td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="30" height="30px"></td>
    </tr>
  </table>
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="select_tpl">
  <div class="close" onclick="hide_box('select_tpl')">关闭</div>
  <div class="main">您确定使用该模板吗？
    <div class="bt_row">
      <form id="form_select_tpl" method="post" action="?/deal/dir-file/" target="deal">
	    <input name="cmd" type="hidden" value="select_tpl" />
        <input name="tpl" type="hidden" value="" />
        <input class="button" type="button" onclick="do_submit('form_select_tpl',1)" value="确定" />
        <input class="button" type="button" onclick="hide_box('select_tpl')" value="取消" />
      </form>
    </div>
  </div>
</div>
<!-------------------------- BOX -------------------------->

<script language="javascript">
	get_result(0);
	function select_tpl(val)
	{
		document.getElementById("form_select_tpl").tpl.value = val;
		show_box("select_tpl",300,125);
	}
</script>
<?php }} ?>