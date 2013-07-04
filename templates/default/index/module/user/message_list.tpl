<div class="box2" id="user_center">
    <div class="head"><span>{$lang.my_message}</span></div>
	<div class="main">
		<div class="mes_sheet">
			<ul>
				{foreach from=$message name=message item=item}
				<li>
					<table cellspacing="0" cellpadding="0">
						<tr>
							<td height="30px"><b>{$item.mes_type}：</b><span>{$item.mes_title}</span>&nbsp;&nbsp;[ {$item.mes_add_time|date_format:"%Y-%m-%d %H:%M:%S"} ]</td>
						</tr>
						<tr>
							<td><div class="txt">{$item.mes_text}</div></td>
						</tr>
						{if $item.mes_reply}
						<tr>
							<td><div class="reply"><span>{$lang.reply}：</span>{$item.mes_reply}</div></td>
						</tr>
						{/if}
					</table>
				</li>
				{/foreach}
			</ul>
			{if !$message}<div class="not_found">{$lang.not_found}</div>{/if}
		</div>
		{$link_page = 'user/mod-message_list'}
		{include file="module/page_link.tpl"}
	</div>
</div>
<!-- 红头船 -->