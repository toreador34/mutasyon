<?php 
require_once('configs/config.php');
$page_name = "custdetail";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
/*
-----------------------------------------------------------------------------
Edit customer informations
-----------------------------------------------------------------------------
*/		
		$editcustid = Check::getValue('editcustid');
		
		if($editcustid)
		{
		  $editcustname = Check::getValue('editcustname');
		  $editcustaddress = Check::getValue('editcustaddress');
		  $editcustmail = Check::getValue('editcustmail');
		  $editcustweb = Check::getValue('editcustweb');
		  $editcusttel = Check::getValue('editcusttel');
		  
		  
		  if($editcustmail)
		  {
			if(Check::email($editcustmail))
			{
			  if($editcustname == "")
			  {
			    echo "Geçerli bir müşteri adı giriniz!<script>$('input[name=editcustname]').addClass('alert-danger');return false</script>";
			  }
			  else
			  {
			      $updatecust = $db->prepare("UPDATE  customer SET  cust_name =  :cun, cust_tel =  :cut, cust_mail =  :cum, cust_web =  :cuw, cust_address =  :cua  WHERE  customer.cust_id =:id;");
			      $updatecust->execute(array(
				      'cun'=>$editcustname,
				      'cut'=>$editcusttel,
				      'cum'=>$editcustmail,
				      'cuw'=>$editcustweb,
				      'cua'=>$editcustaddress,
				      'id'=>$editcustid,
			      ));
			      
			      echo "Bilgiler güncellendi!<script>$('input[name=editcustmail]').removeClass('alert-danger');</script>";
			  }
			}
			else
			{
			  echo "Geçerli bir e-posta adresi giriniz!<script>$('input[name=editcustmail]').addClass('alert-danger');return false</script>";
			}
		    }
		    else if(!$editcustmail)
		    {
		      if($editcustname == "")
		      {
			echo "Geçerli bir müşteri adı giriniz!<script>$('input[name=editcustname]').addClass('alert-danger');return false</script>";
		      }
		      else
		      {
			$updatecust = $db->prepare("UPDATE  customer SET  cust_name =  :cun, cust_tel =  :cut, cust_mail =  :cum, cust_web =  :cuw, cust_address =  :cua  WHERE  customer.cust_id =:id;");
			    $updatecust->execute(array(
				    'cun'=>$editcustname,
				    'cut'=>$editcusttel,
				    'cum'=>$editcustmail,
				    'cuw'=>$editcustweb,
				    'cua'=>$editcustaddress,
				    'id'=>$editcustid,
			    ));
			    echo "Bilgiler güncellendi!";
		      }
		    }
		    
		}
/*
-----------------------------------------------------------------------------
Edit customer informations finish
-----------------------------------------------------------------------------
*/
		else
		{
		      $custW = Check::getValue('cid');
		      $customer = $db->query('SELECT *  FROM customer WHERE cust_id = '.$custW.'');
		      $invoice = $db->query('
		      SELECT *, (SELECT TRUNCATE(SUM(ip_total), 2) AS invtotal FROM invoicedproducts WHERE ip_invoice_id = invoice.invoice_id) AS invtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS paytotal FROM payments WHERE payment_invoice_id = invoice.invoice_id) AS paytotal,  (SELECT TRUNCATE(SUM(insertedservice_price), 2) AS servtotal FROM insertedservice WHERE insertedservice_service_id = invoice.invoice_id) AS servtotal, (SELECT TRUNCATE(SUM(payment_amount), 2) AS payservtotal FROM payments WHERE payment_service_id = invoice.invoice_id AND payment_in_out = "in") AS payservtotal FROM invoice
		      LEFT JOIN payments ON payments.payment_invoice_id = invoice.invoice_id
		      LEFT JOIN bank ON bank.bank_id = payments.payment_bank_id
		      LEFT JOIN customer ON customer.cust_id = invoice.invoice_customer_id
		      LEFT JOIN admin ON admin.admin_id = invoice.invoice_admin
		      LEFT JOIN insertedservice ON insertedservice_service_id = invoice.invoice_id
		      LEFT JOIN providers ON providers_id = invoice.invoice_providers
		      WHERE invoice_customer_id = '.$custW.' GROUP BY invoice_no ORDER BY invoice_id DESC LIMIT 10 ');
		      
		      $company = $db->query("SELECT * FROM company");
		      foreach($company as $co)
		      {
			    $company_name = $co["company_name"];
		      }
		      
		      $smarty->assign(array(
			"customer" 	=> $customer,
			"invoice" 	=> $invoice,
			"company_name" 	=> $company_name,
		      ));
		      
		      $smarty->display(theme_base.'custdetail.html');
		}

}// end of if
else{
	$smarty->display(theme_base.'login.html');
} 
