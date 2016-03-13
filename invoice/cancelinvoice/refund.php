<?php


$addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_invoice_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :pid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
	  $addpayments->execute(array(
		  'cust'=>$custid,
		  'pid'=>$id,
		  'pbi'=>$bankid,
		  'pai'=>$admin_id,
		  'pty'=>$paytype,
		  'pio'=>'out',
		  'pa'=>$refund,
		  'pdesc'=>$paycancdesc,
		  'pdate'=>$date,
	      ));
