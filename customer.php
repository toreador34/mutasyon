<?php 
require_once('configs/config.php');
$page_name = "customer";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		
		//Connect customer db for list customers
		$active = Check::getValue('active');
		$status = Check::getValue('status');
		$id = Check::getValue('id');
		$page = Check::getValue('c');
		
		//For delete customer
		$delid = Check::getValue('delid');
		
		//For edit customer
		$name =Check::getValue('custName');
		$tel = Check::getValue('custTel');
		$cmail = Check::getValue('custMail');
		$web = Check::getValue('custWeb');
		$address = Check::getValue('custAddress');
		$custId = Check::getValue('custId');
		$list = Check::getValue('page');

		if($custId)
		{
		  if($name != "" OR $name != NULL)
		  {
		      $customeredit = $db->query("UPDATE `customer` SET `cust_name` = '$name', `cust_tel` = '$tel',`cust_web` = '$web',`cust_address` = '$address',`cust_status` = 1 WHERE `cust_id` = '$custId'");	    
		      echo "Müşteri bilgileri başarıyla değiştirildi";
		  }
		  else
		  {
		    echo "İsim boş olamaz!";
		  }
		  
		}
		
		//For active or deactive customer
		else if($active)
		{
		      if($status == 0)
		      {
			$updatecust = $db->query("UPDATE customer SET cust_status =0  WHERE cust_id = $active ");
		      }
		      else if($status == 1)
		      {
			$updatecust = $db->query("UPDATE customer SET cust_status =1  WHERE cust_id = $active ");
		      }
		      $infworksuccess = $smarty->getVariable('_inf_work_success');
		      echo $infworksuccess;
		      echo '<script>$(".customerlist").load(location.href + " .customerlist");</script>';
		}
		
		//For delete user
		else if($delid)
		{
		      $checkHaveInv = $db->query("SELECT * FROM invoice WHERE invoice_customer_id = '".$delid."' ");
		      if($checkHaveInv->rowCount())
		      {
			    $deactive = $db->prepare("UPDATE customer SET cust_status = '0' WHERE cust_id = :delid" );
			    $deactive->execute(array(
				  'delid'=>$delid,
			    ));			      
		      }
		      else
		      {
			    $delete = $db->prepare("DELETE FROM customer WHERE cust_id = :delid" );
			    $delete->execute(array(
				  'delid'=>$delid,
			    ));
		      }
		      
		      $infworksuccess = $smarty->getVariable('_inf_work_success');
		      echo $infworksuccess;
		      echo '<script>$(".customerlist").load(location.href + " .customerlist");</script>';
		}
		else
		{
		  if(!$page)
		  {
			$customer = $db->query('SELECT * FROM customer LIMIT 10 ');
		  }
		  else
		  {
			$customer = $db->query('SELECT * FROM customer WHERE cust_name LIKE "'.$page.'%" ORDER BY cust_name ');
		  }
		  $smarty->assign(array(
		  "customer" 	=> $customer,
		  "page" 	=> $page,
		  ));
		  $smarty->display(theme_base.'customer.html');
		}
}//login
else{
	$smarty->display(theme_base.'login.html');
} 
