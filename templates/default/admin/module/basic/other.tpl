<div class="here">多语言版：</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">启用多语言版：</td>
    <td>
	<form id="form_set_multilingual" method="post" action="?/deal/dir-basic/" target="deal">
		<input name="cmd" type="hidden" value="set_multilingual" />
		<input type="radio" name="multilingual" value="1" onClick="do_submit('form_set_multilingual',1)" {if $S_MULTILINGUAL == 1}checked{/if} /> 开启
		<input type="radio" name="multilingual" value="0" onClick="do_submit('form_set_multilingual',1)" {if $S_MULTILINGUAL == 0}checked{/if} /> 关闭
    </form>
	</td>
  </tr>
</table>
</div>
<div class="here">首页公司简介设置</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">是否过滤HTML标签：</td>
    <td>
    <input type="radio" name="filter" onClick="set_config('about_filter',1)" {if $about_filter == 1}checked{/if} />是
    <input type="radio" name="filter" onClick="set_config('about_filter',0)" {if $about_filter == 0}checked{/if} />否
    </td>
  </tr>
  <tr>
    <td>截取字符串长度：</td>
    <td><input type="text" class="text2" onBlur="set_config('about_len',this.value)" value="{$about_len}" /> 个字符</td>
  </tr>
</table>
</div>
<div class="here">列表长度设置</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">首页图片列表长度：</td>
    <td><input type="text" class="text2" onBlur="set_config('index_img_list_len',this.value)" value="{$index_img_list_len}" /> 行</td>
  </tr>
  <tr>
    <td>首页文章列表长度：</td>
    <td><input type="text" class="text2" onBlur="set_config('index_art_list_len',this.value)" value="{$index_art_list_len}" /> 行</td>
  </tr>
  <tr>
    <td>图片页列表长度：</td>
    <td><input type="text" class="text2" onBlur="set_config('img_list_len',this.value)" value="{$img_list_len}" /> 张</td>
  </tr>
  <tr>
    <td>文章页列表长度：</td>
    <td><input type="text" class="text2" onBlur="set_config('art_list_len',this.value)" value="{$art_list_len}" /> 行</td>
  </tr>
</table>
</div>
<div class="here">图片设置</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">缩略图设置：</td>
    <td>
    最大宽度：<input type="text" class="text2" onBlur="set_config('reduce_img_width',this.value)" value="{$reduce_img_width}" /> px &nbsp;&nbsp;
    最大高度：<input type="text" class="text2" onBlur="set_config('reduce_img_height',this.value)" value="{$reduce_img_height}" /> px
    </td>
  </tr>
</table>
</div>
<div class="here">会话方式设置</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">选择会话方式：</td>
    <td>
    <input type="radio" name="session" onClick="set_session_method(1)" {if $S_SESSION == 1}checked{/if} /> SESSION
    <input type="radio" name="session" onClick="set_session_method(0)" {if $S_SESSION == 0}checked{/if} /> COOKIES
    </td>
  </tr>
</table>
</div>
<div class="here">清除Smarty缓存</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">清除Smarty缓存：</td>
    <td>
    <input class="button" type="button" onClick="clear_cache()" value="立即清除" />
    </td>
  </tr>
</table>
</div>
<div class="here">静态设置</div>
<div class="block">
<table class="main_table">
  <tr>
    <td width="30%">弱静态：</td>
    <td>
    <input type="radio" name="weak_static" onClick="set_static('weak',1)" {if $S_WEAK_STATIC == 1}checked{/if} />开启
    <input type="radio" name="weak_static" onClick="set_static('weak',0)" {if $S_WEAK_STATIC == 0}checked{/if} />关闭
    </td>
  </tr>
  <tr>
    <td>伪静态：</td>
    <td>
    <input type="radio" name="sham_static" onClick="set_static('sham',1)" {if $S_SHAM_STATIC == 1}checked{/if} />开启
    <input type="radio" name="sham_static" onClick="set_static('sham',0)" {if $S_SHAM_STATIC == 0}checked{/if} />关闭
    </td>
  </tr>
  <tr>
    <td>纯静态：</td>
    <td>
    <input type="radio" name="pure_static" onClick="set_static('pure',1)" {if $S_PURE_STATIC == 1}checked{/if} />开启
    <input type="radio" name="pure_static" onClick="set_static('pure',0)" {if $S_PURE_STATIC == 0}checked{/if} />关闭
    <input class="button" type="button" onClick="create_static()" value="生成页面" />
    <div id="static_status" style="display:none">
      <div id="progress_bar"><div id="bar_inside"></div></div>
      &nbsp;&nbsp;<span id="bar_percent">0%</span>
      &nbsp;&nbsp;共有<span id="bar_sum">0</span>个页面需要生成，已生成<span id="bar_created">0</span>个页面
      <div class="clear"></div>
    </div>
    </td>
  </tr>  
  <tr>
    <td>清除静态文件：</td>
    <td>
    <input type="text" id="clear_file_prefix" style="width:80px;" />&nbsp;&nbsp;
    <input class="button" type="button" onClick="clear_static()" value="立即清除" />&nbsp;&nbsp;全部清除请填0
    </td>
  </tr>
