<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:16:32
         compiled from "templates/default/admin\module\page_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2262551d13ae0839f00-38511764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '467f42174589654729c3e05d55b01b6408928cef' => 
    array (
      0 => 'templates/default/admin\\module\\page_link.tpl',
      1 => 1370490666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2262551d13ae0839f00-38511764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_sum' => 0,
    'page' => 0,
    'link_page' => 0,
    'S_URL_SUFFIX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13ae0db59b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13ae0db59b')) {function content_51d13ae0db59b($_smarty_tpl) {?><div class="page_link"><div class="in">
  <span>共<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
页</span>
  <span>第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</span>
  <?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
    <a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-1/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">首页</a>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">上一页</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
]</a><?php }?>
    <a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
" style="color:#C00;font-weight:bold;">[<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]</a>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
]</a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">下一页</a><?php }?>
    <a href="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/page-<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['S_URL_SUFFIX']->value;?>
">末页</a>
  <?php }?>
  <form name="form_jump" method="post" action="?/<?php echo $_smarty_tpl->tpl_vars['link_page']->value;?>
/">
    <input type="text" style="width:30px;" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
    <input class="button" type="button" value="跳转" onclick="do_jump()"/>
  </form>
</div></div>

<!-- 红头船 --><?php }} ?>