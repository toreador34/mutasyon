<?php 
require_once('configs/config.php');
$page_name = "invoicedetail";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){

		$id = Check::getValue("iid");
		$bid = Check::getValue("bid");
		$seid = Check::getValue("seid");
		$print = Check::getValue("print");
		
		//Connect bank for get bank name 
		$bnk = $db->query("SELECT * FROM bank WHERE bank_active <> 0");
		$bank = array();
		foreach($bnk as $c)
		{
		    $bank[] = $c;
		}
		
		if($id)
		{
		  //Connect invoice from db
		  $invoiceid = $db->query('
		  SELECT *, (SELECT TRUNCATE(SUM(payment_amount),2) FROM payments WHERE payment_invoice_id = invoice_id and payment_in_out = "in") AS paytotal FROM invoice INNER JOIN customer ON cust_id = invoice_customer_id
		  WHERE invoice_id = '.$id.' GROUP BY invoice_id');

		  //Connect company from db
		  $company = $db->query('SELECT * FROM company ');
		  
		  //Connect ip from db
		  $invoicedpr = $db->query('
		  SELECT * FROM invoice 
		  LEFT JOIN invoicedproducts ON invoice_id = ip_invoice_id
		  WHERE invoice_id = '.$id.' ');
		  
		  $smarty->assign(array(
			  "invoiceid" 		=> $invoiceid,
			  "invoicedpr" 		=> $invoicedpr,
			  "company" 		=> $company,
			  "bank" 		=> $bank,

		  ));
		  $smarty->display(theme_base.'invoicedetail.html');
		}
		
		if($bid)
		{
		      $buyinvoice = $db->query("
		      SELECT *, 
		      (SELECT TRUNCATE(SUM(payment_amount),2) AS pt FROM payments WHERE payment_bi_id = buyinvoice.bi_id AND payment_in_out = 'out') AS paytotal FROM buyinvoice
		      LEFT JOIN payments ON payment_bi_id = bi_id
		      LEFT JOIN bank ON payment_bank_id = bank_id  
		      LEFT JOIN seller ON bi_seller_id = seller_id    
		      WHERE bi_id = '$bid' GROUP BY bi_id ");
		      
		      $buyproducts = $db->query("
		      SELECT * FROM boughtproducts
		      LEFT JOIN buyinvoice ON bi_id = bp_bi_id
		      LEFT JOIN stock ON bp_stock_id = stock_id
		      WHERE bi_id = '$bid' ");
		      
		      //Connect company from db
		      $company = $db->query('SELECT * FROM company ');
		      
		      $smarty->assign(array(
			      "buyinvoice" 	=> $buyinvoice,
			      "buyproducts" 	=> $buyproducts,
			      "company" 	=> $company,
			      "bank" 		=> $bank,
		      ));
		      
		      $smarty->display(theme_base.'buydetail.html');
		}
		if($seid)
		{
		      //Connect invoice from db
		      $invoiceid = $db->query("
		      SELECT *, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_service_id = invoice_id AND payment_service_id <> 0 AND payment_in_out = 'in' ) AS paytotal, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_service_id = invoice_id AND payment_service_id <> 0 AND payment_in_out = 'out' ) AS payouttotal FROM invoice
		      LEFT JOIN payments ON payment_service_id = invoice_id
		      LEFT JOIN customer ON invoice_customer_id = cust_id
		      LEFT JOIN admin ON invoice_admin = admin_id
		      LEFT JOIN providers ON invoice_providers = providers_id
		      LEFT JOIN providerspyments ON pp_service_id = payment_service_id
		      WHERE invoice_id = '".$seid."' GROUP BY invoice_id");
		      

		      //Connect company from db
		      $company = $db->query('SELECT * FROM company ');
		      $insertedtype = $db->query("SELECT * FROM insertedservice WHERE insertedservice_service_id = '".$seid."' ");
		      $servicetype = $db->query("SELECT * FROM servicetype");
		      $tax = $db->query('SELECT * FROM tax');
		      
		      //Connect ip from db
		      $invoicedpr = $db->query('
		      SELECT * FROM invoice 
		      LEFT JOIN invoicedproducts ON invoice_id = ip_invoice_id
		      WHERE invoice_id = '.$id.' ');
		      
		      $smarty->assign(array(
			      "invoiceid" 	=> $invoiceid,
			      "invoicedpr" 	=> $invoicedpr,
			      "company" 	=> $company,
			      "bank" 		=> $bank,
			      "tax" 		=> $tax,
			      "servicetype" 	=> $servicetype,
			      "insertedtype" 	=> $insertedtype,

		      ));
		      
		      $smarty->display(theme_base.'servicedetail.html');
		}
}//if login
else{
      $smarty->display(theme_base.'login.html');
}  
 
