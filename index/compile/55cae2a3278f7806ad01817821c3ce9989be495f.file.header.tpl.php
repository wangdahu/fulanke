<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:14
         compiled from "templates/default/index\module\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:701551d13a5685f1f4-15328038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55cae2a3278f7806ad01817821c3ce9989be495f' => 
    array (
      0 => 'templates/default/index\\module\\header.tpl',
      1 => 1371166312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '701551d13a5685f1f4-15328038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_ROOT' => 0,
    'S_MULTILINGUAL' => 0,
    'lang_pack' => 0,
    'item' => 0,
    'url_page' => 0,
    'S_URL_PREFIX' => 0,
    'S_LANG' => 0,
    'lang' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a56aeab0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a56aeab0')) {function content_51d13a56aeab0($_smarty_tpl) {?><div id="header">
    <div class="logo"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
images/logo.jpg" /></a></div>
	<?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>
	<div class="lang">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lang_pack']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lang_pack']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
		<a href="./<?php echo $_smarty_tpl->tpl_vars['item']->value['index_entrance'];?>
<?php if ($_smarty_tpl->tpl_vars['url_page']->value){?>?/<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
/<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['foreign_name'];?>
</a>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['lang_pack']['last']){?>&nbsp;&nbsp;|&nbsp;&nbsp; <?php }?>
	<?php } ?>
	</div>
	<?php }?>
    <div class="search" <?php if ($_smarty_tpl->tpl_vars['S_MULTILINGUAL']->value){?>style="top:40px;"<?php }?>>
        <form id="form_search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
search/">
            <input class="text" name="key" type="text" maxlength="30" />
            <?php if ($_smarty_tpl->tpl_vars['S_LANG']->value=='zh-cn'){?>
            <input class="bt" type="button" onclick="do_search()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
" />
            <?php }else{ ?>
            <input class="bt" type="button" style="width:35px;font-size:10px;font-weight:normal;" onclick="do_search()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
"/>
            <?php }?>
        </form>
    </div>
    <div id="nav">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nav']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nav']['first']){?>class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
            <?php } ?>
            <div class="clear"></div>
        </ul>
    </div>
</div>
<!-- 红头船 -->
<?php }} ?>