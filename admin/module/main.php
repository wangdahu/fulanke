<?php
function module_main()
{
    global $smarty,$url_page,$mod,$admin_id;
    $cmd = post('cmd');
    if($admin_id > 0)
    {
        $smarty->assign('show_main',1);
        if($cmd == '')
        {
			$smarty->assign('show_info',0);
			if(check_power())
			{
				$smarty->assign('check_power',1);
				if($mod != 'main')
				{
					include('admin/module/'.$url_page.'/'.$mod.'.php');
					$func = 'module_'.$mod;
					$func();
				}
			}else{
				$smarty->assign('check_power',0);
			}
        }else{
            $smarty->assign('show_info',1);
            include('admin/module/'.$url_page.'/deal.php');
        }
    }else{
        $smarty->assign('show_main',0);
    }
}

//红头船
?>