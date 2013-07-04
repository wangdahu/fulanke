<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name ="keywords" content="{$keywords}">
    <meta name ="description" content="{$describe}">
    <title>{$channel_title} - {$site_title}</title>
    <link href="{$S_TPL_PATH}index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{$S_TPL_PATH}js/index.js"></script>
    <!--[if IE 6]>
    <script type="text/javascript" src="{$S_TPL_PATH}js/DD_belatedPNG_0.0.8a.js"></script>
    <script type="text/javascript">
    	DD_belatedPNG.fix("*");
    </script>
    <![endif]-->
</head>
<body>
    {*include file="module/header.tpl"*}
    {*include file="module/focus.tpl"*}
	<div id="main">
	{if $show_info != 1}
		{if $show_mod == 'register'}
		{include file="module/user/register.tpl"}
			{elseif $show_mod == 'user_center'}
			<div id="left">
			{include file="module/user/menu.tpl"}
			</div>
			<div id="right">
				{$file = 'module/user/'|cat:$mod|cat:'.tpl'}
				{include file=$file}
			</div>
			<div class="clear"></div>
			{else}
		{include file="module/user/login.tpl"}
		{/if}
	{else}
		<div class="box2 box3" id="info">
			<div class="head"><span>{$lang.system_info}</span></div>
			<div class="main">
				<div>{$info_text}</div>
				<a href="{$link_href}">{$link_text}</a>
			</div>
		</div>
		<script language="javascript">
			interval = setInterval("document.location.href = '{$link_href}'",3000);
		</script>
	{/if}
	</div>
    {*include file="module/footer.tpl"*}
    {*include file="module/service.tpl"*}
</body>
</html>