<?php 
require_once('configs/config.php');
$page_name = "editcompany";
$smarty->assign("page_name", $page_name);
if($_SESSION['login'])
{
	$companyname = Check::getValue("companyname");	 
	$companyaddress = Check::getValue("companyaddress");	 
	$companyweb = Check::getValue("companyweb");	 
	$companymail = @$_POST["companymail"];	 
	$companytel = Check::getValue("companytel");	 
	$company_name = Check::getValue("company_name");	 
	$company_address = Check::getValue("company_address");	 
	$company_web = Check::getValue("company_web");	 
	$company_mail = @$_POST["company_mail"];	 
	$company_tel = Check::getValue("company_tel");
	$companyid = Check::getValue("companyid");
	
	//For add company
	if($companyname)
	{
	    if(Check::email($companymail)==1)
	    {
		//Connect company db for add new
		$company = $db->prepare("INSERT INTO company (company_name, company_address, company_web, company_mail, company_tel) VALUES (:name, :address, :web, :mail, :tel)");
		
		$company->execute(array(
					'name'=>$companyname,
					'address'=>$companyaddress,
					'web'=>$companyweb,
					'mail'=>$companymail,
					'tel'=>$companytel,
				      ));
		
		echo "Şirket bilgisi eklendi!";
	    }
	    else
	    {
	      echo "<script>$('input[name=companymail]').addClass('alert-danger');</script>";
	      echo "<script>return false;</script>";
	    }
	    
	}
	
	//For edit company
	if($company_name)
	{
	    if(Check::email($company_mail)==1)
	    {
		//Connect company db for add new
		$editcompany = $db->prepare("UPDATE company SET company_name = :name, company_address = :address, company_web = :web, company_mail = :mail, company_tel = :tel WHERE company.company_id = :id");
		
		$editcompany->execute(array(
					  'name'=>$company_name,
					  'address'=>$company_address,
					  'web'=>$company_web,
					  'mail'=>$company_mail,
					  'tel'=>$company_tel,
					  'id'=>$companyid,
					));
		
		echo "Şirket bilgisi düzenlendi!";
	    }
	    else
	    {
	      echo "<script>$('input[name=company_mail]').addClass('alert-danger');</script>";
	      echo "<script>return false;</script>";
	    }
	}
		  
}//if login

else{
	$smarty->display(theme_base.'login.html');
    } 
