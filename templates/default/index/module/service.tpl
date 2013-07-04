<div id="service">
    <div id="service_img" onmousemove="show_service(143)"></div>
    <div class="main" onmouseout="show_service(33)">
        <div class="in">
        	{$service_code}
        </div>
    </div>
</div>
{literal}
<script language="javascript">
	function show_service(width)
	{
		document.getElementById("service").style.width = width + "px";
	}
</script>
{/literal}
<!-- 红头船 -->