<?php 
require_once('configs/config.php');
$page_name = "invoice";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
		$page = Check::getValue("page");
		
		$prtotal = $db->query("SELECT COUNT(invoice_id) AS prtotal FROM invoice ");
		foreach($prtotal as $prt)
		{
		  $stocktotal = $prt["prtotal"];
		}
		//Total page 
		$pagetotal = ceil($stocktotal/12);
		if($page)
		{
		  $start = ($page-1)*12;
		}
		else
		{
		  $start = 0;
		}
		if(!$page)
		{
		      echo '<script type="text/javascript">window.location.href="invoice.php?page=1";</script>';
		}
		
		//Connect invoice from db
		$invoice = $db->query('
		SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) AS invtotal FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments WHERE payment_invoice_id = invoice.invoice_id AND payment_in_out = "in") AS paytotal,  (SELECT TRUNCATE(SUM(insertedservice_price), 2) AS servtotal FROM insertedservice WHERE insertedservice_service_id = invoice.invoice_id) AS servtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS payservtotal FROM payments WHERE payment_service_id = invoice.invoice_id AND payment_in_out = "in") AS payservtotal FROM invoice
		LEFT JOIN payments ON payments.payment_invoice_id = invoice.invoice_id
		LEFT JOIN bank ON bank.bank_id = payments.payment_bank_id
		LEFT JOIN customer ON customer.cust_id = invoice.invoice_customer_id
		LEFT JOIN admin ON admin.admin_id = invoice.invoice_admin
		LEFT JOIN insertedservice ON insertedservice_service_id = invoice.invoice_id
		LEFT JOIN providers ON providers_id = invoice.invoice_providers
		GROUP BY invoice_id ORDER BY invoice_id DESC LIMIT '.$start.' , 12
		');
		$company = $db->query("SELECT * FROM company");
		foreach($company as $co)
		{
		      $company_name = $co["company_name"];
		}
		
		$smarty->assign(array(
			  "invoice" 		=> $invoice,
			  "pagetotal" 		=> $pagetotal,
			  "company_name" 	=> $company_name,

		));
		
		$smarty->display(theme_base.'invoice.html');
			}
		else{
			$smarty->display(theme_base.'login.html');
		}  
 
