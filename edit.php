<?php 
require_once('configs/config.php');
require_once('configs/pic_upload.php');
$page_name = "edit";
$smarty->assign("page_name", $page_name);
if($_SESSION['login']){
		    
			  $admin_username = Check::getValue('admin_username');
			  $admin_name =  Check::cleartag(Check::getValue('admin_name'));
			  $admin_password =  Check::getValue('admin_password');
			  $password_again =  Check::getValue('password_again');
			  $admin_email =  Check::getValue('admin_email');
			  $admin_city =  Check::getValue('admin_city');
			  $admin_old =  Check::getValue('admin_old');
			  $id =  Check::getValue('id');
			  $admin_id = $_SESSION["username"];
			  			  
			  if($admin_password != "" and $admin_password != NULL)
			  {
				$security = md5($admin_password);
				
				if($admin_password == $password_again)
				{
				      $admin_inf = $db->query("UPDATE admin SET 
				      email='$admin_email', 
				      username='$admin_username', 
				      name_surname='$admin_name', 
				      password='$security', 
				      city='$admin_city', 
				      old='$admin_old', 
				      active = 1 
				      WHERE email = '$admin_id'");
				      echo "Bilgiler başarıyla güncellendi!";
				}//if password match check
				else
				{
				      $infpasswordnotsame = $smarty->getVariable('_inf_password_not_same');
				      echo $infpasswordnotsame."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=admin_password]').addClass('alert-danger');$('input[name=password_again]').addClass('alert-danger');</script>";
				      echo "<script>return false</script>";
				      exit();
				}
			  }
			  else if($admin_username)
			  {
				$admin_inf = $db->query("UPDATE admin SET 
				email='$admin_email', 
				username='$admin_username', 
				name_surname='$admin_name', 
				city='$admin_city', 
				old='$admin_old', 
				active = 1 
				WHERE email = '$admin_id'");
				$infupdate = $smarty->getVariable('_inf_update_success');
				echo $infupdate;
			  }
			  
			  //If upload a image
			  else if(@$_FILES['admin_pic']['name'])
			  {
				 $imagesize = $_FILES['admin_pic']['size'];
				 $imagetype = $_FILES['admin_pic']['type'];
				if($imagesize > 512000)
				{
				      $infmaxsize = $smarty->getVariable('_inf_maximum_size');
				      echo $infmaxsize;
				      echo "<script>return false</script>";
				      $vsize = 0;
				      exit();
				}
				else
				{
				      $vsize = 1;
				}
				if($vsize == 1)
				{
				      if($imagetype == "image/jpeg")
				      {
					    $vtype = 1;
				      }
				      else
				      {
					    $infimgtype = $smarty->getVariable('_inf_image_type');
					    echo $infimgtype."<script>return false</script>";
					    $vtype = 0;
					    exit();
				      }
				}
				if($vsize == 1 and $vtype == 1)
				{
				      $type = "jpg";
				      $foo = new Upload(@$_FILES['admin_pic']); 
				      if ($foo->uploaded) {
					      // resized to 250px wide
					      $foo->file_overwrite = true;
					      $foo->file_new_name_body = $id.'-user';
					      $foo->image_resize = true;
					      $foo->image_convert = $type;
					      $foo->image_x = 250;
					      $foo->image_ratio_y = true;
					      $foo->Process('img/');
					      if ($foo->processed) {
						    $foo->Clean();
					      }
				      }
				      $infaddentry = $smarty->getVariable('_inf_add_success');
				      echo $infaddentry;
				}
			  }
		  
		}//login

		else{
			$smarty->display(theme_base.'login.html');
		} 
