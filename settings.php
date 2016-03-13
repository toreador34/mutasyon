<?php 
require_once('configs/config.php');
require_once('addcategory.php');
$page_name = "settings";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		
		//Connect bank for information
		$bank = $db->query('SELECT * FROM bank WHERE bank_active <> 0');
		
		//For list tax name
		$taxlist = $db->query("SELECT * FROM tax", PDO::FETCH_ASSOC);
		
		//For list language name
		$languagelist = $db->query("SELECT * FROM language", PDO::FETCH_ASSOC);
		
		
		//For list company name
		$company = $db->query("SELECT *, COUNT(company_name) as company_total FROM company", PDO::FETCH_ASSOC);
		
		//Seller
		$seller = $db->query('SELECT *  FROM seller');
		
		//Seller
		$invoiceadj = $db->query('SELECT *  FROM invoiceadj');

		$smarty->assign(array(
		  "bank"	=> $bank,
		  'taxlist' 	=> $taxlist,
		  'languagelist' => $languagelist,
		  'company' 	=> $company,
		  "seller" 	=> $seller,
		  "invoiceadj" 	=> $invoiceadj,
		));
		
$smarty->display(theme_base.'settings.html');
}
else{
$smarty->display(theme_base.'login.html');
}  
