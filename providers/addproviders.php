<?php

	  
	  if($addproviders == "empty")
	  {
		echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=addproviders]').addClass('alert-danger');</script>";
		echo "<script>return false</script>";
		$vpro = 0;
		exit();
	  }
	  else
	  {
		echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		$vpro = 1;
	  }
	  if($vpro == 1)
	  {
		if($addproviderstel == "")
		{
		      echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
		      $vtel = 1;
		}
		else
		{
		      if(is_numeric($addproviderstel))
		      {
			    echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
			    $vtel = 1; 
		      }
		      else
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=addproviderstel]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    $vtel = 0;
			    exit();
		      }
		}
	  }
	  if($vpro == 1 and $vtel == 1)
	  {
		$add = $db->prepare("INSERT INTO providers (providers_name, providers_tel, providers_address, providers_web, providers_mail) VALUES (:name, :tel, :address, :web, :mail)");
		$add->execute(array(
		      'name'=>$addproviders,
		      'tel'=>$addproviderstel,
		      'address'=>$addprovidersaddress,
		      'web'=>$addprovidersweb,
		      'mail'=>$addprovidersmail,
		));
	   
		if($add)
		{
			$infworksuccess = $smarty->getVariable('_inf_work_success');
			echo $infworksuccess.'<script>$(".providers").load(location.href + " .providers");$(".addproviders").click()</script>';
		}
	  }
	  
	  
	  
	  
	  
	  
