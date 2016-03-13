<?php
require('configs/config.php');
$page_name = "insertdb";
$smarty->assign("page_name", $page_name);


$sserver = strip_tags(@$_POST["sserver"]);
$sdbname = strip_tags(@$_POST["sdbname"]);
$susername = strip_tags(@$_POST["susername"]);
$spassword = @$_POST["spassword"];

if($sdbname OR $sserver OR $susername OR $spassword)
{
      //ENTER THE RELEVANT INFO BELOW
      $dbname =$sdbname;
      $dbuser =$susername;
      $dbpassword =$spassword;
      $dbhost =$sserver;
      $fileName ='sql.sql';
      try
      {
	    $db = new PDO('mysql:dbname='.$dbname.';host='.$dbhost,$dbuser,$dbpassword);
	    $sql = file_get_contents($fileName);
	    $qr = $db->exec($sql);
      if($qr == 0)
      {
	    $import = 1;
      }

      }
      catch (PDOException $e)
      {
	    echo 'Connection failed: ' . $e->getMessage();
	    $import = 0;
      }
      if($import == 1)
      {
	   echo "<script>$('.import').hide();$('.addinfo').show();</script>";
	   $dosya = fopen("../configs/db.php","a");
	   fwrite($dosya,$_POST["config"]);
	   fclose($dosya);
	   
      }
      else if($import == 0)
      {
	   $smarty->display('themes/default/index.html');
      }
}
else
{
      $smarty->display('themes/default/index.html');
}
?>
