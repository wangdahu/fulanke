<div class="box2" id="best_pro">
    <div class="head">
        <span>{$lang.best_product}</span>
        <a class="more" href="{$S_URL_PREFIX}product/{$S_URL_SUFFIX}">{$lang.more}</a>
    </div>
    <div class="main">
        <!-------------------------->
        <div id="roll">
            <div id="roll_sheet" onmouseover="over_roll()" onmouseout="out_roll()">
                {foreach from=$best_product name=best_product item=item}
                <div name="roll_unit">
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
                </div>
                {/foreach}
            </div>
        </div>
        <!-------------------------->
    </div>
</div>
<script type="text/javascript" src="{$S_TPL_PATH}js/roll.js"></script>
<!-- 红头船 -->
