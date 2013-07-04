<div class="box" id="research">
    <div class="head"><span>{$lang.research}</span></div>
    <div class="main">
        {if $research}
        <form id="form_research" method="post" action="{$S_URL_PREFIX}info/">
            <input name="cmd" type="hidden" value="add_research"/>
            {$sign='{v}'}
            {$k=0}
            {foreach from=$research name=research item=item}
            {$arr=explode($sign,$item.var_value)}
            <div class="question">{$arr[0]}</div>
            <div>
                {foreach from=$arr name=arr item=item2}
                {if $smarty.foreach.arr.index > 1}
                {if $arr[1] == 'radio'}<span><input name="res_{$k}" type="radio" value="{$item2}" />{$item2}</span>
                {elseif $arr[1] == 'checkbox'}<span><input name="res_{$k}" type="checkbox" value="{$item2}" />{$item2}</span>{$k=$k+1}
                {elseif $arr[1] == 'text'}<span class="text">{$item2}<input name="res_{$k}" type="text" /></span>{$k=$k+1}
                {/if}
                {/if}
                {/foreach}
            </div>
            {if $arr[1] == 'radio'}{$k=$k+1}{/if}
            {/foreach}
            <div class="bt"><input class="button" type="submit" value="{$lang.submit}" /></div>
        </form>
        {/if}
    </div>
</div>
<!-- 红头船 -->