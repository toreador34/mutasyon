<?php 
require_once('configs/config.php');
require_once('configs/pic_upload.php');
$page_name = "editproduct";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
		$id = Check::getValue("product_id");
		$id1 = Check::getValue("sid");
		$product_name = trim(Check::cleartag(Check::getValue("product_name")));
		$product_detail = @$_POST["product_detail"];
		if(Check::isCleanHtml($product_detail) != 1) 
		{
			$product_detail = strip_tags($product_detail);
		}
		
		$short_desc = Check::getValue("short_desc");
		if($short_desc == "")
		{
		      $short_desc = $product_name;
		}
		
		$product_no = trim(Check::getValue("product_no"));
		$product_category = Check::getValue("product_category");
		
		if($product_name OR $product_detail OR $product_no)
		{
		      if($product_name == "")
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=product_name]').addClass('alert-danger');</script>";
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
			    $checknoexist = $db->query("SELECT *, COUNT(stock_no) AS stockno FROM stock WHERE stock_no = '".$product_no."' ");
			    foreach($checknoexist as $sn)
			    {
				  $nototal = $sn["stockno"];
				  $stock_name = $sn["stock_name"];
			    }
			    if($product_no == "")
			    {
				  $infnotblank = $smarty->getVariable('_inf_not_valid');
				  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=product_no]').addClass('alert-danger');</script>";
				  echo "<script>return false</script>";
				  $vno = 0;
				  exit();
			    }
			    if($nototal > 0)
			    {
				  if($stock_name == $product_name)
				  {
					echo "<script>$('input').removeClass('alert-danger');</script>";
					$vno = 1;
				  }
				  else
				  {
					$infnotakebefore = $smarty->getVariable('_inf_number_take_before');
					echo $infnotakebefore."<script>$('input').removeClass('alert-danger');$('input[name=product_no]').addClass('alert-danger');</script>";
					echo "<script>return false</script>";
					$vno = 0;
					exit();
				  }
				  
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
			    require_once('product/editproduct.php');
		      }
		}
		else
		{
		      $images = $db->query('SELECT * FROM images WHERE images_stock_id = '.$id1.' ');
		      $category = $db->query('SELECT * FROM category WHERE category_sub <> 0 ');
		      $stock = $db->query('
			SELECT * FROM stock 
			LEFT JOIN category ON stock_category_id = category_id
			WHERE stock_id = '.$id1.' GROUP BY stock_no  ');
		      
		      $smarty->assign(array(
				"images" 		=> @$images,
				"category" 		=> @$category,
				"stock" 		=> @$stock,

			    ));
		      
		      $smarty->display(theme_base.'editproduct.html');
		}
}//if login
else
{
	$smarty->display(theme_base.'login.html');
}  
