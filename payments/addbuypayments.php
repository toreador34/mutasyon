<?php 
		      if($buypayment <= 0)
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=buypayment]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vpayment = 0;
			    exit();
		      }
		      else
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vpayment = 1;
		      }
		      if($vpayment == 1)
		      {
			    if($buyinvoiceid == "empty" OR $buyinvoiceid == "")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=buyinvoiceid]').addClass('alert-danger');</script>";
				  echo "<script>return false;</script>";
				  $vid = 0;
				  exit();
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vid = 1;
			    }
		      }
		      if($vpayment == 1 and $vid == 1)
		      {
			    if(Check::dateCheck($buydate) != 1)
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=buydate]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vdate = 0;
				  exit();
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vdate = 1;
			    }
		      }
		      if($vpayment == 1 and $vid == 1 and $vdate == 1)
		      {
			    //Check for get remain
			    $remain = $db->query("
			    SELECT *, (SELECT TRUNCATE(SUM(bp_amount*bp_price), 2) AS total FROM boughtproducts WHERE bp_bi_id = bi_id) AS total, TRUNCATE(SUM(payment_amount), 2) AS pay FROM buyinvoice 	  
			    LEFT JOIN payments ON payment_bi_id = bi_id	
			    INNER JOIN seller ON bi_seller_id = seller_id
			    WHERE bi_id = '".$buyinvoiceid."' GROUP BY bi_no
			    ");
			    foreach($remain as $re)
			    {
				  $getotal = $re["total"];
				  $getpay = $re["pay"];
				  $buyseller = $re["seller_id"];
			    }
			    if($buypayment > ($getotal-$getpay))
			    {
				  $infmax = $smarty->getVariable('_inf_maximum_amount');
				  echo $infmax.($getotal-$getpay)."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=buypayment]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vremain = 0;
				  exit();
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vremain = 1;
			    }
		      }
		      if($vpayment == 1 and $vid == 1 and $vdate == 1 and $vremain == 1)
		      {
			    if($servicetype == "" OR $servicetype == "empty")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=paytype]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vtype = 0;
				  exit(); 
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vtype = 1; 
			    }
		      }
		      if($vpayment == 1 and $vid == 1 and $vdate == 1 and $vremain == 1 and $vtype == 1)
		      {
			     //For desc
			    $infpayforinv = $smarty->getVariable('_invpaydesc');
			    $invoiceno = Check::invoiceno($buyinvoiceid, 0);
			    $desc = $invoiceno.$infpayforinv;
			    
			    //Add buy invoice
			    $buypay = $db->prepare("INSERT INTO payments (payment_bank_id, payment_bi_id, payment_seller_id, payment_admin_id, payment_type, payment_amount, payment_date, payment_desc, payment_in_out) VALUES (:bank, :bid, :bisel, :biadmin, :bitype, :biprice, :bidate, :bidesc, :inout)");
			    $buypay->execute(array(
				'bank'=>$buybank,
				'bid'=>$buyinvoiceid,
				'bisel'=>$buyseller,
				'biadmin'=>$admin_id,
				'bitype'=>$ptype,
				'biprice'=>$buypayment,
				'bidesc'=>$desc,
				'bidate'=>$buydate,
				'inout'=>"out",
			    ));
			    $infworksuccess = $smarty->getVariable('_inf_work_success');
			    echo $infworksuccess;
		      }