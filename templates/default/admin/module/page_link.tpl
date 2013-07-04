<div class="page_link"><div class="in">
  <span>共{$page_sum}页</span>
  <span>第{$page}页</span>
  {if $page_sum != 1}
    <a href="?/{$link_page}/page-1/{$S_URL_SUFFIX}">首页</a>
    {if $page-1 > 0}<a href="?/{$link_page}/page-{$page-1}/{$S_URL_SUFFIX}">上一页</a>{/if}
    {if $page-4 > 0}<a href="?/{$link_page}/page-{$page-4}/{$S_URL_SUFFIX}">[{$page-4}]</a>{/if}
    {if $page-3 > 0}<a href="?/{$link_page}/page-{$page-3}/{$S_URL_SUFFIX}">[{$page-3}]</a>{/if}
    {if $page-2 > 0}<a href="?/{$link_page}/page-{$page-2}/{$S_URL_SUFFIX}">[{$page-2}]</a>{/if}
    {if $page-1 > 0}<a href="?/{$link_page}/page-{$page-1}/{$S_URL_SUFFIX}">[{$page-1}]</a>{/if}
    <a href="?/{$link_page}/page-{$page}/{$S_URL_SUFFIX}" style="color:#C00;font-weight:bold;">[{$page}]</a>
    {if $page+1 <= $page_sum}<a href="?/{$link_page}/page-{$page+1}/{$S_URL_SUFFIX}">[{$page+1}]</a>{/if}
    {if $page+2 <= $page_sum}<a href="?/{$link_page}/page-{$page+2}/{$S_URL_SUFFIX}">[{$page+2}]</a>{/if}
    {if $page+3 <= $page_sum}<a href="?/{$link_page}/page-{$page+3}/{$S_URL_SUFFIX}">[{$page+3}]</a>{/if}
    {if $page+4 <= $page_sum}<a href="?/{$link_page}/page-{$page+4}/{$S_URL_SUFFIX}">[{$page+4}]</a>{/if}
    {if $page+1 <= $page_sum}<a href="?/{$link_page}/page-{$page+1}/{$S_URL_SUFFIX}">下一页</a>{/if}
    <a href="?/{$link_page}/page-{$page_sum}/{$S_URL_SUFFIX}">末页</a>
  {/if}
  <form name="form_jump" method="post" action="?/{$link_page}/">
    <input type="text" style="width:30px;" name="page" value="{$page}" />
    <input class="button" type="button" value="跳转" onclick="do_jump()"/>
  </form>
</div></div>

<!-- 红头船 -->