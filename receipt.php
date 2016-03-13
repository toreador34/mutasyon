<?php 
require_once('configs/config.php');
$page_name = "receipt";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{

      $pid = Check::getValue("pid");
      $epid = Check::getValue("epid");
      $seid = Check::getValue("seid");
      
      if($pid)
      {
		$invoiceid = $db->query("SELECT * FROM payments LEFT JOIN customer ON cust_id = payment_customer_id INNER JOIN paytype ON paytype_id = payment_type LEFT JOIN providerspyments ON pp_id = payments_pp_id LEFT JOIN providers ON providers_id = pp_providers_id LEFT JOIN seller ON seller_id = payment_seller_id WHERE payment_id = '".$pid."' ");
				    
		$company = $db->query("SELECT * FROM company", PDO::FETCH_ASSOC);
		foreach($company as $c)
		{
		      $compname = $c["company_name"];
		}
		
		$smarty->assign(array(
				    "invoiceid" 	=> $invoiceid,
				    "compname" 		=> $compname,
			  ));
		$smarty->display(theme_base.'receipt/receipt.html');
      }
      if($epid)
      {
		$invoiceid = $db->query("
				    SELECT * FROM payments LEFT JOIN customer ON cust_id = payment_customer_id INNER JOIN paytype ON paytype_id = payment_type LEFT JOIN providerspyments ON pp_id = payments_pp_id LEFT JOIN providers ON providers_id = pp_providers_id LEFT JOIN seller ON seller_id = payment_seller_id WHERE payment_id = '".$epid."' ");

		
		$company = $db->query("SELECT * FROM company", PDO::FETCH_ASSOC);
		foreach($company as $c)
		{
		      $compname = $c["company_name"];
		}
		
		$smarty->assign(array(
				    "invoiceid" 	=> $invoiceid,
				    "compname" 		=> $compname,
			  ));
		$smarty->display(theme_base.'receipt/editreceipt.html');
      }
      if(Check::getValue("pdate") OR Check::getValue("pamount"))
      {
		//For edit receipt
		require_once('payments/editreceipt.php');
      }

}//login
else
{
      $smarty->display(theme_base.'login.html');
} //else login
