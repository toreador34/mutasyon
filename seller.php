<?php 
require_once('configs/config.php');
$page_name = "seller";
$smarty->assign("page_name", $page_name);
$success = 0;
if($_SESSION['login']){
			  //For update
			  $seller_id = Check::getValue('seller_id');
			  $seller_name = Check::getValue('seller_name');
			  $seller_iban =  Check::getValue('seller_iban');
			  $seller_address =  Check::getValue('seller_address');
			  $seller_tel =  Check::getValue('seller_tel');
			  $seller_mail =  @$_POST["seller_mail"];
			  $seller_web =  Check::getValue('seller_web');
			  
			  //For add
			  $sellername = Check::getValue('sellerName');
			  $selleriban =  Check::getValue('selleriban');
			  $selleraddress =  Check::getValue('sellerAddress');
			  $sellertel =  Check::getValue('sellerTel');
			  $sellermail =  @$_POST["sellermail"];
			  $sellerweb =  Check::getValue('sellerweb');
			  
			  //For Delete
			  $delsellerid = Check::getValue("delsellerid");
			  
			  //For add seller
			  if($sellername)
			  {
				  if($sellername == "" OR $sellername == "empty")
				  {
					$infnotblank = $smarty->getVariable('_inf_not_valid');
					echo $infnotblank."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=sellerName]').addClass('alert-danger');</script>";
					echo "<script>return false</script>";
					$vaname = 0;
					exit();
				  }
				  else
				  {
					echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					$vaname = 1;
				  }
				  if($vaname == 1)
				  {
					if($selleriban == "")
					{
					     $newiban = "";
					     echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
					     $viban = 1;
					}
					else
					{
					      $newiban = str_replace(" ", "", $selleriban);
					      if(!is_numeric($newiban))
					      {
						    $infnumeric = $smarty->getVariable('_inf_numeric');
						    echo $infnumeric."<script>$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');$('input[name=selleriban]').addClass('alert-danger');</script>";
						    echo "<script>return false</script>";
						    $viban = 0;
						    exit();
					      }
					      else
					      {
						    echo "<script>$('textarea').removeClass('alert-danger');$('input').removeClass('alert-danger');$('select').removeClass('alert-danger');</script>";
						    $viban = 1;
					      }
					}
				  }
				  if($vaname == 1 and $viban == 1)
				  {
					$selleradd = $db->prepare("INSERT INTO seller (seller_name, seller_iban, seller_address, seller_tel, seller_mail, seller_web) VALUES (:name, :iban, :address, :tel, :mail, :web)");
					$selleradd->execute(array(
					  'name'=>$sellername,
					  'iban'=>$newiban,
					  'address'=>$selleraddress,
					  'tel'=>$sellertel,
					  'mail'=>$sellermail,
					  'web'=>$sellerweb,
					));
					$infaddentry = $smarty->getVariable('_inf_add_success');
					echo $infaddentry.'<script>$("#seller").load(location.href + " #seller");$(".addsellerm").click()</script>';
					
				  }
			    
			    
			    
			  }//add seller
			  
			  else if($seller_name)
			  {
			    if(Check::email($seller_mail)==1)
			    {
				$seller_update = $db->prepare("UPDATE seller SET seller_name=:sname, seller_iban=:siban, seller_address=:saddress, seller_tel=:stel, seller_mail=smail, seller_web=:sweb WHERE seller_id = sid");
				
				$seller_update->execute(array(
					  'sname'=>$seller_name,
					  'siban'=>$seller_iban,
					  'saddress'=>$seller_address,
					  'stel'=>$seller_tel,
					  'smail'=>$seller_mail,
					  'sweb'=>$seller_web,
					  'sid'=>$seller_id,
				));
			     
				echo "Satıcı bilgisi güncellendi";
			    }
			    else
			    {
			      echo "<script>$('input[name=seller_mail]').addClass('alert-danger');</script>";
			      echo "<script>return false;</script>";
			    }
			  }//update seller
			  
			  else if($delsellerid)
			  {
			    $seller_delete = $db->query("DELETE FROM seller WHERE seller.seller_id = '$delsellerid' ");
			     
			     echo "Satıcı başarıyla silindi";
			  }//delete seller

		      }//login

		    else{
			    $smarty->display(theme_base.'login.html');
			}