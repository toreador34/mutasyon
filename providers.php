<?php 
require_once('configs/config.php');
$page_name = "productdetail";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
	  
	  
	  $addproviders = Check::getValue("addproviders");
	  $addproviderstel = Check::getValue("addproviderstel");
	  $addprovidersaddress = Check::getValue("addprovidersaddress");
	  $addprovidersweb = Check::getValue("addprovidersweb");
	  $addprovidersmail = Check::getValue("addprovidersmail");
	  
	  if($addproviders)
	  {
		require_once('providers/addproviders.php');
	  }

}//if login
else
{
      $smarty->display(theme_base.'login.html');
} 
