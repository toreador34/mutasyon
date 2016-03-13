<?php 

if(isset($_SESSION['login']))
{
  
			//Add buy invoice
				 $buyproduct = $db->prepare("INSERT INTO buyinvoice (bi_desc, bi_admin_id, bi_no, bi_seller_id, bi_date) VALUES (:desc, :admin, :bino, :bisel, :bidate)");
				  $buyproduct->execute(array(
					  'desc'=>$buyinvoicedesc,
					  'admin'=>$admin_id,
					  'bino'=>0,
					  'bisel'=>$buyseller,
					  'bidate'=>$buydate,
				  ));
				  if($buyproduct)
				  {
					$vinvoice = 1;
				  }
				  else
				  {
					echo "Fatura oluşturulamadı!";
					echo "<script>return false</script>";
					$vinvoice = 0;
					exit();
				  }
				  
			//Get invoice id
				  $invoiceid = $db->lastInsertId();
				  
			//Make invoice no
				  $invoiceno = Check::invoiceno($invoiceid, 0);
				  
			//Update invoice no
				  if($vinvoice == 1)
				  {
					$uptadeno = $db->prepare("UPDATE buyinvoice SET bi_no = :bino WHERE buyinvoice.bi_id = :biid ");
					$uptadeno->execute(array(
						'bino'=>$invoiceno,
						'biid'=>$invoiceid,
					));
				  }
				  if($uptadeno)
				  {
					$vinvoiceno = 1;
				  }
				  else
				  {
					echo "Fatura numarası oluşturulurken hata meydana geldi! Lütfen fatura numarasını elle giriniz. Fatura No: ".$invoiceno;
					echo "<script>return false</script>";
					$vinvoiceno = 0;
					exit();
				  }
				  if(!$virtual and $vinvoiceno == 1)
				  {
					//Pay from bank
					$bankid = Check::getValue("buybank");
					$paydesc = $smarty->getVariable('_invpaydesc');
					
					$addpayments = $db->prepare("INSERT INTO payments (payment_bank_id, payment_bi_id, payment_seller_id, payment_admin_id, payment_amount, payment_date, payment_desc, payment_in_out) VALUES (:bbaid, :bbid, :bsid, :ba, :bp, :bd, :bdesc, :binout)");
					    $addpayments->execute(array(
					    'bbaid'=>$bankid,
					    'bbid'=>$invoiceid,
					    'bsid'=>$buyseller,
					    'ba'=>$admin_id,
					    'bp'=>$buypayment,
					    'bd'=>$buydate,
					    'bdesc'=>$invoiceno.$paydesc,
					    'binout'=>"out",
					  ));
					  echo "<script>$('.price').removeClass('alert-danger');$('.amount').removeClass('alert-danger');</script>";
				  }
  
  
}//login
else{
    $smarty->display(theme_base.'login.html');
}