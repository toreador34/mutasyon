<?php

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
