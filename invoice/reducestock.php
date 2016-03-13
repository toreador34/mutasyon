<?php 
require_once('configs/config.php');
$page_name = "reducestock";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{

      $l = 0;
      foreach($productname as $pr)
      {
	    $gettax = $db->query("SELECT * FROM stock 
	    WHERE stock_name = '".$productname[$l]."' ");
	    foreach($gettax as $gt)
	    {
		  $productidl = $gt["stock_id"];
		  $oldamount = $gt["stock_amount"];
	    }
	    
	    $reducestock = $db->prepare("UPDATE stock SET stock_amount = :amount WHERE stock.stock_id = :id");
	    $reducestock->execute(array(
				  'amount'=>$oldamount - $amount[$l],
				  'id'=>$productidl,
				));
	    $l++;
      }

}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login 
