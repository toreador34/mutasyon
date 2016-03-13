<?php 
require_once('configs/config.php');
$page_name = "addcategory";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){
		  $catname =  Check::getValue('catname'); 
		  $catdetail =  Check::getValue('catdetail'); 
		  $subcat =  Check::getValue('subcat'); 
		  $delcatid =  Check::getValue('delcatid'); 
		  $editcatlist =  Check::getValue('editcatlist'); 
		  $editcatname =  Check::getValue('editcatname'); 
		  $editcatid =  Check::getValue('editcatid'); 
		  
		  //Add Category
		  if($catname)
		  {
		      //Connect category db for add new category
			$addcat = $db->query("INSERT INTO category (category_name, category_sub, category_detail) VALUES ('".$catname."', '".$subcat."', '".$catdetail."')");
			
		      //If success
			echo $catname.' adlı kategori başarıyla eklendi.<script>
			      $(".rfcat").load(location.href + " .rfcat");
			      $(".rfcatl").load(location.href + " .rfcatl");
			      $(".close").click();
			      </script>';
		  }
		  
		  //Delete Category
		  else if($delcatid)
		  {
		      //Connect category db for delete category
			$checksub = $db->query("SELECT * FROM category WHERE category_sub = '".$delcatid."' ");
			$count = $checksub->rowCount();
			
			if($count > 0)
			{
			      $infhassub = $smarty->getVariable('_inf_has_sub');
			      echo $infhassub;
			      exit();
			}
			else
			{
			      $delcat = $db->prepare("DELETE FROM category WHERE category_id = :id ");
			      $delcat->execute(array(
				    'id'=>$delcatid,
			      ));
			      
			      //If success
			      echo "Kategori başarıyla silindi";
			      echo '<script>$(".rfcat").load(location.href + " .rfcat");$(".rfcatl").load(location.href + " .rfcatl");</script>';
			      }
		  }
		  
		  //Edit Category
		  else if($editcatname)
		  {
		      //Connect category db for edit category
			$editcat = $db->query("UPDATE category SET category_name = '".$editcatname."', category_sub = '".$editcatlist."' WHERE category_id = '$editcatid' ");
			
		      //If success
			echo "Kategori başarıyla düzenlendi";
		  }
		  //For list category name
		    $catid = Check::getValue("catlist");

		    $category = $db->query("SELECT * FROM category WHERE category_sub = 0", PDO::FETCH_ASSOC);

		    if($catid)
		    {
		      if($catid == "all")
		      {
			$subcategory = $db->query("
			SELECT *, main.category_name as mainname, sub.category_name as subname FROM category main
			RIGHT JOIN category sub ON sub.category_sub = main.category_id
			", PDO::FETCH_ASSOC);
		      }
		      else
		      {
			$subcategory = $db->query("
			SELECT *, main.category_name as mainname, sub.category_name as subname FROM category main
			RIGHT JOIN category sub ON sub.category_sub = main.category_id
			WHERE sub.category_sub = '$catid' ", PDO::FETCH_ASSOC);
		      }
		      foreach($subcategory as $a)
		      {
			echo '
				  <tr>
					<td>'.$a["category_id"].'</td>
					<td><span>'.$a["subname"].'</span></td>
					<td>
					  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delcat-'.$a["category_id"].'" data-id="'.$a["category_id"].'">Sil</button>
					  <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#editcat-'.$a["category_id"].'" data-id='.$a["category_id"].'>Düzenle</button>
					</td>
				  </tr>
			';
		      }
		     
		    }
		    else
		    {
		      $subcategory = $db->query("
		      SELECT *, main.category_name as mainname, sub.category_name as subname FROM category main
		      RIGHT JOIN category sub ON sub.category_sub = main.category_id
		      ", PDO::FETCH_ASSOC);
		    }
		      $categories = array();
		      foreach($category as $c)
		      {
			$categories[] = $c;
		      }
		      $smarty->assign(array(
		      'categories' => $categories,
		      'subcategory' => $subcategory,
			));
		  
		  
}//if login

else{
	$smarty->display(theme_base.'login.html');
    } 
