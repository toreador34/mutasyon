<?php 
require_once('configs/config.php');
$page_name = "addinvoce";
$smarty->assign("page_name", $page_name);

if(isset($_SESSION['login']))
{
      
	  //Get customer informations
	  $getcust = $db->query("SELECT * FROM customer WHERE cust_id = '".$customerid."'");
	  foreach($getcust as $g)
	  {
		$tel = $g["cust_tel"];
		$mail = $g["cust_mail"];
		$web = $g["cust_web"];
		$address = $g["cust_address"];
	  }
	  $writeinvoice = $db->prepare("INSERT INTO invoice (invoice_no, invoice_description, invoice_customer_id, invoice_admin, invoice_discount, invoice_date, invoice_cancelled) VALUES (:no, :desc, :custid, :admin, :disc, :date, :cancel)");
	
	  $writeinvoice->execute(array(
				    'no'=>0,
				    'desc'=>$decs,
				    'custid'=>$customerid,
				    'admin'=>$admin_id,
				    'disc'=>$discount,
				    'date'=>$date,
				    'cancel'=>0,
			    ));
	  $invoiceid = $db->lastInsertId();
	  
	  //Invoice No
	  $no = Check::invoiceno($invoiceid, $invoiceadjp."I-");
	  
	  if($writeinvoice)
	  {
	    //Update invoice no
	    $updateinvno = $db->prepare("UPDATE  invoice SET  invoice_no =  :no WHERE  invoice.invoice_id = :id");
	    $updateinvno->execute(array(
				    'no'=>$no,
				    'id'=>$invoiceid,
			    ));
	  }


}//login
else
{
	$smarty->display(theme_base.'login.html');
} //else login