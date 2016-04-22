<?php 
require_once('configs/config.php');
$page_name = "payments";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		$lastcustid = Check::getValue("lastcustid");
		$view = Check::getValue("view");
		//load customers on index.php
		if($lastcustid)
		{
		      $active = $smarty->getVariable('_active');
		      $passive = $smarty->getVariable('_passive');
		      $customerlist = $db->query('SELECT * FROM customer WHERE cust_id > "'.$lastcustid.'" LIMIT 10 ');
		      foreach($customerlist as $c)
		      {
			  $id = $c["cust_id"]; 
			  $name = $c["cust_name"]; 
			  $tel = $c["cust_tel"]; 
			  $status = $c["cust_status"];
			  echo '<tr class="clist" cid="'.$id.'">
				    <td><a href="custdetail.php?cid='.$id.'">'.$name.'</a></td>
				    <td>'.$tel.'</td>
				    <td><span class="label '; 
			  if($status == 1)
				echo 'label-success">'.$active.'</span></td></tr>';
			  else
				echo 'label-danger">'.$passive.'</span></td></tr>';
		      } 
		}
		if($view)
		{
		      if($view == "grid")
		      {
			    $_SESSION["view"] = "grid";
		      }
		      if($view == "list")
		      {
			    $_SESSION["view"] = "list";
		      }
		}
		
}// login
else
{
	$smarty->display(theme_base.'login.html');
} 

