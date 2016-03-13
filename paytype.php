<?php 
require_once('configs/config.php');
$page_name = "paytype";
$smarty->assign("page_name", $page_name);
$success = 0;
if($_SESSION['login']){
	    
	    $addpaytypename = Check::getValue("addpaytypename");
	    $active = Check::getValue("active");
	    if($active)
	    {
		  $actv = 1;
	    }
	    else
	    {
		  $actv = 0;
	    }
	    
	    if($addpaytypename)
	    {
		  if($addpaytypename == "empty" OR $addpaytypename == "")
		  {
			$infnotblank = $smarty->getVariable('_inf_not_valid');
			echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=addpaytypename]').addClass('alert-danger');</script>";
			echo "<script>return false</script>";
			$vname = 0;
			exit();

		  }
		  else
		  {
			echo "<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('.customer').css('border', '');</script>";
			$vname = 1;
		  }
		  if($vname == 1)
		  {
			$add = $db->prepare("INSERT INTO paytype (paytype_name, paytype_active) VALUES (:name, :active )");
			$add->execute(array(
				    'name'=>$addpaytypename,
				    'active'=>$actv,
			    ));
			    $infaddentry = $smarty->getVariable('_inf_add_success');
			    echo $infaddentry.'<script>$(".servicetype").load(" .servicetype:first");$(".addpaytypem").click()</script>';
		  }
	    }
	    


}//login
else
{
	$smarty->display(theme_base.'login.html');
}
