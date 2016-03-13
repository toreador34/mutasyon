<?php 
require_once('configs/config.php');
$page_name = "invoicedproducts";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{
      $m = 0;
      foreach($productname as $pr)
      {
	    $gettax = $db->query("SELECT * FROM stock 
	    INNER JOIN tax ON stock_tax_id = tax_id 
	    WHERE stock_name = '".$productname[$m]."' ");
	    foreach($gettax as $gt)
	    {
		      $tax = $gt["tax_tax"];
		      $productid = $gt["stock_id"];
	    }
	    $addpr = $db->prepare("INSERT INTO invoicedproducts (ip_admin_id, ip_stock_id, ip_name, ip_amount, ip_price, ip_tax, ip_total, ip_invoice_id) VALUES (:admin, :stock, :name, :amount, :price, :tax, :total, :invoice)");
		    
	    $addpr->execute(array(
				  'admin'=>$admin_id,
				  'stock'=>$productid,
				  'name'=>$productname[$m],
				  'amount'=>$amount[$m],
				  'price'=>$price[$m],
				  'tax'=>$tax,
				  'total'=>$price[$m]*$amount[$m],
				  'invoice'=>$invoiceid,
				));
	     $m++;
      }

}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login 