</table>
</div>
<div class="here">邮件通知设置</div>
<div class="block">
<form id="form_set_sentmail" method="post" action="?/deal/dir-basic/" target="deal">
<input name="cmd" type="hidden" value="save_sentmail" />
  <table class="main_table">
    <tr>
      <td width="30%">启用邮件通知功能：</td>
      <td>
      <input type="radio" name="sentmail" onClick="set_config('sentmail',1)" {if $sentmail == 1}checked{/if} />开启
      <input type="radio" name="sentmail" onClick="set_config('sentmail',0)" {if $sentmail == 0}checked{/if} />关闭
      </td>
    </tr>
    <tr>
      <td>发件SMTP服务器：</td>
      <td><input name="smtp" type="text" class="text" maxlength="200" value="{$sentmail_smtp}" /></td>
    </tr>
    <tr>
      <td>发件邮箱：</td>
      <td><input name="send" type="text" class="text" maxlength="200" value="{$sentmail_send}" /></td>
    </tr>
    <tr>
      <td>发件邮箱密码：</td>
      <td><input name="password" type="password" class="text" maxlength="200" value="{$sentmail_password}" /></td>
    </tr>
    <tr>
      <td>收件邮箱：</td>
      <td><input name="receive" type="text" class="text" maxlength="200" value="{$sentmail_receive}" /></td>
    </tr>
    <tr>
      <td></td>
      <td><input class="button" type="button" onClick="do_submit('form_set_sentmail',0)" value="保存" /></td>
    </tr>
  </table>
</form>
</div>
<div class="here">使用说明</div>
<div class="block content">
  1.开启弱静态模式之后，系统会自动把访问过的页面生成静态文件，后台每次更新之后，必须清除静态文件才能在前台显示更新内容。<br />
  2.开启纯静态模式之后，必须生成页面前台才能正常显示，生成页面之前最好先清除静态文件。<br />
  3.在清除页面的输入框中，可以填写html目录下的子目录名，例如article，这样系统将只清除article子目录下的静态文件。<br />
  4.邮件通知功能的目前的主要用途是：当有访客在网站提交留言或调查问卷时，系统自动使用发件邮箱发送邮件通知管理员。<br />
  5.SMTP服务器地址一般形如smtp.163.com，但并不是所有SMTP服务器地址都是这种形式，163邮箱经多次测试发送邮件正常，建议使用。<br />
  6.如果您所填写的邮件信息不正确，请不要启用邮件通知功能，否则可能导致前台留言板和在线调查功能无法正常使用。
</div>
<iframe id="deal" name="deal"></iframe>
<!-------------------------- BOX -------------------------->
<div class="box" id="static_check">
  <div class="close" onclick="hide_box('static_check')">关闭</div>
  <div class="main">弱静态和纯静态必须同时开启才能生成页面，<br /><br />生成完毕之后可以关闭弱静态</div>
</div>
<!-------------------------- BOX -------------------------->
{literal}
<script language="javascript">
	get_result(0);
	function set_session_method(val)
	{
		ajax("post","?/deal/dir-basic/","cmd=set_session_method&val="+val,
		function(data)
		{
			if(data == 1) result();
		});
	}
	function clear_cache()
	{
		ajax("post","?/deal/dir-basic/","cmd=clear_cache",
		function(data)
		{
			if(data == 1) result();
		});
	}
	function set_static(type,val)
	{
		ajax("post","?/deal/dir-basic/","cmd=set_"+type+"_static&val="+val,
		function(data)
		{
			if(data == 1) result();
		});
	}
	var create_static_interval;
	function create_static()
	{
		ajax("post","?/deal/dir-basic/","cmd=static_check",
		function(data)
		{
			if(data == 1)
			{
				set_create_static_cookie();
				document.getElementById("static_status").style.display = "block";
				create_static_interval = setInterval("create_static_ajax()",1500);			
			}else{
				show_box("static_check",350,125);
			}
		});
	
	}
	function create_static_ajax()
	{
		ajax("post","?/deal/dir-basic/","cmd=create_static",
		function(data)
		{
			var step = get_cookie("create_static_step");
			var sum = Math.floor(get_cookie("create_static_sum"));
			var created = Math.floor(get_cookie("create_static_created"));
			if(step == "count"){
				document.getElementById("bar_sum").innerHTML = sum;
				document.cookie = "create_static_step=product_page";
			}else{
				var bar_width = Math.floor(created / sum * 100) + "%";
				document.getElementById("bar_percent").innerHTML = bar_width;
				document.getElementById("bar_inside").style.width = bar_width;
				document.getElementById("bar_created").innerHTML = created;
			}
			if(step == "end")
			{
				document.getElementById("bar_percent").innerHTML = "100%";
				document.getElementById("bar_inside").style.width = "100%";
				set_create_static_cookie();
				clearInterval(create_static_interval);
				result();
			}
		});	
	}
	function set_create_static_cookie()
	{
		document.cookie = "create_static_step=count";
		document.cookie = "create_static_created=0";
		document.cookie = "create_static_id=0";
		document.cookie = "create_static_cat=0";
		document.cookie = "create_static_page=0";
	}
	function clear_static()
	{
		prefix = document.getElementById("clear_file_prefix").value;
		if(prefix != "")
		{
			ajax("post","?/deal/dir-basic/","cmd=clear_static&prefix="+prefix,
			function(data)
			{
				if(data == 1) result();
			});
		}
	}
</script>
{/literal}