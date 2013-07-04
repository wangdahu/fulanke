<?php
function module_main()
{
	global $smarty,$user_id;
	$cmd = post('cmd');
	if($cmd == '')
	{
		$smarty->assign('show_info',0);
		$mod = get_global('mod','profile');
		if($mod == 'register')
		{
			$obj = new varia();
			$smarty->assign('user_agreement',$obj->get_value('user_agreement',true));
			$smarty->assign('show_mod','register');
		}elseif($user_id != 0){
			$smarty->assign('show_mod','user_center');
			if($mod != 'main')
			{
				include('index/module/user/'.$mod.'.php');
				$func = 'module_'.$mod;
				$func();
			}
		}else{
			$smarty->assign('show_mod','login');
		}
	}else{
		$smarty->assign('show_info',1);
		include('index/module/user/deal.php');
	}
}

//红头船
?>