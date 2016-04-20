<?php 
require_once('configs/config.php');
require_once('configs/functions.php');
$page_name = "stock";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		//For bestseller and instock or outstock
		$stock = Check::getValue("stock");
		$s = Check::getValue("s");
		
		//For category
		$cid = Check::getValue("cid");
		
		//For pages
		$page = Check::getValue("page");
		
		//For add or sale products
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
		if($cid)
		{
		      $prtotal = $db->query("SELECT COUNT(stock_id) AS prtotal FROM stock WHERE stock_category_id = '".$cid."' ");
		}
		else
		{
		      $prtotal = $db->query("SELECT COUNT(stock_id) AS prtotal FROM stock");
		}
		foreach($prtotal as $prt)
		{
		  $stocktotal = $prt["prtotal"];
		}
		//Total page 
		$pagetotal = ceil($stocktotal/4);
		if($page)
		{
		  $start = ($page-1)*4;
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
		
		
		if(!$s)
		{
		      $s = 0;
		}
		else if($s == "bestseller")
		{
		      $s = 10;
		}
		if(!$cid)
		{
		      $cid = "";
		}
		else if($cid)
		{
		      $cid = "AND stock_category_id = ".$cid;
		}
		if(!$stock)
		{
		      $stock = "";
		}
		else if($stock == "outstock")
		{
		      $stock = "AND stock_amount = 0";
		}
		else if($stock == "instock")
		{
		      $stock = "AND stock_amount <> 0";
		}

		$stocklist = $db->query('SELECT *, (SELECT SUM(ip_id) FROM invoicedproducts WHERE ip_stock_id = stock_id) AS total FROM stock
		LEFT JOIN seller ON stock_seller_id = seller_id
		LEFT JOIN tax ON stock_tax_id = tax_id
		INNER JOIN category ON stock_category_id = category_id
		LEFT JOIN images ON images_stock_id = stock_id 
		WHERE (SELECT SUM(ip_id) FROM invoicedproducts WHERE ip_stock_id = stock_id) > '.$s.' '.$stock.' '.$cid.' LIMIT '.$start.' , 12 ');
	
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
 
