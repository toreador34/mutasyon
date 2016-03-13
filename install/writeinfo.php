<?php
require('configs/config.php'); 
$page_name = "writeinfo";
$smarty->assign("page_name", $page_name);


$sserver = strip_tags(@$_POST["sserver"]);
$sdbname = strip_tags(@$_POST["sdbname"]);
$susername = strip_tags(@$_POST["susername"]);
$spassword = @$_POST["spassword"];

$email = @$_POST["email"];
$password = @$_POST["password"];
$username = @$_POST["username"];
$namesurname = @$_POST["namesurname"];
$city = @$_POST["city"];
$old = @$_POST["old"];

      if(Check::email($email) == 0)
      {
	    
	    $infnotblank = $smarty->getVariable('_inf_not_valid');
	    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=email]').addClass('alert-danger');</script>";
	    echo "<script>return false</script>";
	    $vemail = 0;
	    exit();
      }
      else
      {
	    echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
	    $vemail = 1;
      }
      if($vemail == 1)
      {
	    if($password == "")
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=password]').addClass('alert-danger');</script>";
		  echo "<script>return false</script>";
		  $vpass = 0;
		  exit();
	    }
	    else if(Check::password($password) != 1)
	    {
		  $infnotstrong = $smarty->getVariable('_inf_not_strong');
		  echo $infnotstrong."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=password]').addClass('alert-danger');</script>";
		  echo "<script>return false</script>";
		  $vpass = 0;
		  exit(); 
	    }
	    else
	    {
		  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		  $vpass = 1;
	    }
      }
      if($vemail == 1 and $vpass == 1)
      {
	    if($username == "")
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=username]').addClass('alert-danger');</script>";
		  echo "<script>return false</script>";
		  $vusername = 0;
		  exit();
	    }
	    else
	    {
		  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		  $vusername = 1; 
	    }
      }
      if($vemail == 1 and $vpass == 1 and $vusername == 1)
      {
	    if($sdbname OR $sserver OR $susername OR $spassword)
	    {
		  //ENTER THE RELEVANT INFO BELOW
		  $dbname =$sdbname;
		  $dbuser =$susername;
		  $dbpassword =$spassword;
		  $dbhost =$sserver;
		  $fileName ='sql.sql';
		  $npassword = md5($password);
		  try
		  {
			$db = new PDO('mysql:dbname='.$dbname.';host='.$dbhost,$dbuser,$dbpassword);
			$adminw = $db->prepare("INSERT INTO admin (email, password, username, name_surname, city, old, active) VALUES (:email, :password, :username, :name, :city, :old, :active)");
			$adminw->execute(array(
			      'email'=>$email,
			      'password'=>$npassword,
			      'username'=>$username,
			      'name'=>$namesurname,
			      'city'=>$city,
			      'old'=>$old,
			      'active'=>1,
			));
			$infaddentry = $smarty->getVariable('_inf_add_success');
			echo $infaddentry;
			echo '<script type="text/javascript">window.location.href="../login.php";</script>';

		  }
		  catch (PDOException $e)
		  {
			echo 'Connection failed: ' . $e->getMessage();
			$import = 0;
		  }
	    }
      }
      
else
{
      $smarty->display('themes/default/index.html');
}
?>
