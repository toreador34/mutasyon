<?php 

if(isset($_SESSION['login']))
{
$p = 0;
$i = 0;
if($buyproductname AND Check::dateCheck($buydate) AND $buyseller)
{
	  //Add boughtproducts
	  foreach($buyproductname as $bp)
	  {
		
		    $prid = $buyproductname[$i];
		    $pramount = $buyamount[$i];
		    $pricein = $buyprice[$i];
		    $prtax = $buytax[$i];
		    $priceout = $saleprice[$i];
		    
		    $addproducts = $db->prepare("INSERT INTO boughtproducts (bp_stock_id, bp_amount, bp_price, bp_bi_id) VALUES (:bsi, :bam, :bpr, :bbiid)");
		      $addproducts->execute(array(
		      'bsi'=>$prid,
		      'bam'=>$pramount,
		      'bpr'=>$pricein,
		      'bbiid'=>$invoiceid,
		    ));
		    
		    //Update stock
		    $stock = $db->query("SELECT *, COUNT(stock_id) AS total FROM stock WHERE stock_id = $prid ");
		    foreach($stock as $s)
		    {
		      $stockamount = $s["stock_amount"];
		      $total = $s["total"];
		    }
		    
		    //If this product bought before
		    if($total > 0)
		    {
			    $updatestock = $db->prepare("UPDATE stock SET stock_id = :sid, stock_price_in = :pricein, stock_price_out = :priceout, stock_tax_id = :tax, stock_seller_id = :seller, stock_amount = :amount WHERE stock_id = :prid ");
			    $updatestock->execute(array(
			    'sid'=>$prid,
			    'pricein'=>$pricein,
			    'priceout'=>$priceout,
			    'tax'=>$prtax,
			    'seller'=>$buyseller,
			    'amount'=>$pramount+$stockamount,
			    'prid'=>$prid,
			  ));
		    }
		    else
		    {
		      $updatestock = $db->prepare("UPDATE stock SET stock_id = :sid, stock_price_in = :pricein, stock_price_out = :priceout, stock_tax_id = :tax, stock_seller_id = :seller, stock_amount = :amount WHERE stock_id = :prid ");
		      $updatestock->execute(array(
			    'sid'=>$prid,
			    'pricein'=>$pricein,
			    'priceout'=>$priceout,
			    'tax'=>$prtax,
			    'seller'=>$buyseller,
			    'amount'=>$pramount,
			    'prid'=>$prid,
			  ));
		  
		    }
		    $p++;
		    $i++;
	  }// foreach finish
		  
}// $buyproductname AND Check::dateCheck($buydate) AND $buyseller finish

}//login
else{
    $smarty->display(theme_base.'login.html');
}