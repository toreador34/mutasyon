<?php 
require_once('configs/config.php');
$page_name = "addproduct";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		    //Connect tax db
		      $categories = $db->query("SELECT * FROM category WHERE category_sub = 0");
		    
		    //Connect category db
		      $category = $db->query("SELECT * FROM category WHERE category_sub <> 0");
		    
		    //Connect seller db
		      $seller = $db->query("SELECT * FROM seller");
		    
		    //Add Products
		      $product_name = Check::getValue("product_name");
		      $short_desc = Check::getValue("short_desc");
		      if($short_desc == "")
		      {
			    $short_desc = $product_name;
		      }
		      
		      $product_detail = @$_POST["product_detail"];
		      if(Check::isCleanHtml($product_detail) != 1) 
		      {
			      $product_detail = strip_tags($product_detail);
		      }
		      
		      $product_no = Check::getValue("product_no");
		      $product_price = Check::getValue("product_price");
		      $product_amount = Check::getValue("product_amount");
		      $product_category = Check::getValue("product_category");

/*
------------------------------------------------------------------------------------------
Add products
------------------------------------------------------------------------------------------
*/
		if($product_name)
		{ 
		      if($product_name == "")
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('input[name=product_name]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vname = 0;
			    exit();
		      }
		      else
		      {
			    $vname = 1;
		      }
		      if($vname == 1)
		      {
			    $checknoexist = $db->query("SELECT COUNT(stock_no) AS stockno FROM stock WHERE stock_no = '".$product_no."' ");
			    foreach($checknoexist as $sn)
			    {
				  $nototal = $sn["stockno"];
			    }
			    
			    if($nototal > 0)
			    {
				  $infnotakebefore = $smarty->getVariable('_inf_number_take_before');
				  echo $infnotakebefore."<script>$('input').removeClass('alert-danger');$('input[name=product_no]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vno = 0;
				  exit();
			    }
			    if($product_no == "")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=product_no]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vno = 0;
				  exit();
			    }
			    else
			    {
				  echo "<script>$('input').removeClass('alert-danger');</script>";
				  $vno = 1;
			    }
		      }
		      if($vname == 1 and $vno == 1)
		      {
			   if($product_category == "empty" OR $product_category == "")
			   {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=product_category]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vcategory = 0;
				  exit();
			   }
			   else
			   {
				  echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				  $vcategory = 1;
			   }
		      }
		      if($vname == 1 and $vno == 1 and $vcategory == 1)
		      {
			   require_once('product/addproduct.php');
		      }
		}
		else
		{
		    $smarty->assign(array(
		      "categories"	=> $categories,
		      "category"	=> $category,
		      "seller"		=> $seller,
		    ));

		$smarty->display(theme_base.'addproduct.html');
		}
}// if login
else
{
	$smarty->display(theme_base.'login.html');
}  
