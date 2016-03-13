<?php
session_start();
define('theme', 'default/');
define('theme_dir', 'themes/');
define('theme_base', theme_dir.theme);
define('img', theme_dir.theme.'img');
define('css', theme_dir.theme.'css');
define('js', theme_dir.theme.'js');
define('main_img', 'img');

require('libs/Smarty.class.php'); 
$smarty = new Smarty; 
$smarty->debugging = false;
$smarty->caching = false;
$smarty->clearAllCache();
$smarty->cache_lifetime = 120;
$smarty->template_dir = 'themes'; 
$smarty->compile_dir = 'themes_c'; 
$smarty->cache_dir = 'cache'; 
$smarty->config_dir = 'configs'; 
$smarty->assign(array(
  'img' => img,  
  'css' => css,  
  'js' => js,  
  'main_img' => main_img,
  ));
 require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$screen = ($detect->isMobile()?($detect->isTablet()?'tablet':'phone'):'computer');
$smarty->assign('screen', $screen);  
//Default language setting
$lang = 'tr'; 
require('configs/functions.php');  
require('configs/sayi2yazi.php');  
require('configs/db.php');
require('language/'.$lang.'.php');
if(isset($_SESSION['cart']))
{
      $count = count($_SESSION['cart']);
}
else
{
      $count = 0;
}
$smarty->assign(array(
	  "count" 	=> $count,
));
?>
