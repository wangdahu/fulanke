<div class="box" id="contact">
    <div class="head"><span>{$lang.contact}</span></div>
    <div class="main">
        {foreach from=$contact name=contact item=item}
        <span>{$item.word}：</span>{$item.content}<br />
        {/foreach}
    </div>
</div>
<!-- 红头船 -->