<?php 
require_once('configs/config.php');
$page_name = "addcustomer";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){
		  
		$custName =  Check::getValue('custName'); 
		$custTel =  Check::getValue('custTel'); 
		$custWeb =  @$_POST['custWeb'];  
		$custAddress =  Check::getValue('custAddress');
		$custMail =  @$_POST['custMail'];
		$active =  Check::getValue('active');
		if($active)
		{
		      $active = 1;
		}
		else
		{
		      $active = 0;
		}
		if($custName OR $custTel OR $custWeb OR $custAddress OR $custMail)
		{
			  if($custName == "")
			  {
				$infnotblank = $smarty->getVariable('_inf_not_valid');
				echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=custName]').addClass('alert-danger');</script>";
				echo "<script>return false</script>";
				$vname = 0;
				exit();
			  }
			  else
			  {
				echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				$vname = 1;
			  }
			  if($vname == 1)
			  {
				if($custTel == "")
				{
				      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				      $vtel = 1;
				}
				else
				{
				      if(is_numeric($custTel))
				      {
					    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					    $vtel = 1; 
				      }
				      else
				      {
					    $infnotblank = $smarty->getVariable('_inf_not_valid');
					    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=custTel]').addClass('alert-danger');</script>";
					    echo "<script>return false</script>";
					    $vtel = 0;
					    exit();
				      }
				}
			  }
			  if($vname == 1 and $vtel == 1)
			  {
				  if($custWeb == "")
				  {
					echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					$vweb = 1;
				  }
				  $website = $custWeb;
				  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website) AND $website != "") 
				  {
					$websiteErr = "Invalid URL"; 
					$infnotblank = $smarty->getVariable('_inf_not_valid');
					echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=custWeb]').addClass('alert-danger');</script>";
					echo "<script>return false</script>";
					$vweb = 0;
					exit();
				  }
				  else
				  {
					echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					$vweb = 1;
				  }
			  }
			  if($vname == 1 and $vtel == 1 and $vweb == 1)
			  {
				  if($custMail == "")
				  {
					echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					$vmail = 1;
				  }
				  else
				  {
					if(Check::email($custMail) == 1)
					{
					      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					      $vmail = 1;
					}
					else
					{
					      $infnotblank = $smarty->getVariable('_inf_not_valid');
					      echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=custMail]').addClass('alert-danger');</script>";
					      echo "<script>return false</script>";
					      $vmail = 0;
					      exit();
					}
				  }
			  }
			  if($vname == 1 and $vtel == 1 and $vweb == 1 and $vmail == 1)
			  {
				  $addcustomer = $db->prepare("INSERT INTO customer ( cust_name, cust_tel, cust_mail, cust_web, cust_address, cust_status) VALUES (:name, :tel, :mail , :web, :address, :active)");
				  $addcustomer->execute(array(
					'name'=>$custName,
					'tel'=>$custTel,
					'mail'=>$custWeb,
					'web'=>$custAddress,
					'address'=>$custMail,
					'active'=>$active,
				  ));
				  
				  if($addcustomer)
				  {
					echo "Müşteri başarıyla eklendi";
					echo '<script>$(".customer").load(location.href + " .customer");$(".addcustomerm").click()</script>';
					echo '<script>$(".customerlist").load(location.href + " .customerlist");$(".addcustomerm").click()</script>';
				  }
				  else
				  {
					echo "Müşteri eklenirken hata oluştu!";
				  }
			  }
		}
		else
		{
		      
		      $smarty->display(theme_base.'addcustomer.html');
		}
}// if login

else{
	$smarty->display(theme_base.'login.html');
    }
