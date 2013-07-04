<div class="box" id="result">
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
