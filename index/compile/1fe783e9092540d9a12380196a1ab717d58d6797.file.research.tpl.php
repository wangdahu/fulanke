<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:42:52
         compiled from "templates/default/index\module\research.tpl" */ ?>
<?php /*%%SmartyHeaderCode:936651d1410cc8fc97-92426517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe783e9092540d9a12380196a1ab717d58d6797' => 
    array (
      0 => 'templates/default/index\\module\\research.tpl',
      1 => 1371066394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '936651d1410cc8fc97-92426517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'research' => 0,
    'S_URL_PREFIX' => 0,
    'sign' => 0,
    'item' => 0,
    'arr' => 0,
    'k' => 0,
    'item2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d1410ce9bad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d1410ce9bad')) {function content_51d1410ce9bad($_smarty_tpl) {?><div class="box" id="research">
    <div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['research'];?>
</span></div>
    <div class="main">
        <?php if ($_smarty_tpl->tpl_vars['research']->value){?>
        <form id="form_research" method="post" action="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
info/">
            <input name="cmd" type="hidden" value="add_research"/>
            <?php $_smarty_tpl->tpl_vars['sign'] = new Smarty_variable('{v}', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable(0, null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['arr'] = new Smarty_variable(explode($_smarty_tpl->tpl_vars['sign']->value,$_smarty_tpl->tpl_vars['item']->value['var_value']), null, 0);?>
            <div class="question"><?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
</div>
            <div>
                <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['arr']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['arr']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['arr']['index']>1){?>
                <?php if ($_smarty_tpl->tpl_vars['arr']->value[1]=='radio'){?><span><input name="res_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
" /><?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
</span>
                <?php }elseif($_smarty_tpl->tpl_vars['arr']->value[1]=='checkbox'){?><span><input name="res_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
" /><?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
</span><?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
                <?php }elseif($_smarty_tpl->tpl_vars['arr']->value[1]=='text'){?><span class="text"><?php echo $_smarty_tpl->tpl_vars['item2']->value;?>
<input name="res_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" type="text" /></span><?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?>
                <?php }?>
                <?php }?>
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['arr']->value[1]=='radio'){?><?php $_smarty_tpl->tpl_vars['k'] = new Smarty_variable($_smarty_tpl->tpl_vars['k']->value+1, null, 0);?><?php }?>
            <?php } ?>
            <div class="bt"><input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" /></div>
        </form>
        <?php }?>
    </div>
</div>
<!-- 红头船 --><?php }} ?>