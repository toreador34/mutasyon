<?php 
require_once('configs/config.php');
$page_name = "service";
$smarty->assign("page_name", $page_name);
$success = 0;
if($_SESSION['login']){
	    
	$customer = Check::getValue("customer");
	$providers = Check::getValue("providers");
	$date = @$_POST["date"];
	$invoiceadjp = Check::getValue("invadj");
	$servicedesc = Check::getValue("servicedesc");
	
	//Insert service to invoice
	$insertservicetype = Check::getValue("insertservicetype");
	$inserttax = Check::getValue("inserttax");
	$inserttotal = Check::getValue("inserttotal");
	$insertid = Check::getValue("insertid");
	
	if($customer OR $providers OR $date)
	{
	      if($customer == "empty")
	      {
		    $infcustnotblank = $smarty->getVariable('_is_customer_null');
		    echo $infcustnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '2px solid red');</script>";
		    echo "<script>return false</script>";
		    $vcust = 0;
		    exit();
	      }
	      else
	      {
		    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
		    $vcust = 1;
	      }
	      if($vcust == 1)
	      {
		    if(Check::dateCheck($date) == 1)
		    {
			  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
			  $vdate = 1;
		    }
		    else
		    {
			  $infnotblank = $smarty->getVariable('_inf_not_valid');
			  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=date]').addClass('alert-danger');</script>";
			  echo "<script>return false</script>";
			  $vdate = 0;
			  exit();
		    }
	      }
	      if($vcust == 1 and $vdate == 1)
	      {
		    if($invoiceadjp == "" OR $invoiceadjp == "empty")
		    {
			  $infnotblank = $smarty->getVariable('_inf_not_valid');
			  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=invadj]').addClass('alert-danger');</script>";
			  echo "<script>return false</script>";
			  $vadj = 0;
			  exit();
		    }
		    else
		    {
			  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
			  $vadj = 1;
		    }
	      }
	      if($vcust == 1 and $vdate == 1 and $vadj == 1)
	      {
		    if(strlen($servicedesc) < 10)
		    {
			  $infdesclimit = $smarty->getVariable('_inf_desc_limit');
			  echo $infdesclimit."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('textarea[name=servicedesc]').addClass('alert-danger');</script>";
			  echo "<script>return false</script>";
			  $vdesc = 0;
			  exit();
		    }
		    else
		    {
			  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
			  $vdesc = 1;
		    }
	      }
	      if($vcust == 1 and $vdate == 1 and $vadj == 1)
	      {
		    if($providers == "" OR $providers == "empty")
		    {
			  $infnotblank = $smarty->getVariable('_inf_not_valid');
			  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=providers]').addClass('alert-danger');</script>";
			  echo "<script>return false</script>";
			  $vpro = 0;
			  exit();
		    }
		    else
		    {
			  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
			  $vpro = 1;
		    }
	      }
	      if($vcust == 1 and $vdate == 1 and $vadj == 1 and $vdesc == 1 and $vpro == 1)
	      {
		    require_once('service/addservice.php');
	      }
	      
	}
	else if($insertservicetype OR $insertid)
	{
	      require_once('service/insertservice.php');
	}
	else
	{
	      $customer = $db->query("SELECT * FROM customer WHERE cust_status <> 0");
	      $providers = $db->query("SELECT * FROM providers");
	      $invoiceadj = $db->query('SELECT * FROM invoiceadj');
	      $smarty->assign(array(
		"customer"	=> $customer,
		"providers"	=> $providers,
		"invoiceadj"	=> $invoiceadj,
	      ));
	      
	      $smarty->display(theme_base.'addservice.html');
	}


}//login
else
{
	$smarty->display(theme_base.'login.html');
}
