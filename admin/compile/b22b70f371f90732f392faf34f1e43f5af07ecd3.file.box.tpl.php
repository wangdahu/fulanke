<?php /* Smarty version Smarty-3.1.3, created on 2013-07-01 16:14:58
         compiled from "templates/default/admin\module\box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2305151d13a824f36c2-20885937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b22b70f371f90732f392faf34f1e43f5af07ecd3' => 
    array (
      0 => 'templates/default/admin\\module\\box.tpl',
      1 => 1371085102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305151d13a824f36c2-20885937',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_51d13a825380c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d13a825380c')) {function content_51d13a825380c($_smarty_tpl) {?><div class="box" id="result">
    <div class="close" onclick="hide_box('result')">关闭</div>
    <div class="main" id="result_main">执行完毕</div>
</div>
<div class="box" id="del">
    <div class="close" onclick="hide_box('del')">关闭</div>
    <div class="main">您确定要删除该信息吗？
        <div class="bt_row">
        <form id="form_del" method="post" action="?/deal/" target="deal">
            <input name="cmd" type="hidden" value="del_record" />
            <input name="table" type="hidden" value="" />
            <input name="id" type="hidden" value="" />
            <input class="button" type="button" onclick="do_submit('form_del',1)" value="确定" />
            <input class="button" type="button" onclick="hide_box('del')" value="取消" />
		</form>
        </div>
    </div>
</div>
<div class="box" id="no_change_lang">
    <div class="close" onclick="hide_box('no_change_lang')">关闭</div>
    <div class="main">当前页面不能切换语言</div>
</div>
<?php }} ?>