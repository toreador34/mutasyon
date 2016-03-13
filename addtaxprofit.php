<?php 
require_once('configs/config.php');
$page_name = "addtaxprofit";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){
		  $taxname =  Check::getValue('taxname'); 
		  $edittaxname =  Check::getValue('edittaxname'); 
		  $edittaxid =  Check::getValue('edittaxid'); 
		  $deltaxname =  Check::getValue('deltaxname'); 
		  $deltaxid =  Check::getValue('deltaxid'); 

//Tax		  
		  //Add Tax
		  if($taxname)
		  {
		      if(is_numeric($taxname))
		      {
			    $addtax = $db->prepare("INSERT INTO tax (tax_tax) VALUES (:taxamount)");
			    $addtax->execute(array(
				      'taxamount'=>$taxname,
				    ));
			    $infaddentry = $smarty->getVariable('_inf_add_success');
			    echo $infaddentry."<script>$('input').removeClass('alert-danger');</script>";
			    echo '<script>$(".tax").load(location.href + " .tax");$(".addtaxm").click()</script>';
		      }
		      else if($taxname == "zero")
		      {
			    $taxname = 0;
			    $addtax = $db->prepare("INSERT INTO tax (tax_tax) VALUES (:taxamount)");
			    $addtax->execute(array(
				      'taxamount'=>$taxname,
				    ));
			    $infaddentry = $smarty->getVariable('_inf_add_success');
			    echo $infaddentry."<script>$('input').removeClass('alert-danger');</script>";
			    echo '<script>$(".tax").load(location.href + " .tax");$(".addtaxm").click()</script>';
		      }
		      else
		      {
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=taxname]').addClass('alert-danger');</script>";
			    echo "<script>return false</script>";
			    exit();
		      }
		  }
		  
		  //Delete Tax
		  else if($deltaxid and $deltaxid != "" and $deltaxid != null)
		  {
		      //Connect tax db for delete tax
			$deltax = $db->prepare("DELETE FROM tax WHERE tax_id = :deltaxid ");
			$deltax->execute(array(
				  'deltaxid'=>$deltaxid,
				));
			
		      //If success
			$infworksuccess = $smarty->getVariable('_inf_work_success');
			echo $infworksuccess."<script>$('input').removeClass('alert-danger');</script>";
		  }
		  
		  //Edit Tax
		  else if($edittaxid and $edittaxname)
		  {
		      //Connect tax db for edit tax
			if(is_numeric($edittaxid) AND is_numeric($edittaxname))
			{
			    $edittax = $db->prepare("UPDATE tax SET tax_tax = :newtax WHERE tax_id = :taxid ");
			    $edittax->execute(array(
				      'newtax'=>$edittaxname,
				      'taxid'=>$edittaxid,
				    ));
			    
			  //If success
			    $infaddentry = $smarty->getVariable('_inf_add_success');
			    echo $infaddentry."<script>$('input').removeClass('alert-danger');</script>";
			}
			else if($edittaxname == "zero")
			{
			    $edittaxname = 0;
			    $edittax = $db->prepare("UPDATE tax SET tax_tax = :newtax WHERE tax_id = :taxid ");
			    $edittax->execute(array(
				      'newtax'=>$edittaxname,
				      'taxid'=>$edittaxid,
				    ));
			    $infaddentry = $smarty->getVariable('_inf_add_success');
			    echo $infaddentry."<script>$('input').removeClass('alert-danger');</script>";
			}
			else
			{
			    $infnotblank = $smarty->getVariable('_inf_not_valid');
			    echo $infnotblank."<script>$('input').addClass('alert-danger');</script><script>return false;</script>";
			    exit();
			}
		  } 
		  
}//if login

else{
	$smarty->display(theme_base.'login.html');
    } 
 
