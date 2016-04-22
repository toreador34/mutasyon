<?php 
require_once('configs/config.php');
$page_name = "login";
$smarty->assign("page_name", $page_name);
$email = strip_tags(@$_POST["username"]);
$password = Check::getValue("passwd"); 

		if(Check::email($email) && Check::password($password))
		{
			$md5pass = md5($password);
			$query = $db->query("SELECT * FROM admin WHERE email = '$email' AND password = '$md5pass'", PDO::FETCH_ASSOC);
			if($query->rowCount())
			{
				$_SESSION["login"] = 1;
				$_SESSION["username"] = $email;
				$_SESSION["view"] = "grid";
				echo '<script type="text/javascript">window.location.href="index.php";</script>';
				
			}
		}
		else{
		  $smarty->display(theme_base.'login.html');
		}
?>