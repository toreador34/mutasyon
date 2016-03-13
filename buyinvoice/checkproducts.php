<?php 

if(isset($_SESSION['login']))
{
      $f = 0;
      $s = 0;
      $t = 0;
      $k = 0;
      foreach($buyproductname as $prname)
      {
	    if($buyproductname[$f] == 0)
	    {
		  $infnotblank = $smarty->getVariable('_inf_not_valid');
		  echo $infnotblank."<script>$('.chosen-single').attr('style', 'background-color:');$('.chosen-default').filter(function() { return $(this).val() == 0 }).attr('style', 'background:#f2dede');</script>";
		  echo "<script>return false</script>";
		  $vname = 0;
		  exit();
	    }
	    else
	    {
		  echo "<script>$('.chosen-single').attr('style', 'background-color:');</script>";
		  $vname = 1;
	    }
	    $f++;
	    if($vname == 1)
	    {
		  if($buyprice[$s] == "")
		  {
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('.buyprice').filter(function() { return $(this).val() == '$buyprice[$s]' }).addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vprice = 0;
			exit();
		  }
		  if(!is_numeric($buyprice[$s]))
		  {
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('.buyprice').filter(function() { return $(this).val() == '$buyprice[$s]' }).addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vprice = 0;
			exit();
		  }
		  else
		  {
			echo "<script>$('input').removeClass('alert-danger');</script>";
			$vprice = 1;
		  }
		  $s++;
	    }
	    if($vname == 1 and $vprice == 1)
	    {
		  if($saleprice[$k] == "")
		  {
			echo $saleprice[$k];
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('.saleprice').filter(function() { return $(this).val() == '$saleprice[$k]' }).addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vpriceout = 0;
			exit();
		  }
		  if(!is_numeric($saleprice[$k]))
		  {
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('.saleprice').filter(function() { return $(this).val() == '$saleprice[$k]' }).addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vprice = 0;
			exit();
		  }
		  else
		  {
			echo "<script>$('input').removeClass('alert-danger');</script>";
			$vpriceout = 1;
		  }
		  $s++;
	    }
	    if($vname == 1 and $vprice == 1 and $vpriceout == 1)
	    {
		  if($buyamount[$t] == "" OR $buyamount[$t] == 0)
		  {
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('.buyamount').filter(function() { return $(this).val() == '$buyamount[$t]' }).addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vamount = 0;
			exit();
		  }
		  else
		  {
			$vamount = 1;
		  }
		  
		  $t++;
	    }
      }
}
