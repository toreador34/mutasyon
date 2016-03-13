<?php 

	if($insertservicetype == "")
	{
	      $infnotblank = $smarty->getVariable('_inf_not_valid');
	      echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('textarea[name=insertservicetype]').addClass('alert-danger');</script>";
	      echo "<script>return false</script>";
	      $vtype = 0;
	      exit();
	}
	else
	{
	      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
	      $vtype = 1;
	}
	if($vtype == 1)
	{
	      if($inserttax == "empty" OR $inserttax == "")
	      {
		    $infnotblank = $smarty->getVariable('_inf_not_valid');
		    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('select[name=inserttax]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vtax = 0;
		    exit();
	      }
	      else
	      {
		   $vtax = 1; 
	      }
	}
	if($vtype == 1 and $vtax == 1)
	{
	      if($inserttotal == "" OR !is_numeric($inserttotal))
	      {
		    $infnotblank = $smarty->getVariable('_inf_not_valid');
		    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=inserttotal]').addClass('alert-danger');</script>";
		    echo "<script>return false</script>";
		    $vtotal = 0;
		    exit();
	      }
	      else
	      {
		   $vtotal = 1; 
	      }
	}
	if($vtype == 1 and $vtax == 1 and $vtotal == 1)
	{
	      $update = $db->prepare("INSERT INTO insertedservice (insertedservice_service_id, insertedservice_servicetype, insertedservice_tax, insertedservice_price) VALUES (:serviceid, :type, :tax, :price)");
	      $update->execute(array(
			'serviceid'=>$insertid,
			'type'=>$insertservicetype,
			'tax'=>$inserttax,
			'price'=>$inserttotal,
		  ));

	      $infaddentry = $smarty->getVariable('_inf_add_success');
	      echo $infaddentry;
	}