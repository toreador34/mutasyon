<?php 
	  
	  if($product_name OR $product_no)
	  {
		$editproduct = $db->prepare("UPDATE stock SET stock_no = :pno, stock_category_id = :pcat, stock_name = :pstock, stock_short_detail = :psdetail, stock_detail = :pdtl WHERE stock_id = :id ");
		$d=$editproduct->execute(array(
		      'pno'=>$product_no,
		      'pcat'=>$product_category,
		      'pstock'=>$product_name,
		      'psdetail'=>$short_desc,
		      'pdtl'=>$product_detail,
		      'id'=>$id,
		));
			  
		$infupdate = $smarty->getVariable('_inf_update_success');
		echo $infupdate;  
	  }
