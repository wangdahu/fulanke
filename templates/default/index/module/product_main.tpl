{if $show_sheet == 1}
    <div class="img_sheet">
        {foreach from=$product name=product item=item}
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
        {if !$product}<div class="not_found">{$lang.not_found}</div>{/if}
		<div class="clear"></div>
    </div>
    {$link_page = 'product/cat-'|cat:$cat}
    {include file="module/page_link.tpl"}
{else}
    <div id="picture">
        <div class="img">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <img src="{$S_ROOT}{$product.pro_img}"  alt="{$product.pro_title}"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="head">{$lang.product_attribute}</div>
        <div class="attribute">
        <table cellspacing="0" cellpadding="3">
            <tr>
                <td width="70px"><span>{$lang.product_name}：</span></td>
                <td>{$product.pro_title}<a href="{$S_URL_PREFIX}user/mod-add_booking/pro_id-{$product.pro_id}/{$S_URL_SUFFIX}">【{$lang.order_now}】</a></td>
            </tr>
            <tr>
                <td><span>{$lang.product_number}：</span></td>
                <td>{$product.pro_number}</td>
            </tr>
            <tr>
                <td><span>{$lang.product_price}：</span></td>
                <td>{$product.pro_price}</td>
            </tr>
        </table>
        </div>
        <div class="head">{$lang.product_text}</div>
        <div class="txt">{$product.pro_text}</div>
		<div class="share">{$share_code}</div>
        {$link_page = 'product'}
        {include file="module/prev_next.tpl"}
    </div>
{/if}
<!-- 红头船 -->
