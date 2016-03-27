<?php /* Smarty version 3.1.27, created on 2016-03-27 22:00:34
         compiled from "/var/www/html/mutasyon/themes/default/servicedetail.html" */ ?>
<?php
/*%%SmartyHeaderCode:149663663756f82dd25309c2_74343484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29da34a97f1ec49a18f1c0997a9d6de4f45224c2' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/servicedetail.html',
      1 => 1459105039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149663663756f82dd25309c2_74343484',
  'variables' => 
  array (
    'invoiceid' => 0,
    '_invoice' => 0,
    'i' => 0,
    'screen' => 0,
    '_payment' => 0,
    '_edit' => 0,
    '_email' => 0,
    '_download' => 0,
    '_invoice_cancel' => 0,
    '_date' => 0,
    '_invoice_no' => 0,
    'company' => 0,
    'c' => 0,
    '_add_service_type' => 0,
    '_service_pay' => 0,
    '_inf_add_service' => 0,
    '_inf_service_pay' => 0,
    '_add_providers_complete' => 0,
    '_add_providers_pay' => 0,
    '_detail' => 0,
    '_tax' => 0,
    '_total' => 0,
    '_delete' => 0,
    'insertedtype' => 0,
    'in' => 0,
    '_currency' => 0,
    '_discount' => 0,
    '_pay' => 0,
    '_remain' => 0,
    '_payment_ok' => 0,
    '_invoice_cancelled' => 0,
    '_invpaydesc' => 0,
    '_paycancdesc' => 0,
    '_collectprovidersdesc' => 0,
    '_inf_service_del' => 0,
    '_confirm_collect_from_providers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f82dd2622ef4_85942835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f82dd2622ef4_85942835')) {
function content_56f82dd2622ef4_85942835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '149663663756f82dd25309c2_74343484';
echo $_smarty_tpl->getSubTemplate ('themes/default/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php
$_from = $_smarty_tpl->tpl_vars['invoiceid']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
<div class="container body-bg">
<!--Breadcrumb-->
  <ol class="breadcrumb hidden-print">
    <li><a href="index.php"><i class="fa fa-home" style="font-size: 20px;color:#000"></i></a></li>
    <li><a href="invoice.php"><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</a></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
</li>
  </ol>
<!--/Breadcrumb-->
	<div class="col-sm-2 margin-top hidden-print"><!--left side-->
		<div class="text-center mbl">
		      <a data-toggle="collapse" href="#payment" class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-green" style="min-width: 60%;"><i class="fa fa-money"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_payment']->value;?>
</a>
		</div>
		<div class="text-center mbl">
		      <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-blue" style="min-width: 60%;"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_edit']->value;?>
</a>
		</div>
		<div class="text-center mbl">
		      <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-yellow" style="min-width: 60%;"><i class="fa fa-envelope"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_email']->value;?>
</a>
		</div>
		<div class="text-center mbl">
		      <a class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-orange" style="min-width: 60%;"><i class="fa fa-download"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_download']->value;?>
</a>
		</div>
		<div class="text-center mbl">
		      <a data-toggle="collapse" href="#cancelinvoice" class="btn <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> btn-red" style="min-width: 60%;"><i class="fa fa-retweet"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_invoice_cancel']->value;?>
</a>
		</div>
	</div><!--/left side-->
  
<!--invoice details-->
  <div class="col-sm-offset-3" style="padding-bottom: 100px;"><!--invoice info-->
	    <h1><?php echo $_smarty_tpl->tpl_vars['_invoice']->value;?>
</h1><!--invoice header-->
	    <div class="container-fluid">
		    <div class="col-sm-3"><!--invoiced-->
			  <h4><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_name'];?>
</h4>
			  <small><cite title="<?php echo $_smarty_tpl->tpl_vars['i']->value['cust_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_address'];?>
</cite></small>
			  <p>
			      <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_mail'];?>

			      <br />
			      <a href="http://<?php echo $_smarty_tpl->tpl_vars['i']->value['cust_web'];?>
" target="blank"><?php echo $_smarty_tpl->tpl_vars['i']->value['cust_web'];?>
</a>
			      <br />
			      <?php echo $_smarty_tpl->tpl_vars['i']->value['cust_tel'];?>

			  </p>
			
		    </div><!--/invoiced-->
		    <div class="col-sm-3" style="border-right: 1px solid #aaa;"><!--invoice date-->
			  <h5><b><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
:</b></h5>
			  <?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_date'];?>

			  <br />
			  <h5><b><?php echo $_smarty_tpl->tpl_vars['_invoice_no']->value;?>
:</b></h5>
			  <span id="invoiceno"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_no'];?>
</span>
			  <input type="hidden" id="collectfromproviders" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['pp_price'];?>
" />
		    </div><!--/invoice date-->
		    <?php
$_from = $_smarty_tpl->tpl_vars['company']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
		    <div class="col-sm-6"><!--firm address-->
			  <h4><?php echo $_smarty_tpl->tpl_vars['c']->value['company_name'];?>
</h4>
			  <small><cite title="<?php echo $_smarty_tpl->tpl_vars['c']->value['company_address'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_address'];?>
</cite></small>
			  <p>
			      <?php echo $_smarty_tpl->tpl_vars['c']->value['company_mail'];?>

			      <br />
			      <a href="http://<?php echo $_smarty_tpl->tpl_vars['c']->value['company_web'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['company_web'];?>
</a>
			      <br />
			      <?php echo $_smarty_tpl->tpl_vars['c']->value['company_tel'];?>

			  </p>
		    </div><!--/firm address-->
		    <?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
	  </div><!--/invoice info-->
	  <div class="container-fluid"><!--invoice detail-->
	      <a data-toggle="collapse" href="#insertservice" class="btn  btn-yellow <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> hidden-print pull-right"><i class="fa fa-cart-plus"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_add_service_type']->value;?>
</a>
	      <!-- Infos -->
	      <div class="questions qaddser" style="margin-left:820px;margin-top:-11px"><i class="fa fa-question-circle"></i></div>
		    <div class="col-xs-12 alert alert-info answer aaddser" style="display:none;margin-top:1px;margin-left:571px">
		    <div class="col-sm-1">
			  <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
		    </div>
		    <div class="col-sm-11 note-info">
			  <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_service_pay']->value;?>
</strong>
			  <p><?php echo $_smarty_tpl->tpl_vars['_inf_add_service']->value;?>
</p>
		    </div>
	      </div>
	     
	     <?php if ($_smarty_tpl->tpl_vars['i']->value['invoice_providers'] != -1) {?>
		  <?php if ($_smarty_tpl->tpl_vars['i']->value['invoice_providers'] != 0 && $_smarty_tpl->tpl_vars['i']->value['invoice_providers_price'] == 0) {?>
		  	<!--  pay to providers -->
			<a data-toggle="collapse" href="#setpayproviders" class="btn  btn-orange <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> hidden-print pull-right" style="margin-right: 10px;"><i class="fa fa-circle-o-notch"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_service_pay']->value;?>
</a>
			<!-- Infos -->
			<div class="questions qpaypro" style="margin-left:654px;margin-top:-11px"><i class="fa fa-question-circle"></i></div>
			      <div class="col-xs-12 alert alert-info answer apaypro" style="display:none;margin-top:1px;margin-left:403px">
			      <div class="col-sm-1">
				    <i class="glyphicon glyphicon-info-sign" style="font-size:40px;margin-left:-49px;margin-top:-13px;"></i>
			      </div>
			      <div class="col-sm-11 note-info">
				    <strong class="box-heading"><?php echo $_smarty_tpl->tpl_vars['_service_pay']->value;?>
</strong>
				    <p><?php echo $_smarty_tpl->tpl_vars['_inf_service_pay']->value;?>
</p>
			      </div>
			</div>
		  <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['invoice_providers'] != 0 && $_smarty_tpl->tpl_vars['i']->value['invoice_providers_price'] == $_smarty_tpl->tpl_vars['i']->value['payouttotal']) {?>
			<a class="btn  btn-success <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> hidden-print pull-right" style="margin-right: 10px;"><i class="fa fa-ban"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_add_providers_complete']->value;?>
</a>
		  <?php } else { ?>
			<!--  pay to providers -->
			<a data-toggle="collapse" href="#paytoproviders" class="btn  btn-red <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> hidden-print pull-right" style="margin-right: 10px;"><i class="fa fa-exchange"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_add_providers_pay']->value;?>
</a>
		  <?php }?>
	      <?php } else { ?>
		  <a class="btn  btn-success <?php if ($_smarty_tpl->tpl_vars['screen']->value == 'phone') {?>btn-xs<?php }?> hidden-print pull-right" style="margin-right: 10px;"><i class="fa fa-ban"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['_add_providers_complete']->value;?>
</a>
	     <?php }?>
	      <div class="inserlist">
		    <table class="table table-hover" id="dev-table" style="border-bottom: 1px solid #aaa;">
			    <thead>
				  <tr>
				      <th>#</th>
				      <th><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</th>
				      <th><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</th>
				      <th><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</th>
				      <th><?php echo $_smarty_tpl->tpl_vars['_delete']->value;?>
</th>
				  </tr>
			    </thead>
			    <tbody>
				    <?php
$_from = $_smarty_tpl->tpl_vars['insertedtype']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['in'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['in']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['in']->value) {
$_smarty_tpl->tpl_vars['in']->_loop = true;
$foreach_in_Sav = $_smarty_tpl->tpl_vars['in'];
?>
					  <tr>
					      <td><?php echo $_smarty_tpl->tpl_vars['in']->value['insertedservice_id'];?>
</td>
					      <td><?php echo $_smarty_tpl->tpl_vars['in']->value['insertedservice_servicetype'];?>
</td>
					      <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="taxs"><?php echo Check::totalTax(($_smarty_tpl->tpl_vars['in']->value['insertedservice_price']),$_smarty_tpl->tpl_vars['in']->value['insertedservice_tax']);?>
</span></td>
					      <td><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span class="prices"><?php echo number_format($_smarty_tpl->tpl_vars['in']->value['insertedservice_price'],2,".",'');?>
</span></td>
					      <?php if ($_smarty_tpl->tpl_vars['i']->value['payouttotal'] > 0 || $_smarty_tpl->tpl_vars['i']->value['paytotal'] > 0 || $_smarty_tpl->tpl_vars['i']->value['invoice_cancelled'] == 1) {?>
						    <td><i class="fa fa-trash-o"></i></td>
					      <?php } else { ?>
						    <td class="delis" title="<?php echo $_smarty_tpl->tpl_vars['in']->value['insertedservice_id'];?>
"><i class="fa fa-trash-o" style="color: red;cursor: pointer;"></i></td>
					      <?php }?>
					  </tr>
				    <?php
$_smarty_tpl->tpl_vars['in'] = $foreach_in_Sav;
}
?>
			    </tbody>
		    </table>
	      </div>
	  </div><!--/invoice detail-->
	  <div class="col-sm-6 well"><?php echo $_smarty_tpl->tpl_vars['i']->value['invoice_description'];?>
</div>
	  <div class="col-sm-offset-8 container-fluid">
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_total']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="totalprice"></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_tax']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="tax"></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_discount']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="discount"><?php if ($_smarty_tpl->tpl_vars['i']->value['invoice_discount'] == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['invoice_discount'];
}?></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;"><?php echo $_smarty_tpl->tpl_vars['_pay']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="paytotal"><?php if ($_smarty_tpl->tpl_vars['i']->value['paytotal'] == '') {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['paytotal'];
}?></span></div>
		</div>
		<div class="col-sm-12">
		      <div style="width:50%;float:left;border-bottom: 1px solid #aaa;font-size:16px;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['_remain']->value;?>
</div>
		      <div style="width:50%;float: left;border-bottom: 1px solid #aaa;text-align: right;font-size:16px;font-weight:bold"><span><?php echo $_smarty_tpl->tpl_vars['_currency']->value;?>
</span><span id="remain"></span></div>
		</div>
	  </div><!--col-sm-offset-9-->
	  <div class="paid col-sm-3 btn-succes hidden-xs" style="display:none"><?php echo $_smarty_tpl->tpl_vars['_payment_ok']->value;?>
</div>
	  <?php if ($_smarty_tpl->tpl_vars['i']->value['invoice_cancelled'] == 1) {?>
		<div class="rotate cancel col-sm-3 hidden-xs"><?php echo $_smarty_tpl->tpl_vars['_invoice_cancelled']->value;?>
</div>
	  <?php }?>
  </div><!--/invoice info-->
<!--/invoice details-->
<?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
</div><!--/container-->

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/paytype/addpaytype.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/service/cancelserviceinvoice.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/service/addservicepayments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/service/insertservice.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/providers/addpayments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/providers/setpayments.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/default/bank/addbank.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo '<script'; ?>
>
$(function(){
//For total tax and total price
var sumprice = 0;
$('.prices').each(function() {     
          sumprice += parseInt($(this).text()); 
	  $("#totalprice").text(sumprice.toFixed(2));
    });
var sumtax = 0;
$('.taxs').each(function() {     
          sumtax += parseInt($(this).text()); 
	  $("#tax").text(sumtax);
    });

var totalprice = parseInt($("#totalprice").text());
var paytotal = parseInt($("#paytotal").text());
var discount = parseInt($("#discount").text());
var invoiceno = $("#invoiceno").text();
$("#remain").text((totalprice - (discount + paytotal)).toFixed(2));
$(".getremain").val((totalprice - (discount + paytotal)).toFixed(2));
$("input[name='payment']").val((totalprice - (discount + paytotal)).toFixed(2));
$("input[name='ppremain']").val((totalprice - discount).toFixed(2));
$("input[name='invoiceno']").val(invoiceno + " <?php echo $_smarty_tpl->tpl_vars['_invpaydesc']->value;?>
");
$("input[name='paycancdesc']").val(invoiceno + " <?php echo $_smarty_tpl->tpl_vars['_paycancdesc']->value;?>
");
$("input[name='collectprovidersdesc']").val(invoiceno + " <?php echo $_smarty_tpl->tpl_vars['_collectprovidersdesc']->value;?>
");
$("input[name='collfromproviders']").val(invoiceno);

// For show payment ok or not
if($("#remain").text() == 0)
{
  $(".paid").show();
}
$(".refund").val(paytotal);

//For total providers price
$("input[name='ptotalpayment']").change(function(){
      var pptotal = parseInt($("input[name='ptotalpayment']").val());
      $("input[name='ppayment']").val(pptotal.toFixed(2));
});

//Delete insertedservice 
$(".delis").on("click", function(){
    if (confirm('<?php echo $_smarty_tpl->tpl_vars['_inf_service_del']->value;?>
')) {
	  var delis = $(this).attr('title');
	  $.ajax({
		  type:'POST',
		  url: 'delservice.php',
		      data : { 'delis':delis },
		      success:function(t){
			  $("div.work-inf").addClass("display-block");
			  $("div.work-inf").html(t);
		      }
		});
    } else {
	return false;
    }
    
});

//This for confirm collect from providers
$(".cancelservicesubmit").click(function(){
    if($("select[name='paytype']").val() != "empty" && $("input[name='cancdue']").val() != "" && $("input[name='password']").val() != "" && parseInt($("#collectfromproviders").val()) > 0)
    {
	if($("input[name='collectproviders']").is(':checked'))
	{
	  $(".cancelservicesubmit").attr("type", "submit");
	}
	else
	{
	  var tinv = $("#collectfromproviders").val();
	  if(confirm(tinv + " <?php echo $_smarty_tpl->tpl_vars['_confirm_collect_from_providers']->value;?>
")){
	      $(".cancelservicesubmit").attr("type", "submit");
	  }
	  else{
	      return false;
	  }
	}  
    }
});

$(document).on("click", ".qpaypro", function(){
    $(".apaypro").toggle();  
});
$(document).on("click", ".qaddser", function(){
    $(".aaddser").toggle();  
});

// End of function
});
<?php echo '</script'; ?>
><?php }
}
?>