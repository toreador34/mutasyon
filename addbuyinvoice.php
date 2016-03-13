<?php 
require_once('configs/config.php');
$page_name = "addinvoice";
$smarty->assign("page_name", $page_name);
/*
-------------------
A Make invioce
-------------------
0- Get Admin id 
1- Get invoice desc 
2- Make invoice no = 0 (change last)
3- Get seller id
4- Get date

-------------------
B Update Stock Card
-------------------
0- Get seller id
1- Get price
2- Get tax
3- Get amount
-------------------
C Make boughtproducts
-------------------
0- Get product id
1- Get amount
2- Get price
3- Get invoice id (SELECT * FROM buyinvoice WHERE bi_no = 0 AND bi_admin_id = "this admin id")
4- Make invoice no (Check::invoiceno(invoice id, 0))
5- Update invoice no 4th step

*/
if(isset($_SESSION['login']))
{
		//Connect seller, tax, db
		    $seller = $db->query('SELECT * FROM seller');
		    $tax = $db->query('SELECT * FROM tax');
		    $tax1 = $db->query('SELECT * FROM tax');
		    $bank = $db->query('SELECT * FROM bank WHERE bank_active <> 0');
		    $stock = $db->query('SELECT * FROM stock');
		  
		//For add invioce
		    $buyseller = Check::getValue("buyseller");
		    $buydate = @$_POST["buydate"];
		    
		//For payments
		    $buypayment = Check::getValue("buypayment");
		    $virtual = Check::getValue("virtual");
		    $invtotal = Check::getValue("invtotal");
		    $buybank = Check::getValue("buybank");
		    
		//For add invioce
		    $buyproductname = Check::getValue("buyproductname");
		    $buyinvoicedesc = @$_POST["buyinvoicedesc"];
		    if(Check::isCleanHtml($buyinvoicedesc) != 1) 
		    {
			  $buyinvoicedesc = strip_tags($buyinvoicedesc);
		    }
		    if($buyinvoicedesc == "")
		    {
			  $name = "";
			  $selname = $db->query("SELECT * FROM seller WHERE seller_id = '".$buyseller."'");
			  foreach($selname as $sel)
			  {
				$name = $sel["seller_name"];
			  }
			  $infblankdesc = $smarty->getVariable('_inf_blank_desc');
			  $buyinvoicedesc = $name."-".$buydate.$infblankdesc;
		    }
		    $buyamount = Check::getValue("buyamount");
		    $buytax = Check::getValue("buytax");
		    $saleprice = Check::getValue("saleprice");
		    $buyprice = Check::getValue("buyprice");
		
		    
		    
		    $smarty->assign(array(
		      "seller" 			=> $seller,
		      "tax" 			=> $tax,
		      "tax1" 			=> $tax1,
		      "bank" 			=> $bank,
		      "stock" 			=> $stock,

		    ));
	if($buydate)
	{
// -----------------------------------------------------------------------------------------------------------------
	      // A ADD INVOICE
// -----------------------------------------------------------------------------------------------------------------		
		if($buyseller == "empty")
		{
		      $infnotblank = $smarty->getVariable('_inf_not_valid');
		      echo $infnotblank."<script>$('.chosen-default').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.chosen-default').attr('style', 'background:#f2dede');$('select[name=buyseller]').addClass('alert-danger');</script>";
		      echo "<script>return false</script>";
		      $vseller = 0;
		      exit();
		}
		else
		{
		      echo "<script>$('.chosen-single').attr('style', 'background-color:');</script>";
		      $vseller = 1;
		}
		if($vseller == 1)
		{
		      if(Check::dateCheck($buydate) == 1)
		      {
			    $vdate = 1;
		      }
		      else
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=buydate]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vdate = 0;
			    exit();
		      }
		}
		if($vseller == 1 and $vdate == 1)
		{
		      if(!$virtual)
		      {
			    if($buypayment == "")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=buypayment]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vpayment = 0;
				  exit();
			    }
			    if($buypayment > $invtotal)
			    {
				  $infmax = $smarty->getVariable('_inf_maximum_amount');
				  echo $infmax.$invtotal."<script>$('input').removeClass('alert-danger');$('input[name=buypayment]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vpayment = 0;
				  exit();
			    }
			    if($buybank == "empty")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=buybank]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vpayment = 0;
				  exit();
			    }
			    else
			    {
				  $vpayment = 1;
			    }
		      }
		      if($virtual)
		      {
			    $vpayment = 1;
		      }
		}
		if($vseller == 1 and $vdate == 1 and $vpayment == 1)
		{
		      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		      require('buyinvoice/checkproducts.php');
		      
		      if($vname == 1 and $vprice == 1 and $vamount == 1)
		      {
			    require('buyinvoice/updatebuyinvoice.php');
			    if($vinvoiceno == 1 and $vinvoice == 1)
			    {
				 require('buyinvoice/updatestockcard.php'); 
			    }
		      }
		      $infaddentry = $smarty->getVariable('_inf_add_success');
		      echo $infaddentry;
		}      

// ----------------------------------------------------------------------------------------------------------------------------	
	      // B Update Stock Card
// ----------------------------------------------------------------------------------------------------------------------------		
		  
// ----------------------------------------------------------------------------------------------------------------------------	
	      // 3- Update Stock Card
// ----------------------------------------------------------------------------------------------------------------------------

		    
	}//if buydate

	else if(!$_POST)
	{
		 $tax = $db->query("SELECT * FROM tax");
		 $taxs = array();
		 foreach($tax as $c)
		 {
		    $taxs[] = $c;
		 }
		 $smarty->assign(array(
		    "taxs"	=> $taxs,
		 ));
	    
	    $smarty->display(theme_base.'addbuyinvoice.html');
	}
		 
}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login 
