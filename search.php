<?php 
require_once('configs/config.php');
$page_name = "search";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{	    
		//Start search
		  $term = Check::getValue("term");
		  $topsearch = Check::getValue("topsearch");
		  if($term)
		  {
		      $searchprname = $db->query('
		      SELECT * FROM stock 
		      WHERE CONVERT(stock_name USING utf8)  LIKE "%' . $term . '%" OR CONVERT(stock_no USING utf8)  LIKE "%' . $term . '%"' , PDO::FETCH_ASSOC);
		  
		      if ( $searchprname->rowCount() )
		      {

			    $data = array();

			    foreach ( $searchprname as $row ){
				$data[] = array(
				    'value' => $row['stock_name'],
				);
			    }
			    

			    echo json_encode($data);

		      }//rowCount
		  }//term
		  else if($topsearch)
		  {
		    
			if($topsearch == "")
			{
			      echo "Lütfen bir şeyler yazınız";
			}
			else
			{
			      $stock = $db->query("SELECT * FROM stock
			      LEFT JOIN seller ON stock_seller_id = seller_id
			      LEFT JOIN tax ON stock_tax_id = tax_id
			      LEFT JOIN category ON stock_category_id = category_id
			      LEFT JOIN images ON images_stock_id = stock_id
			      WHERE CONVERT(stock_no USING utf8) LIKE '%$topsearch%' OR CONVERT(stock_name USING utf8) LIKE '%$topsearch%' OR CONVERT(stock_detail USING utf8) LIKE '%$topsearch%' OR CONVERT(stock_short_detail USING utf8) LIKE '%$topsearch%' ");
			      $countstock = $stock->rowCount();
			      
			      
			      
			      $customer = $db->query("
			      SELECT * FROM customer WHERE CONVERT(cust_name USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_tel USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_mail USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_web USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_address USING utf8) LIKE '%$topsearch%' ");
			      $countcust = $customer->rowCount();
			      
			      
			      
			      $buyinvoice = $db->query("
			      SELECT *, (SELECT SUM(bp_amount*bp_price) AS it FROM boughtproducts WHERE boughtproducts.bp_bi_id = buyinvoice.bi_id) AS invoice_total, (SELECT SUM(payment_amount) AS pt FROM payments WHERE payments.payment_bi_id = buyinvoice.bi_id) AS pay_total FROM buyinvoice		
			      LEFT JOIN payments ON payment_bi_id = bi_id
			      LEFT JOIN bank ON payment_bank_id = bank_id  
			      LEFT JOIN seller ON bi_seller_id = seller_id  
			      LEFT JOIN admin ON bi_admin_id = admin_id 
			      LEFT JOIN boughtproducts ON bp_bi_id = bi_id 
			      LEFT JOIN stock ON stock_id = bp_id 
			      WHERE CONVERT(stock_no USING utf8) LIKE '%$topsearch%' OR CONVERT(bank_name USING utf8) LIKE '%$topsearch%' OR CONVERT(bi_desc USING utf8) LIKE '%$topsearch%' OR CONVERT(bi_no USING utf8) LIKE '%$topsearch%' OR CONVERT(bi_date USING utf8) LIKE '%$topsearch%' OR CONVERT(payment_amount USING utf8) LIKE '%$topsearch%' OR CONVERT(seller_name USING utf8) LIKE '%$topsearch%' OR CONVERT(name_surname USING utf8) LIKE '%$topsearch%' OR CONVERT(stock_name USING utf8) LIKE '%$topsearch%'
			      GROUP BY bi_id ");
			      $countbinv = $buyinvoice->rowCount();
			      
			      
			      
			      $invoice = $db->query("SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) AS invtotal FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments WHERE payment_invoice_id = invoice.invoice_id) AS paytotal,  (SELECT TRUNCATE(SUM(insertedservice_price), 2) AS servtotal FROM insertedservice WHERE insertedservice_service_id = invoice.invoice_id) AS servtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS payservtotal FROM payments WHERE payment_service_id = invoice.invoice_id AND payment_in_out = 'in') AS payservtotal FROM invoice
			      LEFT JOIN payments ON payments.payment_invoice_id = invoice.invoice_id
			      LEFT JOIN bank ON bank.bank_id = payments.payment_bank_id
			      LEFT JOIN customer ON customer.cust_id = invoice.invoice_customer_id
			      LEFT JOIN admin ON admin.admin_id = invoice.invoice_admin
			      LEFT JOIN insertedservice ON insertedservice_service_id = invoice.invoice_id
			      LEFT JOIN providers ON providers_id = invoice.invoice_providers
			      WHERE CONVERT(providers_name USING utf8) LIKE '%$topsearch%' OR CONVERT(insertedservice_servicetype USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_name USING utf8) LIKE '%$topsearch%' OR CONVERT(invoice_no USING utf8) LIKE '%$topsearch%' OR CONVERT(invoice_description USING utf8) LIKE '%$topsearch%' OR CONVERT(invoice_providers_price USING utf8) LIKE '%$topsearch%' OR CONVERT(invoice_date USING utf8) LIKE '%$topsearch%' GROUP BY invoice_id ");
			      $countinv = $invoice->rowCount();
			      
			      
			      $paymentlist = $db->query(" 
			      SELECT * FROM payments 
			      INNER JOIN customer ON payment_customer_id = cust_id
			      LEFT JOIN invoice ON payment_invoice_id = invoice_id
			      INNER JOIN bank ON payment_bank_id = bank_id
			      INNER JOIN admin ON payment_admin_id = admin_id
			      WHERE CONVERT(name_surname USING utf8) LIKE '%$topsearch%' OR CONVERT(bank_name USING utf8) LIKE '%$topsearch%' OR CONVERT(payment_desc USING utf8) LIKE '%$topsearch%' OR CONVERT(payment_date USING utf8) LIKE '%$topsearch%' OR CONVERT(cust_name USING utf8) LIKE '%$topsearch%'
			      ");
			      $countpi = $paymentlist->rowCount();
			      
				
			      $payoutlist = $db->query("
			      SELECT * FROM payments 
			      LEFT JOIN bank ON payment_bank_id = bank_id
			      LEFT JOIN buyinvoice ON payment_bi_id = bi_id
			      LEFT JOIN seller ON payment_seller_id = seller_id
			      LEFT JOIN admin ON payment_admin_id = admin_id
			      WHERE CONVERT(bi_desc USING utf8) LIKE '%$topsearch%' OR CONVERT(seller_name USING utf8) LIKE '%$topsearch%' OR CONVERT(name_surname USING utf8) LIKE '%$topsearch%' OR CONVERT(payment_desc USING utf8) LIKE '%$topsearch%' OR CONVERT(payment_date USING utf8) LIKE '%$topsearch%'");
			      $countpo = $payoutlist->rowCount();
			      
				    
			      $smarty->assign('stock', $stock);
			      $smarty->assign('customer', $customer);
			      $smarty->assign('buyinvoice', $buyinvoice);
			      $smarty->assign('invoice', $invoice);
			      $smarty->assign('paymentlist', $paymentlist);
			      $smarty->assign('payoutlist', $payoutlist);
			      $smarty->assign('topsearch', $topsearch);
			      
			      
			      $smarty->assign('countpo', $countpo);
			      $smarty->assign('countpi', $countpi);
			      $smarty->assign('countinv', $countinv);
			      $smarty->assign('countbinv', $countbinv);
			      $smarty->assign('countcust', $countcust);
			      $smarty->assign('countstock', $countstock);
			      $smarty->display(theme_base.'search.html');
			}
		    
		  }
		  else
		  {
			header("Location:../index.php");
			exit;
		  }

}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login 