<?php 
require_once('configs/config.php');
$page_name = "invoice";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
		$page = Check::getValue("page");
		$totalinv = $db->query("SELECT * FROM buyinvoice");
		$countinv = $totalinv->rowCount();
		
		//Total page 
		$pp = 10;
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
		      echo '<script type="text/javascript">window.location.href="buyinvoice.php?page=1";</script>';
		}
		
		//Connect invoice from db
		$invoice = $db->query('
		SELECT *, 
		(SELECT SUM(bp_amount*bp_price) AS it FROM boughtproducts WHERE boughtproducts.bp_bi_id = buyinvoice.bi_id) AS invoice_total,
		(SELECT SUM(payment_amount) AS pt FROM payments WHERE payments.payment_bi_id = buyinvoice.bi_id) AS pay_total
		FROM buyinvoice
		
		LEFT JOIN payments ON payment_bi_id = bi_id
		LEFT JOIN bank ON payment_bank_id = bank_id  
		LEFT JOIN seller ON bi_seller_id = seller_id  
		LEFT JOIN admin ON bi_admin_id = admin_id     
		GROUP BY bi_no ORDER BY  bi_id DESC LIMIT '.$start.', '.$pp.' ');
		
		$smarty->assign(array(
			  "invoice" 		=> $invoice,
			  "pagetotal" 		=> $pagetotal,

		));
		
		$smarty->display(theme_base.'buyinvoice.html');
			}
		else{
			$smarty->display(theme_base.'login.html');
		}  
 
