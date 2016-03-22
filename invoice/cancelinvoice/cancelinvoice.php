<?php
	    
	    $updateinv = $db->prepare("UPDATE invoice SET invoice_description = :desc, invoice_cancelled =  :canc WHERE  invoice.invoice_id =:id");
	    $updateinv->execute(array(
		    'desc'=>$bdesc."-".$due,
		    'canc'=>1,
		    'id'=>$id,
	    ));
	    
	    $addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_invoice_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :pid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
	    $addpayments->execute(array(
		    'cust'=>$custid,
		    'pid'=>$id,
		    'pbi'=>$bankid,
		    'pai'=>$admin_id,
		    'pty'=>$paytype,
		    'pio'=>'cou',
		    'pa'=>$refund,
		    'pdesc'=>$paycancdesc,
		    'pdate'=>$date,
		));
		
	    //Get invoicedproducts
	    $invoicedproducts = $db->query("SELECT * FROM invoicedproducts WHERE ip_invoice_id = '".$id."'");

	    foreach($invoicedproducts as $inp)
	    {
		  $sid = $inp["ip_stock_id"];
		  $samount = $inp["ip_amount"];
		  
		  //Get invoicedproducts
		  $getoldamount = $db->query("SELECT * FROM stock WHERE stock_id = '".$sid."'");
		  foreach($getoldamount as $old)
		  {
			$oldamount = $old["stock_amount"];
			$prid = $old["stock_id"];
		  }
		  
		  $updatestc = $db->prepare("UPDATE stock SET  stock_amount =  :amount WHERE  stock.stock_id =:sid");
		  $updatestc->execute(array(
				    'amount'=>$samount+$oldamount,
				    'sid'=>$prid,
			    ));
		  
	    }
