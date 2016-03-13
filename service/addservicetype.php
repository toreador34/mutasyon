<?php
      
    
	      $add = $db->prepare("INSERT INTO servicetype (servicetype_name) VALUES (:type)");
	      $add->execute(array(
		    'type'=>$addservicetype,
	      ));
	      if($add)
	      {
		    $infaddentry = $smarty->getVariable('_inf_add_success');
		    echo $infaddentry.'<script>$(".servicetype").load(location.href + " .servicetype");$(".addservicetype").click()</script>';
	      }
	      else
	      {
		    $infworkerror = $smarty->getVariable('_inf_work_error');
		    echo $infworkerror;
	      }
