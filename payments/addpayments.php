<?php 


	if($customerid)
	{
	      if($payment > $getremain OR $payment <= 0 OR $payment == "")
	      {
		    $infmax = $smarty->getVariable('_inf_maximum_amount');
		    echo $infmax.$getremain."<script>$('input[name=payment]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vpay = 0;
	      }
	      else
	      {
		    $vpay = 1;
	      }
	      if($vpay == 1)
	      {
		    $checkinv = $db->query("SELECT * FROM invoice WHERE invoice_id = '".$invoiceid."'");
		    foreach($checkinv as $inv)
		    {
			  $canc = $inv["invoice_cancelled"];
		    }
		    if($canc == 1)
		    {
			  $infcancel = $smarty->getVariable('_inf_invoice_cancelled');
			  echo $infcancel."<script>return false</script>";
			  $vcanc = 0;
		    }
		    else
		    {
			  $vcanc = 1;
		    }
	      }
	      if($vpay == 1 and $vcanc == 1)
	      {
		$addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_invoice_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :pid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
		$addpayments->execute(array(
		    'cust'=>$customerid,
		    'pid'=>$invoiceid,
		    'pbi'=>$banklist,
		    'pai'=>$admin_id,
		    'pty'=>$ptype,
		    'pio'=>'in',
		    'pa'=>$payment,
		    'pdesc'=>$invoiceno,
		    'pdate'=>$date,
		));
	    
		$infaddentry = $smarty->getVariable('_inf_add_success');
		echo $infaddentry;
	      }
	}
	else if($invoiceid1)
	{
	      if($invoiceid1 == "empty")
	      {
		    echo "<script>$('select').removeClass('alert-danger');$('select[name=invoiceid1]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vinv = 0;
		    exit();
	      }
	      else
	      {
		    $vinv = 1;
	      }
	      if($vinv == 1)
	      {
		    $getinvremain = $db->query("SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payments.payment_invoice_id = invoice.invoice_id and payment_in_out = 'in') AS paytotal FROM invoice WHERE invoice_id = '".$getremain."' ");
		    foreach($getinvremain as $get)
		    {
			  $total = $get["invtotal"];
			  $discount = $get["invoice_discount"];
			  $paytotal = $get["paytotal"];
			  $customerid = $get["invoice_customer_id"];
			  $invoiceno = $get["invoice_no"];
			  $canc = $get["invoice_cancelled"];
		    }
		    $remain = $total - ($paytotal + $discount);
		    if($payment <= $remain and $payment != "" and $payment > 0)
		    {
			  echo "<script>$('input').removeClass('alert-danger');</script>";
			  $vpay = 1;
		    }
		    else
		    {
			  $infmax = $smarty->getVariable('_inf_maximum_amount');
			  echo $infmax.$remain."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=payment]').addClass('alert-danger');</script>";
			  echo "<script>return false</script>";
			  $vpay = 0;
			  exit();
		    }
		    if($vpay == 1)
		    {
			  if($desc == "")
			  {
				$infadddesc = $smarty->getVariable('_inf_add_desc');
				echo $infadddesc."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('textarea[name=desc]').removeClass('alert-danger');$('textarea[name=desc]').addClass('alert-danger');</script>";
				echo "<script>return false</script>";
				$vdesc = 0;
				exit();
			  }
			  else
			  {
				echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('textarea').removeClass('alert-danger');</script>";
				$vdesc = 1;
			  }
		    }
		    if($vpay == 1 and $vdesc == 1)
		    {
			  if($canc == 1)
			  {
				$infcancel = $smarty->getVariable('_inf_invoice_cancelled');
				echo $infcancel."<script>return false</script>";
				exit();
			  }
			  else
			  {
				$addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_invoice_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :pid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
				$addpayments->execute(array(
				    'cust'=>$customerid,
				    'pid'=>$getremain,
				    'pbi'=>$banklist,
				    'pai'=>$admin_id,
				    'pty'=>$ptype,
				    'pio'=>'in',
				    'pa'=>$payment,
				    'pdesc'=>$invoiceno."-".$desc,
				    'pdate'=>$date,
				));
			    
				$addentry = $smarty->getVariable('_add_success');
				echo $addentry;
			  }
		    }
	      }
	      
	      
	}
