<?php 
require_once('configs/config.php');
require_once('configs/functions.php');
$page_name = "stock";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		$cid = Check::getValue("cid");
		$page = Check::getValue("page");
		$tax = $db->query('SELECT * FROM tax');
		$seller = $db->query('SELECT * FROM seller');
		$bank = $db->query('SELECT * FROM bank WHERE bank_active <> 0');
		$customers = $db->query('SELECT * FROM customer');
		$invoiceadj = $db->query('SELECT * FROM invoiceadj');
		
		//Connect category db
		$categories = $db->query("SELECT * FROM category main WHERE category_sub = 0", PDO::FETCH_ASSOC);
		$cats = array();
		foreach($categories as $c)
		{
		  $cats[] = $c;
		}
		$acategories = $db->query("SELECT * FROM category main WHERE category_sub <> 0", PDO::FETCH_ASSOC);
		$prtotal = $db->query("SELECT COUNT(stock_id) AS prtotal FROM stock ");
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
		$getir = array();
		foreach ($acategories as $ac)
		{
		  $getir[] = $ac;
		}
		
		
		if($cid)
		{
		  //Stock List
		  $stocklist = $db->query('SELECT * FROM stock
		  LEFT JOIN seller ON stock_seller_id = seller_id
		  LEFT JOIN tax ON stock_tax_id = tax_id
		  INNER JOIN category ON stock_category_id = category_id
		  LEFT JOIN images ON images_stock_id = stock_id 
		  WHERE stock_category_id = '.$cid.' GROUP BY stock_id ');
		}
		else
		{
		  //Stock List
		  $stocklist = $db->query('SELECT * FROM stock
		  LEFT JOIN seller ON stock_seller_id = seller_id
		  LEFT JOIN tax ON stock_tax_id = tax_id
		  INNER JOIN category ON stock_category_id = category_id
		  LEFT JOIN images ON images_stock_id = stock_id 
		  GROUP BY stock_id LIMIT '.$start.' , 12
		  ');
		}
		$smarty->assign(array(
		  "categories"	=> $cats,
		  "acategories"	=> $getir,
		  "stocklist" 	=> $stocklist,
		  "pagetotal" 	=> $pagetotal,
		  "tax" 	=> $tax,
		  "seller" 	=> $seller,
		  "bank" 	=> $bank,
		  "customers" 	=> $customers,
		  "invoiceadj" 	=> $invoiceadj,
		));
		
		$smarty->display(theme_base.'stock.html');
}//login
else{
    $smarty->display(theme_base.'login.html');
}  
 
