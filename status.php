<?php 
require_once('configs/config.php');
$page_name = "status";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
			$active = Check::getValue('active');
			if($active==1){
			    echo "active 1";
			}
			else if($active==0){
			    echo "active 0";
			}
			
			}
		else{
			$smarty->display(theme_base.'login.html');
		}  
