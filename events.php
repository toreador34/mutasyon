<?php 
require_once('configs/config.php');
$page_name = "addproduct";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
	  $id = Check::getValue("id");
	  $status = Check::getValue("status");
	  $delid = Check::getValue("delid");
	  $addeventdate = @$_POST["addeventdate"];
	  $addeventlevel = Check::getValue("addeventlevel");
	  $addeventdetail = Check::getValue("addeventdetail");
	  $editeventdate = @$_POST["editeventdate"];
	  $editeventlevel = Check::getValue("editeventlevel");
	  $editeventdetail = Check::getValue("editeventdetail");
	  $editeventid = Check::getValue("editeventid");
	  
	  
	  //Change event status
	  if($id)
	  {
		$changeevent=$db->prepare("UPDATE events SET event_status = :status WHERE event_id = :id AND event_admin_id = :admin ");
		$changeevent->execute(array(
			    'status'=>$status,
			    'id'=>$id,
			    'admin'=>$admin_id,
		      ));
		
		$infworksuccess = $smarty->getVariable('_inf_work_success');
		echo $infworksuccess;
	  }
	  
	  else if($delid)
	  {
		$delevent = $db->prepare("DELETE FROM events WHERE event_id = :id " );
		$delevent->execute(array(
			'id'=>$delid,
		  ));
		
		$infworksuccess = $smarty->getVariable('_inf_work_success');
		echo $infworksuccess;
	  }
	  
	  else if($addeventdate and $addeventlevel and $addeventdetail)
	  {
		  $addevent = $db->prepare("INSERT INTO events (event_date, event_level, event_detail, event_admin_id) VALUES (:date, :level, :detail, :admin)");
		  $addevent->execute(array(
			'date'=>$addeventdate,
			'level'=>$addeventlevel,
			'detail'=>$addeventdetail,
			'admin'=>$admin_id,
		  ));
		  $infaddentry = $smarty->getVariable('_inf_add_success');
		  echo $infaddentry.'<script>$(".events").load(location.href + " .events");$(".addeventm").click()</script>';
	  }
	  
	  else if($editeventdate and $editeventlevel and $editeventdetail and $editeventid)
	  {
		  $editevent = $db->prepare("UPDATE events SET event_detail = :detail, event_date = :date, event_level = :level WHERE event_id = :id ");
		  $editevent->execute(array(
			      'detail'=>$editeventdetail,
			      'date'=>$editeventdate,
			      'level'=>$editeventlevel,
			      'id'=>$editeventid,
			));
		  $infupdate = $smarty->getVariable('_inf_update_success');
		  echo $infupdate;
	  }
	  
}// if login
else{
      $smarty->display(theme_base.'login.html');
} 
