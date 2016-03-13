<?php 
	  $addcustomer = $db->prepare("INSERT INTO stock (stock_no, stock_category_id, stock_name, stock_short_detail, stock_detail, stock_admin) VALUES (:pno, :pcat, :pstock, :psdetail, :pdtl, :admin)");
	  $addproduct = $addcustomer->execute(array(
		'pno'=>$product_no,
		'pcat'=>$product_category,
		'pstock'=>$product_name,
		'psdetail'=>$short_desc,
		'pdtl'=>$product_detail,
		'admin'=>$admin_id
	   ));
	   $id = $db->lastInsertId();
	    
	  if($addproduct)
	  {
		$infproductaddsuccess = $smarty->getVariable('_inf_product_add_success');
		
		echo $infproductaddsuccess.'<script>$("div.one").slideUp(500);$("div.two").removeClass("display-none").addClass("display-block");$(".stname").val('.$id.')</script>';
	  }
	  else
	  {
		echo 'tüh bir ürün eklemeyi beceremedin ';
	  }
