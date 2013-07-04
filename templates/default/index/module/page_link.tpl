<div class="page_link"><div class="in">
    <span>{$lang.all}{$page_sum}{$lang.pages}</span>
    <span>{$lang.no}{$page}{$lang.page}</span>
    {if $page_sum != 1}
    <a href="{$S_URL_PREFIX}{$link_page}/page-1/{$S_URL_SUFFIX}">{$lang.first_page}</a>
    {if $page-1 > 0}<a href="{$S_URL_PREFIX}{$link_page}/page-{$page-1}/{$S_URL_SUFFIX}">{$lang.previous_page}</a>{/if}
    {if $page-4 > 0}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page-4}/{$S_URL_SUFFIX}">【{$page-4}】</a>{/if}
    {if $page-3 > 0}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page-3}/{$S_URL_SUFFIX}">【{$page-3}】</a>{/if}
    {if $page-2 > 0}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page-2}/{$S_URL_SUFFIX}">【{$page-2}】</a>{/if}
    {if $page-1 > 0}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page-1}/{$S_URL_SUFFIX}">【{$page-1}】</a>{/if}
    <a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page}/{$S_URL_SUFFIX}" style="color:#2874c2;">【{$page}】</a>
    {if $page+1 <= $page_sum}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page+1}/{$S_URL_SUFFIX}">【{$page+1}】</a>{/if}
    {if $page+2 <= $page_sum}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page+2}/{$S_URL_SUFFIX}">【{$page+2}】</a>{/if}
    {if $page+3 <= $page_sum}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page+3}/{$S_URL_SUFFIX}">【{$page+3}】</a>{/if}
    {if $page+4 <= $page_sum}<a class="num" href="{$S_URL_PREFIX}{$link_page}/page-{$page+4}/{$S_URL_SUFFIX}">【{$page+4}】</a>{/if}
    {if $page+1 <= $page_sum}<a href="{$S_URL_PREFIX}{$link_page}/page-{$page+1}/{$S_URL_SUFFIX}">{$lang.next_page}</a>{/if}
    <a href="{$S_URL_PREFIX}{$link_page}/page-{$page_sum}/{$S_URL_SUFFIX}">{$lang.last_page}</a>
    {/if}
    <form id="form_jump" action="" method="get">
        <input class="text" type="text" name="page" value="{$page}" />
        <input class="bt" type="button" onclick="page_jump()" value="{$lang.jump}"/>
    </form>
</div></div>
{literal}
<script language="javascript">
	function page_jump()
	{
		var val = document.getElementById("form_jump").page.value;
		document.location.href = "{$S_URL_PREFIX}{$link_page}/page-" + val + "/{$S_URL_SUFFIX}";
	}
</script>
{/literal}