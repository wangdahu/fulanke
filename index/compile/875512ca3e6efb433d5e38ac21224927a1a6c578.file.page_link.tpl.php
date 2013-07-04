<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:17:42
         compiled from "templates/default/index\module\page_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2822151d13b262d3278-84208084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875512ca3e6efb433d5e38ac21224927a1a6c578' => 
    array (
      0 => 'templates/default/index\\module\\page_link.tpl',
      1 => 1371167169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2822151d13b262d3278-84208084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'page_sum' => 0,
    'page' => 0,
    'S_URL_PREFIX' => 0,
    'link_page' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13b267c7b2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13b267c7b2')) {function content_51d13b267c7b2($_smarty_tpl) {?><div class="page_link"><div class="in">
    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['all'];?>
<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</span>
    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['page'];?>
</span>
    <?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-1/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['first_page'];?>
</a>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['previous_page'];?>
</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
】</a><?php }?>
    <a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" style="color:#2874c2;">【<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
】</a>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
】</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['next_page'];?>
</a><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['S_URL_PREFIX']->value;?>
<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_page'];?>
</a>
    <?php }?>
    <form id="form_jump" action="" method="get">
        <input class="text" type="text" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
        <input class="bt" type="button" onclick="page_jump()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['jump'];?>
"/>
    </form>
</div></div>

<script language="javascript">
	function page_jump()
	{
		var val = document.getElementById("form_jump").page.value;
		document.location.href = "{$S_URL_PREFIX}{$link_page}/page-" + val + "/{$S_URL_SUFFIX}";
	}
</script>
<?php }} ?>