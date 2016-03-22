<?php 
	  //Get customer informations
	  $getcust = $db->query("SELECT * FROM customer WHERE cust_id = '".$customerid."'");
	  foreach($getcust as $g)
	  {
		$tel = $g["cust_tel"];
		$mail = $g["cust_mail"];
		$web = $g["cust_web"];
		$address = $g["cust_address"];
	  }
	  $writeinvoice = $db->prepare("INSERT INTO invoice (invoice_no, invoice_description, invoice_customer_id, invoice_admin, invoice_discount, invoice_date, invoice_cancelled) VALUES (:no, :desc, :custid, :admin, :disc, :date, :cancel)");
	
	  $writeinvoice->execute(array(
				    'no'=>0,
				    'desc'=>$decs,
				    'custid'=>$customerid,
				    'admin'=>$admin_id,
				    'disc'=>$discount,
				    'date'=>$date,
				    'cancel'=>0,
			    ));
	  $invoiceid = $db->lastInsertId();
	  
	  //Invoice No
	  $no = Check::invoiceno($invoiceid, $invoiceadjp."I-");
	  
	  if($writeinvoice)
	  {
	    //Update invoice no
	    $updateinvno = $db->prepare("UPDATE  invoice SET  invoice_no =  :no WHERE  invoice.invoice_id = :id");
	    $updateinvno->execute(array(
				    'no'=>$no,
				    'id'=>$invoiceid,
			    ));
	  }
	  
	  //Invoiced Product
	  $m = 0;
	  foreach($productname as $pr)
	  {
		$gettax = $db->query("SELECT * FROM stock 
		INNER JOIN tax ON stock_tax_id = tax_id 
		WHERE stock_name = '".$productname[$m]."' ");
		foreach($gettax as $gt)
		{
			  $tax = $gt["tax_tax"];
			  $productid = $gt["stock_id"];
		}
		$addpr = $db->prepare("INSERT INTO invoicedproducts (ip_admin_id, ip_stock_id, ip_name, ip_amount, ip_price, ip_tax, ip_total, ip_invoice_id) VALUES (:admin, :stock, :name, :amount, :price, :tax, :total, :invoice)");
			
		$addpr->execute(array(
				      'admin'=>$admin_id,
				      'stock'=>$productid,
				      'name'=>$productname[$m],
				      'amount'=>$amount[$m],
				      'price'=>$price[$m],
				      'tax'=>$tax,
				      'total'=>$price[$m]*$amount[$m],
				      'invoice'=>$invoiceid,
				    ));
		$m++;
	  }
	  
	  //Reduce Stock
	  $l = 0;
	  foreach($productname as $pr)
	  {
		$gettax = $db->query("SELECT * FROM stock 
		WHERE stock_name = '".$productname[$l]."' ");
		foreach($gettax as $gt)
		{
		      $productidl = $gt["stock_id"];
		      $oldamount = $gt["stock_amount"];
		}
		
		$reducestock = $db->prepare("UPDATE stock SET stock_amount = :amount WHERE stock.stock_id = :id");
		$reducestock->execute(array(
				      'amount'=>$oldamount - $amount[$l],
				      'id'=>$productidl,
				    ));
		$l++;
	  }
	  
	  $infaddentry = $smarty->getVariable('_inf_add_success');
	  echo $infaddentry;
	  echo '<script type="text/javascript">setTimeout(function(){ window.location.href="invoicedetail.php?iid='.$invoiceid.'";}, 2000);</script>';