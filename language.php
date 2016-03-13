<?php 
require_once('configs/config.php');
require_once('configs/pic_upload.php');
$page_name = "language";
$smarty->assign("page_name", $page_name);
if(isset($_SESSION['login']))
{
		  $langid = Check::getValue("active");
		  $languagename =  Check::replace_tr(Check::getValue('languagename')); 
		  $editlanguagename =  Check::getValue('editlanguagename'); 
		  $editlanguageid =  Check::getValue('editlanguageid'); 
		  $dellanguagename =  Check::getValue('dellanguagename'); 
		  $dellanguageid =  Check::getValue('dellanguageid'); 
		  $langname =  Check::getValue('langname'); 
		  $oldname =  Check::getValue('oldname'); 
	
	//Connect language for change lang 
		  if($langid)
		  {
		    if($langid != "default")
		    {
		      $changelang = $db->query("UPDATE language SET language_active = 1 WHERE language.language_id = '$langid'");
		      $deactivelang = $db->query("UPDATE language SET language_active = 0 WHERE language.language_id <> '$langid'");
		    }
		    else if($langid == "default")
		    {
		      $deactivelang = $db->query("UPDATE language SET language_active = 0");
		    }
		  
		    echo "Dil başarılı bir şekilde değişti!";
		   }
	
	//For add or delete language		  
		  //Add Language
		 else if($languagename)
		  {
		      //Connect language db for add new category
			$addlanguage = $db->query("INSERT INTO language (language_name, language_active) VALUES ('$languagename', 0)");
			
			
		      //Copy new language file
		      $langphpfile = 'language/tr.php';
		      $copy = 'language/'.$languagename.'.php';
		      
		      copy($langphpfile, $copy);
			
		      //If success
			echo "Dil başarıyla eklendi";
		  }
		  
		  //Delete Language
		  else if($dellanguageid and $dellanguageid != "" and $dellanguageid != null)
		  {
		      //Connect language db for delete language
			$dellanguage = $db->query("DELETE FROM language WHERE language_id = '$dellanguageid' ");
		      
		      //Delete language file
			unlink("language/".$langname.".php");
			
		      //If success
			echo "Dil başarıyla silindi";
		  }
		  
		  //Edit Language
		  else if($editlanguageid and $editlanguagename)
		  {
		      //Connect language db for edit language
			$editlanguage = $db->query("UPDATE language SET language_name = '".$editlanguagename."' WHERE language_id = '$editlanguageid' ");
			
		      //Delete language image and file
			$phpold = 'language/'.$oldname.'.php';
			$phpnew = 'language/'.$editlanguagename.'.php';
			if(!rename($phpold, $phpnew))
			{
			  echo $phpold." isimli dosya bulunamadı!";
			}
			
		      //If success
			echo "Dil başarıyla düzenlendi";
		  }
	
		  else
		  {
		    $smarty->display(theme_base.'language.html');
		  }

}//login
else{
	$smarty->display(theme_base.'login.html');
} 
