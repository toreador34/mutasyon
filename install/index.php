<?php 
if (file_exists("../configs/db.php")) {
      echo '<script type="text/javascript">window.location.href="../index.php";</script>';
}
else
{
      require_once('configs/config.php');
      $page_name = "index";
      $smarty->assign("page_name", $page_name);
      $baglanti = 0;
      if(isset($_POST['datebase']))
      {
	    $servername = strip_tags($_POST['server']);
	    $dbname = strip_tags($_POST['db']);
	    $username = strip_tags($_POST['user']);
	    $dbpasword = @$_POST['password'];
	    
	    try {
		    $db = new PDO('mysql:host='.$servername.';dbname='.$dbname.'', $username , $dbpasword);
		    $db->query("SET CHARACTER SET utf8");
		    $baglanti = 1;
		    $yazi = 'Veri tabanına bağlandı';
	    } catch (PDOException $e) {
		    $baglanti = 0;
		    $yazi = 'Veri tabanına bağlanamadı';
	    }
	    $smarty->assign(array(
		    'baglanti' => $baglanti,  
		    'yazi' => $yazi,  
	    ));
	    
	    if($baglanti == 1)
	    {
		  $smarty->assign('servername', $servername);
		  $smarty->assign('dbname', $dbname);
		  $smarty->assign('username', $username);
		  $smarty->assign('dbpasword', $dbpasword);
		  $smarty->display('themes/default/step2.html');
	    }
	    else
	    {
		  $baglanti = 0;
		  $smarty->display('themes/default/index.html');
	    }
      }
      else{
	$smarty->display('themes/default/index.html');
      }
}