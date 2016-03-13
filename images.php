<?php 
require_once('configs/config.php');
require_once('configs/pic_upload.php');
$page_name = "images";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){

	if(@$_FILES['productimage']['name'])
	{
		    for($i=0;$i<count($_FILES['productimage']['name']);$i++)
		    {
			    
			    if(Check::getValue("addimagesid"))
			    {
			      $id = Check::getValue("addimagesid")[$i];
			    }
			    else if(Check::getValue("newproductname"))
			    {
			      $id = Check::getValue("newproductname")[$i];
			    }

			    $imagename = $_FILES['productimage']['name'][$i];
			    $imagetype = $_FILES['productimage']['type'][$i];
			    $imagesize = $_FILES['productimage']['size'][$i];

			    if($imagesize < 512000)
			    {
			      if($imagetype == "image/jpeg")
			      {
				$file = $_FILES['productimage']['tmp_name'][$i];
				      
				      //For get stock name 
				      $productinf = $db->query("SELECT * FROM stock WHERE stock_id = '$id' ");
				      foreach($productinf as $p)
				      {
					$name = $p["stock_name"];
				      }

				      $imageadd = $db->prepare("INSERT INTO images (images_stock_id, images_title) VALUES (:stockid, :imagestitle)");
				      $imageadd->execute(array(
					'stockid'=>$id,
					'imagestitle'=>$name,
				      ));
				      
				      //For get last image id
				      if($imageadd)
				      {
					  $last_image_id = $db->query('SELECT *  FROM images ORDER BY  images_id DESC LIMIT 1 ');
					  foreach($last_image_id as $lii)
					  {
					    $last = $lii['images_id'];
					  }
				      }
				      else
				      {
					    $infworkerror = $smarty->getVariable('_inf_work_error');
					    echo $infworkerror;
				      }

				      //Load images
				      $type = "jpg";
				      $dir_l = 'img/products/'.$id.'/large';
				      $dir_s = 'img/products/'.$id.'/small';
				      
					    for ($y = 0; $y<2; $y++)
					    {
					      if($y == 0)
					      {
						$boyutX = 450;
						$boyutY = 300;
						$isim = "large";
						$dizin = $dir_l;
					      }
					      elseif($y == 1)
					      {
						$boyutX = 38;
						$boyutY = 38;
						$isim = "small";
						$dizin = $dir_s;
					      }
					      $foo = new Upload($file); 
						if ($foo->uploaded) 
						{
						    $foo->file_overwrite = true;
						    $foo->file_new_name_body = $last.'-'.$isim;
						    $foo->jpeg_quality = 90;
						    $foo->image_convert = $type;
						    $foo->image_resize= true;
						    $foo->image_y	= $boyutY;
						    $foo->image_x	= $boyutX;
						    $foo->image_ratio_y = false;
						    $foo->Process($dizin);
						}
						//Copy index.php
						$indexfile = 'files/index.php';
						copy($indexfile, $dizin."/index.php");
					    }//for ($i = 0; $i<2; $i++)
					    copy($indexfile, 'img/products/'.$id."/index.php");
				      echo 'Ürün resimleri eklendi!<script type="text/javascript">$("div.two").empty();setTimeout(function(){ location.reload(); }, 2000);
					    </script>';
			      }
			      else
			      {
				    $infimgtype = $smarty->getVariable('_inf_image_type');
				    echo $infimgtype;
				    echo $infmaxsize."<script>return false</script>";
			      }
			    }
			    else
			    {
				  $infmaxsize = $smarty->getVariable('_inf_maximum_size');
				  echo $infmaxsize."<script>return false</script>";
			    }
		      }//for
	}
  
//For delete images
  else if(Check::getValue('id'))
  {
      	  //Get image id
	  $iid=Check::getValue('id');
	  
	  if($iid)
	  {
	      //Connect image table for get stock id
	      $stockid = $db->query('SELECT * FROM images WHERE images_id = '.$iid.'');
	      foreach($stockid as $sti)
	      {
		$id = $sti['images_stock_id'];
	      }
	      
	      //Is folder empty or not
	      $fempty = $db->query("SELECT COUNT(images_stock_id) AS total FROM images WHERE images_stock_id = '".$id."' ");
	      foreach($fempty as $a)
	      {
		$total = $a['total'];
	      }
	      
	      //Dir path
	      if(file_exists("img/products/".$id."/large/") and file_exists("img/products/".$id."/small/"))
	      {
		$dir_l = "img/products/".$id."/large/";
		$dir_s = "img/products/".$id."/small/";
	      }//file_exists
	      
	      //Delete images
	      if(file_exists($dir_l.$iid."-large.jpg") and file_exists($dir_s.$iid."-small.jpg"))
	      {
		unlink($dir_l.$iid."-large.jpg");
		unlink($dir_l."index.php");
		unlink($dir_s.$iid."-small.jpg");
		unlink($dir_s."index.php");
		unlink("img/products/".$id."/index.php");
		if($total == 1)
		{
		  rmdir("img/products/".$id."/large/");
		  rmdir("img/products/".$id."/small/");
		  rmdir("img/products/".$id);
		}  
	      }
	      else
	      {
		    $infdelfile = $smarty->getVariable('_inf_delete_file');
		    echo $infdelfile;
	      }//file_exists
	      
	      //Connect image table for delete images id
	      $image = $db->prepare('DELETE FROM images WHERE images.images_id = :delid');
	      $delimages = $image->execute(array(
				  'delid'=>$iid,
				));
	      
	      $infdelfile= $smarty->getVariable('_inf_delete_file');
	      echo $infdelfile;
	      
	  }//if($iid)
	  else
	  {
		$inffilenotfound= $smarty->getVariable('_inf_file_not_found');
		echo $inffilenotfound;
	  }
  }//else if
//Delete images end
  
  else
  {
	$infworkerror = $smarty->getVariable('_inf_work_error');
	echo $infworkerror;
  }
  
}//login
else
{
  $smarty->display(theme_base.'login.html');
}//login.html


