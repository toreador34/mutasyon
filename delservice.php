<?php 
require_once('configs/config.php');
$page_name = "delservice";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login'])){
		
		$delis = Check::getValue("delis");
		
		if($delis)
		{
		      if(is_numeric($delis))
		      {
			    $delinserv = $db->prepare("DELETE FROM insertedservice WHERE insertedservice.insertedservice_id = :id ");
			    $delinserv->execute(array(
				  'id'=>$delis,
			    ));
			    
			    $infworksuccess = $smarty->getVariable('_inf_work_success');
			    echo $infworksuccess.'<script>$(".inserlist").load(location.href + " .inserlist");$(".adduser").click()</script>';
		      }
		}
		
		
}
else{
      $smarty->display(theme_base.'login.html');
}  
 
