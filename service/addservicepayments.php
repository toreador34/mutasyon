<?php 


		if($servicepay == "" OR $servicepay == "empty")
		{
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=payment]').addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vpay = 0;
			exit();
		}
		else
		{
		      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		      $vpay = 1;
		}
		if($vpay == 1)
		{
		      if($servicetype == "" OR $servicetype == "empty")
		      {
			      $infnotblank = $smarty->getVariable('_inf_not_valid');
			      echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=paytype]').addClass('alert-danger');</script>";
			      echo "<script>return false</script>";
			      $vtyp = 0;
			      exit();
		      }
		      else
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vtyp = 1;
		      }
		}
		if($vpay == 1 and $vtyp == 1)
		{
			if(Check::dateCheck($servicedate) == 1)
			{
			      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			      $vdate = 1;
			}
			else
			{
			      $infnotblank = $smarty->getVariable('_inf_not_valid');
			      echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=date]').addClass('alert-danger');</script>";
			      echo "<script>return false</script>";
			      $vdate = 0;
			      exit();
			}
		}
		if($vpay == 1 and $vtyp == 1 and $vdate == 1)
		{
			if($servicebank == "" OR $servicebank == "empty")
			{
				$infnotblank = $smarty->getVariable('_inf_not_valid');
				echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=banklist]').addClass('alert-danger');</script>";
				echo "<script>return false</script>";
				$vbank = 0;
				exit();
			}
			else
			{
			      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			      $vbank = 1;
			}
		}
		if($vpay == 1 and $vtyp == 1 and $vdate == 1 and $vbank == 1)
		{
			if($servicepay > $serviceremain)
			{
				$infmax = $smarty->getVariable('_inf_maximum_amount');
				echo $infmax.$serviceremain."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=payment]').addClass('alert-danger');</script>";
				echo "<script>return false</script>";
				$vremain = 0;
				exit();
			}
			else
			{
				echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
				$vremain = 1;
			}
		}
		if($vpay == 1 and $vtyp == 1 and $vdate == 1 and $vbank == 1 and $vremain == 1)
		{
			$addpayments = $db->prepare("INSERT INTO payments (payment_customer_id, payment_service_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:cust, :psid, :pbi, :pai, :pty, :pio,  :pa, :pdesc, :pdate)");
			$addpayments->execute(array(
			    'cust'=>$servicecust,
			    'psid'=>$serviceid,
			    'pbi'=>$servicebank,
			    'pai'=>$admin_id,
			    'pty'=>$servicetype,
			    'pio'=>'in',
			    'pa'=>$servicepay,
			    'pdesc'=>$payinvoiceno,
			    'pdate'=>$servicedate,
			));
			
			$infaddentry = $smarty->getVariable('_inf_add_success');
			echo $infaddentry;
		}
		
		
		
		
		
		
		
		