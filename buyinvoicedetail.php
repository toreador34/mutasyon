<?php 
require_once('configs/config.php');
$page_name = "buyinvoicedetail";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){

		$id = Check::getValue("iid");
		$bid = Check::getValue("bid");
		//Connect bank for get bank name 
		  $bank = $db->query("SELECT * FROM bank WHERE bank_active <> 0");
		
		if($id)
		{
		  //Connect invoice from db
		  $invoiceid = $db->query('
		  SELECT *, TRUNCATE(SUM(payment_amount),2) AS paytotal FROM invoice 
		  LEFT JOIN payments ON invoice_id = payment_invoice_id
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
		  SELECT *, TRUNCATE(SUM(bp_price*bp_amount),2) AS total_invoice, TRUNCATE(SUM(payment_amount),2) AS paytotal FROM buyinvoice
		  LEFT JOIN payments ON payment_bi_id = bi_id  
		  LEFT JOIN seller ON bi_seller_id = seller_id  
		  LEFT JOIN admin ON bi_admin_id = admin_id    
		  LEFT JOIN boughtproducts ON bp_bi_id = bi_id    
		  WHERE bi_id = '$bid' GROUP BY bi_id ");
		  
		  $buyproducts = $db->query("
		  SELECT * FROM boughtproducts
		  LEFT JOIN buyinvoice ON bi_id = bp_bi_id
		  LEFT JOIN stock ON bp_stock_id = stock_id
		  WHERE bi_id = '$bid' ");
		  
		  //Connect company from db
		  $company = $db->query('SELECT * FROM company ');
		  
		  $smarty->assign(array(
			  "buyinvoice" 		=> $buyinvoice,
			  "buyproducts" 	=> $buyproducts,
			  "company" 		=> $company,
			  "bank" 		=> $bank,
		  ));
		  
		  $smarty->display(theme_base.'buydetail.html');
		}
}//if login
else{
      $smarty->display(theme_base.'login.html');
}  
 
