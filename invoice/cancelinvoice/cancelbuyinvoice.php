<?php

      //Update invoice      
      $updateinv = $db->prepare("UPDATE  buyinvoice SET  bi_desc =  :desc, bi_cancel = :canc WHERE  buyinvoice.bi_id =:id");
      $updateinv->execute(array(
	      'desc'=>$bdesc."-".$due,
	      'canc'=>1,
	      'id'=>$buyid,
      ));
      
      
      //Refund payments
      $addpayments = $db->prepare("INSERT INTO payments (payment_bi_id, payment_seller_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:biid, :sid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
      $addpayments->execute(array(
	      'biid'=>$buyid,
	      'sid'=>$sid,
	      'pbi'=>$bankid,
	      'pai'=>$admin_id,
	      'pty'=>$paytype,
	      'pio'=>'in',
	      'pa'=>$refund,
	      'pdesc'=>$paycancdesc,
	      'pdate'=>$date,
	));
	
	
	//Reduce stock
	
	//Get invoicedproducts
	    $invoicedproducts = $db->query("SELECT * FROM boughtproducts WHERE bp_bi_id = '".$buyid."' ");

	    foreach($invoicedproducts as $inp)
	    {
		  $sid = $inp["bp_stock_id"];
		  $samount = $inp["bp_amount"];
		  
		  //Get invoicedproducts
		  $getoldamount = $db->query("SELECT * FROM stock WHERE stock_id = '".$sid."'");
		  foreach($getoldamount as $old)
		  {
			$oldamount = $old["stock_amount"];
			$prid = $old["stock_id"];
		  }
		  
		  $updatestc = $db->prepare("UPDATE stock SET  stock_amount =  :amount WHERE  stock.stock_id =:sid");
		  $updatestc->execute(array(
				    'amount'=>$oldamount-$samount,
				    'sid'=>$prid,
			    ));
		  
	    }
