<?php 
require_once('configs/config.php');
$page_name = "addinvoice";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{
		//Connect customer db
		    $customers = $db->query('SELECT * FROM customer');
		
		//Connect invoiceadj db for get invoice name
		    $invoiceadj = $db->query('SELECT * FROM invoiceadj');
		    
		    $smarty->assign(array(
		      "customers" 		=> $customers,
		      "invoiceadj" 		=> $invoiceadj,

		    ));
// -----------------------------------------------------------------------------------------------------------------
	      // SEARCH PRODUCT FOR GET NAME, PRICE, TAX AND PROFİT
// -----------------------------------------------------------------------------------------------------------------
		$id = Check::getValue("id");
		$idsi = Check::getValue("idsi");
		
		if($id)
		{
		  $stock = $db->query('
		      SELECT * FROM stock 
		      INNER JOIN tax ON tax.tax_id = stock.stock_tax_id
		      WHERE CONVERT(stock_name USING utf8)  LIKE "%' . $id . '%" OR CONVERT(stock_no USING utf8)  LIKE "%' . $id . '%"' , PDO::FETCH_ASSOC);
		  foreach($stock as $s)
		  {
		    $name = $s["stock_name"];
		    $totalprice = $s["stock_price_out"];
		    $tax = $s["tax_tax"];
		  }

		  echo '
		  <script>
		    $(".sprh").val("'.$name.'");
		    $(".basketprice").val("'.$totalprice.'");
		  </script>';
		}
		
		
		//For invoicedproducts
		    $date = @$_POST["date1"];
		    $customerid = Check::getValue("custid1");
		    $invoiceadjp = Check::getValue("adjp1");
		    $productname = Check::getValue("productname");
		    $amount = Check::getValue("amount");
		    $price = Check::getValue("price");
		    $custname = Check::getValue("custname1");
		    $discount = Check::getValue("discount1");
		    $decs = strip_tags(@$_POST["desc1"]);
		    $totalinv = Check::getValue("totalinv");
		    $p = 0;
		    $g = 0;
		      
	//if has a post
	if(Check::dateCheck($date))
	{
		  
		// Check customer name valid or not
		    if($customerid == 0 OR $customerid == "" OR !is_numeric($customerid))
		    {
			  $infcustnotblank = $smarty->getVariable('_is_customer_null');
			  echo $infcustnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '2px solid red');</script>";
			  echo "<script>return false</script>";
			  $vcust = 0;
			  exit();
		    }
		    else
		    {
			  echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '')</script>";
			  $vcust = 1;
		    }
		    if($vcust == 1)
		    {
			  if($invoiceadjp == "empty" OR $invoiceadjp == "")
			  {
				$infnotblank = $smarty->getVariable('_inf_not_valid');
				echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.invoiceadj').addClass('alert-danger');</script>";
				echo "<script>return false</script>";
				exit();
				$vadjp = 0;
			  }
			  else
			  {
				echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				$vadjp = 1;
			  }
		    }
		    if($vcust == 1 and $vadjp == 1)
		    {
			  if(!$productname)
			  {
				$infselectproduct = $smarty->getVariable('_inf_select_product');
				echo $infselectproduct;
				echo "<script>return false</script>";
				exit();
				$vprname = 0;
			  }
			  else
			  {
				$vprname = 1;
			  }
		    }
		    if($vcust == 1 and $vadjp == 1 and $vprname == 1)
		    {
			  foreach($productname as $prn)
			  {
				  $prname = $productname[$p];
				  $isname = $db->query("SELECT *, COUNT(stock_id) AS total FROM stock WHERE stock_name = '".$prname."' ");
				  foreach($isname as $is)
				  {
				    $totalpr = $is["total"];
				    $prid = $is["stock_id"];
				  }
				  if($discount)
				  {
					if($discount <= $totalinv)
					{
					      echo "<script>$('#discountamount').removeClass('alert-danger')</script>";
					      $vdisc = 1;
					}
					else
					{
					      $infmax = $smarty->getVariable('_inf_maximum_amount');
					      echo $infmax.$totalinv."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('#discountamount').addClass('alert-danger');</script>";
					      echo "<script>return false</script>";
					      $vdisc = 0;
					      exit();
					}
				  }
				  else
				  {
					$vdisc = 1;
				  }
				  if($totalpr > 0 and $vdisc == 1)
				  {
				    $expr = 1;
				  }
				  else //if product not exist
				  {
				    echo "Ürün bulunamadı!<script>return false</script>";
				    $expr = 0;
				    exit();
				  }
				  if($expr == 1)
				  {
					$pramount = $amount[$p];
					if(!is_numeric($pramount))
					{
					      echo "<script>$('.invamount').removeClass('alert-danger');$('.invamount').filter(function() { return $(this).closest('div').find('.invamount').val() == '$pramount' }).addClass('alert-danger');</script>";
					      echo "<script>return false</script>";
					      $number = 0;
					      exit();
					}
					
					else
					{
					      $checkamount = $db->query("SELECT stock_amount FROM stock WHERE stock_id = '".$prid."' ");
					      foreach($checkamount as $ca)
					      {
						    $remainamount = $ca["stock_amount"];
					      }
					      if($pramount > $remainamount OR $pramount <= 0)
					      {
						    echo "Stok saysından fazla ürün miktarı girdiniz! Gireceğiniz en fazla miktar: ".$remainamount."<script>$('.invamount').removeClass('alert-danger');$('input').filter(function() { return $(this).val() == '$prname' }).closest('div').find('.invamount').addClass('alert-danger');</script>";
						    echo "<script>return false</script>";
						    $number = 0;
						    exit();
					      }
					      else
					      {
						    echo "<script>$('.invamount').removeClass('alert-danger')</script>";
						    $number = 1;
					      }
					}
				  }
				  if($expr == 1 AND $number == 1)
				  {
					$cprice = $price[$p];
					if(!is_numeric($cprice))
					{
					      echo "<script>$('.invprice').removeClass('alert-danger');$('.invprice').filter(function() { return $(this).closest('div').find('.invprice').val() == '$cprice' }).addClass('alert-danger');</script>";
					      echo "<script>return false</script>";
					      $vprice = 0;
					      exit();
					}
					else
					{
					      echo "<script>$('.invprice').removeClass('alert-danger')</script>";
					      $vprice = 1;
					}
				  }
				  $p++;
			  }
			  if($expr == 1 AND $number == 1 AND $vprice == 1)
			  {
			      require_once('invoice/addinvoice.php');			      
			  }
		    }
	}//if$_POST
		
		
// -----------------------------------------------------------------------------------------------------------------
	      // ADD INVOCE FINISH
// -----------------------------------------------------------------------------------------------------------------	
		else if(!$_POST)
		{
		 $stock = $db->query("SELECT * FROM stock WHERE stock_amount > 0");
		 $stocks = array();
		 foreach($stock as $c)
		 {
		    $stocks[] = $c;
		 }
		 $tax = $db->query("SELECT * FROM tax");
		 $taxs = array();
		 foreach($tax as $c)
		 {
		    $taxs[] = $c;
		 }
		 
		 $smarty->assign(array(
		    "stocks"	=> $stocks,
		    "taxs"	=> $taxs,
		 ));
		 $smarty->display(theme_base.'addinvoice.html');
		}
		 
}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login 
