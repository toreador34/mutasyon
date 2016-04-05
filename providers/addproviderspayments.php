<?php
	  
	  if(!is_numeric($ppserviceid))
	  {
		echo "<script>return false</script>";
		$vid = 0;
		exit();
	  }
	  else
	  {
		$vid = 1;
	  }
	  if($ptotalpayment and $vid == 1)
	  {
		if($ptotalpayment == "" OR !is_numeric($ptotalpayment))
		{
		      $infnotblank = $smarty->getVariable('_inf_not_valid');
		      echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ptotalpayment]').addClass('alert-danger');</script>";
		      echo "<script>return false</script>";
		      echo $ptotalpayment;
		      $vtotalp = 0;
		      exit();  
		}
		else
		{
		      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		      $vtotalp = 1;
		}
		if($vtotalp == 1)
		{
		      $updateservice = $db->prepare("UPDATE  invoice SET  invoice_providers_price =  :total WHERE  invoice.invoice_id =:sid");
		      $updateservice->execute(array(
			    'total'=>$ptotalpayment,
			    'sid'=>$ppserviceid,
		      ));
		      $infworksuccess = $smarty->getVariable('_inf_work_success');
		      echo $infworksuccess;
		}
	  }
	  else
	  {
		if($vid == 1)
		{
		      if($ppayment == "")
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppayment]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vpay = 0;
			    exit();
		      }
		      if(!is_numeric($ppayment))
		      {
			    $infnumeric = $smarty->getVariable('_inf_numeric');
			    echo $infnumeric."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppayment]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vpay = 0;
			    exit(); 
		      }
		      else
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vpay = 1;
		      }
		}
		if($vid == 1 and $vpay == 1)
		{
		      if($ppayment > $ppremain )
		      {
			    $infmax = $smarty->getVariable('_inf_maximum_amount');
			    echo $infmax.$ppremain."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppayment]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vrem = 0;
			    exit(); 
		      }
		      else
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vrem = 1;
		      }
		}
		if($vid == 1 and $vpay == 1 and $vrem == 1)
		{
		      if(Check::dateCheck($ppdate) == 1)
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vdate = 1;
		      }
		      else
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppdate]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vdate = 0;
			    exit();
		      }
		}
		if($vid == 1 and $vpay == 1 and $vrem == 1 and $vdate == 1)
		{
		      if($ppbanklist == "empty" OR $ppbanklist == "")
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=ppbanklist]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vbank = 0;
			    exit(); 
		      }
		      else
		      {
			  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			  $vbank = 1; 
		      }
		}
		if($vid == 1 and $vpay == 1 and $vrem == 1 and $vdate == 1 and $vbank == 1)
		{
		      if($ptotalpayment2)
		      {
			    if($ppayment > $ptotalpayment2 )
			    {
				  $infmax = $smarty->getVariable('_inf_maximum_amount');
				  echo $infmax.$ptotalpayment2."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppayment]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vtotalp = 0;
				  exit(); 
			    }
			    if($ptotalpayment2 == "zero")
			    {
				  $infpaidtotal = $smarty->getVariable('_inf_paid_total');
				  echo $infpaidtotal."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=ppayment]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vtotalp = 0;
				  exit();
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vtotalp = 1;
			    }
		      }
		}
		if($vid == 1 and $vpay == 1 and $vrem == 1 and $vdate == 1 and $vbank == 1 and $vtotalp == 1)
		{
		      $infpayforinv = $smarty->getVariable('_invpaydesc');
		      $add = $db->prepare("INSERT INTO providerspyments (pp_desc, pp_service_id, pp_providers_id, pp_bank_id, pp_price, pp_ok) VALUES (:desc, :serviceid, :proid, :bank, :price, :ok)");
		      $add->execute(array(
			    'desc'=>$serviceinvoiceno.$infpayforinv,
			    'serviceid'=>$ppserviceid,
			    'proid'=>$providersid,
			    'bank'=>$ppbanklist,
			    'price'=>$ppayment,
			    'ok'=>1,
		      ));
		      $ppid = $db->lastInsertId();
		      
		      if($ppid)
		      {
			    $addpayments = $db->prepare("INSERT INTO payments (payment_pp_id, payment_service_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:ppid, :ppsid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
			    $addpayments->execute(array(
				    'ppid'=>$ppid,
				    'ppsid'=>$ppserviceid,
				    'pbi'=>$ppbanklist,
				    'pai'=>$admin_id,
				    'pty'=>1,
				    'pio'=>'out',
				    'pa'=>$ppayment,
				    'pdesc'=>$serviceinvoiceno.$infpayforinv,
				    'pdate'=>$ppdate,
				));
			    
			    if($add)
			    {
				    $infworksuccess = $smarty->getVariable('_inf_work_success');
				    echo $infworksuccess.'<script>$(".providers").load(location.href + " .providers");$(".addproviders").click()</script>';
			    }
		      }
		      else
		      {
			    echo "Ödeme miktarı hizmet sağlayıcıya aktarılamadı!";
			    exit();
		      }
		}
	  }
	  
	  
	  
	  
	  
	  
