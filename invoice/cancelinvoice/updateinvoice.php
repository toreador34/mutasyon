<?php 

	  $updateinv = $db->prepare("UPDATE invoice SET invoice_description = :desc, invoice_cancelled =  :canc WHERE  invoice.invoice_id =:id");
	    $updateinv->execute(array(
				    'desc'=>$bdesc."-".$due,
				    'canc'=>1,
				    'id'=>$id,
			    ));
	     
