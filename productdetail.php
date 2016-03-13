<?php 
require_once('configs/config.php');
$page_name = "productdetail";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
		$id = Check::getValue("sid");
		$imagetotal = $db->query('SELECT *, COUNT(images_stock_id) as total FROM images WHERE images_stock_id = '.$id.' ');
		$img = $db->query('SELECT * FROM images WHERE images_stock_id = '.$id.'  ');
		$stock = $db->query('
		SELECT * FROM stock 
		LEFT JOIN tax ON stock_tax_id = tax_id 
		INNER JOIN category ON stock_category_id = category_id 
		WHERE stock_id = '.$id.' GROUP BY stock_id ');
		$seller = $db->query('SELECT * FROM seller');
		$tax = $db->query('SELECT * FROM tax');
		$bank = $db->query('SELECT * FROM bank WHERE bank_active <> 0');
		$customers = $db->query('SELECT * FROM customer');
		$invoiceadj = $db->query('SELECT * FROM invoiceadj');
		
		$yil = date('Y');
		
		$buyinvoice = $db->query('
		SELECT *, EXTRACT(MONTH FROM bi_date) AS pm, SUM(bp_amount) AS total, SUM(bp_price*bp_amount) AS totalprice FROM buyinvoice 
		LEFT JOIN boughtproducts ON bp_bi_id = bi_id
		LEFT JOIN payments ON payment_bi_id = bi_id
		WHERE bp_stock_id = '.$id.' AND EXTRACT(YEAR FROM bi_date) = '.$yil.' GROUP BY pm');
		
		//Product history
		$ph = $db->query('
		  SELECT *, EXTRACT(MONTH FROM invoice_date) AS pm, SUM(ip_amount) AS total, SUM(ip_price*ip_amount) AS totalprice FROM invoice 
		  LEFT JOIN invoicedproducts ON ip_invoice_id = invoice_id
		  WHERE ip_stock_id = '.$id.' AND EXTRACT(YEAR FROM invoice_date) = '.$yil.' GROUP BY pm');
		
		foreach($imagetotal as $lii)
		{
		  $start = $lii['images_id'];
		  $total = $lii['total'];
		}
		
		$smarty->assign(array(
			  "total" 		=> $total,
			  "start" 		=> $start,
			  "images" 		=> $img,
			  "ph" 			=> $ph,
			  "stock" 		=> $stock,
			  "bank" 		=> $bank,
			  "seller" 		=> $seller,
			  "buyinvoice" 		=> $buyinvoice,
			  "tax" 		=> $tax,
			  "customers" 		=> $customers,
			  "invoiceadj" 		=> $invoiceadj,
		));
		
		$smarty->display(theme_base.'productdetail.html');
}//if login
else
{
      $smarty->display(theme_base.'login.html');
}  
