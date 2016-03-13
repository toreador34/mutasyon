<?php 
require_once('configs/config.php');
$page_name = "invoiceadj";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{ 
	  //Get inf
	    $invoiceadj = Check::getValue("invoiceadj");
	    $delinvoiceadjid = Check::getValue("delinvoiceadjid");
	    $editinvoiceadjid = Check::getValue("editinvoiceadjid");
	    $editinvoiceadjname = Check::getValue("editinvoiceadjname");
	    
	    if($invoiceadj)
	    { 
	      if(Check::strlen($invoiceadj) > 3)
	      {
		      $infmaxstr = $smarty->getVariable('_inf_maximum_str');
		      echo $infmaxstr."3<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=invoiceadj]').addClass('alert-danger');</script>";
		      echo "<script>return false</script>";
		      exit();
	      }
	      else
	      {
		      $getadj = $db->prepare("INSERT INTO invoiceadj (invoiceadj_name) VALUES (:adjname)");
		      $getadj->execute(array(
					  'adjname'=>$invoiceadj,
					));
		      $infaddentry = $smarty->getVariable('_inf_add_success');
		      echo $infaddentry;
		      echo '<script>$(".invadj").load(location.href + " .invadj");$(".addadjm").click()</script>';
	      }
	    }
	    else if($delinvoiceadjid)
	    {
	      $deladj = $db->prepare("DELETE FROM invoiceadj WHERE invoiceadj_id = :dadjid");
	      $deladj->execute(array(
				  'dadjid'=>$delinvoiceadjid,
				));
	      
	      echo "Önek başarıyla silindi!";
	    }
	    else if($editinvoiceadjid)
	    {
	      $upadj = $db->prepare("UPDATE  invoiceadj SET  invoiceadj_name =  :adjnewname WHERE  invoiceadj_id = :adjid");
	      $upadj->execute(array(
				  'adjnewname'=>$editinvoiceadjname,
				  'adjid'=>$editinvoiceadjid,
				));
	      echo "Önek başarıyla güncellendi!";
	    }


}//login
else{
	$smarty->display(theme_base.'login.html');
}