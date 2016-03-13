<?php 

      $pdate = @$_POST["pdate"];
      $pdesc = Check::getValue("pdesc");
      $pamount = Check::getValue("pamount");
      $id = Check::getValue("id");
      
      if(Check::dateCheck($pdate)==1)
      {
	    echo "<script>$('input').removeClass('alert-danger');</script>";
	    $vdate = 1;
      }
      else
      {
	    $infnotblank = $smarty->getVariable('_inf_not_valid');
	    echo $infnotblank. "<script>$('input').removeClass('alert-danger');$('input[name=pdate]').addClass('alert-danger');</script>";
	    echo "<script>return false</script>";
	    $vdate = 0;
	    exit();
      }
      if($vdate == 1)
      {
	    if($pdesc == "")
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=pdesc]').addClass('alert-danger');</script>";
		  echo "<script>return false</script>";
		  $vdesc = 0; 
		  exit();
	    }
	    else
	    {
		  echo "<script>$('input').removeClass('alert-danger');</script>";
		  $vdesc = 1;
	    }
      }
      if($vdate == 1 and $vdesc == 1)
      {
	    if($pamount == "" OR $pamount == NULL OR !is_numeric($pamount) OR $pamount == 0)
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('input').removeClass('alert-danger');$('input[name=pamount]').addClass('alert-danger');</script>";
		  echo "<script>return false</script>";
		  $vamount = 0;
		  exit();
	    }
	    else
	    {
		  echo "<script>$('input').removeClass('alert-danger');</script>";
		  $vamount = 1;
	    }
      }
      if($vdate == 1 and $vdesc == 1 and $vamount == 1)
      {
	    $update = $db->prepare("UPDATE  payments SET  payment_date = :pdate, payment_desc = :pdesc, payment_amount = :pamount WHERE  payments.payment_id = :pid ");
	    $update->execute(array(
				    'pdate'=>$pdate,
				    'pdesc'=>$pdesc,
				    'pamount'=>$pamount,
				    'pid'=>$id,
				));
	    $infupdate = $smarty->getVariable('_inf_update_success');
	    echo $infupdate;
      }

