<?php 
require_once('configs/config.php');
$page_name = "delimage";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){

	      $id = Check::getValue("product-id");
	      echo "Burası en son yapılacaktır";
// 	      if($id)
// 	      {
// 		//Connect stock for delete product
// 		$delstock = ('DELETE FROM stock WHERE stock_id = '.$id.'');
// 		
// 		
// 		//Connect images for delete images
// 		$delimages = ('DELETE * FROM images WHERE images_stock_id = '.$id.'');
// 		
// 		//Remove product folders and images
// 		$delfolders = unlink("'img/products/'.$id");
// 		
// 		echo "Ürün ve resimleri başarıyla kaldırıldı";
// 	      }//if($id)
// 	      else{
// 		echo "Ürün bulunmadı";
// 	      }

}//login
else
{
  $smarty->display(theme_base.'login.html');
}//login.html
