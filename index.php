<?php 
if (!file_exists("configs/db.php")) {
    echo '<script type="text/javascript">window.location.href="install/index.php";</script>';
}
else
{
      require('configs/config.php');
      $page_name = "index";
      $smarty->assign("page_name", $page_name);
      if(isset($_SESSION['login']))
      {
		      //Get date
		      $today = getdate();
		      
		      //Events Lists
		      $events = $db->query("SELECT *, DAY(event_date) AS day, date_format(event_date,'%m') AS month FROM events WHERE event_status = 0  AND event_admin_id = '".$admin_id."' ORDER BY event_date ASC LIMIT 10");
		      
		      
		      //Connect customer db for get total customers
		      $customerlist = $db->query('SELECT * FROM customer LIMIT 10');
			      
		      
		      //Connect invoice db for get total invoices
		      $invoice = $db->query("SELECT * FROM invoice WHERE invoice.invoice_admin = '".$admin_id."' ");
		      $countinv = $invoice->rowCount();
		      
		      
		      $invoicelist = $db->query('
		      SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) AS invtotal FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments WHERE payment_invoice_id = invoice.invoice_id AND payment_in_out = "in") AS paytotal,  (SELECT TRUNCATE(SUM(insertedservice_price), 2) AS servtotal FROM insertedservice WHERE insertedservice_service_id = invoice.invoice_id) AS servtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS payservtotal FROM payments WHERE payment_service_id = invoice.invoice_id AND payment_in_out = "in") AS payservtotal FROM invoice WHERE invoice_cancelled <> 1
		      ORDER BY invoice_id DESC LIMIT 10');
		      
		      $providerslist = $db->query("
		      SELECT *, TRUNCATE(SUM(pp_price), 2) AS paytotal, (SELECT TRUNCATE(SUM(invoice_providers_price), 2) AS total FROM invoice WHERE invoice_providers = providers.providers_id AND invoice_cancelled <> 1) AS total FROM providers
		      LEFT JOIN providerspyments ON pp_providers_id = providers_id
		      WHERE pp_cancelled <> 1 GROUP BY providers_id");
		      
		      //Connect stock db for get total stocks
		      $stock = $db->query('SELECT COUNT(stock_id) as product, SUM(stock_amount) as in_stock FROM stock');

		      //Connect bank db for get bank name and total
		      $bank = $db->query("
		      SELECT *, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_bank_id = bank_id AND payment_in_out = 'in' ) AS in_total, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_bank_id = bank_id AND payment_in_out = 'out' ) AS out_total, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_bankto_id = bank_id AND payment_in_out = 'trs' ) AS transferin, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payment_bank_id = bank_id AND payment_in_out = 'trs' ) AS transferout FROM bank 
		      GROUP BY bank_name LIMIT 10
		      ");
		      $yil = date('Y');
		      
		      //Connect bank db for get bank name and total
		      $inmonth = $db->query('SELECT MONTH(payment_date) AS pm, SUM(payment_amount) AS intotal FROM payments WHERE YEAR(payment_date) = "'.$yil.'" AND payment_in_out = "in" OR payment_in_out = "cin" GROUP BY YEAR(payment_date), MONTH(payment_date)');
		      //Connect bank db for get bank name and total
		      $outmonth = $db->query('SELECT MONTH(payment_date) AS pm, SUM(payment_amount) AS total FROM payments WHERE YEAR(payment_date) = "'.$yil.'" AND payment_in_out = "out" OR payment_in_out = "cou" GROUP BY YEAR(payment_date), MONTH(payment_date)');
		      
		      //Connect company, tax, bank

		      $stlist = $db->query("SELECT * FROM stock LIMIT 8 ");
		      
		      $admins= $db->query("SELECT * FROM admin");

		      
		      $smarty->assign(array(
			"today" 		=> $today,
			"customerlist"		=> $customerlist,
			"countinv" 		=> $countinv,
			"invoicelist" 		=> $invoicelist,
			"stock" 		=> $stock,
			"bank" 			=> $bank,
			"inmonth" 		=> $inmonth,
			"outmonth" 		=> $outmonth,
			"events" 		=> $events,
			"admins" 		=> $admins,
			"stlist" 		=> $stlist,
			"providerslist" 	=> $providerslist,
			
		      ));
		      
		      
		      $smarty->display('themes/default/first.html');
      }// if login
      else
      {
	      $smarty->display(theme_base.'login.html');
      }
}
