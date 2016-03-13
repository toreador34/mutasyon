<?php 
require_once('configs/config.php');
$page_name = "bank";
$smarty->assign("page_name", $page_name);
$success = 0;
if($_SESSION['login']){
			  //For update
			  $bank_id = Check::getValue('bank_id');
			  $bank_name = Check::getValue('bank_name');
			  $bank_no =  Check::getValue('bank_no');
			  $bank_address =  Check::getValue('bank_address');
			  $bank_tel =  Check::getValue('bank_tel');
			  
			  //For add
			  $bankname = Check::getValue('bankName');
			  $bankno =  Check::getValue('bankNo');
			  $bankaddress =  Check::getValue('bankAddress');
			  $banktel =  Check::getValue('bankTel');
			  
			  //For add bank
			  if($bankname)
			  {
				if(isset($_POST['bankActive']))
				{
				  $active = 1;
				}
				else
				{
				  $active = 0;
				}
				if($bankname == "" OR $bankname == "empty")
				  {
					$infnotblank = $smarty->getVariable('_inf_not_valid');
					echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=bankName]').addClass('alert-danger');</script>";
					echo "<script>return false</script>";
					$vaname = 0;
					exit();
				  }
				  else
				  {
					echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					$vaname = 1;
				  }
				  if($vaname == 1)
				  {
					if($bankno == "")
					{
					     $newiban = "";
					     echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					     $viban = 1;
					}
					else
					{
					      $newiban = str_replace(" ", "", $bankno);
					      if(!is_numeric($newiban))
					      {
						    $infnumeric = $smarty->getVariable('_inf_numeric');
						    echo $infnumeric."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=bankNo]').addClass('alert-danger');</script>";
						    echo "<script>return false</script>";
						    $viban = 0;
						    exit();
					      }
					      else
					      {
						    echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
						    $viban = 1;
					      }
					}
				  }
				  if($vaname == 1 and $viban == 1)
				  {
					$bankadd = $db->prepare("INSERT INTO bank (bank_name, bank_no, bank_tel, bank_address, bank_active) VALUES (:name, :iban, :tel, :address, :active)");
					$bankadd->execute(array(
					  'name'=>$bankname,
					  'iban'=>$newiban,
					  'tel'=>$bankaddress,
					  'address'=>$banktel,
					  'active'=>$active,
					));
					$infaddentry = $smarty->getVariable('_inf_add_success');
					echo $infaddentry.'<script>$(".bankn").load(location.href + " .bankn");$("#bankn").load(location.href + " #bankn");$(".addbankm").click()</script>';
					
				  }
			  }//add bank
			  else if($bank_name)
			  {
				if(isset($_POST['bank_active']))
				{
				  $active = 1;
				}
				else
				{
				  $active = 0;
				}
				
				$bank_update = $db->query("UPDATE bank SET bank_name='$bank_name', bank_no='$bank_no', bank_address='$bank_address', bank_tel='$bank_tel', bank_active = '$active' WHERE bank_id = '$bank_id'");
				
				echo "Banka bilgisi güncellendi";
			  }//update bank

}//login

else
{
      $smarty->display(theme_base.'login.html');
}