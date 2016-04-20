<?php 

	$date = @$_POST["date"];
	$bankfrom = Check::getValue("bankfrom");
	$bankto = Check::getValue("bankto");
	$desc = Check::getValue("desc");
	
	if(!$ptype)
	{
	      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '2px solid red');</script>";
	      echo "<script>return false</script>";
	      $vtype = 0;
	      exit();
	}
	else
	{
	      $type = 1;
	      echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '')</script>";
	      $vtype = 1;
	}
	if($vtype == 1)
	{
	      if(Check::dateCheck($date) != 1 OR !$date)
	      {
		    $infnotblank = $smarty->getVariable('_inf_not_valid');
		    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=date]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vdate = 0;
		    exit();
	      }
	      else
	      {
		    echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '')</script>";
		    $vdate = 1;
	      }
	}
	if($vtype == 1 and $vdate == 1)
	{
	      if($bankfrom == "empty" OR $bankfrom == "")
	      {
		    $infnotblank = $smarty->getVariable('_inf_not_valid');
		    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=bankfrom]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vbf = 0;
		    exit();
	      }
	      else
	      {
		   echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '')</script>";
		   $vbf = 1; 
	      }
	}
	if($vtype == 1 and $vdate == 1 and $vbf == 1)
	{
	      if($bankto == "empty" OR $bankto == "")
	      {
		    $infnotblank = $smarty->getVariable('_inf_not_valid');
		    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=bankto]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vbt = 0;
		    exit();
	      }
	      if($bankfrom == $bankto)
	      {
		    $infbanksame = $smarty->getVariable('_inf_bank_same');
		    echo $infbanksame."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=bankto]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vbt = 0;
		    exit();
	      }
	      else
	      {
		   echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '')</script>";
		   $vbt = 1; 
	      }
	}
	if($vtype == 1 and $vdate == 1 and $vbf == 1 and $vbt == 1)
	{
	      if(strlen($desc) < 10)
	      {
		    $infdesclimit = $smarty->getVariable('_inf_desc_limit');
		    echo $infdesclimit."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('textarea[name=desc]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vdesc = 0;
		    exit();
	      }
	      else
	      {
		   echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.radioBtn').css('border', '')</script>";
		   $vdesc = 1; 
	      }
	}
	if($vtype == 1 and $vdate == 1 and $vbf == 1 and $vbt == 1 and $vdesc == 1)
	{
	     $addpay = $db->prepare("INSERT INTO payments (payment_bankto_id, payment_bank_id, payment_admin_id, payment_type, payment_in_out, payment_amount, payment_desc, payment_date) VALUES (:bankto, :bankfrom, :admin, :type, :inout, :amount, :desc, :date)");
	     $addpay->execute(array(
		      'bankto'=>$bankto,
		      'bankfrom'=>$bankfrom,
		      'admin'=>$admin_id,
		      'type'=>$ptype,
		      'inout'=>"trs",
		      'amount'=>$transfer,
		      'desc'=>$desc,
		      'date'=>$date,
		));
		$infaddentry = $smarty->getVariable('_inf_add_success');
		echo $infaddentry;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>