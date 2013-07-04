<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{$site_title}</title>
    <link href="{$S_TPL_PATH}admin.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{$S_TPL_PATH}js/admin.js"></script>
</head>
<body>
{if $show_main}
    {include file="module/header.tpl"}
    {include file="module/left.tpl"}
    {include file="module/right.tpl"}
{else}
    {include file="module/login.tpl"}
{/if}
</body>
</html>