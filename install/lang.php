<?php 
require_once('configs/config.php');
$page_name = "lang";
$smarty->assign("page_name", $page_name);
$baglanti = 0;

$lang = Check::getValue("lang"); 
if($lang == "tr" || $lang == "en")
{
    $_SESSION["lang"] = $lang;
    header("Location:index.php");
}
