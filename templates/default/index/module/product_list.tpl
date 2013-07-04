{foreach from=$best_pro_cat name=best_pro_cat item=cat}
<div class="box2 img_list">
    <div class="head">
        <span>{$cat.cat_name}</span>
        <a class="more" href="{$S_URL_PREFIX}product/cat-{$cat.cat_id}/{$S_URL_SUFFIX}">{$lang.more}</a>
    </div>
    <div class="main">
		<div class="clear"></div>
        {foreach from=$product_list[$cat.cat_id] name=product_list item=item}
        <div class="unit"><div class="in">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td class="img">
                    	<a href="{$S_URL_PREFIX}product/id-{$item.pro_id}/{$S_URL_SUFFIX}" target="_blank"><img src="{$S_ROOT}{$item.pro_reduce_img}" alt="{$item.pro_title}" onload="picresize(this,150,150)"/></a>
                    </td>
                </tr>
                <tr>
                    <td class="title">
                    	<a href="{$S_URL_PREFIX}product/id-{$item.pro_id}/{$S_URL_SUFFIX}" title="{$item.pro_title}" target="_blank">{$item.short_title}</a>
                    </td>
                </tr>
            </table>
        </div></div>
        {/foreach}
        <div class="clear"></div>
    </div>
</div>
{/foreach}
<!-- 红头船 -->
