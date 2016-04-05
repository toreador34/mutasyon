<?php
      $collectproviders = Check::getValue("collectproviders");
      $collectprovidersdesc = Check::getValue("collectprovidersdesc");
      
      if($paytotal != NULL OR $paytotal > 0)
      {
	    $addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_service_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :psid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
	    $addpayments->execute(array(
		'cust'=>$custid,
		'psid'=>$seid,
		'pbi'=>$bankid,
		'pai'=>$admin_id,
		'pty'=>$paytype,
		'pio'=>'cou',
		'pa'=>$paytotal,
		'pdesc'=>$paycancdesc,
		'pdate'=>$date,
	    ));
      }
      if($collectproviders and $pp_ok == 1)
      {
	    $addpayments = $db->prepare("INSERT INTO payments (payment_pp_id, payment_service_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:ppid, :psid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
	    $addpayments->execute(array(
		'ppid'=>$bproviders,
		'psid'=>$seid,
		'pbi'=>$bankid,
		'pai'=>$admin_id,
		'pty'=>$paytype,
		'pio'=>'cin',
		'pa'=>$paytoproviders,
		'pdesc'=>$collectprovidersdesc,
		'pdate'=>$date,
	    ));
	    
	    $updateinv = $db->prepare("UPDATE providerspyments SET pp_desc = :desc, pp_cancelled =  :canc WHERE  pp_service_id =:id");
	    $updateinv->execute(array(
				    'desc'=>$paymentsdesc."-".$due,
				    'canc'=>1,
				    'id'=>$seid,
			    ));
      }
      
      $updateinv = $db->prepare("UPDATE invoice SET invoice_description = :desc, invoice_cancelled =  :canc WHERE  invoice.invoice_id =:id");
      $updateinv->execute(array(
			      'desc'=>$bdesc."-".$due,
			      'canc'=>1,
			      'id'=>$seid,
		      ));
      
      $infaddentry = $smarty->getVariable('_inf_add_success');
      echo $infaddentry;
?>
