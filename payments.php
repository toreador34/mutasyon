<?php 
require_once('configs/config.php');
$page_name = "payments";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		//Add payment
		$payment = Check::getValue("payment");
		$banklist = Check::getValue("banklist");
		$invoiceid = Check::getValue("invoiceid");
		$invoiceid1 = Check::getValue("invoiceid1");
		$customerid = Check::getValue("customerid");
		$date = @$_POST["date"];
		$getremain = Check::getValue("getremain");
		$ptype = Check::getValue("paytype");
		$invoiceno = Check::getValue("invoiceno");
		$desc = Check::getValue("desc");
		
		//Add buy payments
		$buypayment = Check::getValue("buypayment");
		$buyinvoiceid = Check::getValue("buyinvoiceid");
		$buyseller = Check::getValue("buyseller");
		$buydate = @$_POST["buydate"];
		$buybank = Check::getValue("buybank");
		$buyremain = Check::getValue("buyremain");
		
		//For transfer
		$transfer = Check::getValue("transfer");
		
		//For add service payments
		$serviceid = Check::getValue("serviceid");
		$servicepay = Check::getValue("payment");
		$servicecust = Check::getValue("custid");
		$servicetype = Check::getValue("paytype");
		$servicedate = @$_POST["date"];
		$serviceremain = Check::getValue("getremain");
		$servicebank = Check::getValue("banklist");
		$payinvoiceno = Check::getValue("invoiceno");
		
		//For pay to providers
		$ppserviceid = Check::getValue("ppserviceid");
		$ppayment = Check::getValue("ppayment");
		$providersid = Check::getValue("providersid");
		$serviceinvoiceno = Check::getValue("serviceinvoiceno");
		$ppremain = Check::getValue("ppremain");
		$ppbanklist = Check::getValue("ppbanklist");
		$ptotalpayment = Check::getValue("ptotalpayment");
		$ptotalpayment2 = Check::getValue("ptotalpayment2");
		$ppdate = @$_POST["ppdate"];
		
		if($_POST)
		{
		      //Add payments
		      if($payment OR $invoiceid1)
		      {
			      require_once('payments/addpayments.php');
		      }

		      if($buypayment)
		      {
			   require_once('payments/addbuypayments.php');
		      }
		      if($transfer)
		      {
			  
			    require_once('payments/transfer.php');
		      }
		      if($serviceid and $servicedate)
		      {
			  
			    require_once('service/addservicepayments.php');
		      }
		      if($ppserviceid OR $providersid)
		      {
			    require_once('providers/addproviderspayments.php');
		      }
		}
		else
		{
		      $page = Check::getValue("page");
		      $totalinv = $db->query("SELECT * FROM payments");
		      $countinv = $totalinv->rowCount();
		      
		      //Total page 
		      $pp = 20;
		      $pagetotal = ceil($countinv/$pp);
		      if($page)
		      {
			$start = ($page-1)*$pp;
		      }
		      else
		      {
			$start = 0;
		      }
		      if(!$page)
		      {
			    echo '<script type="text/javascript">window.location.href="payments.php?page=1";</script>';
		      }
		      
		      $paymentlist = $db->query('
		      SELECT * FROM payments 
		      LEFT JOIN customer ON payment_customer_id = cust_id
		      LEFT JOIN invoice ON payment_invoice_id = invoice_id
		      LEFT JOIN providerspyments ON pp_id = payments_pp_id
		      LEFT JOIN providers ON providers_id = pp_providers_id
		      LEFT JOIN seller ON seller_id = payment_seller_id
		      INNER JOIN bank ON payment_bank_id = bank_id
		      INNER JOIN admin ON payment_admin_id = admin_id
		      LEFT JOIN paytype ON payment_type = paytype_id
		      ORDER BY payment_id DESC LIMIT '.$start.', '.$pp.'');
		      $bank = $db->query("SELECT * FROM bank WHERE bank_active <> 0");
		      $type = $db->query("SELECT * FROM paytype");
		      $invoice = $db->query("
					      SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) FROM payments WHERE payments.payment_invoice_id = invoice.invoice_id) AS paytotal FROM invoice
					      LEFT JOIN payments ON payments.payment_invoice_id = invoice.invoice_id
					      LEFT JOIN bank ON bank.bank_id = payments.payment_bank_id
					      WHERE invoice.invoice_cancelled <> 1 GROUP BY invoice_id
					      ");
		    
		      $smarty->assign(array(
			"paymentlist" 	=> $paymentlist,
			"bank" 		=> $bank,
			"paytype" 	=> $type,
			"invoice" 	=> $invoice,
			"pagetotal" 	=> $pagetotal,
		      ));
		  
		      $smarty->display(theme_base.'payments.html');
		}
}// login
else
{
	$smarty->display(theme_base.'login.html');
} 