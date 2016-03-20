<?php 
require_once('configs/config.php');
$page_name = "cancelinvoice";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{
      $refund = Check::getValue("refund");
      $date = @$_POST["date"];
      $due = Check::getValue("cancdue");
      $paycancdesc = Check::getValue("paycancdesc");
      $password = Check::getValue("password");
      $id = Check::getValue("invoiceid");
      $seid = Check::getValue("serviceid");
      $buyid = Check::getValue("buyid");
      $paytype = Check::getValue("paytype");
      
      //Get paytotal
      if($id)
      {
	    $invoiceamount = $db->query("SELECT *, TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments 
	    INNER JOIN invoice ON payments.payment_invoice_id = invoice_id WHERE invoice_id = '".$id."' GROUP BY invoice_id");
	    foreach($invoiceamount as $inv)
	    {
		  $paytotal = $inv["paytotal"];
		  $bankid = $inv["payment_bank_id"];
		  $custid = $inv["invoice_customer_id"];
		  $iscanc = $inv["invoice_cancelled"];
		  $bdesc = $inv["payment_desc"];
	    }
      }
      else if($seid)
      {
	    $invoiceamount = $db->query("SELECT *, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_service_id = invoice_id AND payment_service_id <> 0 AND payment_in_out = 'in' ) AS paytotal, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_service_id = invoice_id AND payment_service_id <> 0 AND payment_in_out = 'out' ) AS paytoproviders FROM invoice LEFT JOIN providerspyments ON pp_providers_id = invoice_providers LEFT JOIN payments ON payment_service_id = invoice_id WHERE invoice_id = '".$seid."' GROUP BY invoice_id");
	    foreach($invoiceamount as $inv)
	    {
		  $paytotal = $inv["paytotal"];
		  $bankid = $inv["payment_bank_id"];
		  $custid = $inv["invoice_customer_id"];
		  $iscanc = $inv["invoice_cancelled"];
		  $bdesc = $inv["invoice_description"];
		  $paymentsdesc = $inv["payment_desc"];
		  $paytoproviders = $inv["paytoproviders"];
		  $pp_ok = $inv["pp_ok"];
		  $bproviders = $inv["invoice_providers"];
	    }
      }
      else if($buyid)
      {
	    $invoiceamount = $db->query("SELECT *, TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments INNER JOIN buyinvoice ON bi_id = payment_bi_id WHERE payment_bi_id = '".$buyid."' ");
	    foreach($invoiceamount as $inv)
	    {
		  $paytotal = $inv["paytotal"];
		  $iscanc = $inv["bi_cancel"];
		  $bankid = $inv["payment_bank_id"];
		  $sid = $inv["payment_seller_id"];
		  $bdesc = $inv["bi_desc"];
	    }
      }

      if($refund <= $paytotal OR $paytotal == NULL)
      {
	    echo "<script>$('.refund').removeClass('alert-danger')</script>";
	    $vrefund = 1;
      }
      else
      {
	    $infmax = $smarty->getVariable('_inf_maximum_amount');
	    echo $infmax.$paytotal."<script>$('.refund').addClass('alert-danger')</script>";
	    echo "<script>return false</script>";
	    $vrefund = 0;
	    exit();
      }
      if($vrefund == 1)
      {
	    if(Check::dateCheck($date)==1)
	    {
		  echo "<script>$('.cidate').removeClass('alert-danger')</script>";
		  $vdate=1;
	    }
	    else
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."!<script>$('.cidate').addClass('alert-danger')</script>";
		  echo "<script>return false</script>";
		  $vdate = 0;
		  exit();
	    }
      }
      if($vrefund == 1 AND $vdate ==1)
      { 
	    if($paytype == "empty" OR $paytype == "")
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('select[name=paytype]').addClass('alert-danger')</script>";
		  echo "<script>return false</script>";
		  $vype = 0;
		  exit();
	    }
	    else
	    {
		  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		  $vype = 1;
	    }
      }
      if($vrefund == 1 AND $vdate ==1 AND $vype == 1)
      {
	   if($due == "")
	   {
		$infadddesc = $smarty->getVariable('_inf_add_desc');
		echo $infadddesc."<script>$('.cidue').addClass('alert-danger')</script>";
		echo "<script>return false</script>";
		$vdue = 0;
		exit();
	   }
	   else
	   {
		echo "<script>$('.cidue').removeClass('alert-danger')</script>";
		$vdue = 1;
	   }
      }
      if($vrefund == 1 AND $vdate ==1 AND $vype == 1 AND $vdue == 1)
      {
	    if($password == "")
	    {
		  $infpassword = $smarty->getVariable('_inf_password');
		  echo $infpassword."<script>$('.cipasswd').addClass('alert-danger')</script>";
		  echo "<script>return false</script>";
		  $vpass = 0;
		  exit();
	    }
	    if ($password != "")
	    {
		  if(md5($password) != $admin_password)
		  {
			$_SESSION["login"]++;
			$infnotvalidpassword = $smarty->getVariable('_inf_not_valid_password');
			echo $infnotvalidpassword.(4-$_SESSION["login"]).'<br />';
			echo "<script>return false</script>";
			$vpass = 0;
		  }
		  else 
		  {
			$_SESSION["login"] = 1;
			echo "<script>$('.cipasswd').removeClass('alert-danger')</script>";
			$vpass = 1;
		  }
		  if ($_SESSION["login"] > 3)
		  {
		    unset($_SESSION['login']);
		    header("location: index.php");
		    exit();
		  }
	    }
      }
      if($vrefund == 1 AND $vdate ==1 AND $vype == 1 AND $vdue == 1 AND $vpass == 1)
      {
	   if($iscanc == 0)
	   {
		  if($id)
		  {
			require_once('invoice/cancelinvoice/cancelinvoice.php');
			echo $paycancdesc;
		  }
		  else if($buyid)
		  {
			require_once('invoice/cancelinvoice/cancelbuyinvoice.php');
		  }
		  else if($seid)
		  {
			require_once('invoice/cancelinvoice/cancelservice.php');
		  }
		  $infworksuccess = $smarty->getVariable('_inf_work_success');
		  echo $infworksuccess;
	   }
	   else
	   {
		$infcancelagain = $smarty->getVariable('_inf_invoice_cancelled_again');
		echo $infcancelagain;
	   }
      }



}//login
else
{
      $smarty->display(theme_base.'login.html');
} //else login
