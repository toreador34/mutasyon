<?php 

      if($providers == "myself")
      {
	    $newproviders = -1;
      }
      else
      {
	    $newproviders = $providers;
      }
	    $addservice = $db->prepare("INSERT INTO invoice (invoice_no, invoice_description, invoice_customer_id, invoice_admin, invoice_providers, invoice_date, invoice_cancelled) VALUES (:no, :desc, :cust, :admin, :providers, :date, :canc)");
	    $addservice->execute(array(
		      'no'=>0,
		      'desc'=>$servicedesc,
		      'admin'=>$admin_id,
		      'providers'=>$newproviders,
		      'date'=>$date,
		      'cust'=>$customer,
		      'canc'=>0,
		));
	    $invoiceid = $db->lastInsertId();
	  
	  //Invoice No
	  $no = Check::invoiceno($invoiceid, $invoiceadjp."I-");
	  
	  if($invoiceid)
	  {
		//Update invoice no
		$updateinvno = $db->prepare("UPDATE  invoice SET  invoice_no = :no WHERE  invoice.invoice_id = :id");
		$updateinvno->execute(array(
					'no'=>$no,
					'id'=>$invoiceid,
				));
	  }
      
	  $infaddentry = $smarty->getVariable('_inf_add_success');
	  echo $infaddentry;